<?php
	ini_set("display_errors", 0);
	require ('./inc/lang.php');
	require ('./module.php');
	if(empty($row_list['id'])){echo "<script language='javascript'>window.location.href='../404.html';</script>";};
	mysql_query("set names utf8");
    $id = $_GET['id'];
    $alias = $_GET['alias'];
	if(empty($alias)){ //增加浏览数
		$sql = "update zzdh_list set view = view+1 where Id = '$id'";
		$result = mysql_query($sql);
    }else{
		$sql = "update zzdh_list set view = view+1 where alias = '$alias'";
		$result = mysql_query($sql);
    }
	preg_match("/^(http:\/\/|https:\/\/)?([^\/]+)/i", $row_list['url'], $matches); //获取该网站域名
	$domain = $matches[2]; 
?>

<!DOCTYPE html>
<html>
    <head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,minimum-scale=1,maximum-scale=1,user-scalable=no">
        <title><?php echo $row_list['name'];?>_<?php echo $conf['name'];?></title>
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
            <a href="./">导航首页</a>&nbsp;»&nbsp;<a title="<?php echo $row_list['sortname'];?>" href="<?php if(empty($rows_sort['alias'])){echo "../sort{$rows_sort['id']}.html";}else{echo "../sort{$rows_sort['alias']}.html";};?>"><?php echo $row_list['sortname'];?></a>&nbsp;»&nbsp;<span><?php echo $row_list['name'];?></span>        </div>
        <div class="card">
            <div class="card-body">
                <div class="part-main">
                    <span class="site-name"><?php echo $row_list['name'];?></span>
                    <span class="oz-xs-12 oz-sm-6 oz-lg-4">站点域名：<?php echo $domain;?></span>
                    <span class="oz-xs-12 oz-sm-6 oz-lg-4">站点星级：<img class="lazy-load" src="templates/antidote/images/star/<?php $dj=$row_list['dj'];if($dj==0 or $dj==1 ){echo "1";}elseif($dj==2){echo "2";}elseif($dj==3){echo "3";}elseif($dj==4){echo "4";}else{echo "5";};?>.png"></span>
                    <span class="oz-xs-12 oz-sm-6 oz-lg-4">是否推荐：<?php $tui=$row_list['tui'];if($tui==1){echo "<font color=red>是</font>";}else{echo "否";};?></span>
                    <span class="oz-xs-6 oz-sm-6 oz-lg-4">所属分类：<a title="<?php echo $row_list['sortname'];?>" href="<?php if(empty($rows_sort['alias'])){echo "../sort{$rows_sort['id']}.html";}else{echo "../sort{$rows_sort['alias']}.html";};?>"><?php echo $row_list['sortname'];?></a></span>
                    <span class="oz-xs-6 oz-sm-6 oz-lg-4">总浏览数：<?php echo $row_list['view'];?>次</span>
					<span class="oz-xs-12 oz-sm-6 oz-lg-4">收录日期：<?php echo $row_list['time'];?></span>
                    <span class="oz-xs-6 oz-sm-6 oz-lg-4">百度权重：<img class="lazy-load" src="https://baidurank.aizhan.com/api/br?domain=<?php echo $domain;?>&style=images"></span>
                    <span class="oz-xs-6 oz-sm-6 oz-lg-4">移动权重：<img class="lazy-load" src="https://baidurank.aizhan.com/api/mbr?domain=<?php echo $domain;?>&style=images"></span>
                </div>
                <div class="part-side">
                    <div class="site-img">
                        <img class="lazy-load" src="assets/images/loading.gif" data-src="<?php echo $conf['api'];?><?php echo $row_list['url'];?>">
                    </div>
                    <a title="<?php echo $domain;?>" href="go.php?url=<?php echo $row_list['url'];?>" target="_blank" data-id="1" class="oz-btn oz-btn-lg oz-btn-block oz-bg-orange">
                        <i class="fa fa-telegram fa-fw" aria-hidden="true"></i> 网站直达
                    </a>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-head">
                <i class="fa fa-feed fa-fw" aria-hidden="true"></i> 站点信息
            </div>
            <div class="card-body">
                <div class="content">
                    <p><b>描述：</b></p>
					<center><img class="lazy-load" src="assets/images/loading.gif" data-src="<?php echo $conf['api'];?><?php echo $row_list['url'];?>"></center><br>
					<?php echo $row_list['introduce'];?><br><br><br>
                </div>
            </div>
        </div>

                    <div class="card">
            <div class="card-head">
                <i class="fa fa-magnet fa-fw" aria-hidden="true"></i> 相关站点
            </div>
            <div class="card-body">
			<?php
				mysql_query("set names utf8");
				$results = mysql_query("SELECT * FROM zzdh_list where sortname = '".$row_list['sortname']."' order by lid asc limit 14");
				while($rows = mysql_fetch_array($results))
				{
		    ?>
                                            <a href="<?php if(empty($rows['alias'])){echo "../site_{$rows['id']}.html";}else{echo "../{$rows['alias']}.html";};?>" class="item" title="<?php echo $rows['name'];?>" data-id="<?php echo $rrows['id'];?>">
                            <span class="icon"><img class="lazy-load" src="assets/images/loading.gif" data-src="<?php echo $rows['img'];?>"></span>
                            <span class="name"><?php echo $rows['name'];?></span>
                        </a><?php }?>
                                       
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