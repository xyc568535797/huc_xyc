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
        <title>关于我们_<?php if($tid==1){echo "{$row_sort['sortname']} - {$conf['name']}";}elseif($tid==2){echo "{$row_list['name']} - {$row_list['sortname']} - {$conf['name']}";}elseif($tid==3){echo "{$lang->index->about} - {$conf['name']}";}elseif($tid==4){echo "{$lang->index->nofound} - {$conf['name']}";}elseif($tid==5){echo "{$lang->index->search} - {$conf['name']}";}elseif($tid==6){echo "{$lang->index->apply} - {$conf['name']}";}else{echo "{$conf['title']}";};?></title>
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
		<a href="./">导航首页</a>&nbsp;»&nbsp;<span>关于本站</span>	</div>
	<div class="card">
		<div class="card-head"><i class="fa fa-info-circle fa-fw"></i>本站简介</div>
		<div class="card-body">
			<div class="content">
				<p>本站名称：<?php echo $conf['name'];?></p>
				<p>本站标题：<?php echo $conf['title'];?></p>
				<p>本站关键词：<?php echo $conf['keywords'];?></p>
				<p>本站描述：<?php echo $conf['description']?></p>
				<p>本站域名：<?php echo $_SERVER['HTTP_HOST'];?></p>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-head"><i class="fa fa-pie-chart fa-fw"></i>网站统计</div>
		<div class="card-body">
			<div class="content">
				<p>开设分类：<b><?php echo $cntsort?></b> 个</p>
				<p>收录站点：<b><?php echo $cntlist?></b> 个</p>
	            <p>正申请站点：<b><?php echo $cntapply?></b> 个</p>
				<p>已发布公告：<b><?php echo $cntnotice;?></b> 条</p>
				<p>本站已稳定运行了 <b><script language="JavaScript" type="text/javascript">var urodz = new Date("<?php echo $conf['time'];?>");var now = new Date();var ile = now.getTime() - urodz.getTime();var dni = Math.floor(ile / (1000 * 60 * 60 * 24));document.write( + dni)</script></b> 天。</p>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-head"><i class="fa fa-telegram fa-fw"></i>联系方式</div>
		<div class="card-body">
			<div class="content">
				<p>ＱＱ：<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['qq'];?>&site=qq&menu=yes" target="_blank"><?php echo $conf['qq'];?></a></p>
				<p>邮箱：<a href="mailto:<?php echo $conf['email'];?>"><?php echo $conf['email']?></a></p>
			</div>
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
<script src="assets/js/zzdh.js"></script>
<script src="templates/antidote/js/main.js"></script>

</body>
</html>