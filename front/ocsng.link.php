<?php
/*
 * @version $Id$
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2007 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
 */

// ----------------------------------------------------------------------
// Original Author of file:
// Purpose of file:
// ----------------------------------------------------------------------


$NEEDED_ITEMS=array("ocsng","rulesengine","rule.ocs","computer","device","printer","networking","peripheral","monitor","software","infocom","phone","tracking","enterprise","reservation","setup","admininfo","registry","rule.softwarecategories","group");

define('GLPI_ROOT', '..');
include (GLPI_ROOT . "/inc/includes.php");

checkRight("ocsng","w");

commonHeader($LANG["title"][39],$_SERVER['PHP_SELF'],"utils","ocsng");

$CFG_GLPI["use_ajax"] = 1; 

//First time this screen is displayed : set the import mode to 'basic'
if (!isset($_SESSION["change_import_mode"])){
	$_SESSION["change_import_mode"] = false;
}

//Changing the import mode	
if (isset($_GET["change_import_mode"])){
	if ($_GET["change_import_mode"] == "false"){
		$_SESSION["change_import_mode"]=false;
	} else {
		$_SESSION["change_import_mode"]=true;
	}
}

if (isset($_SESSION["ocs_link"])){
	if ($count=count($_SESSION["ocs_link"])){
		$percent=min(100,round(100*($_SESSION["ocs_link_count"]-$count)/$_SESSION["ocs_link_count"],0));

		displayProgressBar(400,$percent);

		$key=array_pop($_SESSION["ocs_link"]);
		ocsLinkComputer($key["ocs_id"],$_SESSION["ocs_server_id"],$key["glpi_id"]);
		glpi_header($_SERVER['PHP_SELF']);
	} else {
		displayProgressBar(400,100);

		unset($_SESSION["ocs_link"]);
		echo "<div align='center'><strong>".$LANG["ocsng"][8]."<br>";
		echo "<a href='".$_SERVER['PHP_SELF']."'>".$LANG["buttons"][13]."</a>";
		echo "</strong></div>";
	}
}



if (!isset($_POST["import_ok"])){
	if (!isset($_GET['check'])) $_GET['check']='all';
	if (!isset($_GET['start'])) $_GET['start']=0;

	ocsManageDeleted($_SESSION["ocs_server_id"]);
	ocsShowNewComputer($_SESSION["ocs_server_id"],$_SESSION["change_import_mode"],$_GET['check'],$_GET['start'],1);

} else {
	if (count($_POST['tolink'])>0){
		$_SESSION["ocs_link_count"]=0;
		foreach ($_POST['tolink'] as $ocs_id => $glpi_id){
			if ($glpi_id>0){
				$_SESSION["ocs_link"][]=array("ocs_id"=>$ocs_id,
						"glpi_id"=>$glpi_id);
				$_SESSION["ocs_link_count"]++;
			}
		}
	}
	glpi_header($_SERVER['PHP_SELF']);
}


commonFooter();

?>
