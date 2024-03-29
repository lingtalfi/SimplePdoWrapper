[Back to the Ling/SimplePdoWrapper api](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper.md)<br>
[Back to the Ling\SimplePdoWrapper\Util\MysqlInfoUtil class](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Util/MysqlInfoUtil.md)


MysqlInfoUtil::getHasItems
================



MysqlInfoUtil::getHasItems — Returns an array of "has items".




Description
================


public [MysqlInfoUtil::getHasItems](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Util/MysqlInfoUtil/getHasItems.md)(string $table, ?array $options = []) : array




Returns an array of "has items".
See more details in [the conception notes about has table information](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/pages/conception-notes.md#the-has-table-information).

Each "has item" has the following structure:

- owns_the_has: bool, whether the current table owns the **has** table or is owned by it.
- has_table: string, the name of the **has** table
- left_table: string, the name of the owner table
- right_table: string, the name of the owned table
- left_fk: string, the name of the foreign key column of the **has** table pointing to the left table
- right_fk: string, the name of the foreign key column of the **has** table pointing to the right table
- referenced_by_left: string, the name of the column of the **left** table referencing the **has** table's foreign key
- referenced_by_right: string, the name of the column of the **right** table referencing the **has** table's foreign key
- left_handles: array of potential handles. Each handle is an array representing a set of columns that this method consider should be used as a handle related to the **left** table.
     - the column of the **left** table referencing the **has** table's foreign key (same value as the **referenced_by_left** property)
     This method will list the following handles:
     - the unique indexes of the **left** table

- right_handles: array of potential handles. Each handle is an array representing a set of columns that this method consider should be used as a handle related to the **right** table.
     This method will list the following handles:
     - the column of the **right** table referencing the **has** table's foreign key (same value as the **referenced_by_right** property).
     - a "natural" column that has a common name for a handle, based on a list which the developer can provide, and which defaults to:
         - name
         - label
         - identifier

     - the unique indexes of the **right** table that have only one column (i.e not the unique indexes with multiple columns).
         If the unique index column contains only the aforementioned "natural" column, this particular index is discarded (as to avoid redundancy).



The available options are:
- hasKeywords: array of potential has keywords. Defaults to an array containing the "has" keyword.
- naturalHandleLabels: array of potential column names for the handles. Defaults to the following array:
     - name
     - label
     - identifier




Parameters
================


- table

    

- options

    


Return values
================

Returns array.


Exceptions thrown
================

- [Exception](http://php.net/manual/en/class.exception.php).&nbsp;







Source Code
===========
See the source code for method [MysqlInfoUtil::getHasItems](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/Util/MysqlInfoUtil.php#L709-L829)


See Also
================

The [MysqlInfoUtil](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Util/MysqlInfoUtil.md) class.

Previous method: [getReferencedByTables](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Util/MysqlInfoUtil/getReferencedByTables.md)<br>Next method: [isHasTable](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/Util/MysqlInfoUtil/isHasTable.md)<br>

