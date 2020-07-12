<?php
/**
 * ****************************************************************************
 * Module g�n�r� par TDMCreate de la TDM "http://www.tdmxoops.net"
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
 * @author 	    timgno () 
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 
$indexFile = XOOPS_ROOT_PATH."/modules/TDMCreate/include/index.html";
$blankFile = XOOPS_ROOT_PATH."/modules/TDMCreate/images/deco/blank.gif";

//Creation du dossier "uploads" pour le module � la racine du site
$module_uploads = XOOPS_ROOT_PATH."/uploads/testadsl";
if(!is_dir($module_uploads))
	mkdir($module_uploads, 0777);
	chmod($module_uploads, 0777);
copy($indexFile, XOOPS_ROOT_PATH."/uploads/testadsl/index.html");

?>