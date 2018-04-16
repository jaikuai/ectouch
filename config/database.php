<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=ectouch',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'tablePrefix' => 'ecs_',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',

    'on afterOpen' => function($event) {
        $event->sender->createCommand("set session sql_mode='NO_ENGINE_SUBSTITUTION'")->execute();
    }
];
