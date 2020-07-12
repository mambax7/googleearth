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
 
include("header.php");
$xoopsOption['template_main'] = "googleearth.html";

include(XOOPS_ROOT_PATH."/header.php");

$key = $xoopsModuleConfig['googleearth_apikey'];
$googleearth_lat = (isset($_GET['lat'])) ? floatval($_GET['lat']) : $xoopsModuleConfig['googleearth_lat'];
$googleearth_lng = (isset($_GET['lng'])) ? floatval($_GET['lng']) : $xoopsModuleConfig['googleearth_lng'];
$googleearth_width = (isset($_GET['width'])) ? intval($_GET['width']) : $xoopsModuleConfig['googleearth_width'];
$googleearth_height = (isset($_GET['height'])) ? intval($_GET['height']) : $xoopsModuleConfig['googleearth_height'];

$xoTheme->addStylesheet("http://www.google.com/uds/css/gsearch.css");
$xoTheme->addStylesheet("http://www.google.com/uds/solutions/localsearch/gmlocalsearch.css");
$xoTheme->addScript('http://www.google.com/jsapi?key='.$key.'');
$script = XOOPS_URL.'/modules/googleearth/include/ginit.js';
$xoTheme->addScript($script);

$xoopsTpl->assign('earth_width', $googleearth_width);
$xoopsTpl->assign('earth_height', $googleearth_height);
// Header main
$xoopsTpl->assign('lang_title', _MD_GOOGLEEARTH_TITLE);
$xoopsTpl->assign('lang_slogan', _MD_GOOGLEEARTH_DESC);
$xoopsTpl->assign('lang_loading', _MD_GOOGLEEARTH_MSGLOADING);

//keywords
$keywords .= $xoopsModule->name();
$keywords = substr($keywords, 0);
$xoTheme->addMeta('meta', 'keywords', $keywords);
//description
$xoTheme->addMeta('meta', 'description', _MI_GOOGLEEARTH_MANAGER_DESC);

include_once XOOPS_ROOT_PATH."/footer.php";
?>