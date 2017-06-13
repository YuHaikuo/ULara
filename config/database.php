<?php
return [
    'driver'    => 'mysql',

    'host'      => '192.168.10.10',

    'write'     => [
        'host'          => '192.168.10.10',
        'name'          => 'WriteConn',
        'username'      => 'root',
        'password'      => '123456',
        'port'          => 3306
    ],

    'read'      => [
        'host'          => '192.168.10.10',
        'name'          => 'ReadConn',
        'username'      => 'root',
        'password'      => '123456',
        'port'          => 3307
    ],

    'database'  => 'test',

    'charset'   => 'utf8',

    'collation' => 'utf8_general_ci',

    'prefix'    => ''
];