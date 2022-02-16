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

//From School
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
//From Classes
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
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
    if (empty($change)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$classes->changeClassSchool($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
    }
}

//From Students
if($_GET['option']=="fromStudentChangeName"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
    if (empty($change)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$student->changeStuName($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
    }
}
if($_GET['option']=="fromStudentChangeClass"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
    if (empty($change)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$student->changeStuClass($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
    }
}
if($_GET['option']=="fromStudentChangeBirthday"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
    if (empty($change)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$student->changeStuBirthday($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
    }
}
if($_GET['option']=="fromStudentChangePhone"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
    if (empty($change)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$student->changeStuPhone($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
    }
}

//From EXam Data 
if($_GET['option']=="fromSightChangeLeft"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
    if (empty($change)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$sight->changeLeft($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
    }
}
if($_GET['option']=="fromSightChangeRight"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
    if (empty($change)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$sight->changeRight($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
    }
}
if($_GET['option']=="fromSightChangeDate"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
    if (empty($change)) {
        echo "不能为空";
    } else {
        //更新字段信息 
        $res=$sight->changeDate($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
    }
}