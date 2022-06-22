<?php
//潮男心博客 www.cnx0.com
	$index = 'active';
	require ('./header.php');
?>
        <div id="置顶站点" class="card">
            <div class="top-grid">
			<?php
				mysql_query("set names utf8");
				$results = mysql_query("SELECT * FROM zzdh_list where tui = '1' order by lid asc limit 12");
				while($rows = mysql_fetch_array($results))
				{
		    ?>
                            <a href="<?php if(empty($rows['alias'])){echo "../site_{$rows['id']}.html";}else{echo "../{$rows['alias']}.html";};?>" class="item" title="<?php echo $rows['name'];?>" data-id="<?php echo $rows['id'];?>">
                <span class="icon"><img class="lazy-load" src="assets/images/loading.gif" data-src="<?php echo $rows['img'];?>"></span>
                <span class="name"><?php echo $rows['name'];?></span>
            </a><?php }?>
                        </div>
        </div>
                    <div class="card">
                <a class="ad" target="blank" href="http://www.9zwz.com">
                    <img src="/assets/images/index.gif">
                </a>
            </div>
	<?php
		mysql_query("set names utf8");
		$result = mysql_query("SELECT * FROM zzdh_sort order by sid asc");
		while($row = mysql_fetch_array($result))
		{
	?>
	<a id="<?php echo $row['sortname'];?>"></a>
                                <div id="<?php echo $row['sortname'];?>" class="card">
                <div class="card-head">
                    <i class="fa <?php echo $row['icon'];?> fa-fw"></i><?php echo $row['sortname'];?>                    <a href="<?php if(empty($row['alias'])){echo "../sort{$row['id']}.html";}else{echo "../sort{$row['alias']}.html";};?>" class="more"><i class="fa fa-ellipsis-h fa-fw"></i></a>
                </div>
                <div class="card-body">
			<?php
				mysql_query("set names utf8");
				$results = mysql_query("SELECT * FROM zzdh_list where sortname = '".$row['sortname']."' order by lid asc limit 16");
				while($rows = mysql_fetch_array($results))
				{
		    ?>
                                            <a href="<?php if(empty($rows['alias'])){echo "../site_{$rows['id']}.html";}else{echo "../{$rows['alias']}.html";};?>" target="_blank" class="item" title="<?php echo $rows['name'];?>" data-id="<?php echo $rrows['id'];?>">
                            <span class="icon"><img class="lazy-load" src="assets/images/loading.gif" data-src="<?php echo $rows['img'];?>"></span>
                            <span class="name"><?php echo $rows['name'];?></span>
                        </a><?php }?>
                                    </div>
            </div><?php }?>
                </div>
    <div class="side">
        <div class="card">
            <div class="card-head"><i class="fa fa-line-chart fa-fw"></i>今日TOP10</div>
            <div class="card-body">
                <div class="view-list">
<?php $result=mysql_query("select * from zzdh_list order by view desc limit 10");
$pai=0;
while($rs=mysql_fetch_array($result)) {
$pai=$pai+1;
?>
                <a href="<?php if(empty($rs['alias'])){echo "/site_{$rs['id']}.html";}else{echo "/{$rs['alias']}.html";};?>" data-id="<?php echo $rs['id'];?>">
                <span class="rank"><?php echo $pai;?></span>
                <span class="icon"><img class="lazy-load" src="assets/images/loading.gif" data-src="<?php echo $rs['img'];?>"></span>
                <span class="name"><?php echo $rs['name'];?></span>
                <span class="view"><?php echo $rs['view'];?></span>
            </a><?php }?>
                            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-head"><i class="fa fa-coffee fa-fw"></i>最新收录</div>
            <div class="card-body">
                <div class="side-latest oz-timeline">
<?php $result=mysql_query("select * from zzdh_list order by time desc limit 10");
while($rs=mysql_fetch_array($result)) {
?>
                <a href="<?php if(empty($rs['alias'])){echo "/site_{$rs['id']}.html";}else{echo "/{$rs['alias']}.html";};?>" data-id="<?php echo $rs['id'];?>" data-id="<?php echo $rs['id'];?>" class="oz-timeline-item">
                <div class="oz-timeline-time"><?php echo $rs['time'];?></div>
                <div class="oz-timeline-main">
                    <span class="icon"><img class="lazy-load" src="assets/images/loading.gif" data-src="<?php echo $rs['img'];?>"></span>
                    <span class="name"><?php echo $rs['name'];?></span>
                </div>
            </a><?php }?>
                            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-head"><i class="fa fa-pie-chart fa-fw"></i>本站统计</div>
            <div class="card-body">
                <div class="side-common">
				<p>已开设分类：<b><?php echo $cntsort?></b> 个</p>
				<p>已收录站点：<b><?php echo $cntlist?></b> 个</p>
	            <p>正申请站点：<b><?php echo $cntapply?></b> 个</p>
				<p>已发布公告：<b><?php echo $cntnotice;?></b> 条</p>
				<p>本站已稳定运行了 <b><script language="JavaScript" type="text/javascript">var urodz = new Date("<?php echo $conf['time'];?>");var now = new Date();var ile = now.getTime() - urodz.getTime();var dni = Math.floor(ile / (1000 * 60 * 60 * 24));document.write( + dni)</script></b> 天。</p>
		</div>
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
<p>潮男心导航 cnx0.com</p>
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
