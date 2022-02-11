<?php

/*
@author:hissin'
@date:2022-01-27

用法：
addStu(string,int,date,str)#(姓名,班级id,年龄)
delStu(int)#(id)
changeStu(int,string,int,date,str)#(id,姓名,班级id,年龄)
*/



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

    function changeStu($id,$name,$class,$birthday,$phone){
        $ins = array(
            'name'=>$name,
            'class'=>$class,
            'birthday'=>$birthday,
            'phone'=>$phone
            );
        return $this->con->where(array('ID'=>$id))->update('student',$ins);
    }

}

$stu=new student();