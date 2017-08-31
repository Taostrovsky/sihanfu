<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/Home/css/index.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/main.css" type="text/css">
    <script language="javascript" type="text/javascript" src="/Public/Home/js/jquery-1.7.1.min.js"></script>
    <script src="/Public/Home/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="/Public/Home/js/jquery.nicenav.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key= &v=1.1&services=true"></script>
    <script language="javascript" type="text/javascript" src="/Public/Home/js/jquery.superslide.2.1.1.js"></script>

</head>
<body>

<div id="header">
    <div id="header-img"><a href=""><img src="/Public/Home/images/sihangfu-HOME3_021.png"></a></div>
    <div id="header-title">
        <ul class="box-lanrenzhijia" id="box-lanrenzhijia">
            <li><a href="<?php echo U('Index/index');?>">首　　页</a></li>
            <li><a href="<?php echo U('Index/aboutCompany');?>">关于我们</a></li>
            <li><a href="<?php echo U('Index/news');?>">最新资讯</a></li>
            <li><a href="<?php echo U('Index/product');?>">产品中心</a></li>
            <li><a href="<?php echo U('Index/helpCenter');?>">帮助中心</a></li>
            <li><a href="<?php echo U('Index/caseCenter');?>">案例介绍</a></li>
        </ul>
        <div id="buoy"></div>
    </div>

    <div id="search"><a href="javascript:;"><img src="/Public/Home/images/sihangfu-HOME4_05.png"></a></div>
    <!--            <div class="line"></div>-->
</div>
<script type="text/javascript">
    $.nicenav(300);
</script>



<div id="index-center-img">
    <div class="search-k"><input type="text" name="name"  placeholder="&nbsp;&nbsp;请输入关键字"></div>

</div>
<script>
    $("#search").click(function(){
        $(".search-k input").slideToggle("fast");
    })

</script>
    <div class="content">
        <div id="index-content">
            <div id="index-title">
                <img src="/Public/Home/images/sihangfu-HOME00_03.png">
                <span id="index-span2">/&nbsp;关于我们</span>
            </div>
            <div id="index-pro">
                本公司成立于2015年11月。是一家创新型信息科技公司。公司的主营业务与工程行业相关，如BIM建模及咨询工作、工程信息平台设计及开发、运维系统设计开发，立志成为
                工程信息化领先企业。公司主创人员皆为统计土木工程学院以及经管学院校友，现有博士、高级工程师1名、硕士、工程师3名...
            </div>
            <div id="index-learn">
                <a href="javascript;"></a>
            </div>
        </div>
        <div id="index-content1">
            <div id="index-content1-l"><img src="/Public/Home/images/sihangfu-HOME10_11.png"></div>
            <div id="index-content1-m">
                <img src="/Public/Home/images/sihangfu-HOME001_03.png"><span id="index-span3">/&nbsp;产品</span>
                <div id="index-product">BIM是一种工程信息化的手段<br/> BIM作为一种工程信息化的手段，能够帮助工程行业从粗放式的管理向精细化转变，从而带来更大的经济效
                益，并且减少浪费对环境保护亦起着积极的作用。BIM将工程信息化，赋予了实体构件数字资产...
                </div>
                <div id="index-content1-img">
                    <a href="javascript;"></a>
                </div>
            </div> 
            <div id="index-content1-r">
                <a class="index-content-r-bg1" href=""></a>
                <a id="index-content-r-bg" href=""></a>
            
                
                
            </div>
        </div>
        <div id="index-content2">
            <div class="index-content2-title">
                <img src="/Public/Home/images/sihangfu-HOME002_07.png">
                <span id="index-span4">/&nbsp;案例</span>
            </div>
            
            <div id="index-content2-pic">
                <div class="slide_div">
