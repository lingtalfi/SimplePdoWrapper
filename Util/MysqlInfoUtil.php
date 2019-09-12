<?php


namespace Ling\SimplePdoWrapper\Util;


use Ling\SimplePdoWrapper\SimplePdoWrapperInterface;

/**
 * The MysqlInfoUtil class.
 */
class MysqlInfoUtil
{

    /**
     * This property holds the wrapper for this instance.
     * @var SimplePdoWrapperInterface
     */
    protected $wrapper;


    /**
     * Builds the MysqlInfoUtil instance.
     * @param SimplePdoWrapperInterface|null $wrapper
     */
    public function __construct(SimplePdoWrapperInterface $wrapper = null)
    {
        $this->wrapper = $wrapper;
    }

    /**
     * Sets the wrapper.
     *
     * @param SimplePdoWrapperInterface $wrapper
     */
    public function setWrapper(SimplePdoWrapperInterface $wrapper)
    {
        $this->wrapper = $wrapper;
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Changes the current database.
     *
     * @param string $database
     * @return void
     */
    public function changeDatabase(string $database)
    {
        $this->wrapper->executeStatement("use `$database`;");
    }


    /**
     * Returns the name of the current database.
     *
     * @return string
     */
    public function getDatabase(): string
    {
        // http://stackoverflow.com/questions/9322302/how-to-get-database-name-in-pdo
        $res = $this->wrapper->fetch("select database()");
        return current($res);
    }


    /**
     * Returns the array of databases.
     * By default, the mysql tables are (mysql, performance_schema, information_schema) filtered .
     *
     *
     * @param bool $filterMysql
     * @return array
     * @throws \Exception
     */
    public function getDatabases(bool $filterMysql = true): array
    {
        if (true === $filterMysql) {
            $filter = function ($v) {
                if (
                    'mysql' === $v ||
                    'performance_schema' === $v ||
                    'information_schema' === $v
                ) {
                    return false;
                }
                return true;
            };
        } else {
            $filter = function () {
                return true;
            };
        }
        return array_filter($this->wrapper->fetchAll('show databases', [], \PDO::FETCH_COLUMN), $filter);
    }

    /**
     * Returns the tables of the current database.
     *
     *
     * @param string|null $prefix
     * @return array
     * @throws \Exception
     */
    public function getTables(string $prefix = null): array
    {
        $tables = $this->wrapper->fetchAll('show tables', [], \PDO::FETCH_COLUMN);
        if (null !== $prefix) {
            $tables = array_filter($tables, function ($v) use ($prefix) {
                if (0 === strpos($v, $prefix)) {
                    return true;
                }
                return false;
            });
        }
        return $tables;
    }


    /**
     * Returns whether the current database contains the given table.
     *
     * @param string $table
     * @return bool
     */
    public function hasTable(string $table): bool
    {
        $db = $this->getDatabase();

        $query = <<<EEE
SELECT * 
FROM information_schema.tables
WHERE table_schema = '$db' 
AND table_name = '$table'
LIMIT 1;
EEE;
        $res = $this->wrapper->fetch($query);
        return ($res !== false);
    }


    /**
     * Get the columns for the given table of the current database.
     *
     * @param string $table
     * @return array
     * @throws \Exception
     */
    public function getColumnNames(string $table): array
    {
        $ret = [];
        $cols = $this->wrapper->fetchAll("describe `$table`;");
        foreach ($cols as $col) {
            $ret[] = $col['Field'];
        }
        return $ret;
    }


    /**
     * Returns the array of columns composing the primary key.
     * If there is no primary key:
     * - it returns an empty array if the $returnAllIfEmpty is set to false (default)
     * - it returns all the columns of the table if the $returnAllIfEmpty is set to true
     *
     * The flag $hasPrimaryKey is set to whether the table has a primary key.
     *
     *
     *
     * @param string $table
     * @param bool $returnAllIfEmpty
     * @param bool $hasPrimaryKey
     * @return array
     * @throws  \Exception
     */
    public function getPrimaryKey(string $table, bool $returnAllIfEmpty = false, bool &$hasPrimaryKey = true): array
    {
        $rows = $this->wrapper->fetchAll("SHOW INDEX FROM `$table` WHERE Key_name = 'PRIMARY'");
        $ret = [];
        if (false !== $rows) {
            foreach ($rows as $info) {
                $ret[] = $info['Column_name'];
            }
        }
        if (true === $returnAllIfEmpty && 0 === count($ret)) {
            $hasPrimaryKey = false;
            $ret = $this->getColumnNames($table);
        } else {
            $hasPrimaryKey = true;
        }
        return $ret;
    }


    /**
     * Returns the ric array for the given table.
     * The ric array is the array of the column names that uniquely identifies any row.
     *
     * It's the primary key array if the table has a primary key,
     * or it's all the columns of the table if the table doesn't have a primary key.
     *
     * Ps: ric stands for row identifying columns.
     *
     * @param string $table
     * @return array
     * @throws \Exception
     */
    public function getRic(string $table): array
    {
        return $this->getPrimaryKey($table, true);
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Returns the double quote protected full version of the given table.
     * The result is meant to be used inside an sql query wrapped with double quotes.
     *
     *
     * @param string $table
     * @return string
     */
    protected function dQuoteTable(string $table): string
    {
        $table = '`' . $table . '`';
        return $table;
    }
}