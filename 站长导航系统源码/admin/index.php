<?php
	$title='后台首页';
    require ('./header.php');
?>

<div class="mdui-container" style="margin-top: 4%;">
	<div class="alert alert-info" role="alert">管理员“<a href="user.php"><?php echo $conf['admin_user'];?></a>”登录成功，尽情管理您的网站吧！潮男心博客 www.cnx0.com</div> 
	<div class="panel panel-default">
		<div class="panel-heading"><b>统计信息</b></div>
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="text-center">导航</th>
						<th class="text-center">分类</th>
						<th class="text-center">站点</th>
						<th class="text-center">待审</th>
						<th class="text-center">公告</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center"><a href="nav.php"><b><?php echo $cntnav;?></b>个</a></td>
						<td class="text-center"><a href="sort.php"><b><?php echo $cntsort;?></b>个</a></td>
						<td class="text-center"><a href="list.php"><b><?php echo $cntlist;?></b>个</a></td>
						<td class="text-center"><a href="apply.php"><b><?php echo $cntapply;?></b>个</a></td>
						<td class="text-center"><a href="notice.php"><b><?php echo $cntnotice;?></b>条</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading"><b>系统信息</b></div>
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tbody>
					<tr><th>系统程序</th><td><?php echo $lang->all->name;?></td><th>程序版本</th><td><?php echo $lang->all->edition;?></td></tr>
					<tr><th>服务器软件</th><td><?php echo $_SERVER['SERVER_SOFTWARE'] ?></td><th>服务器语言</th><td><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];?></td></tr>
					<tr><th>服务器IP</th><td><?php echo GetHostByName($_SERVER['SERVER_NAME']);?></td><th>PHP版本</th><td><?php echo phpversion() ?> <?php if(ini_get('safe_mode')) { echo '线程安全'; } else { echo '非线程安全'; } ?></td></tr>
					<tr><th>POST许可</th><td><?php echo ini_get('post_max_size'); ?></td><th>文件上传许可</th><td><?php echo ini_get('upload_max_filesize'); ?></td></tr>
					<tr><th>程序最大运行时间</th><td><?php echo ini_get('max_execution_time') ?>s</td><th>网站路径</th><td><?php echo __FILE__;?></td></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
    require ('./footer.php');
?>