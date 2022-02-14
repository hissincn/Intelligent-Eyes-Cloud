<?php
require '../function.php';

function logout(){  //登出
    session_start();
    $_SESSION["admin"] = null;
    unset($_SESSION['admin']);
    session_destroy();
    Header("HTTP/1.1 303 See Other");
    Header("Location: index.php");
}


if (function_exists($_GET['do'])) {
    $_GET['do']();
}
if($_POST['option']=="addSchool"){
    $school->addSchool($_POST['schoolName']);
}

if($_GET['option']=="formSchoolChangeSchool"){
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

if($_GET['option']=="fromClassChangeClass"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $classname = $_POST['value']; //获取前端提交的字段对应的内容 
    $classname = htmlspecialchars($classname, ENT_QUOTES); //过滤处理内容 
    if (empty($classname)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$classes->changeClassName($id,$classname);
        if ($res) {
            echo $classname;
        } else {
            echo "数据出错";
        }
    }
}

if($_GET['option']=="fromClassChangeGrade"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $grade = $_POST['value']; //获取前端提交的字段对应的内容 
    $grade = htmlspecialchars($grade, ENT_QUOTES); //过滤处理内容 
    if (empty($grade)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$classes->changeClassGrade($id,$grade);
        if ($res) {
            echo $grade;
        } else {
            echo "数据出错";
        }
    }
}

if($_GET['option']=="fromClassChangeSchool"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $school = $_POST['value']; //获取前端提交的字段对应的内容 
    $school = htmlspecialchars($school, ENT_QUOTES); //过滤处理内容 
    if (empty($school)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$classes->changeClassSchool($id,$school);
        if ($res) {
            echo $school;
        } else {
            echo "数据出错";
        }
    }
}