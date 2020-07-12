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
 * @author 	    timgno () 
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 
include "../../mainfile.php";
global $xoopsTpl, $xoopsModule;
include_once XOOPS_ROOT_PATH."/header.php";
echo '<br /><br />
<div style="text-align: center; font-family: verdana; font-size: 14px; font-weight: bold;">Test Adsl</div>
<br /><br />
<div style="text-align: center; font-family: verdana; font-size: 14px; font-weight: bold;">Verifica in un attimo la velocit&agrave; della tua ADSL</div>
<br /><br />
<!-- beginn speed tool code - do not change the code -->
<table border="1" width="432" bgcolor="#FFFFFF" style="border-collapse: collapse" bordercolor="#000000">
<tr><td><p align="center">
<b><font size="4" face="Tahoma">Test ADSL / Speedtest</font></b><font face="Tahoma"><span style="font-size: 10.0pt; layout-grid-mode: line"><br>
</span><span style="font-size: 4pt; layout-grid-mode: line">
						 </span><span style="font-size: 10.0pt; layout-grid-mode: line"><br>
						Con il nostro tool potrete misurare subito e gratuitamente la velocit&agrave; del vostro collegamento
						internet e ADSL.<br>
</span><span style="font-size: 4pt; layout-grid-mode: line">
						 </span><span style="font-size: 10.0pt; layout-grid-mode: line"><br>
</span>
<iframe src="http://www.my-speedtest.com/messung_webmaster_it/" width="424" height=54 frameborder=0 name="I50" scrolling="no" border="0" align=middle></iframe>
<br></font><font size="1" face="Tahoma">(c) speedtest-italy.com -
<a target="_blank" style="text-decoration: none" href="http://www.speedtest-italy.com">
<font color="#000000">Test ADSL</font></a></font></td>
</tr></table>
 
<!-- end of speed tool code - do not change the code -->
';
echo '<br /><br />
<a href="http://txmod.netsons.org/" title="Powered by TXMod for Xoops">
  <img src="'.XOOPS_URL.'/modules/'.$xoopsModule->getVar('dirname').'/images/txmod_logo.png" alt="'.$xoopsModule->getVar('name').'" /></a>
  <br /><br />';
include_once XOOPS_ROOT_PATH."/footer.php";	
?>