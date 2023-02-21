<?php
require "vendor/autoload.php";
use App\model\User;
use App\model\UserList;
use App\controller\ClasslList;

$user = new User;
$mydata = new UserList;
echo $mydata->getMessage();

$ctrllist = new ClasslList();
echo $ctrllist->getMessages();
?>