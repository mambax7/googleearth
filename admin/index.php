<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * Google Earth - MODULE FOR XOOPS AND IMPRESS CMS
 * Copyright (c) txmod (http://txmod.netsons.org)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       txmod (http://txmod.netsons.org)
 * @license         GNU GPL
 * @package         Google Earth
 * @author 	    txmod () 
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 
include_once("admin_header.php");

xoops_cp_header();

global $xoopsModule;

//Apelle du menu admin
if ( !is_readable(XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php"))	{
googleearth_adminmenu(0, _AM_GOOGLEEARTH_MANAGER_INDEX);
} else {
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php";
loadModuleAdminMenu (0, _AM_GOOGLEEARTH_MANAGER_INDEX);
}

include_once XOOPS_ROOT_PATH."/modules/".$xoopsModule->dirname()."/class/menu.php";

	$menu = new googleearthMenu();
	
	$menu->addItem("update", "../../system/admin.php?fct=modulesadmin&op=update&module=googleearth", "../images/deco/update.png",  _AM_GOOGLEEARTH_MANAGER_UPDATE);	
	$menu->addItem("permissions", "permissions.php", "../images/deco/permissions.png", _AM_GOOGLEEARTH_MANAGER_PERMISSIONS);
	$menu->addItem("preference", "../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=".$xoopsModule->getVar("mid").
												"&amp;&confcat_id=1", "../images/deco/pref.png", _AM_GOOGLEEARTH_MANAGER_PREFERENCES);
	$menu->addItem("about", "about.php", "../images/deco/about.png", _AM_GOOGLEEARTH_MANAGER_ABOUT);
	
	echo $menu->getCSS();
	

echo "<div class=\"CPbigTitle\" style=\"background-image: url(../images/deco/index.png); background-repeat: no-repeat; background-position: left; padding-left: 50px;\"><strong>"._AM_GOOGLEEARTH_MANAGER_INDEX."</strong></div><br />
		<table width=\"100%\" border=\"0\" cellspacing=\"10\" cellpadding=\"4\">
			<tr>
				<td valign=\"top\">".$menu->render()."</td>
				<td valign=\"top\" width=\"60%\">";
				
				echo "</td>
			</tr>
		</table>";
include_once("admin_footer.php");
xoops_cp_footer();

?>