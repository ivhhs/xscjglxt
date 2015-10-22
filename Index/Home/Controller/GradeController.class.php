<?php
namespace Home\Controller;
use Think\Controller;
class GradeController extends Controller{
    public function index(){
        echo "这是grade控制器中的index方法";
      
    }
    
    public function Store(){
    	$this->display();
        $data['s_no'] =I('sno');
        $data['c_no'] =I('cno');
        $data['grade'] =I('grade');
        //$this ->display();
        $grade = M('Grade');//实例化grade表,首字母大写
//         dump($data);
//         $this->display();	
		if (!empty($data)){
			
       $result = $grade -> add($data);
		}
		else {
			$result=0;
		}
       if ($result){
       echo "增加成功";
       	
       }
       else {
       	echo "增加失败";
       } 
//      echo $data;
       /* $result = $grade -> add($data);
        echo "$result";
        */
      /*
       if(!empty($result))
        {
        	echo "store successed"; 
        }
       */
    }
    public function Query(){
    //	this -> display();//实例化对象之后才能调用这个函数
    //	$data['s_no'] =I('sno');
    //  $data['s_name'] =I('sname');
    	$condition['sm_student.s_no'] = I('sno');
    	$condition['sm_student.s_name'] = I('sname');
    	$condition['_logic'] = 'OR';
//     	$Model=M("Grade");
//     	$Model ->where($condition)->select();
//     	$result=$Model->join('sm_student ON sm_student.s_no = sm_grade.s_no')
//     	->join('sm_course ON sm_course.c_no = sm_grade.c_no')
//     	->field('sm_student.s_no,sm_student.s_name,sm_course.c_name,sm_course.c_teacher,sm_grade.grade')
//     	->where($condition)->select();
//     	dump($result);
//         //  $this -> msg = $result;
    	$Model=M('Grade');
    	//$Model ->where($condition)->select();
    	$result=$Model
    	->join('sm_student ON sm_grade.s_no = sm_student.s_no')
    	->join('sm_course  ON sm_grade.c_no = sm_course.c_no')
    	->field('sm_student.s_no,  sm_student.s_name,  sm_course.c_name,  sm_course.c_teacher,  sm_grade.grade')
    	->where($condition)->select();
    	//dump($result);
    	$this -> msg = $result;
    	$this->display();
    	 
    }
    public function Delete(){
    	$this->display();
    	$data['s_no']=I('sno');
    	$data['c_no']=I('cno');
    	dump( $data);
    	$Grade = M('Grade');
    	$Grade -> where($data)-> delete();
//     	if ($result = 1){
//     		echo "删除成功";
//     	}
//     	else {
//     		echo "删除失败";
//     	}
    }
    
    public function Alter(){
    	$condition['s_no']=$data['s_no'] =I('sno');
    	$condition['c_no']=$data['c_no'] =I('cno');
    	$data['grade'] =I('grade');
    	$Grade = M('Grade');
    	$result = $Grade -> where($condition)-> save($data);
    	$this->display();
//     	if ($result = 1){
//     		echo "更改成功";
//     	}
//     	else {
//     		echo "更改失败";
//    	}
    }
}