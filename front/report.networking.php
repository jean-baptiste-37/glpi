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
/*!
  \brief affiche les diffents choix de rapports reseaux

 */


define('GLPI_ROOT', '..');
include (GLPI_ROOT . "/inc/includes.php");



checkRight("reports","r");

commonHeader($LANG["Menu"][6],$_SERVER['PHP_SELF'],"utils","report");

# Titre




echo "<table class='tab_cadre' >";
echo "<tr><th align='center' colspan='3' >".$LANG["reports"][33]."</th></tr>";
echo "</table><br>";
// 3. Selection d'affichage pour generer la liste

echo "<form name='form' method='post' action='report.location.list.php'>";
echo "<table class='tab_cadre'  width='500'>";
echo "<tr class='tab_bg_1'><td>".$LANG["reports"][39]."</td>";
echo "<td>";
dropdownValue("glpi_dropdown_locations","location",0,1,$_SESSION["glpiactive_entity"]);
echo "</td><td align='center' width='120'>";
echo "<input type='submit' value='".$LANG["reports"][15]."' class='submit'>";
echo "</td></tr>";
echo "</table>";
echo "</form>";


echo "<form name='form2' method='post' action='report.switch.list.php'>";
echo "<table class='tab_cadre' width='500'>";
echo "<tr class='tab_bg_1'><td>".$LANG["reports"][41]."</td>";
echo "<td>";
dropdownValue("glpi_networking", "switch");
echo "</td><td align='center' width='120'>";
echo "<input type='submit' value='".$LANG["reports"][15]."' class='submit'>";
echo "</td></tr>";
echo "</table>";
echo "</form>";


if (countElementsInTableForMyEntities("glpi_dropdown_netpoint")>0){
	echo "<form name='form3' method='post' action='report.netpoint.list.php'>";
	echo "<table class='tab_cadre'  width='500'>";
	echo "<tr class='tab_bg_1'><td>".$LANG["reports"][42]."</td>";
	echo "<td>";
	dropdownNetpoint("prise",0,0,1,$_SESSION["glpiactive_entity"]);	
	echo "</td><td align='center' width='120'>";
	echo "<input type='submit' value='".$LANG["reports"][15]."' class='submit'>";
	echo "</td></tr>";
	echo "</table>";
	echo "</form>";
}





commonFooter();

?>
