<?php

/*
@author:hissin'
@date:2022-01-27

用法：
addSight($student,$left,$right,$date,$age)
delSight(int)#(id)
changeSight($id,$student,$left,$right,$date,$age)

*/



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

    function changeSight($id,$student,$left,$right,$date,$age){
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