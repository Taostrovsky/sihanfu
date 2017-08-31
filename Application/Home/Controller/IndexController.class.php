<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index()
    {

        $this->display();
    }

    /*
     * @description 关于我们-公司简介
     * @param
     * @return
     * */
    public function aboutCompany()
    {

        $this->display();
    }

    /*
     * @description 关于我们-联系方式
     * @param
     * @return
     * */
    public function aboutContact()
    {

        $this->display();
    }

    /*
     * @description 关于我们-招贤纳士
     * @param
     * @return
     * */
    public function aboutZhaoXian()
    {
     echo 121;
        $this->display();
    }

    /*
     * @description 最新资讯-公司新闻
     * @param
     * @return
     * */
    public function news()
    {

        $this->display();
    }

    /*
     * @description 产品中心
     * @param
     * @return
     * */
    public function product()
    {

        $this->display();
    }

    /*
     * @description 帮助中心
     * @param
     * @return
     * */
    public function helpCenter()
    {

        $this->display();
    }

    /*
     * @description 案例介绍
     * @param
     * @return
     * */
    public function caseCenter()
    {

        $this->display();
    }



}