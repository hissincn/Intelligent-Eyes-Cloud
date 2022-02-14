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

$classes=new classes();


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

$school=new school();

class sight{

    function __construct(){
        $this->con= $GLOBALS['con'];
    }
    
    public function addSight($student,$left,$right,$date,$age){
        $ins = array(
            'student'=>$student,
            'left'=>$left,
            'right'=>$right,
            'date'=>$date,
            'age'=>$age
            );
        return $this->con->insert('eye',$ins);
    }

    public function delSight($id){
        return $this->con->where(array('ID'=>$id))->delete('sight');
    }

    public function changeSight($id,$student,$left,$right,$date,$age){
        $ins = array(
            'ID'=>$id,
            'student'=>$student,
            'left'=>$left,
            'right'=>$right,
            'date'=>$date,
            'age'=>$age    
        );
        return $this->con->where(array('ID'=>$id))->update('sight',$ins);
    }

}

$stu=new sight();

class student{

    function __construct(){
        $this->con= $GLOBALS['con'];
    }
    
    public function addStu($name,$class,$birthday,$phone){
        $ins = array(
            'name'=>$name,
            'class'=>$class,
            'birthday'=>$birthday,
            'phone'=>$phone
            );
        return $this->con->insert('student',$ins);
    }

    public function delStu($id){
        return $this->con->where(array('ID'=>$id))->delete('student');
    }

    public function changeStu($id,$name,$class,$birthday,$phone){
        $ins = array(
            'name'=>$name,
            'class'=>$class,
            'birthday'=>$birthday,
            'phone'=>$phone
            );
        return $this->con->where(array('ID'=>$id))->update('student',$ins);
    }
    public function getStu(){
        $res = $this->con->field(array('ID','name','class','birthday','phone'))->select('student');
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

$stu=new student();