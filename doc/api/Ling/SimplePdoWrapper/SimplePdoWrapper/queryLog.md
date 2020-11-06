[Back to the Ling/SimplePdoWrapper api](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper.md)<br>
[Back to the Ling\SimplePdoWrapper\SimplePdoWrapper class](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper.md)


SimplePdoWrapper::queryLog
================



SimplePdoWrapper::queryLog — Hook for children classes.




Description
================


protected [SimplePdoWrapper::queryLog](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper/queryLog.md)(string $type, ?...$args) : void




Hook for children classes.

It logs the calls to our different methods BEFORE they are executed.


The type can be one of:
- transactionBegin: indicates a call to the pdo->beginTransaction method
- transactionCommit: indicates a call to the pdo->commit method
- transactionEnd: indicates when a transaction ends (after either a commit or a rollback)
- transactionRollback: indicates when a call to the pdo->rollback method
- insert: indicates when a call to our insert method
- replace: indicates when a call to our replace method
- update: indicates when a call to our update method
- delete: indicates when a call to our delete method
- fetch: indicates when a call to our fetch method
- fetchAll: indicates when a call to our fetchAll method
- execute: indicates when a call to our executeStatement method

The rest of the arguments depends on the type.
Only the following types have arguments (see the source code for more details):

- insert: $table, $query, $fields, $options
- replace: $table, $query, $fields, $options
- update: $table, $query, $fields, $whereConds, $markers
- delete: $table, $query, $whereConds, $markers
- fetch: $query, $markers, $fetchStyle
- fetchAll: $markers, $fetchStyle, $fetchArg, $ctorArgs
- execute: $query




Parameters
================


- type

    

- args

    


Return values
================

Returns void.








Source Code
===========
See the source code for method [SimplePdoWrapper::queryLog](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/SimplePdoWrapper.php#L630-L633)


See Also
================

The [SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper.md) class.

Previous method: [addAssignmentListSubStmt](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper/addAssignmentListSubStmt.md)<br>Next method: [handleException](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapper/handleException.md)<br>

