<?php
 namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    /*
     * 首页
     * */
    public function index()
    {
        if(empty($_SESSION['username']))
        {
            $this->login();exit;
        }
        else {
            $this->display();
        }

    }

    /*
     * 登录
     * */
    public function login()
    {
        //echo 2222;exit;
        if($_POST)
        {
            //接受数据
            $username=$_POST['username'];
            $password = md5($_POST['password']);

            //判断数据
           if(empty($username)&&empty($_POST['password']))
           {
               $this->error('用户名或者密码不能为空！');
           }

           //查询验证数据
            $con = mysql_connect("localhost","root","");
            $sql="SELECT * FROM `admin` WHERE `name` = 'admin' AND `password` = 'e10adc3949ba59abbe56e057f20f883e' LIMIT 1";
            $result = mysql_query($sql);
            //dump($result);exit;
            //$list = $model->where(array('name'=>$username,'password'=>$password))->find();
            /*var_dump($result);exit;
            var_dump(M()->getlastsql());
            if(!empty($list))
            {
                echo 1;
            }
            else
            {
                echo 2;
            }*/

            $_SESSION['username']=$_POST['username'];
            $this->display('index');

        }
        else
        {
            $this->display('login');
        }

    }

    /*
     * 主页
     * */
    public function main()
    {

        $this->display();
    }


    //生成验证码
    public function chkcode()
    {
        $Verify = new \Think\Verify();
        $Verify->entry();
    }

    /*
     * @description 公司信息
     * @param
    */
    public function information()
    {
        if($_POST)
        {

        }
        else
        {

            $this->display();
        }

    }


}





















?>