<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * testadsl - MODULE FOR XOOPS AND IMPRESS CMS
 * Copyright (c) timgno (http://www.txmod.netsons.org)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       timgno (http://www.txmod.netsons.org)
 * @license         GNU GPL
 * @package         testadsl
 * @author 	    timgno (txmodxoops@gmail.com)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 
$modversion["name"] = _MI_TESTADSL_MANAGER_NAME;
$modversion["version"] = 1.00;
$modversion["description"] = _MI_TESTADSL_MANAGER_DESC;
$modversion["author"] = "timgno";
$modversion["author_email"] = "";
$modversion["author_website_url"] = "http://www.txmod.netsons.org";
$modversion["author_website_name"] = "TXMod";
$modversion["credits"] = "-";
$modversion["license"] = "GNU GPL";
$modversion["release_info"] = "-";
$modversion["release_file"] = "-";
$modversion["manual"] = "-";
$modversion["manual_file"] = "-.txt";
$modversion["image"] = "images/testadsl_slogo.png";
$modversion["dirname"] = "testadsl";

//about
$modversion["demo_site_url"] = "http://www.txmod.netsons.org";
$modversion["demo_site_name"] = "TXMod";
$modversion["module_website_url"] = "http://www.txmod.netsons.org/modules/testadsl";
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
$modversion["search"]["func"] = "testadsl_search";

$i = 1;
include_once XOOPS_ROOT_PATH . "/class/xoopslists.php";
$modversion["config"][$i]["name"]        = "testadsl_editor";
$modversion["config"][$i]["title"]       = "_MI_TESTADSL_EDITOR";
$modversion["config"][$i]["description"] = "";
$modversion["config"][$i]["formtype"]    = "select";
$modversion["config"][$i]["valuetype"]   = "text";
$modversion["config"][$i]["default"]     = "dhtmltextarea";
$modversion["config"][$i]["options"]     = XoopsLists::getDirListAsArray(XOOPS_ROOT_PATH . "/class/xoopseditor");
$modversion["config"][$i]["category"]    = "global";
$i++;
$modversion["config"][$i]["name"] = "perpageadmin";
$modversion["config"][$i]["title"] = "_MI_TESTADSL_ADMINPERPAGE";
$modversion["config"][$i]["description"] = "_MI_TESTADSL_ADMINPERPAGEDSC";
$modversion["config"][$i]["formtype"] = "select";
$modversion["config"][$i]["valuetype"] = "int";
$modversion["config"][$i]["default"] = 10;
$modversion["config"][$i]["options"] = array("2" => 2, "4" => 4, "6" => 6, "8" => 8, "10" => 10, "15" => 15, "20" => 20);
unset($i); 
//Blocs
		
?>