// <?php 
/**
 * SypexDumper
 * 
 * Backup and restore MySQL
 * 
 * @category	module
 * @version 	2.0.10
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	@properties
 * @internal	@guid docmsdfgewrcrewan435243542tf542t5t	
 * @internal	@shareparams 1
 * @internal	@dependencies requires files located at /assets/modules/sxd/
 * @internal	@modx_category Manager and Admin
 * @internal    @installset base
 */


if(!$modx->hasPermission('bk_manager')) {
                $e->setError(3);
                $e->dumpError();
}

if ($manager_theme)
        $manager_theme .= '/';
else    $manager_theme  = '';

echo '<h1>Sypex Dumper 2</h1>
<div class="sectionHeader">Backup and restore MySQL</div>
<div class="sectionBody" id="lyr4">
<iframe src="/assets/modules/sxd/" width="100%" height="80%" frameborder="0" style="margin:0;"></iframe>
</div>';
