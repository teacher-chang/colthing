<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\user\edit.html";i:1585447556;s:83:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\public\header.html";i:1585467897;s:83:"E:\xampp\htdocs\clothing_manage\public/../application/admin\view\public\footer.html";i:1585138152;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>服装连锁店管理系统</title>
    <link rel="stylesheet" href="__PUBLIC__/css/public.css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/style.css"/>
    <script src="__PUBLIC__/kd/kd/kindeditor-min.js"></script>
</head>
<body style="height: 800px;">
<!--头部-->
<header class="publicHeader">
    <h1>服装连锁店管理系统</h1>

    <div class="publicHeaderR">
        <p><span>下午好！</span><span style="color: #fff21b"> Admin</span> , 欢迎你！</p>
        <a href="<?php echo url('index/logout'); ?>">退出</a>
    </div>
</header>
<!--时间-->
<section class="publicTime">
    <span id="time">2015年1月1日 11:11  星期一</span>
    <a href="#">温馨提示：为了能正常浏览，请使用高版本浏览器！（IE10+）</a>
</section>
<!--主体内容-->
<section class="publicMian">
    <div class="left">
        <h2 class="leftH2"><span class="span1"></span>功能列表 <span></span></h2>
        <nav>
            <ul class="list">
                <li ><a href="<?php echo url('user/index'); ?>">用户管理</a></li>
                <li><a href="<?php echo url('store/index'); ?>">店铺管理</a></li>
                <li><a href="<?php echo url('goods/index'); ?>">商品管理</a></li>
                <li><a href="<?php echo url('order/index'); ?>">订单管理</a></li>
                <li><a href="<?php echo url('index/login'); ?>">退出系统</a></li>
            </ul>
        </nav>
    </div>
    <div class="right">
        <div class="location">
            <strong>你现在所在的位置是:</strong>
            <span>用户管理页面 >> 用户编辑页面</span>
        </div>
        <div class="providerAdd">
            <form action="<?php echo url('User/update'); ?>" method="post">
                <input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">
                <!--div的class 为error是验证错误，ok是验证成功-->
                <div>
                    <label for="providerName">用户名称：</label>
                    <input type="text" name="username" id="providerName" value="<?php echo $data['username']; ?>"/>
                </div>
                <div>
                    <label for="people">联系电话：</label>
                    <input type="text" name="mobile" id="people" value="<?php echo $data['mobile']; ?>"/>
                </div>
                <div class="providerAddBtn">
                    <input style="line-height: 20px" type="submit" value="保存" />
                    <a href="<?php echo url('user/index'); ?>">
                        <input type="button" value="返回" onclick="history.back(-1)"/>
                    </a>
                </div>
            </form>
        </div>

    </div>
</section>
<footer class="footer">
</footer>
<script src="__PUBLIC__/js/time.js"></script>
<script src="__PUBLIC__/js/jquery.js"></script>
<script src="__PUBLIC__/js/js.js"></script>

<!--<div style="text-align:center; height:300px;background: white;">-->
<!--</div>-->
</body>
</html>