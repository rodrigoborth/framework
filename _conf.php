<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:47
 */

//define contact email(used in forms;
$configuration = [
  "database" => [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'user' => 'testes',
    'port' => 3306,
    'password' => 'abc@123',
    'dbname' => 'ciadastorneiras',
    'charset' => 'utf8'
  ],
  'password' => [
    'cost' => 8,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
  ],
  'form' => [
    'contact' => 'contact@example.com',
    'reply' => 'reply@example.com',
    'sender' => 'no-reply@example.com'
  ]
];