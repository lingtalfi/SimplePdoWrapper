[Back to the Ling/SimplePdoWrapper api](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper.md)<br>
[Back to the Ling\SimplePdoWrapper\SimplePdoWrapper class](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper.md)


SimplePdoWrapper::fetch
================



SimplePdoWrapper::fetch — Executes the prepared statement and returns the fetched row, or false in case of failure.




Description
================


public [SimplePdoWrapper::fetch](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper/fetch.md)($query, ?array $markers = [], ?$fetchStyle = null) : array | string | false




Executes the prepared statement and returns the fetched row, or false in case of failure.

Note: strings can be returned if you use fetch styles such as \PDO::FETCH_COLUMN.




Parameters
================


- query

    

- markers

    

- fetchStyle

    


Return values
================

Returns array | string | false.








Source Code
===========
See the source code for method [SimplePdoWrapper::fetch](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/SimplePdoWrapper.php#L325-L352)


See Also
================

The [SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper.md) class.

Previous method: [delete](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper/delete.md)<br>Next method: [fetchAll](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper/fetchAll.md)<br>

