<?php

/*
@author:hissin'
@date:2022-01-27

用法：
addClass($class,$grade,$school)
delClass(id)
changeClsss($id,$class,$grade,$school)

eg:
echo $stu->addClsss('20510','初一',1);
echo $stu->delClsss(2);
echo $stu->changeClsss(5,'20510','初二',1);

*/



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

    function changeClass($id,$class,$grade,$school){
        $ins = array(
            'class'=>$class,
            'grade'=>$grade,
            'school'=>$school
            );
        return $this->con->where(array('ID'=>$id))->update('class',$ins);
    }

}

$classes=new classes();
