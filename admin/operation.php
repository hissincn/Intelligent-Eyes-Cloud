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
if($_GET['option']=="fromStudentChangeSex"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 

    $res=$student->changeStuSex($id,$change);
    if ($res) {
        echo $change;
    } else {
        echo "数据出错";
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

if($_GET['option']=="fromSightChange_naked_L"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
       //更新字段信息 
       $res=$sight->change_naked_L($id,$change);
       if ($res) {
           echo $change;
       } else {
           echo "数据出错";
       }
}
if($_GET['option']=="fromSightChange_naked_R"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
       //更新字段信息 
       $res=$sight->change_naked_R($id,$change);
       if ($res) {
           echo $change;
       } else {
           echo "数据出错";
       }
}

if($_GET['option']=="fromSightChange_corrected_L"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
        //更新字段信息 
        $res=$sight->change_corrected_L($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
}

if($_GET['option']=="fromSightChange_corrected_R"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
        //更新字段信息 
        $res=$sight->change_corrected_R($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
}

if($_GET['option']=="fromSightChange_DS_L"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
       //更新字段信息 
       $res=$sight->change_DS_L($id,$change);
       if ($res) {
           echo $change;
       } else {
           echo "数据出错";
       }
}

if($_GET['option']=="fromSightChange_DS_R"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
       //更新字段信息 
       $res=$sight->change_DS_R($id,$change);
       if ($res) {
           echo $change;
       } else {
           echo "数据出错";
       }
}

if($_GET['option']=="fromSightChange_DC_L"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
       //更新字段信息 
       $res=$sight->change_DC_L($id,$change);
       if ($res) {
           echo $change;
       } else {
           echo "数据出错";
       }
}

if($_GET['option']=="fromSightChange_DC_R"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
        //更新字段信息 
        $res=$sight->change_DC_R($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
}

if($_GET['option']=="fromSightChange_Axis_L"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
       //更新字段信息 
       $res=$sight->change_Axis_L($id,$change);
       if ($res) {
           echo $change;
       } else {
           echo "数据出错";
       }
}

if($_GET['option']=="fromSightChange_Axis_R"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 

    //更新字段信息 
    $res=$sight->change_Axis_R($id,$change);
    if ($res) {
        echo $change;
    } else {
        echo "数据出错";
    }
    
}

if($_GET['option']=="fromSightChangeDate"){
    $id = $_POST['id']; //获取前端提交的字段名 
    $change = $_POST['value']; //获取前端提交的字段对应的内容 
    $change = htmlspecialchars($change, ENT_QUOTES); //过滤处理内容 
        //更新字段信息 
        $res=$sight->change_date($id,$change);
        if ($res) {
            echo $change;
        } else {
            echo "数据出错";
        }
}