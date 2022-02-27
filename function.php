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

function emptyToNull($arr){
    foreach($arr as $k=>$v){
        if(empty($v)){
            $arr[$k]=NULL;
        }
    }
    return $arr;
}


class classes{

    function __construct(){
        $this->con= $GLOBALS['con'];
    }
    
    public function addClass($class,$grade,$school){
        $ins = array(
            'class'=>$class,
            'grade'=>$grade,
            'school'=>$school
            );
        return $this->con->insert('class',$ins);
    }

    public function delClass($id){
        return $this->con->where(array('ID'=>$id))->delete('class');
    }

    //function changeClass($id,$class,$grade,$school){
     //   $ins = array(
    //        'class'=>$class,
    //        'grade'=>$grade,
    //        'school'=>$school
    //        );
     //   return $this->con->where(array('ID'=>$id))->update('class',$ins);
    //}

    public function changeClassName($id,$classes){
        $ins = array(
            'class'=>$classes            
            );
        return $this->con->where(array('ID'=>$id))->update('class',$ins);
    }
    public function changeClassSchool($id,$school){
        $ins = array(
            'school'=>$school           
            );
        return $this->con->where(array('ID'=>$id))->update('class',$ins);
    }
    public function changeClassGrade($id,$grade){
        $ins = array(
            'grade'=>$grade,
            );
        return $this->con->where(array('ID'=>$id))->update('class',$ins);
    }
    public function getClass(){
        $res = $this->con->field(array('ID','class','grade','school'))->select('class');
        //->order(array('sid'=>'desc','aa'=>'asc'))
        return $res;
    }

}

class school{

    function __construct(){
        $this->con= $GLOBALS['con'];
    }
    
    public function addSchool($name){
        $ins = array(
            'name'=>$name
            );
        return $this->con->insert('school',$ins);
    }

    public function delSchool($id){
        $this->con->where(array('ID'=>$id))->delete('school');
    }

    public function changeSchool($id,$name){
        $ins = array(
            'name'=>$name
            );
        return $this->con->where(array('ID'=>$id))->update('school',$ins);
    }

    public function getSchool(){
        $res = $this->con->field(array('ID','name'))->select('school');
        //->order(array('sid'=>'desc','aa'=>'asc'))
        return $res;
    }
    

}

class sight{

    function __construct(){
        $this->con= $GLOBALS['con'];
    }
    
    public function addSight($arr){
        //$student,$naked_L,$naked_R,$corrected_L,$corrected_R,$DS_L,$DS_R,$DC_L,$DC_R,$Axis_L,$Axis_R,$date
        $arr=emptyToNull($arr);
        $ins = array(
            'student'=>$arr[0],
            'naked_L'=>$arr[1],
            'naked_R'=>$arr[2],
            'corrected_L'=>$arr[3],           
            'corrected_R'=>$arr[4],
            'DS_L'=>$arr[5],
            'DS_R'=>$arr[6],
            'DC_L'=>$arr[7],
            'DC_R'=>$arr[8],
            'Axis_L'=>$arr[9],
            'Axis_R'=>$arr[10],
            'date'=>$arr[11]
            );
        return $this->con->insert('sight',$ins);
    }

    public function delSight($id){
        return $this->con->where(array('ID'=>$id))->delete('sight');
    }

    public function changeSight($id,$student,$naked_L,$naked_R,$Corrected_L,$corrected_R,$DS_L,$DS_R,$DC_L,$DC_R,$Axis_L,$Axis_R,$date){
        $ins = array(
            'ID'=>$id,
            'student'=>$student,
            'naked_L'=>$naked_L,
            'naked_R'=>$naked_R,
            'Corrected_L'=>$Corrected_L,            
            'corrected_R'=>$corrected_R,
            'DS_L'=>$DS_L,
            'DS_R'=>$DS_R,
            'DC_L'=>$DC_L,
            'DC_R'=>$DC_R,
            'Axis_L'=>$Axis_L,
            'Axis_R'=>$Axis_R,
            'date'=>$date
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_naked_L($id,$changed){
        $ins = array(
            'naked_L'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_naked_R($id,$changed){
        $ins = array(
            'naked_R'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_corrected_L($id,$changed){
        $ins = array(
            'corrected_L'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_corrected_R($id,$changed){
        $ins = array(
            'corrected_R'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_DS_L($id,$changed){
        $ins = array(
            'DS_L'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_DS_R($id,$changed){
        $ins = array(
            'DS_R'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_DC_L($id,$changed){
        $ins = array(
            'DC_L'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_DC_R($id,$changed){
        $ins = array(
            'DC_R'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_Axis_L($id,$changed){
        $ins = array(
            'Axis_L'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_Axis_R($id,$changed){
        $ins = array(
            'Axis_R'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    public function change_date($id,$changed){
        $ins = array(
            'date'=>$changed,    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }
    
    public function getSight(){
        $res = $this->con->select('sight');
        //->order(array('sid'=>'desc','aa'=>'asc'))
        return $res;
    }

}

class student{

    function __construct(){
        $this->con= $GLOBALS['con'];
    }
    
    public function addStu($name,$class,$sex,$birthday,$phone){
        $ins = array(
            'name'=>$name,
            'class'=>$class,
            'sex'=>$sex,
            'birthday'=>$birthday,
            'phone'=>$phone
            );
        return $this->con->insert('student',$ins);
    }

    public function delStu($id){
        return $this->con->where(array('ID'=>$id))->delete('student');
    }

    public function changeStu($id,$name,$class,$sex,$birthday,$phone){
        $ins = array(
            'name'=>$name,
            'class'=>$class,
            'sex'=>$sex,
            'birthday'=>$birthday,
            'phone'=>$phone
            );
        return $this->con->where(array('ID'=>$id))->update('student',$ins);
    }
    public function getStu(){
        $res = $this->con->field(array('ID','name','class','sex','birthday','phone'))->select('student');
        //->order(array('sid'=>'desc','aa'=>'asc'))
        return $res;
    }
    public function changeStuName($id,$name){
        $ins = array(
            'name'=>$name,            
            );
        return $this->con->where(array('ID'=>$id))->update('student',$ins);
    }
    public function changeStuClass($id,$class){
        $ins = array(            
            'class'=>$class,           
            );
        return $this->con->where(array('ID'=>$id))->update('student',$ins);
    }
    public function changeStuSex($id,$sex){
        $ins = array(            
            'sex'=>$sex,           
            );
        return $this->con->where(array('ID'=>$id))->update('student',$ins);
    }
    public function changeStuBirthday($id,$birthday){
        $ins = array(                     
            'birthday'=>$birthday,           
            );
        return $this->con->where(array('ID'=>$id))->update('student',$ins);
    }
    public function changeStuPhone($id,$phone){
        $ins = array(
            'phone'=>$phone
            );
        return $this->con->where(array('ID'=>$id))->update('student',$ins);
    }

}
$classes=new classes();
$student=new student();
$sight=new sight();
$school=new school();