<?php
require('var/mysql.php');


$con= new ConMysql(array(
    'host'=>'localhost',
    'port'=>'3306',
    'user'=>'root',
    'passwd'=>'Hantianze2005519',
    'dbname'=>'eye')
);

$GLOBALS["con"]=$con;

$websitename = $con->field('content')->where('item="websitename"')->select('options')[0]['content'];
$websiteurl = $con->field('content')->where('item="websiteurl"')->select('options')[0]['content'];

