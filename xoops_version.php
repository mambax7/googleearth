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
 * @author 	    txmod (txmodxoops@gmail.com) 
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 
$modversion["name"] = _MI_GOOGLEEARTH_MANAGER_NAME;
$modversion["version"] = 1.01;
$modversion["description"] = _MI_GOOGLEEARTH_MANAGER_DESC;
$modversion["author"] = "txmod";
$modversion["author_email"] = "";
$modversion["author_website_url"] = "http://txmod.netsons.org";
$modversion["author_website_name"] = "TXMod";
$modversion["credits"] = "";
$modversion["license"] = "GNU GPL";
$modversion["release_info"] = "";
$modversion["release_file"] = "";
$modversion["manual"] = "";
$modversion["manual_file"] = "";
$modversion["image"] = "images/googleearth_slogo.png";
$modversion["dirname"] = "googleearth";

//about
$modversion["demo_site_url"] = "http://txmod.netsons.org/modules/googleearth";
$modversion["demo_site_name"] = "Google Earth Demo";
$modversion["module_website_url"] = "http://txmod.netsons.org";
$modversion["module_website_name"] = "TXMod";
$modversion["release"] = "0";
$modversion["module_status"] = "";

// Admin things
$modversion["hasAdmin"] = 1;

$modversion["adminindex"] = "admin/index.php";
$modversion["adminmenu"] = "admin/menu.php";
	
	
// Mysql file
//$modversion["sqlfile"]["mysql"] = "sql/mysql.sql";

// Tables
	
// Scripts to run upon installation or update
$modversion["onInstall"] = "include/install.php";
//$modversion["onUpdate"] = "include/update.php";// Menu
$modversion["hasMain"] = 1;

//Recherche
$modversion["hasSearch"] = 1;
$modversion["search"]["file"] = "include/search.inc.php";
$modversion["search"]["func"] = "googleearth_search";

// Templates
$modversion['templates'][1]['file'] = "googleearth.html";
$modversion['templates'][1]['description'] = '';

$i = 1;
$modversion['config'][$i]['name'] = 'googleearth_apikey';
$modversion['config'][$i]['title'] = '_MI_GOOGLEEARTH_APIKEY';
$modversion['config'][$i]['description'] = '_MI_GOOGLEEARTH_APIKEYDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'ABQIAAAAC6EJp_wbkJge6rsefON1FBTCBXtFyGVbC69wtV0ydr7yZOe2ZRSL_9d3fA-sSBqpTX34i7K_oP4-xA';
$i++;
$modversion['config'][$i]['name'] = 'googleearth_lat';
$modversion['config'][$i]['title'] = '_MI_GOOGLEEARTH_LAT';
$modversion['config'][$i]['description'] = '_MI_GOOGLEEARTH_LATDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '39.40389';
$i++;
$modversion['config'][$i]['name'] = 'googleearth_lng';
$modversion['config'][$i]['title'] = '_MI_GOOGLEEARTH_LNG';
$modversion['config'][$i]['description'] = '_MI_GOOGLEEARTH_LNGDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '16.20134';
$i++;
$modversion['config'][$i]['name'] = 'googleearth_width';
$modversion['config'][$i]['title'] = '_MI_GOOGLEEARTH_WIDTH';
$modversion['config'][$i]['description'] = '_MI_GOOGLEEARTH_WIDTHDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '100';
$i++;
$modversion['config'][$i]['name'] = 'googleearth_height';
$modversion['config'][$i]['title'] = '_MI_GOOGLEEARTH_HEIGHT';
$modversion['config'][$i]['description'] = '_MI_GOOGLEEARTH_HEIGHTDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '200';
unset($i); 
//Blocs
		
?>