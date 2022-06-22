<?php
	ini_set("display_errors", 0);
	require ('./inc/lang.php');
	require ('./module.php');
?>

<!DOCTYPE html>
<html>
    <head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,minimum-scale=1,maximum-scale=1,user-scalable=no">
        <title>申请收录_<?php if($tid==1){echo "{$row_sort['sortname']} - {$conf['name']}";}elseif($tid==2){echo "{$row_list['name']} - {$row_list['sortname']} - {$conf['name']}";}elseif($tid==3){echo "{$lang->index->about} - {$conf['name']}";}elseif($tid==4){echo "{$lang->index->nofound} - {$conf['name']}";}elseif($tid==5){echo "{$lang->index->search} - {$conf['name']}";}elseif($tid==6){echo "{$lang->index->apply} - {$conf['name']}";}else{echo "{$conf['title']}";};?></title>
        <meta name="keywords" content="<?php echo $conf['keywords'];?>">
        <meta name="description" content="<?php echo $conf['description'];?>">
	    <link rel="shortcut icon" type="images/x-icon" href="./favicon.ico"/>
	    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome-4.7.0/css/font-awesome.css"/>
	    <link rel="stylesheet" type="text/css" href="./assets/css/ozui.min.css"/>
	    <link rel="stylesheet" type="text/css" href="./templates/antidote/css/style.css"/>
    </head>
    <body>
<header class="header fixed">
	<div class="container">
		<div class="nav-bar">
			<span></span>
		</div>
		<a class="logo" href="./">
			<img src="./assets/images/logo.png" alt="站长导航网">
		</a>
		<ul class="nav">
			<?php echo nav();?></ul>
	</div>
</header><div class="banner" data-src="./assets/images/banner.jpg">
    <ul class="search-type">
        <span class="title">搜索</span>
        <li data-type="this" class="active">本站</li>
        <li data-type="baidu">百度</li>
        <li data-type="sogou">搜狗</li>
        <li data-type="360">360</li>
        <li data-type="bing">必应</li>
    </ul>
    <form class="search-main" action="./search.html" method="get">
        <input class="search-input" placeholder="请输入关键词..." name="keyword" required="required">
        <button type="submit" class="search-btn">本站搜索</button>
    </form>
</div>
<div class="container">
    <ul class="sort">
        <li><a href="./"><span>返回首页</span> <i class="fa fa-reply fa-fw"></i></a></li>
<?php
	mysql_query("set names utf8");
	$result = mysql_query("SELECT * FROM zzdh_sort order by sid asc");
	while($row = mysql_fetch_array($result))
    {
?>
<li><a href="sort<?php echo $row['id'];?>.html" class="<?php if($row_list['sortname']==$row['sortname']){echo "active";}else{echo "";};?>"><span><?php echo $row['sortname'];?></span> <i class="fa <?php echo $row['icon'];?> fa-fw"></i></a></li>
<?php  }?>
                </ul>
	<div class="card board">
		<span class="icon"><i class="fa fa-map-signs fa-fw"></i></span>
		<a href="./">导航首页</a>&nbsp;»&nbsp;<span>申请收录</span>	</div>
	<div class="card">
		<div class="card-head"><i class="fa fa-plus-square fa-fw"></i>申请收录</div>
		<div class="card-body">
			<div class="content">
				<p><span style="color: #e03e2d;"><strong>收录条件：</strong></span><br />1、正规网站，不违反法律的<br />2、已将本站添加友链的<br />3、不能是新网站，网站内容也不能不完善<br />4、其他要求想到再说吧</p><p> </p>			</div>
			<form action="./inc/submit.php" method="post">
				<div class="oz-xs-12 oz-sm-6 oz-form-group">
					<label class="oz-form-label">网站名称</label>
					<label class="oz-form-field">
						<input type="text" name="name" id="name" placeholder="请输入站点名称[必填]" required>
					</label>
				</div>
				<div class="oz-xs-12 oz-sm-6 oz-form-group">
					<label class="oz-form-label">网站分类</label>
					<label class="oz-form-field">
						<select name="sortid" id="sortid" required>
							<option value="">请选择站点分类[必选]</option>
							<?php
								mysql_query("set names utf8");
								$result = mysql_query("SELECT * FROM zzdh_sort order by sid asc");
								while($row = mysql_fetch_array($result))
								{
							?>
							<option value="<?php echo $row['sortname'];?>"><?php echo $row['sortname'];?></option>
							<?php }?> 
						</select>
					</label>
				</div>
				<div class="oz-xs-12 oz-sm-6 oz-form-group">
					<label class="oz-form-label">网站网址</label>
					<label class="oz-form-field">
						<input type="url" name="domain" id="domain" placeholder="请输入站点域名,包含http或者https[必填]" required>
					</label>
				</div>
				<div class="oz-xs-12 oz-sm-6 oz-form-group">
					<label class="oz-form-label">网站简介</label>
				<textarea rows="5" class="oz-form-textarea" placeholder="请输入网站简介[必填]" aria-describedby="basic-addon1" name="introduce" required></textarea>

				</div>
				<div class="oz-center" style="margin-bottom: 8px">
					<button class="oz-btn oz-bg-blue" type="submit" name="submit" style="margin-right: 10px">
						<i class="fa fa-telegram fa-fw" aria-hidden="true"></i> 立即提交
					</button>
					<button class="oz-btn oz-bg-red" type="reset"><i class="fa fa-refresh fa-fw" aria-hidden="true"></i>
						重置输入
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<ul class="suspend">
	<li class="back-top" onclick="backTop()">
		<i class="fa fa-chevron-up"></i>
		<span class="more">返回顶部</span>
	</li>
	<li>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['qq'];?>&site=qq&menu=yes">
			<i class="fa fa-qq"></i>
			<span class="more"><?php echo $conf['qq'];?></span>
		</a>
	</li>
	<li>
		<a href="mailto:<?php echo $conf['qq'];?>@qq.com">
			<i class="fa fa-envelope"></i>
			<span class="more"><?php echo $conf['qq'];?>@qq.com</span>
		</a>
	</li>
	<li>
		<i class="fa fa-weixin"></i>
		<span class="more weixin"><img src="assets/images/weixin.png" alt="微信二维码"></span>
	</li>
</ul>

<footer class="footer">
	<p>Copyright © 2020	<a href="../"><?php echo $conf['name'];?></a>. All Rights Reserved.</p>
	<p><a href="http://www.miitbeian.gov.cn/"><?php echo $conf['icp'];?></a>
	</p>
	<p><?php echo $conf['info'];?></p>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/layer/layer.js"></script>
<script src="templates/antidote/js/main.js"></script>

</body>
</html>