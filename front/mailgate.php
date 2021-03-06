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

$NEEDED_ITEMS = array ("setup","ocsng","user","search");

define('GLPI_ROOT', '..');
include (GLPI_ROOT . "/inc/includes.php");


checkRight("config", "w");


	commonHeader($LANG["Menu"][39], $_SERVER['PHP_SELF'], "config","mailgate");

if (!function_exists('imap_open')) {
	echo "<div align='center'>";
	echo "<table class='tab_cadre_fixe'>";
	echo "<tr><th colspan='2'>" . $LANG["Menu"][39] . "</th></tr>";
	echo "<tr class='tab_bg_2'><td align='center'><p class='red'>" . $LANG["setup"][165] . "</p></td></tr></table>";
	echo "</div>";
	commonFooter();
	exit();
}
	
	manageGetValuesInSearch(MAILGATE_TYPE);
	searchForm(MAILGATE_TYPE,$_SERVER['PHP_SELF'],$_GET["field"],$_GET["contains"],$_GET["sort"],$_GET["deleted"],$_GET["link"],$_GET["distinct"]);
	showList(MAILGATE_TYPE,$_SERVER['PHP_SELF'],$_GET["field"],$_GET["contains"],$_GET["sort"],$_GET["order"],$_GET["start"],$_GET["deleted"],$_GET["link"],$_GET["distinct"]);
	
	commonFooter();
?>
