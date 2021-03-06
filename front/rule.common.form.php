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
// Original Author of file: Walid Nouh
// Purpose of file:
// ----------------------------------------------------------------------

if (!defined('GLPI_ROOT')){
	die("Sorry. You can't access directly to this file");
	}
checkRight($rule->right,"r");

if(!isset($_GET["ID"])) $_GET["ID"] = "";

if (!isset($_SESSION['glpi_onglet'])) $_SESSION['glpi_onglet']=1;
if (isset($_GET['onglet'])) {
	$_SESSION['glpi_onglet']=$_GET['onglet'];
}	

$rulecriteria = new RuleCriteria();
$ruleaction = new RuleAction();
$rulecollection = new RuleCollection($rule->rule_type);

if (isset($_POST["delete_criteria"]))
{
	checkRight($rule->right,"w");
	if (count($_POST["item"]))
		foreach ($_POST["item"] as $key => $val)
		{
			$input["ID"]=$key;
			$rulecriteria->delete($input);
		}
	
	glpi_header($_SERVER['HTTP_REFERER']);
}
if (isset($_POST["delete_action"]))
{
	checkRight($rule->right,"w");
	if (count($_POST["item"]))
		foreach ($_POST["item"] as $key => $val)
		{
			$input["ID"]=$key;
			$ruleaction->delete($input);
		}
	
	glpi_header($_SERVER['HTTP_REFERER']);
}
elseif (isset($_POST["add_criteria"]))
{
	checkRight($rule->right,"w");
	$rulecriteria->add($_POST);
	glpi_header($_SERVER['HTTP_REFERER']);
}
elseif (isset($_POST["add_action"]))
{
	checkRight($rule->right,"w");
	$ruleaction->add($_POST);
	glpi_header($_SERVER['HTTP_REFERER']);
}
elseif (isset($_POST["update_rule"]))
{
	checkRight($rule->right,"w");
	$rule->update($_POST);
	logEvent($_POST['ID'], "rules", 4, "setup", $_SESSION["glpiname"]." ".$LANG["log"][21]);
	glpi_header($_SERVER['HTTP_REFERER']);
} elseif (isset($_POST["add_rule"]))
{
	checkRight($rule->right,"w");
	$newID=$rule->add($_POST);
	logEvent($newID, "rules", 4, "setup", $_SESSION["glpiname"]." ".$LANG["log"][20]);
	glpi_header($_SERVER['HTTP_REFERER']."?ID=$newID");
} elseif (isset($_POST["delete_rule"]))
{
	checkRight($rule->right,"w");
	$rulecollection->deleteRuleOrder($_POST["ranking"]);
	$rule->delete($_POST);
	logEvent($_POST["ID"], "rules", 4, "setup", $_SESSION["glpiname"]." ".$LANG["log"][22]);
	glpi_header($CFG_GLPI['root_doc']."/front/rule.php");
}

commonHeader($LANG["title"][2],$_SERVER['PHP_SELF'],"admin","rule",$rulecollection->rule_type);

$rule->showForm($_SERVER['PHP_SELF'],$_GET["ID"]);
if (!empty($_GET["ID"])&&$_GET["ID"] >0) {
	switch($_SESSION['glpi_onglet']){
			case 1 :
				$rule->showCriteriasList($_SERVER['PHP_SELF']);
				$rule->showActionsList($_SERVER['PHP_SELF']);
			break;
	}
}
commonFooter();
?>
