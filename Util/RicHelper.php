<?php


namespace Ling\SimplePdoWrapper\Util;

/**
 * The RicHelper class.
 */
class RicHelper
{

    /**
     *
     * Returns the where part of an sql query (where keyword excluded) based on the given rics.
     * See the @page(ric definition) for more info.
     *
     * Also feeds the pdo markers array.
     *
     * It returns a string that looks like this for instance (parenthesis are part of the returned string)):
     *
     * - (
     *      (user_id like '1' AND permission_group_id like '5')
     *      OR (user_id like '3' AND permission_group_id like '4')
     *      ...
     *   )
     *
     *
     * The given rics is an array of ric column names,
     * whereas the given userRics is an array of items, each of which representing a row and
     * being an array of (ric) column to value.
     *
     *
     *
     * @param array $ricColumns
     * @param array $userRics
     * @param array $markers
     * @return string
     */
    public static function getWhereByRics(array $ricColumns, array $userRics, array &$markers): string
    {
        $s = '';
        $markerInc = 1;
        if ($userRics) {
            $s .= '(';
            $c = 0;
            foreach ($userRics as $userRic) {
                if (0 !== $c) {
                    $s .= ' or ';
                }
                $s .= '(';
                $d = 0;
                foreach ($userRic as $col => $val) {
                    if (in_array($col, $ricColumns, true)) {
                        if (0 !== $d) {
                            $s .= ' and ';
                        }
                        $marker = $col . '_' . $markerInc++;
                        $s .= "$col like :$marker";
                        $d++;
                        $markers[$marker] = $val;
                    }
                }

                $s .= ')';
                $c++;
            }
            $s .= ')';
        }
        return $s;
    }
}