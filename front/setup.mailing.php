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

$NEEDED_ITEMS = array (
	"setup",
	"ocsng",
	"mailing"
);

define('GLPI_ROOT', '..');
include (GLPI_ROOT . "/inc/includes.php");

checkRight("config", "w");
$config = new Config();

if (!isset ($_SESSION['glpi_mailconfig']))
	$_SESSION['glpi_mailconfig'] = 1;
if (isset ($_GET['onglet']))
	$_SESSION['glpi_mailconfig'] = $_GET['onglet'];



if (!empty ($_POST["test_smtp_send"])) {
	testMail();
	glpi_header($_SERVER['HTTP_REFERER']);
}
elseif (!empty ($_POST["update_mailing"])) {
	$config->update($_POST);
	glpi_header($_SERVER['HTTP_REFERER']);
}
elseif (!empty ($_POST["update_notifications"])) {

	updateMailNotifications($_POST);
	glpi_header($_SERVER['HTTP_REFERER']);
}




commonHeader($LANG["title"][15], $_SERVER['PHP_SELF'],"config","mailing");
$config->showFormMailing($_SERVER['PHP_SELF']);

commonFooter();
?>
