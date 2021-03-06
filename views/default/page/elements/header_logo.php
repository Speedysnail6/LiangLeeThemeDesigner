<?php
/* LiangLeeThemeDesigner
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLeeThemeDesigner
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File header_logo.php
 */
LiangLee_include('LiangLeeThemeDesigner','lib/LiangLeeThemeDesigner');
LiangLeeThemeDesigner_lib();
global $liang_logo;
global $lianglogo;

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
if (!elgg_get_plugin_setting("Leethemed_logo", "LiangLeeThemeDesigner")) {
?>
<h1>
<a class="elgg-heading-site"
href="<?php echo $site_url; ?>"><?php echo $lianglogo; ?></a>
</h1>
<?php
}
if (elgg_get_plugin_setting("Leethemed_logo", "LiangLeeThemeDesigner")) {
?>

<a class="elgg-heading-site"
href="<?php echo $site_url; ?>"><img src="<?php echo $lianglogo; ?>"></a>
<?php
}
?>