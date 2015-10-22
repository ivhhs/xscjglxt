<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function Index(){
   //  $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');


// $student = M('Student');//实例化表,首字母大写
//$this -> msg = $result = $student ->select();
//dump($result);
$this->display();
}
	public function HomePage(){
	$this->display();
}
	public function Login(){
	$user=I('username');
	$passwd=I('password');
// 	$this ->display();
// 	if(!IS_POST){
// 		$this->redirect('Index/Index');
// 	}
// 	dump($_POST);
	// 		function check_verify($user){
	// 		$verify =new \Think\Verify();
	// 		return $verify->check($user);
	// 		}
	$U=M('User');//实例化user表
	$result = $U->where(array('u_username'=>$user))->find();
	dump($result);
	if ($result && $passwd==$result['u_password']) {
		session('username',$result['u_username']);
		$this->success('操作完成','HomePage',5);
	}
	else{
		$this->error('密码或账号错误!');
		
	}
}

	public function Store(){
$this->display();

$data['s_no'] =I('sno');
$data['s_name'] =I('sname');
$data['s_sex'] =I('ssex');
$data['s_class'] =I('sclass');
$data['s_major'] =I('smajor');
$data['s_dept'] =I('sdept');
$data['s_age'] =I('sage');
$data['s_phone'] =I('sphone');
$data['s_add'] =I('sadd');

// $data = I('post.'); 
// dump($data);
 $Student = M('Student');   //实例化表,首字母大写
// $result=$Student->data($data)->add();
if(!empty($data)){	
$result= $Student -> add($data);
}
else {
// 	$this->display();
 			$result=0;
 		}
 		if ($result){
 			echo "增加成功";
		
 		}
 		else {
 			echo "增加失败";
		}
 echo "result = $result";
 //  $this->display();           
}
 public  function Alter()
 {
    	 $this->display();
//      if($data['s_no']){
        $condition['s_no']=$data['s_no']=I('sno');
        $data['s_name']=I('sname');
    	$data['s_sex']=I('ssex');
        $data['s_class']=I('sclass');
        $data['s_major']=I('smajor');
        $data['s_dept']=I('sdept');
        $data['s_age'] =I('sage');
        $data['s_phone']=I('sphone');
        $data['s_add']  =I('sadd');
        $student = M('Student');
//         dump($condition);
        $result = $student -> where($condition)-> save($data);
//        $result = $student ->where($condition['s_no'])->save();
//         dump($data);
//         $this-> display();
        
//      }
//      else {
//      	$result=0;
//      }
//      if ($result){
//      	echo "更改成功";
     
//      }
//      else {
//      	echo "更改失败";
//      }
 }
  public function Query(){
$map['s_no']= I('sno');
$map['s_name'] = I('sname');
$student = M('Student');
//dump($no);
//dump($name);
//一下三行代码实现或逻辑查询
$condition['s_name'] = I('sname');
$condition['s_no'] = I('sno');
$condition['_logic'] = 'OR';

//$result = $student ->where($map)->select();
//$result = $student ->where("s_no=I('sno') OR s_name=I('sname')")->select();
$result = $student ->where($condition)->select();
//dump($result);
$this -> msg =$result;
 $this->display();

    }
    public function Delete(){
    	$this->display();
    	$condition[s_no]=I('sno');
    	$Student = M('Student');    	 
    	$result = $Student->where($condition)->delete();
    	dump($result);
    
    	
    
    }
}
