<?php
if(IN_MANAGER_MODE!='true') die("<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the MODx Content Manager instead of accessing this file directly.");
if(!$modx->hasPermission('bk_manager')) {
	$e->setError(3);
	$e->dumpError();
}

if ($manager_theme)
        $manager_theme .= '/';
else    $manager_theme  = '';


include_once "header.inc.php";  // start normal header

?>

<h1><?php echo $_lang['bk_manager']?></h1>

<div class="sectionHeader">Sypex Dumper 2</div>
<div class="sectionBody" id="lyr4">
<iframe src="../sxd/" width="586" height="462" frameborder="0" style="margin:0;"></iframe>
</div>
<!-- This iframe is used when downloading file backup file -->
<iframe name="fileDownloader" width="1" height="1" style="display:none; width:1px; height:1px;"></iframe>

<?php include_once "footer.inc.php"; // send footer 

?>