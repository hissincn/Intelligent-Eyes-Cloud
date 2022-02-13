<?php
require '../function.php';
require '../API/school.php';
require '../API/student.php';
require '../API/classes.php';
require '../API/sight.php';

if($_GET['option']=="changeSchoolname"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $name = $_POST['value']; //获取前端提交的字段对应的内容 
    $name = htmlspecialchars($name, ENT_QUOTES); //过滤处理内容 
    if (empty($name)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$school->changeSchool($id,$name);
        if ($res) {
            echo $name;
        } else {
            echo "数据出错";
        }
    }
}

if($_GET['option']=="changeClassesname"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $classname = $_POST['value']; //获取前端提交的字段对应的内容 
    $name = htmlspecialchars($classname, ENT_QUOTES); //过滤处理内容 
    if (empty($classname)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$classes->changeClassname($id,$classname);
        if ($res) {
            echo $name;
        } else {
            echo "数据出错";
        }
    }
}

if($_POST['option']=="addSchool"){
    $school->addSchool($_POST['schoolName']);
}