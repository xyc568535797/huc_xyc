<?php
	require ('./inc/common.php');
	require ('./inc/lang.php');
	$db = mysql_connect("{$dbconfig['host']}", "{$dbconfig['user']}", "{$dbconfig['pwd']}");
	mysql_select_db("{$dbconfig['dbname']}", $db);

	mysql_query("set names utf8");
    $id = $_GET['id'];
    $alias = $_GET['alias'];

	if(empty($alias)){
		$sql = 'select * from zzdh_sort where id = "'.$id.'"';
		$result = mysql_query($sql);
		$row_sort = mysql_fetch_array($result);
		$sql = 'select * from zzdh_list where id = "'.$id.'"';
		$result = mysql_query($sql);
		$row_list = mysql_fetch_array($result);
    }else{
		$sql = 'select * from zzdh_sort where alias = "'.$alias.'"';
		$result = mysql_query($sql);
		$row_sort = mysql_fetch_array($result);
		$sql = 'select * from zzdh_list where alias = "'.$alias.'"';
		$result = mysql_query($sql);
		$row_list = mysql_fetch_array($result);
    }

	$sql = 'select * from zzdh_sort where sortname = "'.$row_list['sortname'].'"';
	$result = mysql_query($sql);
	$rows_sort = mysql_fetch_array($result);
	$sql='SELECT COUNT(*) FROM zzdh_sort';
	$res=mysql_query($sql);
	list($cntsort)=mysql_fetch_row($res);
	$sql='SELECT COUNT(*) FROM zzdh_list';
	$res=mysql_query($sql);
	list($cntlist)=mysql_fetch_row($res);
	$sql='SELECT COUNT(*) FROM zzdh_apply';
	$res=mysql_query($sql);
	list($cntapply)=mysql_fetch_row($res);	
	$sql='SELECT COUNT(*) FROM zzdh_notice';
	$res=mysql_query($sql);
	list($cntnotice)=mysql_fetch_row($res);
?>

<?php
function nav(){
	mysql_query("set names utf8");
	$result = mysql_query("SELECT * FROM zzdh_nav order by nid asc");
	while($row = mysql_fetch_array($result))
    {
?>
	<li><a href="<?php echo $row['url'];?>"><i class="fa <?php echo $row['icon'];?>" aria-hidden="true"></i> <span><?php echo $row['name'];?></span></a></li>
<?php } }?>

<?php
function websort(){
	mysql_query("set names utf8");
	$result = mysql_query("SELECT * FROM zzdh_sort order by sid asc");
	while($row = mysql_fetch_array($result))
    {
?>
<li><a href="#<?php echo $row['sortname'];?>" class="move"><span><?php echo $row['sortname'];?></span> <i class="fa <?php echo $row['icon'];?> fa-fw"></i></a></li>
<?php } }?>
<?php
function nwebsort(){
	mysql_query("set names utf8");
	$result = mysql_query("SELECT * FROM zzdh_sort order by sid asc");
	while($row = mysql_fetch_array($result))
    {
?>
<li><a href="sort<?php echo $row['id'];?>.html" class="ok"><span><?php echo $row['sortname'];?></span> <i class="fa <?php echo $row['icon'];?> fa-fw"></i></a></li>
<?php } }?>
<?php
function notice(){
	mysql_query("set names utf8");
	$result = mysql_query("SELECT * FROM zzdh_notice order by id desc limit 1");
	while($row = mysql_fetch_array($result))
    {
?>
<span class="board-notice"><?php echo $row['content'];?></span>
<?php } }?>