<!--                <img id="index-left" src="./images/nimg92_1_1.png">-->
                <ul>
                    <li>
                    <div class="pic-img">
                             <img src="/Public/Home/images/sihangfu-HOME10_18.png"><br/>
                        <div class="index-pic-content">
                            <p>案例标题</p>
                            <div>案例文字描述公司的主营业务与工程行业相关，如BIM建模及咨询工作、工程信息平台设计及开发...</div>
                            <div class="pic-jiantou"><img src="/Public/Home/images/sihangfu-HOME14_11_1.png"></div>
                             <!--<div class="pic-jiantou-or"><img src="./images/sihangfu-HOME14or_11.png"></div>-->
                            
                        </div>        
                       
                     </div>
                    </li>
                    <li>
                        <div class="pic-img">
                            <img src="/Public/Home/images/sihangfu-HOME10_20.png"><br/>
                        <div class="index-pic-content">
                            <p>案例标题</p>
                            <div>案例文字描述公司的主营业务与工程行业相关，如BIM建模及咨询工作、工程信息平台设计及开发...</div>
                            <div class="pic-jiantou"><img src="/Public/Home/images/sihangfu-HOME14_11_1.png"></div>
                             <!--<div class="pic-jiantou-or"><img src="./images/sihangfu-HOME14or_11.png"></div>-->
                            
                        </div>        
                       
                     </div>
                    </li>
                    <li>
                        <div class="pic-img">
                           <img src="/Public/Home/images/sihangfu-HOME8_19.png"><br/>
                        <div class="index-pic-content">
                            <p>案例标题</p>
                            <div>案例文字描述公司的主营业务与工程行业相关，如BIM建模及咨询工作、工程信息平台设计及开发...</div>
                            <div class="pic-jiantou"><img src="/Public/Home/images/sihangfu-HOME14_11_1.png"></div>
                             <!--<div class="pic-jiantou-or"><img src="./images/sihangfu-HOME14or_11.png"></div>-->
                            
                        </div>        
                       
                     </div>
                    </li>
                    <li>
                       <div class="pic-img">
                           <img src="/Public/Home/images/sihangfu-HOME10_20.png"><br/>
                        <div class="index-pic-content">
                            <p>案例标题</p>
                            <div>案例文字描述公司的主营业务与工程行业相关，如BIM建模及咨询工作、工程信息平台设计及开发...</div>
                            <div class="pic-jiantou"><img src="/Public/Home/images/sihangfu-HOME14_11_1.png"></div>
                             <!--<div class="pic-jiantou-or"><img src="./images/sihangfu-HOME14or_11.png"></div>-->
                            
                        </div>        
                       
                     </div>  
                    </li>
                </ul>
            </div>
            <div id="btn">
            <a class="prev" href="javascript:;"><img id="index-left" src="/Public/Home/images/nimg92_1.png"></a>
            <a class="next" href="javascript:;"><img id="index-right" src="/Public/Home/images/nimg92_2.png"></a>
            <ul></ul>
            </div>
            </div>    
         
            <script>
           
                $(function(){
                    $("#index-content2-pic li").hover(function(){
                        $(this).find('.pic-jiantou img').attr('src','/Public/images/sihangfu-HOME14or_11.png');
                    },function(){
                        $(this).find('.pic-jiantou img').attr('src','/Public/images/img20.png');
                    })
                })
            </script>
          
        </div>
        <div id="index-content3">
            <div id="index-content3-title">
                <img src="./images/sihangfu-HOME003_10.png"><span id="index-span5">/&nbsp;新闻</span>
            </div>
            <div id="index-content3-l"></div>
            <div id="index-content3-ls"><img src="/Public/Home/images/sihangfu-HOME14_15.png"></div>
            <div id="index-content3-m">
                <span id="index-span6">新闻标题公司的主营业务与工程</span><br/>
                <span id="index-span7">2016-06-15</span><br/>
                <span id="index-span8">企业正起步，创业存在许多艰难，公司愿与员工一同成长，在完成企业增值的过程中，给予员工足够的归属感，并让员工充分理解自身的价值，  与员工一起积累财富...</span>
                <div id="index-content3-img">
                    <a href="javascript;"></a>
                </div>
            </div>
            <div id="index-content3-r">
                <div class="index-content3-r1" id="index-content3-r11"><a href="">
                        <span class="index-span9"><span class="index-span11">JUY</span><br/>15</span>
                        <span class="index-span10">企业正起步，创业存在许多艰难,公司愿与<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;员工一同成长，给予员工足够的</span>
                    </a></div>
                <div class="index-content3-r1"><a href="">
                        <span class="index-span9"><span class="index-span11">JUY</span><br/>15</span>
                        <span class="index-span10">企业正起步，创业存在许多艰难，公司愿与<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;员工一同成长，给予员工足够的</span>
                    </a></div>
                <div class="index-content3-r1"><a href="">
                        <span class="index-span9"><span class="index-span11">JUY</span><br/>15</span>
                        <span class="index-span10">企业正起步，创业存在许多艰难，公司愿与<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;员工一同成长，给予员工足够的</span>
                    </a></div>
            </div>
            
            
        </div>
    </div>

<div class="clear"></div>
<div class="footer">
    <div class="footer-top">
        <div class="footer-t">
            <div class="footer-top-l">
                <ul>
                    <li id="footer-li">上海斯涵福信息科技有限公司</li>
                    <li>电话：021-50663326</li>
                    <li>邮箱：company@sihanfu.com</li>
                    <li>地址：上海市杨浦区国康路100号上海国际设计中心西楼1504室</li>
                </ul>
            </div>
            <div class="footer-top-cen"></div>
            <div class="footer-top-r">
                <img src="/Public/Home/images/sihangfu-HOME13_19.png">

                <img src="/Public/Home/images/sihangfu-HOME012_28.png"><br/>
                <span class="index-span12">扫一扫关注公众号</span><br/>
                <span id="index-span11">扫一扫关注产品</span>
            </div>
            <a href="javascript:;"><img id="footer-img1" src="/Public/Home/images/sihangfu-HOME013_30.png"></a>
            <a href="javascript:;"><img id="footer-img2" src="/Public/Home/images/sihangfu-HOME014_30.png"></a>
        </div>

    </div>
    <div class="clear">  </div>
    <div class="footer-bom">
        <div class="footer-bom-w"> © 上海斯涵福信息科技有限公司　版权所有　　沪ICP备11022418号-1</div>
    </div>
</div>
<!-- <div id="footer">

  <div id="footer-l">
      <ul>
          <li id="footer-li">上海斯涵福信息科技有限公司</li>
          <li>电话：021-50663326</li>
          <li>邮箱：company@sihanfu.com</li>
          <li>地址：上海市杨浦区国康路100号上海国际设计中心西楼1504室</li>
      </ul>

  </div>
  <div id="footer-r">
      <img src="./images/sihangfu-HOME13_19.png">

      <img src="./images/sihangfu-HOME012_28.png"><br/>
      <a>扫一扫关注公众号</a>
      <span id="index-span11">扫一扫关注产品</span>
  </div>
  <!--                  <div id="footer-l"></div>
                    <div id="footer-r"></div>-->


<!--
    <img id="footer-img1" src="./images/sihangfu-HOME013_30.png">
    <img id="footer-img2" src="./images/sihangfu-HOME014_30.png">


</div>
    <div id="footers">
        <div id="footers-d">© 上海斯涵福信息科技有限公司　版权所有　　沪ICP备11022418号-1</div>
    </div> -->


<script language="javascript" type="text/javascript">
    $(function(){
        jQuery("#index-content2-pic").slide({titCell:"#btn ul",mainCell:".slide_div ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:3});

    })

</script>

</body>
</html>