<?php

/*
@author:hissin'
@date:2022-01-27

用法：
addClass($name)
delClass($id)
changeClsss($id,$name)

eg:
echo $stu->addClsss('七中');
echo $stu->delClsss(2);
echo $stu->changeClsss(5,'八中');

*/


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