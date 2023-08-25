<?php

namespace SqlsrvAvoidError\Database\Connectors;

use Illuminate\Database\Connectors\SqlServerConnector as ConnectorsSqlServerConnector;
use PDO;

class SqlServerConnector extends ConnectorsSqlServerConnector
{
    protected $options = [
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL,
        //PDO::ATTR_STRINGIFY_FETCHES => false, //this generates the error
    ];
}
