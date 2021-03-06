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
// Original Author of file: Julien Dombre
// Purpose of file:
// ----------------------------------------------------------------------

// meta = 0 : no meta search 
// meta = 1 : meta search using GROUP BY HAVING -> field of the table
// meta = 2 : meta search using WHERE -> field in a liked table

// Conventions :
// ID 80 : FK_entities link -> no massive action
// ID 101 : glpi_ocs_link -> no linkfield but massive action on it

//////COMPUTER_TYPE

$SEARCH_OPTION[COMPUTER_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[COMPUTER_TYPE][1]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][1]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[COMPUTER_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[COMPUTER_TYPE][1]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][2]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][2]['field']='ID';
$SEARCH_OPTION[COMPUTER_TYPE][2]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[COMPUTER_TYPE][2]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][3]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[COMPUTER_TYPE][3]['field']='completename';
$SEARCH_OPTION[COMPUTER_TYPE][3]['linkfield']='location';
$SEARCH_OPTION[COMPUTER_TYPE][3]['name']=$LANG["common"][15];
$SEARCH_OPTION[COMPUTER_TYPE][3]['meta']=2;

$SEARCH_OPTION[COMPUTER_TYPE][4]['table']='glpi_type_computers';
$SEARCH_OPTION[COMPUTER_TYPE][4]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][4]['linkfield']='type';
$SEARCH_OPTION[COMPUTER_TYPE][4]['name']=$LANG["common"][17];
$SEARCH_OPTION[COMPUTER_TYPE][4]['meta']=2;

$SEARCH_OPTION[COMPUTER_TYPE][5]['table']='glpi_dropdown_model';
$SEARCH_OPTION[COMPUTER_TYPE][5]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][5]['linkfield']='model';
$SEARCH_OPTION[COMPUTER_TYPE][5]['name']=$LANG["common"][22];
$SEARCH_OPTION[COMPUTER_TYPE][5]['meta']=2;

$SEARCH_OPTION[COMPUTER_TYPE][31]['table']='glpi_dropdown_state';
$SEARCH_OPTION[COMPUTER_TYPE][31]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][31]['linkfield']='state';
$SEARCH_OPTION[COMPUTER_TYPE][31]['name']=$LANG["state"][0];
$SEARCH_OPTION[COMPUTER_TYPE][31]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][6]['table']='glpi_dropdown_os';
$SEARCH_OPTION[COMPUTER_TYPE][6]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][6]['linkfield']='os';
$SEARCH_OPTION[COMPUTER_TYPE][6]['name']=$LANG["computers"][9];
$SEARCH_OPTION[COMPUTER_TYPE][6]['meta']=2;

$SEARCH_OPTION[COMPUTER_TYPE][40]['table']='glpi_dropdown_os_version';
$SEARCH_OPTION[COMPUTER_TYPE][40]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][40]['linkfield']='os_version';
$SEARCH_OPTION[COMPUTER_TYPE][40]['name']=$LANG["computers"][52];
$SEARCH_OPTION[COMPUTER_TYPE][40]['meta']=2;

$SEARCH_OPTION[COMPUTER_TYPE][41]['table']='glpi_dropdown_os_sp';
$SEARCH_OPTION[COMPUTER_TYPE][41]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][41]['linkfield']='os_sp';
$SEARCH_OPTION[COMPUTER_TYPE][41]['name']=$LANG["computers"][53];
$SEARCH_OPTION[COMPUTER_TYPE][41]['meta']=2;

$SEARCH_OPTION[COMPUTER_TYPE][42]['table']='glpi_dropdown_auto_update';
$SEARCH_OPTION[COMPUTER_TYPE][42]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][42]['linkfield']='auto_update';
$SEARCH_OPTION[COMPUTER_TYPE][42]['name']=$LANG["computers"][51];
$SEARCH_OPTION[COMPUTER_TYPE][42]['meta']=2;

$SEARCH_OPTION[COMPUTER_TYPE][43]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][43]['field']='os_license_number';
$SEARCH_OPTION[COMPUTER_TYPE][43]['linkfield']='os_license_number';
$SEARCH_OPTION[COMPUTER_TYPE][43]['name']=$LANG["computers"][10];
$SEARCH_OPTION[COMPUTER_TYPE][43]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][44]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][44]['field']='os_license_id';
$SEARCH_OPTION[COMPUTER_TYPE][44]['linkfield']='os_license_id';
$SEARCH_OPTION[COMPUTER_TYPE][44]['name']=$LANG["computers"][11];
$SEARCH_OPTION[COMPUTER_TYPE][44]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][8]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][8]['field']='serial';
$SEARCH_OPTION[COMPUTER_TYPE][8]['linkfield']='serial';
$SEARCH_OPTION[COMPUTER_TYPE][8]['name']=$LANG["common"][19];
$SEARCH_OPTION[COMPUTER_TYPE][8]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][9]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][9]['field']='otherserial';
$SEARCH_OPTION[COMPUTER_TYPE][9]['linkfield']='otherserial';
$SEARCH_OPTION[COMPUTER_TYPE][9]['name']=$LANG["common"][20];
$SEARCH_OPTION[COMPUTER_TYPE][9]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][16]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][16]['field']='comments';
$SEARCH_OPTION[COMPUTER_TYPE][16]['linkfield']='comments';
$SEARCH_OPTION[COMPUTER_TYPE][16]['name']=$LANG["common"][25];
$SEARCH_OPTION[COMPUTER_TYPE][16]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][17]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][17]['field']='contact';
$SEARCH_OPTION[COMPUTER_TYPE][17]['linkfield']='contact';
$SEARCH_OPTION[COMPUTER_TYPE][17]['name']=$LANG["common"][18];
$SEARCH_OPTION[COMPUTER_TYPE][17]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][18]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][18]['field']='contact_num';
$SEARCH_OPTION[COMPUTER_TYPE][18]['linkfield']='contact_num';
$SEARCH_OPTION[COMPUTER_TYPE][18]['name']=$LANG["common"][21];
$SEARCH_OPTION[COMPUTER_TYPE][18]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][70]['table']='glpi_users';
$SEARCH_OPTION[COMPUTER_TYPE][70]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][70]['linkfield']='FK_users';
$SEARCH_OPTION[COMPUTER_TYPE][70]['name']=$LANG["common"][34];
$SEARCH_OPTION[COMPUTER_TYPE][70]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[COMPUTER_TYPE][71]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][71]['linkfield']='FK_groups';
$SEARCH_OPTION[COMPUTER_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[COMPUTER_TYPE][71]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][19]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][19]['field']='date_mod';
$SEARCH_OPTION[COMPUTER_TYPE][19]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][19]['name']=$LANG["common"][26];
$SEARCH_OPTION[COMPUTER_TYPE][19]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][32]['table']='glpi_dropdown_network';
$SEARCH_OPTION[COMPUTER_TYPE][32]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][32]['linkfield']='network';
$SEARCH_OPTION[COMPUTER_TYPE][32]['name']=$LANG["setup"][88];
$SEARCH_OPTION[COMPUTER_TYPE][32]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][33]['table']='glpi_dropdown_domain';
$SEARCH_OPTION[COMPUTER_TYPE][33]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][33]['linkfield']='domain';
$SEARCH_OPTION[COMPUTER_TYPE][33]['name']=$LANG["setup"][89];
$SEARCH_OPTION[COMPUTER_TYPE][33]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][23]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[COMPUTER_TYPE][23]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][23]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[COMPUTER_TYPE][23]['name']=$LANG["common"][5];
$SEARCH_OPTION[COMPUTER_TYPE][23]['meta']=2;

$SEARCH_OPTION[COMPUTER_TYPE][24]['table']='glpi_users';
$SEARCH_OPTION[COMPUTER_TYPE][24]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][24]['linkfield']='tech_num';
$SEARCH_OPTION[COMPUTER_TYPE][24]['name']=$LANG["common"][10];
$SEARCH_OPTION[COMPUTER_TYPE][24]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[COMPUTER_TYPE][80]['field']='completename';
$SEARCH_OPTION[COMPUTER_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[COMPUTER_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[COMPUTER_TYPE][80]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE]['periph']=$LANG["devices"][10];

$SEARCH_OPTION[COMPUTER_TYPE][7]['table']='glpi_device_processor';
$SEARCH_OPTION[COMPUTER_TYPE][7]['field']='designation';
$SEARCH_OPTION[COMPUTER_TYPE][7]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][7]['name']=$LANG["computers"][21];
$SEARCH_OPTION[COMPUTER_TYPE][7]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][36]['table']='glpi_device_processor';
$SEARCH_OPTION[COMPUTER_TYPE][36]['field']='specif_default';
$SEARCH_OPTION[COMPUTER_TYPE][36]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][36]['name']=$LANG["computers"][21]." ".$LANG["setup"][35];
$SEARCH_OPTION[COMPUTER_TYPE][36]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][10]['table']='glpi_device_ram';
$SEARCH_OPTION[COMPUTER_TYPE][10]['field']='designation';
$SEARCH_OPTION[COMPUTER_TYPE][10]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][10]['name']=$LANG["computers"][23];
$SEARCH_OPTION[COMPUTER_TYPE][10]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][35]['table']='glpi_device_ram';
$SEARCH_OPTION[COMPUTER_TYPE][35]['field']='specif_default';
$SEARCH_OPTION[COMPUTER_TYPE][35]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][35]['name']=$LANG["computers"][24];
$SEARCH_OPTION[COMPUTER_TYPE][35]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][11]['table']='glpi_device_iface';
$SEARCH_OPTION[COMPUTER_TYPE][11]['field']='designation';
$SEARCH_OPTION[COMPUTER_TYPE][11]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][11]['name']=$LANG["setup"][9];
$SEARCH_OPTION[COMPUTER_TYPE][11]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][12]['table']='glpi_device_sndcard';
$SEARCH_OPTION[COMPUTER_TYPE][12]['field']='designation';
$SEARCH_OPTION[COMPUTER_TYPE][12]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][12]['name']=$LANG["devices"][7];
$SEARCH_OPTION[COMPUTER_TYPE][12]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][13]['table']='glpi_device_gfxcard';
$SEARCH_OPTION[COMPUTER_TYPE][13]['field']='designation';
$SEARCH_OPTION[COMPUTER_TYPE][13]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][13]['name']=$LANG["devices"][2];
$SEARCH_OPTION[COMPUTER_TYPE][13]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][14]['table']='glpi_device_moboard';
$SEARCH_OPTION[COMPUTER_TYPE][14]['field']='designation';
$SEARCH_OPTION[COMPUTER_TYPE][14]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][14]['name']=$LANG["devices"][5];
$SEARCH_OPTION[COMPUTER_TYPE][14]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][15]['table']='glpi_device_hdd';
$SEARCH_OPTION[COMPUTER_TYPE][15]['field']='designation';
$SEARCH_OPTION[COMPUTER_TYPE][15]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][15]['name']=$LANG["computers"][36];
$SEARCH_OPTION[COMPUTER_TYPE][15]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE][34]['table']='glpi_device_hdd';
$SEARCH_OPTION[COMPUTER_TYPE][34]['field']='specif_default';
$SEARCH_OPTION[COMPUTER_TYPE][34]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][34]['name']=$LANG["computers"][25];
$SEARCH_OPTION[COMPUTER_TYPE][34]['meta']=1;

$SEARCH_OPTION[COMPUTER_TYPE]['network']=$LANG["setup"][88];

$SEARCH_OPTION[COMPUTER_TYPE][20]['table']='glpi_networking_ports';
$SEARCH_OPTION[COMPUTER_TYPE][20]['field']='ifaddr';
$SEARCH_OPTION[COMPUTER_TYPE][20]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][20]['name']=$LANG["networking"][14];
$SEARCH_OPTION[COMPUTER_TYPE][20]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][21]['table']='glpi_networking_ports';
$SEARCH_OPTION[COMPUTER_TYPE][21]['field']='ifmac';
$SEARCH_OPTION[COMPUTER_TYPE][21]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][21]['name']=$LANG["networking"][15];
$SEARCH_OPTION[COMPUTER_TYPE][21]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][83]['table']='glpi_networking_ports';
$SEARCH_OPTION[COMPUTER_TYPE][83]['field']='netmask';
$SEARCH_OPTION[COMPUTER_TYPE][83]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][83]['name']=$LANG["networking"][60];
$SEARCH_OPTION[COMPUTER_TYPE][83]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][84]['table']='glpi_networking_ports';
$SEARCH_OPTION[COMPUTER_TYPE][84]['field']='subnet';
$SEARCH_OPTION[COMPUTER_TYPE][84]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][84]['name']=$LANG["networking"][61];
$SEARCH_OPTION[COMPUTER_TYPE][84]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][85]['table']='glpi_networking_ports';
$SEARCH_OPTION[COMPUTER_TYPE][85]['field']='gateway';
$SEARCH_OPTION[COMPUTER_TYPE][85]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][85]['name']=$LANG["networking"][59];
$SEARCH_OPTION[COMPUTER_TYPE][85]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][22]['table']='glpi_dropdown_netpoint';
$SEARCH_OPTION[COMPUTER_TYPE][22]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][22]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][22]['name']=$LANG["networking"][51];
$SEARCH_OPTION[COMPUTER_TYPE][22]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE]['tracking']=$LANG["setup"][143];

$SEARCH_OPTION[COMPUTER_TYPE][60]['table']='glpi_tracking';
$SEARCH_OPTION[COMPUTER_TYPE][60]['field']='count';
$SEARCH_OPTION[COMPUTER_TYPE][60]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][60]['name']=$LANG["stats"][13];
$SEARCH_OPTION[COMPUTER_TYPE][60]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE]['financial']=$LANG["financial"][3];

$SEARCH_OPTION[COMPUTER_TYPE][29]['table']='glpi_contracts';
$SEARCH_OPTION[COMPUTER_TYPE][29]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][29]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][29]['name']=$LANG["common"][16]." ".$LANG["financial"][1];
$SEARCH_OPTION[COMPUTER_TYPE][29]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][30]['table']='glpi_contracts';
$SEARCH_OPTION[COMPUTER_TYPE][30]['field']='num';
$SEARCH_OPTION[COMPUTER_TYPE][30]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][30]['name']=$LANG["financial"][4]." ".$LANG["financial"][1];
$SEARCH_OPTION[COMPUTER_TYPE][30]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][25]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][25]['field']='num_immo';
$SEARCH_OPTION[COMPUTER_TYPE][25]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][25]['name']=$LANG["financial"][20];
$SEARCH_OPTION[COMPUTER_TYPE][25]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][26]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][26]['field']='num_commande';
$SEARCH_OPTION[COMPUTER_TYPE][26]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][26]['name']=$LANG["financial"][18];
$SEARCH_OPTION[COMPUTER_TYPE][26]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][27]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][27]['field']='bon_livraison';
$SEARCH_OPTION[COMPUTER_TYPE][27]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][27]['name']=$LANG["financial"][19];
$SEARCH_OPTION[COMPUTER_TYPE][27]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][28]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][28]['field']='facture';
$SEARCH_OPTION[COMPUTER_TYPE][28]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][28]['name']=$LANG["financial"][82];
$SEARCH_OPTION[COMPUTER_TYPE][28]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][37]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][37]['field']='buy_date';
$SEARCH_OPTION[COMPUTER_TYPE][37]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][37]['name']=$LANG["financial"][14];
$SEARCH_OPTION[COMPUTER_TYPE][37]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][38]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][38]['field']='use_date';
$SEARCH_OPTION[COMPUTER_TYPE][38]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][38]['name']=$LANG["financial"][76];
$SEARCH_OPTION[COMPUTER_TYPE][38]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][50]['table']='glpi_dropdown_budget';
$SEARCH_OPTION[COMPUTER_TYPE][50]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][50]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][50]['name']=$LANG["financial"][87];
$SEARCH_OPTION[COMPUTER_TYPE][50]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][51]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][51]['field']='warranty_duration';
$SEARCH_OPTION[COMPUTER_TYPE][51]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][51]['name']=$LANG["financial"][15];
$SEARCH_OPTION[COMPUTER_TYPE][51]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][52]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][52]['field']='warranty_info';
$SEARCH_OPTION[COMPUTER_TYPE][52]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][52]['name']=$LANG["financial"][16];
$SEARCH_OPTION[COMPUTER_TYPE][52]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][120]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][120]['field']='end_warranty';
$SEARCH_OPTION[COMPUTER_TYPE][120]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][120]['name']=$LANG["financial"][80];
$SEARCH_OPTION[COMPUTER_TYPE][120]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][53]['table']='glpi_enterprises_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][53]['field']='name';
$SEARCH_OPTION[COMPUTER_TYPE][53]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][53]['name']=$LANG["financial"][26];
$SEARCH_OPTION[COMPUTER_TYPE][53]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][54]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][54]['field']='value';
$SEARCH_OPTION[COMPUTER_TYPE][54]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][54]['name']=$LANG["financial"][21];
$SEARCH_OPTION[COMPUTER_TYPE][54]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][55]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][55]['field']='warranty_value';
$SEARCH_OPTION[COMPUTER_TYPE][55]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][55]['name']=$LANG["financial"][78];
$SEARCH_OPTION[COMPUTER_TYPE][55]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][56]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][56]['field']='amort_time';
$SEARCH_OPTION[COMPUTER_TYPE][56]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][56]['name']=$LANG["financial"][23];
$SEARCH_OPTION[COMPUTER_TYPE][56]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][57]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][57]['field']='amort_type';
$SEARCH_OPTION[COMPUTER_TYPE][57]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][57]['name']=$LANG["financial"][22];
$SEARCH_OPTION[COMPUTER_TYPE][57]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][58]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][58]['field']='amort_coeff';
$SEARCH_OPTION[COMPUTER_TYPE][58]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][58]['name']=$LANG["financial"][77];
$SEARCH_OPTION[COMPUTER_TYPE][58]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][59]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][59]['field']='alert';
$SEARCH_OPTION[COMPUTER_TYPE][59]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][59]['name']=$LANG["common"][41];
$SEARCH_OPTION[COMPUTER_TYPE][59]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][122]['table']='glpi_infocoms';
$SEARCH_OPTION[COMPUTER_TYPE][122]['field']='comments';
$SEARCH_OPTION[COMPUTER_TYPE][122]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][122]['name']=$LANG["common"][25]." - ".$LANG["financial"][3];
$SEARCH_OPTION[COMPUTER_TYPE][122]['meta']=0;


$SEARCH_OPTION[COMPUTER_TYPE]['ocsng']=$LANG["Menu"][33];

$SEARCH_OPTION[COMPUTER_TYPE][102]['table']='glpi_ocs_link';
$SEARCH_OPTION[COMPUTER_TYPE][102]['field']='last_update';
$SEARCH_OPTION[COMPUTER_TYPE][102]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][102]['name']=$LANG["ocsng"][13];
$SEARCH_OPTION[COMPUTER_TYPE][102]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][103]['table']='glpi_ocs_link';
$SEARCH_OPTION[COMPUTER_TYPE][103]['field']='last_ocs_update';
$SEARCH_OPTION[COMPUTER_TYPE][103]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][103]['name']=$LANG["ocsng"][14];
$SEARCH_OPTION[COMPUTER_TYPE][103]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][100]['table']='glpi_computers';
$SEARCH_OPTION[COMPUTER_TYPE][100]['field']='ocs_import';
$SEARCH_OPTION[COMPUTER_TYPE][100]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][100]['name']=$LANG["ocsng"][7];
$SEARCH_OPTION[COMPUTER_TYPE][100]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][101]['table']='glpi_ocs_link';
$SEARCH_OPTION[COMPUTER_TYPE][101]['field']='auto_update';
$SEARCH_OPTION[COMPUTER_TYPE][101]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][101]['name']=$LANG["ocsng"][6]." ".$LANG["Menu"][33];
$SEARCH_OPTION[COMPUTER_TYPE][101]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE]['registry']=$LANG["title"][43];

// REGISTRY_TYPE
$SEARCH_OPTION[COMPUTER_TYPE][110]['table']='glpi_registry';
$SEARCH_OPTION[COMPUTER_TYPE][110]['field']='registry_value';
$SEARCH_OPTION[COMPUTER_TYPE][110]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][110]['name']=$LANG["title"][43]." : ".$LANG["registry"][3];
$SEARCH_OPTION[COMPUTER_TYPE][110]['meta']=0;

$SEARCH_OPTION[COMPUTER_TYPE][111]['table']='glpi_registry';
$SEARCH_OPTION[COMPUTER_TYPE][111]['field']='registry_ocs_name';
$SEARCH_OPTION[COMPUTER_TYPE][111]['linkfield']='';
$SEARCH_OPTION[COMPUTER_TYPE][111]['name']=$LANG["title"][43]." : ".$LANG["registry"][6];
$SEARCH_OPTION[COMPUTER_TYPE][111]['meta']=0;

//////NETWORKING_TYPE
$SEARCH_OPTION[NETWORKING_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[NETWORKING_TYPE][1]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][1]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[NETWORKING_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[NETWORKING_TYPE][1]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][2]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][2]['field']='ID';
$SEARCH_OPTION[NETWORKING_TYPE][2]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[NETWORKING_TYPE][2]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][3]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[NETWORKING_TYPE][3]['field']='completename';
$SEARCH_OPTION[NETWORKING_TYPE][3]['linkfield']='location';
$SEARCH_OPTION[NETWORKING_TYPE][3]['name']=$LANG["common"][15];
$SEARCH_OPTION[NETWORKING_TYPE][3]['meta']=2;

$SEARCH_OPTION[NETWORKING_TYPE][4]['table']='glpi_type_networking';
$SEARCH_OPTION[NETWORKING_TYPE][4]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][4]['linkfield']='type';
$SEARCH_OPTION[NETWORKING_TYPE][4]['name']=$LANG["common"][17];
$SEARCH_OPTION[NETWORKING_TYPE][4]['meta']=2;

$SEARCH_OPTION[NETWORKING_TYPE][40]['table']='glpi_dropdown_model_networking';
$SEARCH_OPTION[NETWORKING_TYPE][40]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][40]['linkfield']='model';
$SEARCH_OPTION[NETWORKING_TYPE][40]['name']=$LANG["common"][22];
$SEARCH_OPTION[NETWORKING_TYPE][40]['meta']=2;

$SEARCH_OPTION[NETWORKING_TYPE][31]['table']='glpi_dropdown_state';
$SEARCH_OPTION[NETWORKING_TYPE][31]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][31]['linkfield']='state';
$SEARCH_OPTION[NETWORKING_TYPE][31]['name']=$LANG["state"][0];
$SEARCH_OPTION[NETWORKING_TYPE][31]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][5]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][5]['field']='serial';
$SEARCH_OPTION[NETWORKING_TYPE][5]['linkfield']='serial';
$SEARCH_OPTION[NETWORKING_TYPE][5]['name']=$LANG["common"][19];
$SEARCH_OPTION[NETWORKING_TYPE][5]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][6]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][6]['field']='otherserial';
$SEARCH_OPTION[NETWORKING_TYPE][6]['linkfield']='otherserial';
$SEARCH_OPTION[NETWORKING_TYPE][6]['name']=$LANG["common"][20];
$SEARCH_OPTION[NETWORKING_TYPE][6]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][7]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][7]['field']='contact';
$SEARCH_OPTION[NETWORKING_TYPE][7]['linkfield']='contact';
$SEARCH_OPTION[NETWORKING_TYPE][7]['name']=$LANG["common"][18];
$SEARCH_OPTION[NETWORKING_TYPE][7]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][8]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][8]['field']='contact_num';
$SEARCH_OPTION[NETWORKING_TYPE][8]['linkfield']='contact_num';
$SEARCH_OPTION[NETWORKING_TYPE][8]['name']=$LANG["common"][21];
$SEARCH_OPTION[NETWORKING_TYPE][8]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][70]['table']='glpi_users';
$SEARCH_OPTION[NETWORKING_TYPE][70]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][70]['linkfield']='FK_users';
$SEARCH_OPTION[NETWORKING_TYPE][70]['name']=$LANG["common"][34];
$SEARCH_OPTION[NETWORKING_TYPE][70]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[NETWORKING_TYPE][71]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][71]['linkfield']='FK_groups';
$SEARCH_OPTION[NETWORKING_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[NETWORKING_TYPE][71]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][9]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][9]['field']='date_mod';
$SEARCH_OPTION[NETWORKING_TYPE][9]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][9]['name']=$LANG["common"][26];
$SEARCH_OPTION[NETWORKING_TYPE][9]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][10]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][10]['field']='comments';
$SEARCH_OPTION[NETWORKING_TYPE][10]['linkfield']='comments';
$SEARCH_OPTION[NETWORKING_TYPE][10]['name']=$LANG["common"][25];
$SEARCH_OPTION[NETWORKING_TYPE][10]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][11]['table']='glpi_dropdown_firmware';
$SEARCH_OPTION[NETWORKING_TYPE][11]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][11]['linkfield']='firmware';
$SEARCH_OPTION[NETWORKING_TYPE][11]['name']=$LANG["networking"][49];
$SEARCH_OPTION[NETWORKING_TYPE][11]['meta']=2;

$SEARCH_OPTION[NETWORKING_TYPE][12]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][12]['field']='ifaddr';
$SEARCH_OPTION[NETWORKING_TYPE][12]['linkfield']='ifaddr';
$SEARCH_OPTION[NETWORKING_TYPE][12]['name']=$LANG["networking"][14]." ".$LANG["networking"][12];
$SEARCH_OPTION[NETWORKING_TYPE][12]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][13]['table']='glpi_networking';
$SEARCH_OPTION[NETWORKING_TYPE][13]['field']='ifmac';
$SEARCH_OPTION[NETWORKING_TYPE][13]['linkfield']='ifmac';
$SEARCH_OPTION[NETWORKING_TYPE][13]['name']=$LANG["networking"][15]." ".$LANG["networking"][12];
$SEARCH_OPTION[NETWORKING_TYPE][13]['meta']=1;

$SEARCH_OPTION[NETWORKING_TYPE][32]['table']='glpi_dropdown_network';
$SEARCH_OPTION[NETWORKING_TYPE][32]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][32]['linkfield']='network';
$SEARCH_OPTION[NETWORKING_TYPE][32]['name']=$LANG["setup"][88];
$SEARCH_OPTION[NETWORKING_TYPE][32]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][33]['table']='glpi_dropdown_domain';
$SEARCH_OPTION[NETWORKING_TYPE][33]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][33]['linkfield']='domain';
$SEARCH_OPTION[NETWORKING_TYPE][33]['name']=$LANG["setup"][89];
$SEARCH_OPTION[NETWORKING_TYPE][33]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][23]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[NETWORKING_TYPE][23]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][23]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[NETWORKING_TYPE][23]['name']=$LANG["common"][5];
$SEARCH_OPTION[NETWORKING_TYPE][23]['meta']=2;

$SEARCH_OPTION[NETWORKING_TYPE][24]['table']='glpi_users';
$SEARCH_OPTION[NETWORKING_TYPE][24]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][24]['linkfield']='tech_num';
$SEARCH_OPTION[NETWORKING_TYPE][24]['name']=$LANG["common"][10];
$SEARCH_OPTION[NETWORKING_TYPE][24]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[NETWORKING_TYPE][80]['field']='completename';
$SEARCH_OPTION[NETWORKING_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[NETWORKING_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[NETWORKING_TYPE][80]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE]['network']=$LANG["setup"][88];

$SEARCH_OPTION[NETWORKING_TYPE][20]['table']='glpi_networking_ports';
$SEARCH_OPTION[NETWORKING_TYPE][20]['field']='ifaddr';
$SEARCH_OPTION[NETWORKING_TYPE][20]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][20]['name']=$LANG["networking"][14];
$SEARCH_OPTION[NETWORKING_TYPE][20]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][21]['table']='glpi_networking_ports';
$SEARCH_OPTION[NETWORKING_TYPE][21]['field']='ifmac';
$SEARCH_OPTION[NETWORKING_TYPE][21]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][21]['name']=$LANG["networking"][15];
$SEARCH_OPTION[NETWORKING_TYPE][21]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][83]['table']='glpi_networking_ports';
$SEARCH_OPTION[NETWORKING_TYPE][83]['field']='netmask';
$SEARCH_OPTION[NETWORKING_TYPE][83]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][83]['name']=$LANG["networking"][60];
$SEARCH_OPTION[NETWORKING_TYPE][83]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][84]['table']='glpi_networking_ports';
$SEARCH_OPTION[NETWORKING_TYPE][84]['field']='subnet';
$SEARCH_OPTION[NETWORKING_TYPE][84]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][84]['name']=$LANG["networking"][61];
$SEARCH_OPTION[NETWORKING_TYPE][84]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][85]['table']='glpi_networking_ports';
$SEARCH_OPTION[NETWORKING_TYPE][85]['field']='gateway';
$SEARCH_OPTION[NETWORKING_TYPE][85]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][85]['name']=$LANG["networking"][59];
$SEARCH_OPTION[NETWORKING_TYPE][85]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][22]['table']='glpi_dropdown_netpoint';
$SEARCH_OPTION[NETWORKING_TYPE][22]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][22]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][22]['name']=$LANG["networking"][51];
$SEARCH_OPTION[NETWORKING_TYPE][22]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE]['tracking']=$LANG["setup"][143];

$SEARCH_OPTION[NETWORKING_TYPE][60]['table']='glpi_tracking';
$SEARCH_OPTION[NETWORKING_TYPE][60]['field']='count';
$SEARCH_OPTION[NETWORKING_TYPE][60]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][60]['name']=$LANG["stats"][13];
$SEARCH_OPTION[NETWORKING_TYPE][60]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE]['financial']=$LANG["financial"][3];

$SEARCH_OPTION[NETWORKING_TYPE][29]['table']='glpi_contracts';
$SEARCH_OPTION[NETWORKING_TYPE][29]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][29]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][29]['name']=$LANG["common"][16]." ".$LANG["financial"][1];
$SEARCH_OPTION[NETWORKING_TYPE][29]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][30]['table']='glpi_contracts';
$SEARCH_OPTION[NETWORKING_TYPE][30]['field']='num';
$SEARCH_OPTION[NETWORKING_TYPE][30]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][30]['name']=$LANG["financial"][4]." ".$LANG["financial"][1];
$SEARCH_OPTION[NETWORKING_TYPE][30]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][25]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][25]['field']='num_immo';
$SEARCH_OPTION[NETWORKING_TYPE][25]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][25]['name']=$LANG["financial"][20];
$SEARCH_OPTION[NETWORKING_TYPE][25]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][26]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][26]['field']='num_commande';
$SEARCH_OPTION[NETWORKING_TYPE][26]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][26]['name']=$LANG["financial"][18];
$SEARCH_OPTION[NETWORKING_TYPE][26]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][27]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][27]['field']='bon_livraison';
$SEARCH_OPTION[NETWORKING_TYPE][27]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][27]['name']=$LANG["financial"][19];
$SEARCH_OPTION[NETWORKING_TYPE][27]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][28]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][28]['field']='facture';
$SEARCH_OPTION[NETWORKING_TYPE][28]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][28]['name']=$LANG["financial"][82];
$SEARCH_OPTION[NETWORKING_TYPE][28]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][37]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][37]['field']='buy_date';
$SEARCH_OPTION[NETWORKING_TYPE][37]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][37]['name']=$LANG["financial"][14];
$SEARCH_OPTION[NETWORKING_TYPE][37]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][38]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][38]['field']='use_date';
$SEARCH_OPTION[NETWORKING_TYPE][38]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][38]['name']=$LANG["financial"][76];
$SEARCH_OPTION[NETWORKING_TYPE][38]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][50]['table']='glpi_dropdown_budget';
$SEARCH_OPTION[NETWORKING_TYPE][50]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][50]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][50]['name']=$LANG["financial"][87];
$SEARCH_OPTION[NETWORKING_TYPE][50]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][51]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][51]['field']='warranty_duration';
$SEARCH_OPTION[NETWORKING_TYPE][51]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][51]['name']=$LANG["financial"][15];
$SEARCH_OPTION[NETWORKING_TYPE][51]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][52]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][52]['field']='warranty_info';
$SEARCH_OPTION[NETWORKING_TYPE][52]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][52]['name']=$LANG["financial"][16];
$SEARCH_OPTION[NETWORKING_TYPE][52]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][120]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][120]['field']='end_warranty';
$SEARCH_OPTION[NETWORKING_TYPE][120]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][120]['name']=$LANG["financial"][80];
$SEARCH_OPTION[NETWORKING_TYPE][120]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][53]['table']='glpi_enterprises_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][53]['field']='name';
$SEARCH_OPTION[NETWORKING_TYPE][53]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][53]['name']=$LANG["financial"][26];
$SEARCH_OPTION[NETWORKING_TYPE][53]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][54]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][54]['field']='value';
$SEARCH_OPTION[NETWORKING_TYPE][54]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][54]['name']=$LANG["financial"][21];
$SEARCH_OPTION[NETWORKING_TYPE][54]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][55]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][55]['field']='warranty_value';
$SEARCH_OPTION[NETWORKING_TYPE][55]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][55]['name']=$LANG["financial"][78];
$SEARCH_OPTION[NETWORKING_TYPE][55]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][56]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][56]['field']='amort_time';
$SEARCH_OPTION[NETWORKING_TYPE][56]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][56]['name']=$LANG["financial"][23];
$SEARCH_OPTION[NETWORKING_TYPE][56]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][57]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][57]['field']='amort_type';
$SEARCH_OPTION[NETWORKING_TYPE][57]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][57]['name']=$LANG["financial"][22];
$SEARCH_OPTION[NETWORKING_TYPE][57]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][58]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][58]['field']='amort_coeff';
$SEARCH_OPTION[NETWORKING_TYPE][58]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][58]['name']=$LANG["financial"][77];
$SEARCH_OPTION[NETWORKING_TYPE][58]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][59]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][59]['field']='alert';
$SEARCH_OPTION[NETWORKING_TYPE][59]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][59]['name']=$LANG["common"][41];
$SEARCH_OPTION[NETWORKING_TYPE][59]['meta']=0;

$SEARCH_OPTION[NETWORKING_TYPE][122]['table']='glpi_infocoms';
$SEARCH_OPTION[NETWORKING_TYPE][122]['field']='comments';
$SEARCH_OPTION[NETWORKING_TYPE][122]['linkfield']='';
$SEARCH_OPTION[NETWORKING_TYPE][122]['name']=$LANG["common"][25]." - ".$LANG["financial"][3];
$SEARCH_OPTION[NETWORKING_TYPE][122]['meta']=0;


//////PRINTER_TYPE

$SEARCH_OPTION[PRINTER_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[PRINTER_TYPE][1]['table']='glpi_printers';
$SEARCH_OPTION[PRINTER_TYPE][1]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[PRINTER_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[PRINTER_TYPE][1]['meta']=1;

$SEARCH_OPTION[PRINTER_TYPE][2]['table']='glpi_printers';
$SEARCH_OPTION[PRINTER_TYPE][2]['field']='ID';
$SEARCH_OPTION[PRINTER_TYPE][2]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[PRINTER_TYPE][2]['meta']=1;

$SEARCH_OPTION[PRINTER_TYPE][3]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[PRINTER_TYPE][3]['field']='completename';
$SEARCH_OPTION[PRINTER_TYPE][3]['linkfield']='location';
$SEARCH_OPTION[PRINTER_TYPE][3]['name']=$LANG["common"][15];
$SEARCH_OPTION[PRINTER_TYPE][3]['meta']=2;

$SEARCH_OPTION[PRINTER_TYPE][4]['table']='glpi_type_printers';
$SEARCH_OPTION[PRINTER_TYPE][4]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][4]['linkfield']='type';
$SEARCH_OPTION[PRINTER_TYPE][4]['name']=$LANG["common"][17];
$SEARCH_OPTION[PRINTER_TYPE][4]['meta']=2;

$SEARCH_OPTION[PRINTER_TYPE][40]['table']='glpi_dropdown_model_printers';
$SEARCH_OPTION[PRINTER_TYPE][40]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][40]['linkfield']='model';
$SEARCH_OPTION[PRINTER_TYPE][40]['name']=$LANG["common"][22];
$SEARCH_OPTION[PRINTER_TYPE][40]['meta']=2;

$SEARCH_OPTION[PRINTER_TYPE][31]['table']='glpi_dropdown_state';
$SEARCH_OPTION[PRINTER_TYPE][31]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][31]['linkfield']='state';
$SEARCH_OPTION[PRINTER_TYPE][31]['name']=$LANG["state"][0];
$SEARCH_OPTION[PRINTER_TYPE][31]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][5]['table']='glpi_printers';
$SEARCH_OPTION[PRINTER_TYPE][5]['field']='serial';
$SEARCH_OPTION[PRINTER_TYPE][5]['linkfield']='serial';
$SEARCH_OPTION[PRINTER_TYPE][5]['name']=$LANG["common"][19];
$SEARCH_OPTION[PRINTER_TYPE][5]['meta']=1;

$SEARCH_OPTION[PRINTER_TYPE][6]['table']='glpi_printers';
$SEARCH_OPTION[PRINTER_TYPE][6]['field']='otherserial';
$SEARCH_OPTION[PRINTER_TYPE][6]['linkfield']='otherserial';
$SEARCH_OPTION[PRINTER_TYPE][6]['name']=$LANG["common"][20];
$SEARCH_OPTION[PRINTER_TYPE][6]['meta']=1;

$SEARCH_OPTION[PRINTER_TYPE][7]['table']='glpi_printers';
$SEARCH_OPTION[PRINTER_TYPE][7]['field']='contact';
$SEARCH_OPTION[PRINTER_TYPE][7]['linkfield']='contact';
$SEARCH_OPTION[PRINTER_TYPE][7]['name']=$LANG["common"][18];
$SEARCH_OPTION[PRINTER_TYPE][7]['meta']=1;

$SEARCH_OPTION[PRINTER_TYPE][8]['table']='glpi_printers';
$SEARCH_OPTION[PRINTER_TYPE][8]['field']='contact_num';
$SEARCH_OPTION[PRINTER_TYPE][8]['linkfield']='contact_num';
$SEARCH_OPTION[PRINTER_TYPE][8]['name']=$LANG["common"][21];
$SEARCH_OPTION[PRINTER_TYPE][8]['meta']=1;

$SEARCH_OPTION[PRINTER_TYPE][70]['table']='glpi_users';
$SEARCH_OPTION[PRINTER_TYPE][70]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][70]['linkfield']='FK_users';
$SEARCH_OPTION[PRINTER_TYPE][70]['name']=$LANG["common"][34];
$SEARCH_OPTION[PRINTER_TYPE][70]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[PRINTER_TYPE][71]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][71]['linkfield']='FK_groups';
$SEARCH_OPTION[PRINTER_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[PRINTER_TYPE][71]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][9]['table']='glpi_printers';
$SEARCH_OPTION[PRINTER_TYPE][9]['field']='date_mod';
$SEARCH_OPTION[PRINTER_TYPE][9]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][9]['name']=$LANG["common"][26];
$SEARCH_OPTION[PRINTER_TYPE][9]['meta']=1;

$SEARCH_OPTION[PRINTER_TYPE][10]['table']='glpi_printers';
$SEARCH_OPTION[PRINTER_TYPE][10]['field']='comments';
$SEARCH_OPTION[PRINTER_TYPE][10]['linkfield']='comments';
$SEARCH_OPTION[PRINTER_TYPE][10]['name']=$LANG["common"][25];
$SEARCH_OPTION[PRINTER_TYPE][10]['meta']=1;

$SEARCH_OPTION[PRINTER_TYPE][32]['table']='glpi_dropdown_network';
$SEARCH_OPTION[PRINTER_TYPE][32]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][32]['linkfield']='network';
$SEARCH_OPTION[PRINTER_TYPE][32]['name']=$LANG["setup"][88];
$SEARCH_OPTION[PRINTER_TYPE][32]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][33]['table']='glpi_dropdown_domain';
$SEARCH_OPTION[PRINTER_TYPE][33]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][33]['linkfield']='domain';
$SEARCH_OPTION[PRINTER_TYPE][33]['name']=$LANG["setup"][89];
$SEARCH_OPTION[PRINTER_TYPE][33]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][23]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[PRINTER_TYPE][23]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][23]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[PRINTER_TYPE][23]['name']=$LANG["common"][5];
$SEARCH_OPTION[PRINTER_TYPE][23]['meta']=2;

$SEARCH_OPTION[PRINTER_TYPE][24]['table']='glpi_users';
$SEARCH_OPTION[PRINTER_TYPE][24]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][24]['linkfield']='tech_num';
$SEARCH_OPTION[PRINTER_TYPE][24]['name']=$LANG["common"][10];
$SEARCH_OPTION[PRINTER_TYPE][24]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[PRINTER_TYPE][80]['field']='completename';
$SEARCH_OPTION[PRINTER_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[PRINTER_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[PRINTER_TYPE][80]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE]['network']=$LANG["setup"][88];

$SEARCH_OPTION[PRINTER_TYPE][20]['table']='glpi_networking_ports';
$SEARCH_OPTION[PRINTER_TYPE][20]['field']='ifaddr';
$SEARCH_OPTION[PRINTER_TYPE][20]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][20]['name']=$LANG["networking"][14];
$SEARCH_OPTION[PRINTER_TYPE][20]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][21]['table']='glpi_networking_ports';
$SEARCH_OPTION[PRINTER_TYPE][21]['field']='ifmac';
$SEARCH_OPTION[PRINTER_TYPE][21]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][21]['name']=$LANG["networking"][15];
$SEARCH_OPTION[PRINTER_TYPE][21]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][83]['table']='glpi_networking_ports';
$SEARCH_OPTION[PRINTER_TYPE][83]['field']='netmask';
$SEARCH_OPTION[PRINTER_TYPE][83]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][83]['name']=$LANG["networking"][60];
$SEARCH_OPTION[PRINTER_TYPE][83]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][84]['table']='glpi_networking_ports';
$SEARCH_OPTION[PRINTER_TYPE][84]['field']='subnet';
$SEARCH_OPTION[PRINTER_TYPE][84]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][84]['name']=$LANG["networking"][61];
$SEARCH_OPTION[PRINTER_TYPE][84]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][85]['table']='glpi_networking_ports';
$SEARCH_OPTION[PRINTER_TYPE][85]['field']='gateway';
$SEARCH_OPTION[PRINTER_TYPE][85]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][85]['name']=$LANG["networking"][59];
$SEARCH_OPTION[PRINTER_TYPE][85]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][22]['table']='glpi_dropdown_netpoint';
$SEARCH_OPTION[PRINTER_TYPE][22]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][22]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][22]['name']=$LANG["networking"][51];
$SEARCH_OPTION[PRINTER_TYPE][22]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE]['tracking']=$LANG["setup"][143];

$SEARCH_OPTION[PRINTER_TYPE][60]['table']='glpi_tracking';
$SEARCH_OPTION[PRINTER_TYPE][60]['field']='count';
$SEARCH_OPTION[PRINTER_TYPE][60]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][60]['name']=$LANG["stats"][13];
$SEARCH_OPTION[PRINTER_TYPE][60]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE]['financial']=$LANG["financial"][3];

$SEARCH_OPTION[PRINTER_TYPE][25]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][25]['field']='num_immo';
$SEARCH_OPTION[PRINTER_TYPE][25]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][25]['name']=$LANG["financial"][20];
$SEARCH_OPTION[PRINTER_TYPE][25]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][29]['table']='glpi_contracts';
$SEARCH_OPTION[PRINTER_TYPE][29]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][29]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][29]['name']=$LANG["common"][16]." ".$LANG["financial"][1];
$SEARCH_OPTION[PRINTER_TYPE][29]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][30]['table']='glpi_contracts';
$SEARCH_OPTION[PRINTER_TYPE][30]['field']='num';
$SEARCH_OPTION[PRINTER_TYPE][30]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][30]['name']=$LANG["financial"][4]." ".$LANG["financial"][1];
$SEARCH_OPTION[PRINTER_TYPE][30]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][26]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][26]['field']='num_commande';
$SEARCH_OPTION[PRINTER_TYPE][26]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][26]['name']=$LANG["financial"][18];
$SEARCH_OPTION[PRINTER_TYPE][26]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][27]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][27]['field']='bon_livraison';
$SEARCH_OPTION[PRINTER_TYPE][27]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][27]['name']=$LANG["financial"][19];
$SEARCH_OPTION[PRINTER_TYPE][27]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][28]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][28]['field']='facture';
$SEARCH_OPTION[PRINTER_TYPE][28]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][28]['name']=$LANG["financial"][82];
$SEARCH_OPTION[PRINTER_TYPE][28]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][37]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][37]['field']='buy_date';
$SEARCH_OPTION[PRINTER_TYPE][37]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][37]['name']=$LANG["financial"][14];
$SEARCH_OPTION[PRINTER_TYPE][37]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][38]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][38]['field']='use_date';
$SEARCH_OPTION[PRINTER_TYPE][38]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][38]['name']=$LANG["financial"][76];
$SEARCH_OPTION[PRINTER_TYPE][38]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][50]['table']='glpi_dropdown_budget';
$SEARCH_OPTION[PRINTER_TYPE][50]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][50]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][50]['name']=$LANG["financial"][87];
$SEARCH_OPTION[PRINTER_TYPE][50]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][51]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][51]['field']='warranty_duration';
$SEARCH_OPTION[PRINTER_TYPE][51]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][51]['name']=$LANG["financial"][15];
$SEARCH_OPTION[PRINTER_TYPE][51]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][52]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][52]['field']='warranty_info';
$SEARCH_OPTION[PRINTER_TYPE][52]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][52]['name']=$LANG["financial"][16];
$SEARCH_OPTION[PRINTER_TYPE][52]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][120]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][120]['field']='end_warranty';
$SEARCH_OPTION[PRINTER_TYPE][120]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][120]['name']=$LANG["financial"][80];
$SEARCH_OPTION[PRINTER_TYPE][120]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][53]['table']='glpi_enterprises_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][53]['field']='name';
$SEARCH_OPTION[PRINTER_TYPE][53]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][53]['name']=$LANG["financial"][26];
$SEARCH_OPTION[PRINTER_TYPE][53]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][54]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][54]['field']='value';
$SEARCH_OPTION[PRINTER_TYPE][54]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][54]['name']=$LANG["financial"][21];
$SEARCH_OPTION[PRINTER_TYPE][54]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][55]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][55]['field']='warranty_value';
$SEARCH_OPTION[PRINTER_TYPE][55]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][55]['name']=$LANG["financial"][78];
$SEARCH_OPTION[PRINTER_TYPE][55]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][56]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][56]['field']='amort_time';
$SEARCH_OPTION[PRINTER_TYPE][56]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][56]['name']=$LANG["financial"][23];
$SEARCH_OPTION[PRINTER_TYPE][56]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][57]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][57]['field']='amort_type';
$SEARCH_OPTION[PRINTER_TYPE][57]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][57]['name']=$LANG["financial"][22];
$SEARCH_OPTION[PRINTER_TYPE][57]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][58]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][58]['field']='amort_coeff';
$SEARCH_OPTION[PRINTER_TYPE][58]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][58]['name']=$LANG["financial"][77];
$SEARCH_OPTION[PRINTER_TYPE][58]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][59]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][59]['field']='alert';
$SEARCH_OPTION[PRINTER_TYPE][59]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][59]['name']=$LANG["common"][41];
$SEARCH_OPTION[PRINTER_TYPE][59]['meta']=0;

$SEARCH_OPTION[PRINTER_TYPE][122]['table']='glpi_infocoms';
$SEARCH_OPTION[PRINTER_TYPE][122]['field']='comments';
$SEARCH_OPTION[PRINTER_TYPE][122]['linkfield']='';
$SEARCH_OPTION[PRINTER_TYPE][122]['name']=$LANG["common"][25]." - ".$LANG["financial"][3];
$SEARCH_OPTION[PRINTER_TYPE][122]['meta']=0;

//////MONITOR_TYPE

$SEARCH_OPTION[MONITOR_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[MONITOR_TYPE][1]['table']='glpi_monitors';
$SEARCH_OPTION[MONITOR_TYPE][1]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[MONITOR_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[MONITOR_TYPE][1]['meta']=1;

$SEARCH_OPTION[MONITOR_TYPE][2]['table']='glpi_monitors';
$SEARCH_OPTION[MONITOR_TYPE][2]['field']='ID';
$SEARCH_OPTION[MONITOR_TYPE][2]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[MONITOR_TYPE][2]['meta']=1;

$SEARCH_OPTION[MONITOR_TYPE][3]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[MONITOR_TYPE][3]['field']='completename';
$SEARCH_OPTION[MONITOR_TYPE][3]['linkfield']='location';
$SEARCH_OPTION[MONITOR_TYPE][3]['name']=$LANG["common"][15];
$SEARCH_OPTION[MONITOR_TYPE][3]['meta']=2;

$SEARCH_OPTION[MONITOR_TYPE][4]['table']='glpi_type_monitors';
$SEARCH_OPTION[MONITOR_TYPE][4]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][4]['linkfield']='type';
$SEARCH_OPTION[MONITOR_TYPE][4]['name']=$LANG["common"][17];
$SEARCH_OPTION[MONITOR_TYPE][4]['meta']=2;

$SEARCH_OPTION[MONITOR_TYPE][40]['table']='glpi_dropdown_model_monitors';
$SEARCH_OPTION[MONITOR_TYPE][40]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][40]['linkfield']='model';
$SEARCH_OPTION[MONITOR_TYPE][40]['name']=$LANG["common"][22];
$SEARCH_OPTION[MONITOR_TYPE][40]['meta']=2;

$SEARCH_OPTION[MONITOR_TYPE][31]['table']='glpi_dropdown_state';
$SEARCH_OPTION[MONITOR_TYPE][31]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][31]['linkfield']='state';
$SEARCH_OPTION[MONITOR_TYPE][31]['name']=$LANG["state"][0];
$SEARCH_OPTION[MONITOR_TYPE][31]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][5]['table']='glpi_monitors';
$SEARCH_OPTION[MONITOR_TYPE][5]['field']='serial';
$SEARCH_OPTION[MONITOR_TYPE][5]['linkfield']='serial';
$SEARCH_OPTION[MONITOR_TYPE][5]['name']=$LANG["common"][19];
$SEARCH_OPTION[MONITOR_TYPE][5]['meta']=1;

$SEARCH_OPTION[MONITOR_TYPE][6]['table']='glpi_monitors';
$SEARCH_OPTION[MONITOR_TYPE][6]['field']='otherserial';
$SEARCH_OPTION[MONITOR_TYPE][6]['linkfield']='otherserial';
$SEARCH_OPTION[MONITOR_TYPE][6]['name']=$LANG["common"][20];
$SEARCH_OPTION[MONITOR_TYPE][6]['meta']=1;

$SEARCH_OPTION[MONITOR_TYPE][7]['table']='glpi_monitors';
$SEARCH_OPTION[MONITOR_TYPE][7]['field']='contact';
$SEARCH_OPTION[MONITOR_TYPE][7]['linkfield']='contact';
$SEARCH_OPTION[MONITOR_TYPE][7]['name']=$LANG["common"][18];
$SEARCH_OPTION[MONITOR_TYPE][7]['meta']=1;

$SEARCH_OPTION[MONITOR_TYPE][8]['table']='glpi_monitors';
$SEARCH_OPTION[MONITOR_TYPE][8]['field']='contact_num';
$SEARCH_OPTION[MONITOR_TYPE][8]['linkfield']='contact_num';
$SEARCH_OPTION[MONITOR_TYPE][8]['name']=$LANG["common"][21];
$SEARCH_OPTION[MONITOR_TYPE][8]['meta']=1;

$SEARCH_OPTION[MONITOR_TYPE][70]['table']='glpi_users';
$SEARCH_OPTION[MONITOR_TYPE][70]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][70]['linkfield']='FK_users';
$SEARCH_OPTION[MONITOR_TYPE][70]['name']=$LANG["common"][34];
$SEARCH_OPTION[MONITOR_TYPE][70]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[MONITOR_TYPE][71]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][71]['linkfield']='FK_groups';
$SEARCH_OPTION[MONITOR_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[MONITOR_TYPE][71]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][9]['table']='glpi_monitors';
$SEARCH_OPTION[MONITOR_TYPE][9]['field']='date_mod';
$SEARCH_OPTION[MONITOR_TYPE][9]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][9]['name']=$LANG["common"][26];
$SEARCH_OPTION[MONITOR_TYPE][9]['meta']=1;

$SEARCH_OPTION[MONITOR_TYPE][10]['table']='glpi_monitors';
$SEARCH_OPTION[MONITOR_TYPE][10]['field']='comments';
$SEARCH_OPTION[MONITOR_TYPE][10]['linkfield']='comments';
$SEARCH_OPTION[MONITOR_TYPE][10]['name']=$LANG["common"][25];
$SEARCH_OPTION[MONITOR_TYPE][10]['meta']=1;

$SEARCH_OPTION[MONITOR_TYPE][11]['table']='glpi_monitors';
$SEARCH_OPTION[MONITOR_TYPE][11]['field']='size';
$SEARCH_OPTION[MONITOR_TYPE][11]['linkfield']='size';
$SEARCH_OPTION[MONITOR_TYPE][11]['name']=$LANG["monitors"][21];
$SEARCH_OPTION[MONITOR_TYPE][11]['meta']=1;

$SEARCH_OPTION[MONITOR_TYPE][23]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[MONITOR_TYPE][23]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][23]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[MONITOR_TYPE][23]['name']=$LANG["common"][5];
$SEARCH_OPTION[MONITOR_TYPE][23]['meta']=2;

$SEARCH_OPTION[MONITOR_TYPE][24]['table']='glpi_users';
$SEARCH_OPTION[MONITOR_TYPE][24]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][24]['linkfield']='tech_num';
$SEARCH_OPTION[MONITOR_TYPE][24]['name']=$LANG["common"][10];
$SEARCH_OPTION[MONITOR_TYPE][24]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[MONITOR_TYPE][80]['field']='completename';
$SEARCH_OPTION[MONITOR_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[MONITOR_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[MONITOR_TYPE][80]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE]['tracking']=$LANG["setup"][143];

$SEARCH_OPTION[MONITOR_TYPE][60]['table']='glpi_tracking';
$SEARCH_OPTION[MONITOR_TYPE][60]['field']='count';
$SEARCH_OPTION[MONITOR_TYPE][60]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][60]['name']=$LANG["stats"][13];
$SEARCH_OPTION[MONITOR_TYPE][60]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE]['financial']=$LANG["financial"][3];

$SEARCH_OPTION[MONITOR_TYPE][29]['table']='glpi_contracts';
$SEARCH_OPTION[MONITOR_TYPE][29]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][29]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][29]['name']=$LANG["common"][16]." ".$LANG["financial"][1];
$SEARCH_OPTION[MONITOR_TYPE][29]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][30]['table']='glpi_contracts';
$SEARCH_OPTION[MONITOR_TYPE][30]['field']='num';
$SEARCH_OPTION[MONITOR_TYPE][30]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][30]['name']=$LANG["financial"][4]." ".$LANG["financial"][1];
$SEARCH_OPTION[MONITOR_TYPE][30]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][25]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][25]['field']='num_immo';
$SEARCH_OPTION[MONITOR_TYPE][25]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][25]['name']=$LANG["financial"][20];
$SEARCH_OPTION[MONITOR_TYPE][25]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][26]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][26]['field']='num_commande';
$SEARCH_OPTION[MONITOR_TYPE][26]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][26]['name']=$LANG["financial"][18];
$SEARCH_OPTION[MONITOR_TYPE][26]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][27]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][27]['field']='bon_livraison';
$SEARCH_OPTION[MONITOR_TYPE][27]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][27]['name']=$LANG["financial"][19];
$SEARCH_OPTION[MONITOR_TYPE][27]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][28]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][28]['field']='facture';
$SEARCH_OPTION[MONITOR_TYPE][28]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][28]['name']=$LANG["financial"][82];
$SEARCH_OPTION[MONITOR_TYPE][28]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][37]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][37]['field']='buy_date';
$SEARCH_OPTION[MONITOR_TYPE][37]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][37]['name']=$LANG["financial"][14];
$SEARCH_OPTION[MONITOR_TYPE][37]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][38]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][38]['field']='use_date';
$SEARCH_OPTION[MONITOR_TYPE][38]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][38]['name']=$LANG["financial"][76];
$SEARCH_OPTION[MONITOR_TYPE][38]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][50]['table']='glpi_dropdown_budget';
$SEARCH_OPTION[MONITOR_TYPE][50]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][50]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][50]['name']=$LANG["financial"][87];
$SEARCH_OPTION[MONITOR_TYPE][50]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][51]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][51]['field']='warranty_duration';
$SEARCH_OPTION[MONITOR_TYPE][51]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][51]['name']=$LANG["financial"][15];
$SEARCH_OPTION[MONITOR_TYPE][51]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][52]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][52]['field']='warranty_info';
$SEARCH_OPTION[MONITOR_TYPE][52]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][52]['name']=$LANG["financial"][16];
$SEARCH_OPTION[MONITOR_TYPE][52]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][120]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][120]['field']='end_warranty';
$SEARCH_OPTION[MONITOR_TYPE][120]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][120]['name']=$LANG["financial"][80];
$SEARCH_OPTION[MONITOR_TYPE][120]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][53]['table']='glpi_enterprises_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][53]['field']='name';
$SEARCH_OPTION[MONITOR_TYPE][53]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][53]['name']=$LANG["financial"][26];
$SEARCH_OPTION[MONITOR_TYPE][53]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][54]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][54]['field']='value';
$SEARCH_OPTION[MONITOR_TYPE][54]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][54]['name']=$LANG["financial"][21];
$SEARCH_OPTION[MONITOR_TYPE][54]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][55]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][55]['field']='warranty_value';
$SEARCH_OPTION[MONITOR_TYPE][55]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][55]['name']=$LANG["financial"][78];
$SEARCH_OPTION[MONITOR_TYPE][55]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][56]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][56]['field']='amort_time';
$SEARCH_OPTION[MONITOR_TYPE][56]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][56]['name']=$LANG["financial"][23];
$SEARCH_OPTION[MONITOR_TYPE][56]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][57]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][57]['field']='amort_type';
$SEARCH_OPTION[MONITOR_TYPE][57]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][57]['name']=$LANG["financial"][22];
$SEARCH_OPTION[MONITOR_TYPE][57]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][58]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][58]['field']='amort_coeff';
$SEARCH_OPTION[MONITOR_TYPE][58]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][58]['name']=$LANG["financial"][77];
$SEARCH_OPTION[MONITOR_TYPE][58]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][59]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][59]['field']='alert';
$SEARCH_OPTION[MONITOR_TYPE][59]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][59]['name']=$LANG["common"][41];
$SEARCH_OPTION[MONITOR_TYPE][59]['meta']=0;

$SEARCH_OPTION[MONITOR_TYPE][122]['table']='glpi_infocoms';
$SEARCH_OPTION[MONITOR_TYPE][122]['field']='comments';
$SEARCH_OPTION[MONITOR_TYPE][122]['linkfield']='';
$SEARCH_OPTION[MONITOR_TYPE][122]['name']=$LANG["common"][25]." - ".$LANG["financial"][3];
$SEARCH_OPTION[MONITOR_TYPE][122]['meta']=0;

//////PERIPHERAL_TYPE

$SEARCH_OPTION[PERIPHERAL_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[PERIPHERAL_TYPE][1]['table']='glpi_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][1]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[PERIPHERAL_TYPE][1]['meta']=1;

$SEARCH_OPTION[PERIPHERAL_TYPE][2]['table']='glpi_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][2]['field']='ID';
$SEARCH_OPTION[PERIPHERAL_TYPE][2]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[PERIPHERAL_TYPE][2]['meta']=1;

$SEARCH_OPTION[PERIPHERAL_TYPE][3]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[PERIPHERAL_TYPE][3]['field']='completename';
$SEARCH_OPTION[PERIPHERAL_TYPE][3]['linkfield']='location';
$SEARCH_OPTION[PERIPHERAL_TYPE][3]['name']=$LANG["common"][15];
$SEARCH_OPTION[PERIPHERAL_TYPE][3]['meta']=2;

$SEARCH_OPTION[PERIPHERAL_TYPE][4]['table']='glpi_type_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][4]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][4]['linkfield']='type';
$SEARCH_OPTION[PERIPHERAL_TYPE][4]['name']=$LANG["common"][17];
$SEARCH_OPTION[PERIPHERAL_TYPE][4]['meta']=2;

$SEARCH_OPTION[PERIPHERAL_TYPE][40]['table']='glpi_dropdown_model_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][40]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][40]['linkfield']='model';
$SEARCH_OPTION[PERIPHERAL_TYPE][40]['name']=$LANG["common"][22];
$SEARCH_OPTION[PERIPHERAL_TYPE][40]['meta']=2;

$SEARCH_OPTION[PERIPHERAL_TYPE][31]['table']='glpi_dropdown_state';
$SEARCH_OPTION[PERIPHERAL_TYPE][31]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][31]['linkfield']='state';
$SEARCH_OPTION[PERIPHERAL_TYPE][31]['name']=$LANG["state"][0];
$SEARCH_OPTION[PERIPHERAL_TYPE][31]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][5]['table']='glpi_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][5]['field']='serial';
$SEARCH_OPTION[PERIPHERAL_TYPE][5]['linkfield']='serial';
$SEARCH_OPTION[PERIPHERAL_TYPE][5]['name']=$LANG["common"][19];
$SEARCH_OPTION[PERIPHERAL_TYPE][5]['meta']=1;

$SEARCH_OPTION[PERIPHERAL_TYPE][6]['table']='glpi_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][6]['field']='otherserial';
$SEARCH_OPTION[PERIPHERAL_TYPE][6]['linkfield']='otherserial';
$SEARCH_OPTION[PERIPHERAL_TYPE][6]['name']=$LANG["common"][20];
$SEARCH_OPTION[PERIPHERAL_TYPE][6]['meta']=1;

$SEARCH_OPTION[PERIPHERAL_TYPE][7]['table']='glpi_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][7]['field']='contact';
$SEARCH_OPTION[PERIPHERAL_TYPE][7]['linkfield']='contact';
$SEARCH_OPTION[PERIPHERAL_TYPE][7]['name']=$LANG["common"][18];
$SEARCH_OPTION[PERIPHERAL_TYPE][7]['meta']=1;

$SEARCH_OPTION[PERIPHERAL_TYPE][8]['table']='glpi_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][8]['field']='contact_num';
$SEARCH_OPTION[PERIPHERAL_TYPE][8]['linkfield']='contact_num';
$SEARCH_OPTION[PERIPHERAL_TYPE][8]['name']=$LANG["common"][21];
$SEARCH_OPTION[PERIPHERAL_TYPE][8]['meta']=1;

$SEARCH_OPTION[PERIPHERAL_TYPE][70]['table']='glpi_users';
$SEARCH_OPTION[PERIPHERAL_TYPE][70]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][70]['linkfield']='FK_users';
$SEARCH_OPTION[PERIPHERAL_TYPE][70]['name']=$LANG["common"][34];
$SEARCH_OPTION[PERIPHERAL_TYPE][70]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[PERIPHERAL_TYPE][71]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][71]['linkfield']='FK_groups';
$SEARCH_OPTION[PERIPHERAL_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[PERIPHERAL_TYPE][71]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][9]['table']='glpi_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][9]['field']='date_mod';
$SEARCH_OPTION[PERIPHERAL_TYPE][9]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][9]['name']=$LANG["common"][26];
$SEARCH_OPTION[PERIPHERAL_TYPE][9]['meta']=1;

$SEARCH_OPTION[PERIPHERAL_TYPE][10]['table']='glpi_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][10]['field']='comments';
$SEARCH_OPTION[PERIPHERAL_TYPE][10]['linkfield']='comments';
$SEARCH_OPTION[PERIPHERAL_TYPE][10]['name']=$LANG["common"][25];
$SEARCH_OPTION[PERIPHERAL_TYPE][10]['meta']=1;

$SEARCH_OPTION[PERIPHERAL_TYPE][11]['table']='glpi_peripherals';
$SEARCH_OPTION[PERIPHERAL_TYPE][11]['field']='brand';
$SEARCH_OPTION[PERIPHERAL_TYPE][11]['linkfield']='brand';
$SEARCH_OPTION[PERIPHERAL_TYPE][11]['name']=$LANG["peripherals"][18];
$SEARCH_OPTION[PERIPHERAL_TYPE][11]['meta']=1;

$SEARCH_OPTION[PERIPHERAL_TYPE][23]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[PERIPHERAL_TYPE][23]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][23]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[PERIPHERAL_TYPE][23]['name']=$LANG["common"][5];
$SEARCH_OPTION[PERIPHERAL_TYPE][23]['meta']=2;

$SEARCH_OPTION[PERIPHERAL_TYPE][24]['table']='glpi_users';
$SEARCH_OPTION[PERIPHERAL_TYPE][24]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][24]['linkfield']='tech_num';
$SEARCH_OPTION[PERIPHERAL_TYPE][24]['name']=$LANG["common"][10];
$SEARCH_OPTION[PERIPHERAL_TYPE][24]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[PERIPHERAL_TYPE][80]['field']='completename';
$SEARCH_OPTION[PERIPHERAL_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[PERIPHERAL_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[PERIPHERAL_TYPE][80]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE]['network']=$LANG["setup"][88];

$SEARCH_OPTION[PERIPHERAL_TYPE][20]['table']='glpi_networking_ports';
$SEARCH_OPTION[PERIPHERAL_TYPE][20]['field']='ifaddr';
$SEARCH_OPTION[PERIPHERAL_TYPE][20]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][20]['name']=$LANG["networking"][14];
$SEARCH_OPTION[PERIPHERAL_TYPE][20]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][21]['table']='glpi_networking_ports';
$SEARCH_OPTION[PERIPHERAL_TYPE][21]['field']='ifmac';
$SEARCH_OPTION[PERIPHERAL_TYPE][21]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][21]['name']=$LANG["networking"][15];
$SEARCH_OPTION[PERIPHERAL_TYPE][21]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][83]['table']='glpi_networking_ports';
$SEARCH_OPTION[PERIPHERAL_TYPE][83]['field']='netmask';
$SEARCH_OPTION[PERIPHERAL_TYPE][83]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][83]['name']=$LANG["networking"][60];
$SEARCH_OPTION[PERIPHERAL_TYPE][83]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][84]['table']='glpi_networking_ports';
$SEARCH_OPTION[PERIPHERAL_TYPE][84]['field']='subnet';
$SEARCH_OPTION[PERIPHERAL_TYPE][84]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][84]['name']=$LANG["networking"][61];
$SEARCH_OPTION[PERIPHERAL_TYPE][84]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][85]['table']='glpi_networking_ports';
$SEARCH_OPTION[PERIPHERAL_TYPE][85]['field']='gateway';
$SEARCH_OPTION[PERIPHERAL_TYPE][85]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][85]['name']=$LANG["networking"][59];
$SEARCH_OPTION[PERIPHERAL_TYPE][85]['meta']=0;


$SEARCH_OPTION[PERIPHERAL_TYPE][22]['table']='glpi_dropdown_netpoint';
$SEARCH_OPTION[PERIPHERAL_TYPE][22]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][22]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][22]['name']=$LANG["networking"][51];
$SEARCH_OPTION[PERIPHERAL_TYPE][22]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE]['tracking']=$LANG["setup"][143];

$SEARCH_OPTION[PERIPHERAL_TYPE][60]['table']='glpi_tracking';
$SEARCH_OPTION[PERIPHERAL_TYPE][60]['field']='count';
$SEARCH_OPTION[PERIPHERAL_TYPE][60]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][60]['name']=$LANG["stats"][13];
$SEARCH_OPTION[PERIPHERAL_TYPE][60]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE]['financial']=$LANG["financial"][3];

$SEARCH_OPTION[PERIPHERAL_TYPE][29]['table']='glpi_contracts';
$SEARCH_OPTION[PERIPHERAL_TYPE][29]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][29]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][29]['name']=$LANG["common"][16]." ".$LANG["financial"][1];
$SEARCH_OPTION[PERIPHERAL_TYPE][29]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][30]['table']='glpi_contracts';
$SEARCH_OPTION[PERIPHERAL_TYPE][30]['field']='num';
$SEARCH_OPTION[PERIPHERAL_TYPE][30]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][30]['name']=$LANG["financial"][4]." ".$LANG["financial"][1];
$SEARCH_OPTION[PERIPHERAL_TYPE][30]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][25]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][25]['field']='num_immo';
$SEARCH_OPTION[PERIPHERAL_TYPE][25]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][25]['name']=$LANG["financial"][20];
$SEARCH_OPTION[PERIPHERAL_TYPE][25]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][26]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][26]['field']='num_commande';
$SEARCH_OPTION[PERIPHERAL_TYPE][26]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][26]['name']=$LANG["financial"][18];
$SEARCH_OPTION[PERIPHERAL_TYPE][26]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][27]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][27]['field']='bon_livraison';
$SEARCH_OPTION[PERIPHERAL_TYPE][27]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][27]['name']=$LANG["financial"][19];
$SEARCH_OPTION[PERIPHERAL_TYPE][27]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][28]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][28]['field']='facture';
$SEARCH_OPTION[PERIPHERAL_TYPE][28]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][28]['name']=$LANG["financial"][82];
$SEARCH_OPTION[PERIPHERAL_TYPE][28]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][37]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][37]['field']='buy_date';
$SEARCH_OPTION[PERIPHERAL_TYPE][37]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][37]['name']=$LANG["financial"][14];
$SEARCH_OPTION[PERIPHERAL_TYPE][37]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][38]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][38]['field']='use_date';
$SEARCH_OPTION[PERIPHERAL_TYPE][38]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][38]['name']=$LANG["financial"][76];
$SEARCH_OPTION[PERIPHERAL_TYPE][38]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][50]['table']='glpi_dropdown_budget';
$SEARCH_OPTION[PERIPHERAL_TYPE][50]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][50]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][50]['name']=$LANG["financial"][87];
$SEARCH_OPTION[PERIPHERAL_TYPE][50]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][51]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][51]['field']='warranty_duration';
$SEARCH_OPTION[PERIPHERAL_TYPE][51]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][51]['name']=$LANG["financial"][15];
$SEARCH_OPTION[PERIPHERAL_TYPE][51]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][52]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][52]['field']='warranty_info';
$SEARCH_OPTION[PERIPHERAL_TYPE][52]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][52]['name']=$LANG["financial"][16];
$SEARCH_OPTION[PERIPHERAL_TYPE][52]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][120]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][120]['field']='end_warranty';
$SEARCH_OPTION[PERIPHERAL_TYPE][120]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][120]['name']=$LANG["financial"][80];
$SEARCH_OPTION[PERIPHERAL_TYPE][120]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][53]['table']='glpi_enterprises_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][53]['field']='name';
$SEARCH_OPTION[PERIPHERAL_TYPE][53]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][53]['name']=$LANG["financial"][26];
$SEARCH_OPTION[PERIPHERAL_TYPE][53]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][54]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][54]['field']='value';
$SEARCH_OPTION[PERIPHERAL_TYPE][54]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][54]['name']=$LANG["financial"][21];
$SEARCH_OPTION[PERIPHERAL_TYPE][54]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][55]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][55]['field']='warranty_value';
$SEARCH_OPTION[PERIPHERAL_TYPE][55]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][55]['name']=$LANG["financial"][78];
$SEARCH_OPTION[PERIPHERAL_TYPE][55]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][56]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][56]['field']='amort_time';
$SEARCH_OPTION[PERIPHERAL_TYPE][56]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][56]['name']=$LANG["financial"][23];
$SEARCH_OPTION[PERIPHERAL_TYPE][56]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][57]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][57]['field']='amort_type';
$SEARCH_OPTION[PERIPHERAL_TYPE][57]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][57]['name']=$LANG["financial"][22];
$SEARCH_OPTION[PERIPHERAL_TYPE][57]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][58]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][58]['field']='amort_coeff';
$SEARCH_OPTION[PERIPHERAL_TYPE][58]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][58]['name']=$LANG["financial"][77];
$SEARCH_OPTION[PERIPHERAL_TYPE][58]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][59]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][59]['field']='alert';
$SEARCH_OPTION[PERIPHERAL_TYPE][59]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][59]['name']=$LANG["common"][41];
$SEARCH_OPTION[PERIPHERAL_TYPE][59]['meta']=0;

$SEARCH_OPTION[PERIPHERAL_TYPE][122]['table']='glpi_infocoms';
$SEARCH_OPTION[PERIPHERAL_TYPE][122]['field']='comments';
$SEARCH_OPTION[PERIPHERAL_TYPE][122]['linkfield']='';
$SEARCH_OPTION[PERIPHERAL_TYPE][122]['name']=$LANG["common"][25]." - ".$LANG["financial"][3];
$SEARCH_OPTION[PERIPHERAL_TYPE][122]['meta']=0;

//////SOFTWARE_TYPE

$SEARCH_OPTION[SOFTWARE_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[SOFTWARE_TYPE][1]['table']='glpi_software';
$SEARCH_OPTION[SOFTWARE_TYPE][1]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[SOFTWARE_TYPE][1]['meta']=1;

$SEARCH_OPTION[SOFTWARE_TYPE][2]['table']='glpi_software';
$SEARCH_OPTION[SOFTWARE_TYPE][2]['field']='ID';
$SEARCH_OPTION[SOFTWARE_TYPE][2]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[SOFTWARE_TYPE][2]['meta']=1;

$SEARCH_OPTION[SOFTWARE_TYPE][3]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[SOFTWARE_TYPE][3]['field']='completename';
$SEARCH_OPTION[SOFTWARE_TYPE][3]['linkfield']='location';
$SEARCH_OPTION[SOFTWARE_TYPE][3]['name']=$LANG["common"][15];
$SEARCH_OPTION[SOFTWARE_TYPE][3]['meta']=2;

$SEARCH_OPTION[SOFTWARE_TYPE][31]['table']='glpi_dropdown_state';
$SEARCH_OPTION[SOFTWARE_TYPE][31]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][31]['linkfield']='state';
$SEARCH_OPTION[SOFTWARE_TYPE][31]['name']=$LANG["state"][0];
$SEARCH_OPTION[SOFTWARE_TYPE][31]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][4]['table']='glpi_dropdown_os';
$SEARCH_OPTION[SOFTWARE_TYPE][4]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][4]['linkfield']='platform';
$SEARCH_OPTION[SOFTWARE_TYPE][4]['name']=$LANG["software"][3];
$SEARCH_OPTION[SOFTWARE_TYPE][4]['meta']=2;

$SEARCH_OPTION[SOFTWARE_TYPE][5]['table']='glpi_licenses';
$SEARCH_OPTION[SOFTWARE_TYPE][5]['field']='version';
$SEARCH_OPTION[SOFTWARE_TYPE][5]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][5]['name']=$LANG["software"][5];
$SEARCH_OPTION[SOFTWARE_TYPE][5]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][6]['table']='glpi_software';
$SEARCH_OPTION[SOFTWARE_TYPE][6]['field']='comments';
$SEARCH_OPTION[SOFTWARE_TYPE][6]['linkfield']='comments';
$SEARCH_OPTION[SOFTWARE_TYPE][6]['name']=$LANG["common"][25];
$SEARCH_OPTION[SOFTWARE_TYPE][6]['meta']=1;

$SEARCH_OPTION[SOFTWARE_TYPE][7]['table']='glpi_licenses';
$SEARCH_OPTION[SOFTWARE_TYPE][7]['field']='serial';
$SEARCH_OPTION[SOFTWARE_TYPE][7]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][7]['name']=$LANG["software"][11];
$SEARCH_OPTION[SOFTWARE_TYPE][7]['meta']=1;


$SEARCH_OPTION[SOFTWARE_TYPE][62]['table']='glpi_dropdown_software_category';
$SEARCH_OPTION[SOFTWARE_TYPE][62]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][62]['linkfield']='category';
$SEARCH_OPTION[SOFTWARE_TYPE][62]['name']=$LANG["common"][36];
$SEARCH_OPTION[SOFTWARE_TYPE][62]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][9]['table']='glpi_software';
$SEARCH_OPTION[SOFTWARE_TYPE][9]['field']='date_mod';
$SEARCH_OPTION[SOFTWARE_TYPE][9]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][9]['name']=$LANG["common"][26];
$SEARCH_OPTION[SOFTWARE_TYPE][9]['meta']=1;

$SEARCH_OPTION[SOFTWARE_TYPE][23]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[SOFTWARE_TYPE][23]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][23]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[SOFTWARE_TYPE][23]['name']=$LANG["common"][5];
$SEARCH_OPTION[SOFTWARE_TYPE][23]['meta']=2;

$SEARCH_OPTION[SOFTWARE_TYPE][24]['table']='glpi_users';
$SEARCH_OPTION[SOFTWARE_TYPE][24]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][24]['linkfield']='tech_num';
$SEARCH_OPTION[SOFTWARE_TYPE][24]['name']=$LANG["common"][10];
$SEARCH_OPTION[SOFTWARE_TYPE][24]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][70]['table']='glpi_users';
$SEARCH_OPTION[SOFTWARE_TYPE][70]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][70]['linkfield']='FK_users';
$SEARCH_OPTION[SOFTWARE_TYPE][70]['name']=$LANG["common"][34];
$SEARCH_OPTION[SOFTWARE_TYPE][70]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[SOFTWARE_TYPE][71]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][71]['linkfield']='FK_groups';
$SEARCH_OPTION[SOFTWARE_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[SOFTWARE_TYPE][71]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][61]['table']='glpi_software';
$SEARCH_OPTION[SOFTWARE_TYPE][61]['field']='helpdesk_visible';
$SEARCH_OPTION[SOFTWARE_TYPE][61]['linkfield']='helpdesk_visible';
$SEARCH_OPTION[SOFTWARE_TYPE][61]['name']=$LANG["software"][46];
$SEARCH_OPTION[SOFTWARE_TYPE][61]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[SOFTWARE_TYPE][80]['field']='completename';
$SEARCH_OPTION[SOFTWARE_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[SOFTWARE_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[SOFTWARE_TYPE][80]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE]['tracking']=$LANG["setup"][143];

$SEARCH_OPTION[SOFTWARE_TYPE][60]['table']='glpi_tracking';
$SEARCH_OPTION[SOFTWARE_TYPE][60]['field']='count';
$SEARCH_OPTION[SOFTWARE_TYPE][60]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][60]['name']=$LANG["stats"][13];
$SEARCH_OPTION[SOFTWARE_TYPE][60]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE]['financial']=$LANG["financial"][3];

$SEARCH_OPTION[SOFTWARE_TYPE][29]['table']='glpi_contracts';
$SEARCH_OPTION[SOFTWARE_TYPE][29]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][29]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][29]['name']=$LANG["common"][16]." ".$LANG["financial"][1];
$SEARCH_OPTION[SOFTWARE_TYPE][29]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][30]['table']='glpi_contracts';
$SEARCH_OPTION[SOFTWARE_TYPE][30]['field']='num';
$SEARCH_OPTION[SOFTWARE_TYPE][30]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][30]['name']=$LANG["financial"][4]." ".$LANG["financial"][1];
$SEARCH_OPTION[SOFTWARE_TYPE][30]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][25]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][25]['field']='num_immo';
$SEARCH_OPTION[SOFTWARE_TYPE][25]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][25]['name']=$LANG["financial"][20];
$SEARCH_OPTION[SOFTWARE_TYPE][25]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][26]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][26]['field']='num_commande';
$SEARCH_OPTION[SOFTWARE_TYPE][26]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][26]['name']=$LANG["financial"][18];
$SEARCH_OPTION[SOFTWARE_TYPE][26]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][27]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][27]['field']='bon_livraison';
$SEARCH_OPTION[SOFTWARE_TYPE][27]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][27]['name']=$LANG["financial"][19];
$SEARCH_OPTION[SOFTWARE_TYPE][27]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][28]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][28]['field']='facture';
$SEARCH_OPTION[SOFTWARE_TYPE][28]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][28]['name']=$LANG["financial"][82];
$SEARCH_OPTION[SOFTWARE_TYPE][28]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][37]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][37]['field']='buy_date';
$SEARCH_OPTION[SOFTWARE_TYPE][37]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][37]['name']=$LANG["financial"][14];
$SEARCH_OPTION[SOFTWARE_TYPE][37]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][38]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][38]['field']='use_date';
$SEARCH_OPTION[SOFTWARE_TYPE][38]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][38]['name']=$LANG["financial"][76];
$SEARCH_OPTION[SOFTWARE_TYPE][38]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][50]['table']='glpi_dropdown_budget';
$SEARCH_OPTION[SOFTWARE_TYPE][50]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][50]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][50]['name']=$LANG["financial"][87];
$SEARCH_OPTION[SOFTWARE_TYPE][50]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][51]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][51]['field']='warranty_duration';
$SEARCH_OPTION[SOFTWARE_TYPE][51]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][51]['name']=$LANG["financial"][15];
$SEARCH_OPTION[SOFTWARE_TYPE][51]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][52]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][52]['field']='warranty_info';
$SEARCH_OPTION[SOFTWARE_TYPE][52]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][52]['name']=$LANG["financial"][16];
$SEARCH_OPTION[SOFTWARE_TYPE][52]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][120]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][120]['field']='end_warranty';
$SEARCH_OPTION[SOFTWARE_TYPE][120]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][120]['name']=$LANG["financial"][80];
$SEARCH_OPTION[SOFTWARE_TYPE][120]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][53]['table']='glpi_enterprises_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][53]['field']='name';
$SEARCH_OPTION[SOFTWARE_TYPE][53]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][53]['name']=$LANG["financial"][26];
$SEARCH_OPTION[SOFTWARE_TYPE][53]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][54]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][54]['field']='value';
$SEARCH_OPTION[SOFTWARE_TYPE][54]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][54]['name']=$LANG["financial"][21];
$SEARCH_OPTION[SOFTWARE_TYPE][54]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][55]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][55]['field']='warranty_value';
$SEARCH_OPTION[SOFTWARE_TYPE][55]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][55]['name']=$LANG["financial"][78];
$SEARCH_OPTION[SOFTWARE_TYPE][55]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][56]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][56]['field']='amort_time';
$SEARCH_OPTION[SOFTWARE_TYPE][56]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][56]['name']=$LANG["financial"][23];
$SEARCH_OPTION[SOFTWARE_TYPE][56]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][57]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][57]['field']='amort_type';
$SEARCH_OPTION[SOFTWARE_TYPE][57]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][57]['name']=$LANG["financial"][22];
$SEARCH_OPTION[SOFTWARE_TYPE][57]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][58]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][58]['field']='amort_coeff';
$SEARCH_OPTION[SOFTWARE_TYPE][58]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][58]['name']=$LANG["financial"][77];
$SEARCH_OPTION[SOFTWARE_TYPE][58]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][59]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][59]['field']='alert';
$SEARCH_OPTION[SOFTWARE_TYPE][59]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][59]['name']=$LANG["common"][41];
$SEARCH_OPTION[SOFTWARE_TYPE][59]['meta']=0;

$SEARCH_OPTION[SOFTWARE_TYPE][122]['table']='glpi_infocoms';
$SEARCH_OPTION[SOFTWARE_TYPE][122]['field']='comments';
$SEARCH_OPTION[SOFTWARE_TYPE][122]['linkfield']='';
$SEARCH_OPTION[SOFTWARE_TYPE][122]['name']=$LANG["common"][25]." - ".$LANG["financial"][3];
$SEARCH_OPTION[SOFTWARE_TYPE][122]['meta']=0;

//////CONTACT_TYPE

$SEARCH_OPTION[CONTACT_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[CONTACT_TYPE][1]['table']='glpi_contacts';
$SEARCH_OPTION[CONTACT_TYPE][1]['field']='name';
$SEARCH_OPTION[CONTACT_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[CONTACT_TYPE][1]['name']=$LANG["common"][48];
$SEARCH_OPTION[CONTACT_TYPE][1]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][11]['table']='glpi_contacts';
$SEARCH_OPTION[CONTACT_TYPE][11]['field']='firstname';
$SEARCH_OPTION[CONTACT_TYPE][11]['linkfield']='firstname';
$SEARCH_OPTION[CONTACT_TYPE][11]['name']=$LANG["common"][43];
$SEARCH_OPTION[CONTACT_TYPE][11]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][2]['table']='glpi_contacts';
$SEARCH_OPTION[CONTACT_TYPE][2]['field']='ID';
$SEARCH_OPTION[CONTACT_TYPE][2]['linkfield']='';
$SEARCH_OPTION[CONTACT_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[CONTACT_TYPE][2]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][3]['table']='glpi_contacts';
$SEARCH_OPTION[CONTACT_TYPE][3]['field']='phone';
$SEARCH_OPTION[CONTACT_TYPE][3]['linkfield']='phone';
$SEARCH_OPTION[CONTACT_TYPE][3]['name']=$LANG["financial"][29];
$SEARCH_OPTION[CONTACT_TYPE][3]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][4]['table']='glpi_contacts';
$SEARCH_OPTION[CONTACT_TYPE][4]['field']='phone2';
$SEARCH_OPTION[CONTACT_TYPE][4]['linkfield']='phone2';
$SEARCH_OPTION[CONTACT_TYPE][4]['name']=$LANG["financial"][29]." 2";
$SEARCH_OPTION[CONTACT_TYPE][4]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][10]['table']='glpi_contacts';
$SEARCH_OPTION[CONTACT_TYPE][10]['field']='mobile';
$SEARCH_OPTION[CONTACT_TYPE][10]['linkfield']='mobile';
$SEARCH_OPTION[CONTACT_TYPE][10]['name']=$LANG["common"][42];
$SEARCH_OPTION[CONTACT_TYPE][10]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][5]['table']='glpi_contacts';
$SEARCH_OPTION[CONTACT_TYPE][5]['field']='fax';
$SEARCH_OPTION[CONTACT_TYPE][5]['linkfield']='fax';
$SEARCH_OPTION[CONTACT_TYPE][5]['name']=$LANG["financial"][30];
$SEARCH_OPTION[CONTACT_TYPE][5]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][6]['table']='glpi_contacts';
$SEARCH_OPTION[CONTACT_TYPE][6]['field']='email';
$SEARCH_OPTION[CONTACT_TYPE][6]['linkfield']='email';
$SEARCH_OPTION[CONTACT_TYPE][6]['name']=$LANG["setup"][14];
$SEARCH_OPTION[CONTACT_TYPE][6]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][9]['table']='glpi_dropdown_contact_type';
$SEARCH_OPTION[CONTACT_TYPE][9]['field']='name';
$SEARCH_OPTION[CONTACT_TYPE][9]['linkfield']='type';
$SEARCH_OPTION[CONTACT_TYPE][9]['name']=$LANG["common"][17];
$SEARCH_OPTION[CONTACT_TYPE][9]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][8]['table']='glpi_enterprises';
$SEARCH_OPTION[CONTACT_TYPE][8]['field']='name';
$SEARCH_OPTION[CONTACT_TYPE][8]['linkfield']='';
$SEARCH_OPTION[CONTACT_TYPE][8]['name']=$LANG["financial"][65];
$SEARCH_OPTION[CONTACT_TYPE][8]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][7]['table']='glpi_contacts';
$SEARCH_OPTION[CONTACT_TYPE][7]['field']='comments';
$SEARCH_OPTION[CONTACT_TYPE][7]['linkfield']='comments';
$SEARCH_OPTION[CONTACT_TYPE][7]['name']=$LANG["common"][25];
$SEARCH_OPTION[CONTACT_TYPE][7]['meta']=0;

$SEARCH_OPTION[CONTACT_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[CONTACT_TYPE][80]['field']='completename';
$SEARCH_OPTION[CONTACT_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[CONTACT_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[CONTACT_TYPE][80]['meta']=0;

//////ENTERPRISE_TYPE

$SEARCH_OPTION[ENTERPRISE_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[ENTERPRISE_TYPE][1]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][1]['field']='name';
$SEARCH_OPTION[ENTERPRISE_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[ENTERPRISE_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[ENTERPRISE_TYPE][1]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][2]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][2]['field']='ID';
$SEARCH_OPTION[ENTERPRISE_TYPE][2]['linkfield']='';
$SEARCH_OPTION[ENTERPRISE_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[ENTERPRISE_TYPE][2]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][3]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][3]['field']='address';
$SEARCH_OPTION[ENTERPRISE_TYPE][3]['linkfield']='address';
$SEARCH_OPTION[ENTERPRISE_TYPE][3]['name']=$LANG["financial"][44];
$SEARCH_OPTION[ENTERPRISE_TYPE][3]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][10]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][10]['field']='fax';
$SEARCH_OPTION[ENTERPRISE_TYPE][10]['linkfield']='fax';
$SEARCH_OPTION[ENTERPRISE_TYPE][10]['name']=$LANG["financial"][30];
$SEARCH_OPTION[ENTERPRISE_TYPE][10]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][11]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][11]['field']='town';
$SEARCH_OPTION[ENTERPRISE_TYPE][11]['linkfield']='town';
$SEARCH_OPTION[ENTERPRISE_TYPE][11]['name']=$LANG["financial"][101];
$SEARCH_OPTION[ENTERPRISE_TYPE][11]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][12]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][12]['field']='state';
$SEARCH_OPTION[ENTERPRISE_TYPE][12]['linkfield']='state';
$SEARCH_OPTION[ENTERPRISE_TYPE][12]['name']=$LANG["financial"][102];
$SEARCH_OPTION[ENTERPRISE_TYPE][12]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][13]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][13]['field']='country';
$SEARCH_OPTION[ENTERPRISE_TYPE][13]['linkfield']='country';
$SEARCH_OPTION[ENTERPRISE_TYPE][13]['name']=$LANG["financial"][103];
$SEARCH_OPTION[ENTERPRISE_TYPE][13]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][4]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][4]['field']='website';
$SEARCH_OPTION[ENTERPRISE_TYPE][4]['linkfield']='website';
$SEARCH_OPTION[ENTERPRISE_TYPE][4]['name']=$LANG["financial"][45];
$SEARCH_OPTION[ENTERPRISE_TYPE][4]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][5]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][5]['field']='phonenumber';
$SEARCH_OPTION[ENTERPRISE_TYPE][5]['linkfield']='phonenumber';
$SEARCH_OPTION[ENTERPRISE_TYPE][5]['name']=$LANG["financial"][29];
$SEARCH_OPTION[ENTERPRISE_TYPE][5]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][6]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][6]['field']='email';
$SEARCH_OPTION[ENTERPRISE_TYPE][6]['linkfield']='email';
$SEARCH_OPTION[ENTERPRISE_TYPE][6]['name']=$LANG["setup"][14];
$SEARCH_OPTION[ENTERPRISE_TYPE][6]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][9]['table']='glpi_dropdown_enttype';
$SEARCH_OPTION[ENTERPRISE_TYPE][9]['field']='name';
$SEARCH_OPTION[ENTERPRISE_TYPE][9]['linkfield']='type';
$SEARCH_OPTION[ENTERPRISE_TYPE][9]['name']=$LANG["financial"][79];
$SEARCH_OPTION[ENTERPRISE_TYPE][9]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][8]['table']='glpi_contacts';
$SEARCH_OPTION[ENTERPRISE_TYPE][8]['field']='completename';
$SEARCH_OPTION[ENTERPRISE_TYPE][8]['linkfield']='';
$SEARCH_OPTION[ENTERPRISE_TYPE][8]['name']=$LANG["financial"][46];
$SEARCH_OPTION[ENTERPRISE_TYPE][8]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][7]['table']='glpi_enterprises';
$SEARCH_OPTION[ENTERPRISE_TYPE][7]['field']='comments';
$SEARCH_OPTION[ENTERPRISE_TYPE][7]['linkfield']='comments';
$SEARCH_OPTION[ENTERPRISE_TYPE][7]['name']=$LANG["common"][25];
$SEARCH_OPTION[ENTERPRISE_TYPE][7]['meta']=0;

$SEARCH_OPTION[ENTERPRISE_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[ENTERPRISE_TYPE][80]['field']='completename';
$SEARCH_OPTION[ENTERPRISE_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[ENTERPRISE_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[ENTERPRISE_TYPE][80]['meta']=0;

//////CONTRACT_TYPE

$SEARCH_OPTION[CONTRACT_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[CONTRACT_TYPE][1]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][1]['field']='name';
$SEARCH_OPTION[CONTRACT_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[CONTRACT_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[CONTRACT_TYPE][1]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][2]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][2]['field']='ID';
$SEARCH_OPTION[CONTRACT_TYPE][2]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[CONTRACT_TYPE][2]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][3]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][3]['field']='num';
$SEARCH_OPTION[CONTRACT_TYPE][3]['linkfield']='num';
$SEARCH_OPTION[CONTRACT_TYPE][3]['name']=$LANG["financial"][4];
$SEARCH_OPTION[CONTRACT_TYPE][3]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][4]['table']='glpi_dropdown_contract_type';
$SEARCH_OPTION[CONTRACT_TYPE][4]['field']='name';
$SEARCH_OPTION[CONTRACT_TYPE][4]['linkfield']='contract_type';
$SEARCH_OPTION[CONTRACT_TYPE][4]['name']=$LANG["common"][17];
$SEARCH_OPTION[CONTRACT_TYPE][4]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][5]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][5]['field']='begin_date';
$SEARCH_OPTION[CONTRACT_TYPE][5]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][5]['name']=$LANG["search"][8];
$SEARCH_OPTION[CONTRACT_TYPE][5]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][6]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][6]['field']='duration';
$SEARCH_OPTION[CONTRACT_TYPE][6]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][6]['name']=$LANG["financial"][8];
$SEARCH_OPTION[CONTRACT_TYPE][6]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][20]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][20]['field']='end_date';
$SEARCH_OPTION[CONTRACT_TYPE][20]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][20]['name']=$LANG["search"][9];
$SEARCH_OPTION[CONTRACT_TYPE][20]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][7]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][7]['field']='notice';
$SEARCH_OPTION[CONTRACT_TYPE][7]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][7]['name']=$LANG["financial"][10];
$SEARCH_OPTION[CONTRACT_TYPE][7]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][11]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][11]['field']='cost';
$SEARCH_OPTION[CONTRACT_TYPE][11]['linkfield']='cost';
$SEARCH_OPTION[CONTRACT_TYPE][11]['name']=$LANG["financial"][5];
$SEARCH_OPTION[CONTRACT_TYPE][11]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][21]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][21]['field']='periodicity';
$SEARCH_OPTION[CONTRACT_TYPE][21]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][21]['name']=$LANG["financial"][69];
$SEARCH_OPTION[CONTRACT_TYPE][21]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][22]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][22]['field']='facturation';
$SEARCH_OPTION[CONTRACT_TYPE][22]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][22]['name']=$LANG["financial"][11];
$SEARCH_OPTION[CONTRACT_TYPE][22]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][10]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][10]['field']='compta_num';
$SEARCH_OPTION[CONTRACT_TYPE][10]['linkfield']='compta_num';
$SEARCH_OPTION[CONTRACT_TYPE][10]['name']=$LANG["financial"][13];
$SEARCH_OPTION[CONTRACT_TYPE][10]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][23]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][23]['field']='renewal';
$SEARCH_OPTION[CONTRACT_TYPE][23]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][23]['name']=$LANG["financial"][107];
$SEARCH_OPTION[CONTRACT_TYPE][23]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][12]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][12]['field']='expire';
$SEARCH_OPTION[CONTRACT_TYPE][12]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][12]['name']=$LANG["financial"][98];
$SEARCH_OPTION[CONTRACT_TYPE][12]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][13]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][13]['field']='expire_notice';
$SEARCH_OPTION[CONTRACT_TYPE][13]['linkfield']='';
$SEARCH_OPTION[CONTRACT_TYPE][13]['name']=$LANG["financial"][99];
$SEARCH_OPTION[CONTRACT_TYPE][13]['meta']=0;

$SEARCH_OPTION[CONTRACT_TYPE][16]['table']='glpi_contracts';
$SEARCH_OPTION[CONTRACT_TYPE][16]['field']='comments';
$SEARCH_OPTION[CONTRACT_TYPE][16]['linkfield']='comments';
$SEARCH_OPTION[CONTRACT_TYPE][16]['name']=$LANG["common"][25];
$SEARCH_OPTION[CONTRACT_TYPE][16]['meta']=1;

$SEARCH_OPTION[CONTRACT_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[CONTRACT_TYPE][80]['field']='completename';
$SEARCH_OPTION[CONTRACT_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[CONTRACT_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[CONTRACT_TYPE][80]['meta']=0;

//////CARTRIDGE_TYPE

$SEARCH_OPTION[CARTRIDGE_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[CARTRIDGE_TYPE][1]['table']='glpi_cartridges_type';
$SEARCH_OPTION[CARTRIDGE_TYPE][1]['field']='name';
$SEARCH_OPTION[CARTRIDGE_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[CARTRIDGE_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[CARTRIDGE_TYPE][1]['meta']=0;

$SEARCH_OPTION[CARTRIDGE_TYPE][2]['table']='glpi_cartridges_type';
$SEARCH_OPTION[CARTRIDGE_TYPE][2]['field']='ID';
$SEARCH_OPTION[CARTRIDGE_TYPE][2]['linkfield']='';
$SEARCH_OPTION[CARTRIDGE_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[CARTRIDGE_TYPE][2]['meta']=0;

$SEARCH_OPTION[CARTRIDGE_TYPE][3]['table']='glpi_cartridges_type';
$SEARCH_OPTION[CARTRIDGE_TYPE][3]['field']='ref';
$SEARCH_OPTION[CARTRIDGE_TYPE][3]['linkfield']='ref';
$SEARCH_OPTION[CARTRIDGE_TYPE][3]['name']=$LANG["cartridges"][2];
$SEARCH_OPTION[CARTRIDGE_TYPE][3]['meta']=0;

$SEARCH_OPTION[CARTRIDGE_TYPE][4]['table']='glpi_dropdown_cartridge_type';
$SEARCH_OPTION[CARTRIDGE_TYPE][4]['field']='name';
$SEARCH_OPTION[CARTRIDGE_TYPE][4]['linkfield']='type';
$SEARCH_OPTION[CARTRIDGE_TYPE][4]['name']=$LANG["common"][17];
$SEARCH_OPTION[CARTRIDGE_TYPE][4]['meta']=0;

$SEARCH_OPTION[CARTRIDGE_TYPE][5]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[CARTRIDGE_TYPE][5]['field']='name';
$SEARCH_OPTION[CARTRIDGE_TYPE][5]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[CARTRIDGE_TYPE][5]['name']=$LANG["common"][5];
$SEARCH_OPTION[CARTRIDGE_TYPE][5]['meta']=0;

$SEARCH_OPTION[CARTRIDGE_TYPE][6]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[CARTRIDGE_TYPE][6]['field']='completename';
$SEARCH_OPTION[CARTRIDGE_TYPE][6]['linkfield']='location';
$SEARCH_OPTION[CARTRIDGE_TYPE][6]['name']=$LANG["cartridges"][36];
$SEARCH_OPTION[CARTRIDGE_TYPE][6]['meta']=0;

$SEARCH_OPTION[CARTRIDGE_TYPE][7]['table']='glpi_users';
$SEARCH_OPTION[CARTRIDGE_TYPE][7]['field']='name';
$SEARCH_OPTION[CARTRIDGE_TYPE][7]['linkfield']='tech_num';
$SEARCH_OPTION[CARTRIDGE_TYPE][7]['name']=$LANG["common"][10];
$SEARCH_OPTION[CARTRIDGE_TYPE][7]['meta']=0;

$SEARCH_OPTION[CARTRIDGE_TYPE][8]['table']='glpi_cartridges_type';
$SEARCH_OPTION[CARTRIDGE_TYPE][8]['field']='alarm';
$SEARCH_OPTION[CARTRIDGE_TYPE][8]['linkfield']='alarm';
$SEARCH_OPTION[CARTRIDGE_TYPE][8]['name']=$LANG["cartridges"][38];
$SEARCH_OPTION[CARTRIDGE_TYPE][8]['meta']=0;

$SEARCH_OPTION[CARTRIDGE_TYPE][10]['table']='glpi_cartridges_type';
$SEARCH_OPTION[CARTRIDGE_TYPE][10]['field']='comments';
$SEARCH_OPTION[CARTRIDGE_TYPE][10]['linkfield']='comments';
$SEARCH_OPTION[CARTRIDGE_TYPE][10]['name']=$LANG["common"][25];
$SEARCH_OPTION[CARTRIDGE_TYPE][10]['meta']=1;

$SEARCH_OPTION[CARTRIDGE_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[CARTRIDGE_TYPE][80]['field']='completename';
$SEARCH_OPTION[CARTRIDGE_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[CARTRIDGE_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[CARTRIDGE_TYPE][80]['meta']=0;

//////TYPEDOC_TYPE

$SEARCH_OPTION[TYPEDOC_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[TYPEDOC_TYPE][1]['table']='glpi_type_docs';
$SEARCH_OPTION[TYPEDOC_TYPE][1]['field']='name';
$SEARCH_OPTION[TYPEDOC_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[TYPEDOC_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[TYPEDOC_TYPE][1]['meta']=0;

$SEARCH_OPTION[TYPEDOC_TYPE][2]['table']='glpi_type_docs';
$SEARCH_OPTION[TYPEDOC_TYPE][2]['field']='ID';
$SEARCH_OPTION[TYPEDOC_TYPE][2]['linkfield']='';
$SEARCH_OPTION[TYPEDOC_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[TYPEDOC_TYPE][2]['meta']=0;

$SEARCH_OPTION[TYPEDOC_TYPE][3]['table']='glpi_type_docs';
$SEARCH_OPTION[TYPEDOC_TYPE][3]['field']='ext';
$SEARCH_OPTION[TYPEDOC_TYPE][3]['linkfield']='ext';
$SEARCH_OPTION[TYPEDOC_TYPE][3]['name']=$LANG["document"][9];
$SEARCH_OPTION[TYPEDOC_TYPE][3]['meta']=0;

$SEARCH_OPTION[TYPEDOC_TYPE][6]['table']='glpi_type_docs';
$SEARCH_OPTION[TYPEDOC_TYPE][6]['field']='icon';
$SEARCH_OPTION[TYPEDOC_TYPE][6]['linkfield']='';
$SEARCH_OPTION[TYPEDOC_TYPE][6]['name']=$LANG["document"][10];
$SEARCH_OPTION[TYPEDOC_TYPE][6]['meta']=0;

$SEARCH_OPTION[TYPEDOC_TYPE][4]['table']='glpi_type_docs';
$SEARCH_OPTION[TYPEDOC_TYPE][4]['field']='mime';
$SEARCH_OPTION[TYPEDOC_TYPE][4]['linkfield']='mime';
$SEARCH_OPTION[TYPEDOC_TYPE][4]['name']=$LANG["document"][4];
$SEARCH_OPTION[TYPEDOC_TYPE][4]['meta']=0;

$SEARCH_OPTION[TYPEDOC_TYPE][5]['table']='glpi_type_docs';
$SEARCH_OPTION[TYPEDOC_TYPE][5]['field']='upload';
$SEARCH_OPTION[TYPEDOC_TYPE][5]['linkfield']='';
$SEARCH_OPTION[TYPEDOC_TYPE][5]['name']=$LANG["document"][15];
$SEARCH_OPTION[TYPEDOC_TYPE][5]['meta']=0;


//////DOCUMENT_TYPE

$SEARCH_OPTION[DOCUMENT_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[DOCUMENT_TYPE][1]['table']='glpi_docs';
$SEARCH_OPTION[DOCUMENT_TYPE][1]['field']='name';
$SEARCH_OPTION[DOCUMENT_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[DOCUMENT_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[DOCUMENT_TYPE][1]['meta']=0;

$SEARCH_OPTION[DOCUMENT_TYPE][2]['table']='glpi_docs';
$SEARCH_OPTION[DOCUMENT_TYPE][2]['field']='ID';
$SEARCH_OPTION[DOCUMENT_TYPE][2]['linkfield']='';
$SEARCH_OPTION[DOCUMENT_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[DOCUMENT_TYPE][2]['meta']=0;

$SEARCH_OPTION[DOCUMENT_TYPE][3]['table']='glpi_docs';
$SEARCH_OPTION[DOCUMENT_TYPE][3]['field']='filename';
$SEARCH_OPTION[DOCUMENT_TYPE][3]['linkfield']='';
$SEARCH_OPTION[DOCUMENT_TYPE][3]['name']=$LANG["document"][2];
$SEARCH_OPTION[DOCUMENT_TYPE][3]['meta']=0;

$SEARCH_OPTION[DOCUMENT_TYPE][4]['table']='glpi_docs';
$SEARCH_OPTION[DOCUMENT_TYPE][4]['field']='link';
$SEARCH_OPTION[DOCUMENT_TYPE][4]['linkfield']='link';
$SEARCH_OPTION[DOCUMENT_TYPE][4]['name']=$LANG["document"][33];
$SEARCH_OPTION[DOCUMENT_TYPE][4]['meta']=0;

$SEARCH_OPTION[DOCUMENT_TYPE][5]['table']='glpi_docs';
$SEARCH_OPTION[DOCUMENT_TYPE][5]['field']='mime';
$SEARCH_OPTION[DOCUMENT_TYPE][5]['linkfield']='mime';
$SEARCH_OPTION[DOCUMENT_TYPE][5]['name']=$LANG["document"][4];
$SEARCH_OPTION[DOCUMENT_TYPE][5]['meta']=0;

$SEARCH_OPTION[DOCUMENT_TYPE][6]['table']='glpi_docs';
$SEARCH_OPTION[DOCUMENT_TYPE][6]['field']='comments';
$SEARCH_OPTION[DOCUMENT_TYPE][6]['linkfield']='comments';
$SEARCH_OPTION[DOCUMENT_TYPE][6]['name']=$LANG["common"][25];
$SEARCH_OPTION[DOCUMENT_TYPE][6]['meta']=0;

$SEARCH_OPTION[DOCUMENT_TYPE][7]['table']='glpi_dropdown_rubdocs';
$SEARCH_OPTION[DOCUMENT_TYPE][7]['field']='name';
$SEARCH_OPTION[DOCUMENT_TYPE][7]['linkfield']='rubrique';
$SEARCH_OPTION[DOCUMENT_TYPE][7]['name']=$LANG["document"][3];
$SEARCH_OPTION[DOCUMENT_TYPE][7]['meta']=0;

$SEARCH_OPTION[DOCUMENT_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[DOCUMENT_TYPE][80]['field']='completename';
$SEARCH_OPTION[DOCUMENT_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[DOCUMENT_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[DOCUMENT_TYPE][80]['meta']=0;

$SEARCH_OPTION[DOCUMENT_TYPE][19]['table']='glpi_docs';
$SEARCH_OPTION[DOCUMENT_TYPE][19]['field']='date_mod';
$SEARCH_OPTION[DOCUMENT_TYPE][19]['linkfield']='';
$SEARCH_OPTION[DOCUMENT_TYPE][19]['name']=$LANG["common"][26];
$SEARCH_OPTION[DOCUMENT_TYPE][19]['meta']=1;


//////USER_TYPE

$SEARCH_OPTION[USER_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[USER_TYPE][1]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][1]['field']='name';
$SEARCH_OPTION[USER_TYPE][1]['linkfield']='';
$SEARCH_OPTION[USER_TYPE][1]['name']=$LANG["setup"][18];
$SEARCH_OPTION[USER_TYPE][1]['meta']=0;

$SEARCH_OPTION[USER_TYPE][2]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][2]['field']='ID';
$SEARCH_OPTION[USER_TYPE][2]['linkfield']='';
$SEARCH_OPTION[USER_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[USER_TYPE][2]['meta']=0;

$SEARCH_OPTION[USER_TYPE][3]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][3]['field']='realname';
$SEARCH_OPTION[USER_TYPE][3]['linkfield']='realname';
$SEARCH_OPTION[USER_TYPE][3]['name']=$LANG["common"][48];
$SEARCH_OPTION[USER_TYPE][3]['meta']=0;

$SEARCH_OPTION[USER_TYPE][9]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][9]['field']='firstname';
$SEARCH_OPTION[USER_TYPE][9]['linkfield']='firstname';
$SEARCH_OPTION[USER_TYPE][9]['name']=$LANG["common"][43];
$SEARCH_OPTION[USER_TYPE][9]['meta']=0;

$SEARCH_OPTION[USER_TYPE][5]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][5]['field']='email';
$SEARCH_OPTION[USER_TYPE][5]['linkfield']='email';
$SEARCH_OPTION[USER_TYPE][5]['name']=$LANG["setup"][14];
$SEARCH_OPTION[USER_TYPE][5]['meta']=0;

$SEARCH_OPTION[USER_TYPE][7]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[USER_TYPE][7]['field']='completename';
$SEARCH_OPTION[USER_TYPE][7]['linkfield']='location';
$SEARCH_OPTION[USER_TYPE][7]['name']=$LANG["common"][15];
$SEARCH_OPTION[USER_TYPE][7]['meta']=2;

$SEARCH_OPTION[USER_TYPE][8]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][8]['field']='active';
$SEARCH_OPTION[USER_TYPE][8]['linkfield']='active';
$SEARCH_OPTION[USER_TYPE][8]['name']=$LANG["common"][60];
$SEARCH_OPTION[USER_TYPE][8]['meta']=0;

$SEARCH_OPTION[USER_TYPE][6]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][6]['field']='phone';
$SEARCH_OPTION[USER_TYPE][6]['linkfield']='phone';
$SEARCH_OPTION[USER_TYPE][6]['name']=$LANG["financial"][29];
$SEARCH_OPTION[USER_TYPE][6]['meta']=0;

$SEARCH_OPTION[USER_TYPE][10]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][10]['field']='phone2';
$SEARCH_OPTION[USER_TYPE][10]['linkfield']='phone2';
$SEARCH_OPTION[USER_TYPE][10]['name']=$LANG["financial"][29]." 2";
$SEARCH_OPTION[USER_TYPE][10]['meta']=0;

$SEARCH_OPTION[USER_TYPE][11]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][11]['field']='mobile';
$SEARCH_OPTION[USER_TYPE][11]['linkfield']='mobile';
$SEARCH_OPTION[USER_TYPE][11]['name']=$LANG["common"][42];
$SEARCH_OPTION[USER_TYPE][11]['meta']=0;

$SEARCH_OPTION[USER_TYPE][12]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][12]['field']='comments';
$SEARCH_OPTION[USER_TYPE][12]['linkfield']='comments';
$SEARCH_OPTION[USER_TYPE][12]['name']=$LANG["common"][25];
$SEARCH_OPTION[USER_TYPE][12]['meta']=0;

$SEARCH_OPTION[USER_TYPE][13]['table']='glpi_groups';
$SEARCH_OPTION[USER_TYPE][13]['field']='name';
$SEARCH_OPTION[USER_TYPE][13]['linkfield']='';
$SEARCH_OPTION[USER_TYPE][13]['name']=$LANG["common"][35];
$SEARCH_OPTION[USER_TYPE][13]['meta']=0;

$SEARCH_OPTION[USER_TYPE][14]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][14]['field']='last_login';
$SEARCH_OPTION[USER_TYPE][14]['linkfield']='';
$SEARCH_OPTION[USER_TYPE][14]['name']=$LANG["login"][0];
$SEARCH_OPTION[USER_TYPE][14]['meta']=0;

$SEARCH_OPTION[USER_TYPE][15]['table']='glpi_auth_tables';
$SEARCH_OPTION[USER_TYPE][15]['field']='name';
$SEARCH_OPTION[USER_TYPE][15]['linkfield']='';
$SEARCH_OPTION[USER_TYPE][15]['name']=$LANG["login"][10];
$SEARCH_OPTION[USER_TYPE][15]['meta']=0;

$SEARCH_OPTION[USER_TYPE][19]['table']='glpi_users';
$SEARCH_OPTION[USER_TYPE][19]['field']='date_mod';
$SEARCH_OPTION[USER_TYPE][19]['linkfield']='';
$SEARCH_OPTION[USER_TYPE][19]['name']=$LANG["common"][26];
$SEARCH_OPTION[USER_TYPE][19]['meta']=0;

$SEARCH_OPTION[USER_TYPE][20]['table']='glpi_profiles';
$SEARCH_OPTION[USER_TYPE][20]['field']='name';
$SEARCH_OPTION[USER_TYPE][20]['linkfield']='';
$SEARCH_OPTION[USER_TYPE][20]['name']=$LANG["Menu"][35];
$SEARCH_OPTION[USER_TYPE][20]['meta']=0;

$SEARCH_OPTION[USER_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[USER_TYPE][80]['field']='completename';
$SEARCH_OPTION[USER_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[USER_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[USER_TYPE][80]['meta']=0;

//////CONSUMABLE_TYPE

$SEARCH_OPTION[CONSUMABLE_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[CONSUMABLE_TYPE][1]['table']='glpi_consumables_type';
$SEARCH_OPTION[CONSUMABLE_TYPE][1]['field']='name';
$SEARCH_OPTION[CONSUMABLE_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[CONSUMABLE_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[CONSUMABLE_TYPE][1]['meta']=0;

$SEARCH_OPTION[CONSUMABLE_TYPE][2]['table']='glpi_consumables_type';
$SEARCH_OPTION[CONSUMABLE_TYPE][2]['field']='ID';
$SEARCH_OPTION[CONSUMABLE_TYPE][2]['linkfield']='';
$SEARCH_OPTION[CONSUMABLE_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[CONSUMABLE_TYPE][2]['meta']=0;

$SEARCH_OPTION[CONSUMABLE_TYPE][3]['table']='glpi_consumables_type';
$SEARCH_OPTION[CONSUMABLE_TYPE][3]['field']='ref';
$SEARCH_OPTION[CONSUMABLE_TYPE][3]['linkfield']='ref';
$SEARCH_OPTION[CONSUMABLE_TYPE][3]['name']=$LANG["consumables"][2];
$SEARCH_OPTION[CONSUMABLE_TYPE][3]['meta']=0;

$SEARCH_OPTION[CONSUMABLE_TYPE][4]['table']='glpi_dropdown_consumable_type';
$SEARCH_OPTION[CONSUMABLE_TYPE][4]['field']='name';
$SEARCH_OPTION[CONSUMABLE_TYPE][4]['linkfield']='type';
$SEARCH_OPTION[CONSUMABLE_TYPE][4]['name']=$LANG["common"][17];
$SEARCH_OPTION[CONSUMABLE_TYPE][4]['meta']=0;

$SEARCH_OPTION[CONSUMABLE_TYPE][5]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[CONSUMABLE_TYPE][5]['field']='name';
$SEARCH_OPTION[CONSUMABLE_TYPE][5]['linkfield']='FK_glpi_enteprise';
$SEARCH_OPTION[CONSUMABLE_TYPE][5]['name']=$LANG["common"][5];
$SEARCH_OPTION[CONSUMABLE_TYPE][5]['meta']=0;

$SEARCH_OPTION[CONSUMABLE_TYPE][6]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[CONSUMABLE_TYPE][6]['field']='completename';
$SEARCH_OPTION[CONSUMABLE_TYPE][6]['linkfield']='location';
$SEARCH_OPTION[CONSUMABLE_TYPE][6]['name']=$LANG["consumables"][36];
$SEARCH_OPTION[CONSUMABLE_TYPE][6]['meta']=0;

$SEARCH_OPTION[CONSUMABLE_TYPE][7]['table']='glpi_users';
$SEARCH_OPTION[CONSUMABLE_TYPE][7]['field']='name';
$SEARCH_OPTION[CONSUMABLE_TYPE][7]['linkfield']='tech_num';
$SEARCH_OPTION[CONSUMABLE_TYPE][7]['name']=$LANG["common"][10];
$SEARCH_OPTION[CONSUMABLE_TYPE][7]['meta']=0;

$SEARCH_OPTION[CONSUMABLE_TYPE][8]['table']='glpi_consumables_type';
$SEARCH_OPTION[CONSUMABLE_TYPE][8]['field']='alarm';
$SEARCH_OPTION[CONSUMABLE_TYPE][8]['linkfield']='alarm';
$SEARCH_OPTION[CONSUMABLE_TYPE][8]['name']=$LANG["consumables"][38];
$SEARCH_OPTION[CONSUMABLE_TYPE][8]['meta']=0;

$SEARCH_OPTION[CONSUMABLE_TYPE][16]['table']='glpi_consumables_type';
$SEARCH_OPTION[CONSUMABLE_TYPE][16]['field']='comments';
$SEARCH_OPTION[CONSUMABLE_TYPE][16]['linkfield']='comments';
$SEARCH_OPTION[CONSUMABLE_TYPE][16]['name']=$LANG["common"][25];
$SEARCH_OPTION[CONSUMABLE_TYPE][16]['meta']=1;

$SEARCH_OPTION[CONSUMABLE_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[CONSUMABLE_TYPE][80]['field']='completename';
$SEARCH_OPTION[CONSUMABLE_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[CONSUMABLE_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[CONSUMABLE_TYPE][80]['meta']=0;

//////LINK_TYPE

$SEARCH_OPTION[LINK_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[LINK_TYPE][1]['table']='glpi_links';
$SEARCH_OPTION[LINK_TYPE][1]['field']='name';
$SEARCH_OPTION[LINK_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[LINK_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[LINK_TYPE][1]['meta']=0;

$SEARCH_OPTION[LINK_TYPE][2]['table']='glpi_links';
$SEARCH_OPTION[LINK_TYPE][2]['field']='ID';
$SEARCH_OPTION[LINK_TYPE][2]['linkfield']='';
$SEARCH_OPTION[LINK_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[LINK_TYPE][2]['meta']=0;

$SEARCH_OPTION[LINK_TYPE][3]['table']='glpi_links';
$SEARCH_OPTION[LINK_TYPE][3]['field']='link';
$SEARCH_OPTION[LINK_TYPE][3]['linkfield']='link';
$SEARCH_OPTION[LINK_TYPE][3]['name']=$LANG["links"][1];
$SEARCH_OPTION[LINK_TYPE][3]['meta']=0;


//////PHONE_TYPE

$SEARCH_OPTION[PHONE_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[PHONE_TYPE][1]['table']='glpi_phones';
$SEARCH_OPTION[PHONE_TYPE][1]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[PHONE_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[PHONE_TYPE][1]['meta']=1;

$SEARCH_OPTION[PHONE_TYPE][2]['table']='glpi_phones';
$SEARCH_OPTION[PHONE_TYPE][2]['field']='ID';
$SEARCH_OPTION[PHONE_TYPE][2]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[PHONE_TYPE][2]['meta']=1;

$SEARCH_OPTION[PHONE_TYPE][3]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[PHONE_TYPE][3]['field']='completename';
$SEARCH_OPTION[PHONE_TYPE][3]['linkfield']='location';
$SEARCH_OPTION[PHONE_TYPE][3]['name']=$LANG["common"][15];
$SEARCH_OPTION[PHONE_TYPE][3]['meta']=2;

$SEARCH_OPTION[PHONE_TYPE][4]['table']='glpi_type_phones';
$SEARCH_OPTION[PHONE_TYPE][4]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][4]['linkfield']='type';
$SEARCH_OPTION[PHONE_TYPE][4]['name']=$LANG["common"][17];
$SEARCH_OPTION[PHONE_TYPE][4]['meta']=2;

$SEARCH_OPTION[PHONE_TYPE][40]['table']='glpi_dropdown_model_phones';
$SEARCH_OPTION[PHONE_TYPE][40]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][40]['linkfield']='model';
$SEARCH_OPTION[PHONE_TYPE][40]['name']=$LANG["common"][22];
$SEARCH_OPTION[PHONE_TYPE][40]['meta']=2;

$SEARCH_OPTION[PHONE_TYPE][31]['table']='glpi_dropdown_state';
$SEARCH_OPTION[PHONE_TYPE][31]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][31]['linkfield']='state';
$SEARCH_OPTION[PHONE_TYPE][31]['name']=$LANG["state"][0];
$SEARCH_OPTION[PHONE_TYPE][31]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][5]['table']='glpi_phones';
$SEARCH_OPTION[PHONE_TYPE][5]['field']='serial';
$SEARCH_OPTION[PHONE_TYPE][5]['linkfield']='serial';
$SEARCH_OPTION[PHONE_TYPE][5]['name']=$LANG["common"][19];
$SEARCH_OPTION[PHONE_TYPE][5]['meta']=1;

$SEARCH_OPTION[PHONE_TYPE][6]['table']='glpi_phones';
$SEARCH_OPTION[PHONE_TYPE][6]['field']='otherserial';
$SEARCH_OPTION[PHONE_TYPE][6]['linkfield']='otherserial';
$SEARCH_OPTION[PHONE_TYPE][6]['name']=$LANG["common"][20];
$SEARCH_OPTION[PHONE_TYPE][6]['meta']=1;

$SEARCH_OPTION[PHONE_TYPE][7]['table']='glpi_phones';
$SEARCH_OPTION[PHONE_TYPE][7]['field']='contact';
$SEARCH_OPTION[PHONE_TYPE][7]['linkfield']='contact';
$SEARCH_OPTION[PHONE_TYPE][7]['name']=$LANG["common"][18];
$SEARCH_OPTION[PHONE_TYPE][7]['meta']=1;

$SEARCH_OPTION[PHONE_TYPE][8]['table']='glpi_phones';
$SEARCH_OPTION[PHONE_TYPE][8]['field']='contact_num';
$SEARCH_OPTION[PHONE_TYPE][8]['linkfield']='contact_num';
$SEARCH_OPTION[PHONE_TYPE][8]['name']=$LANG["common"][21];
$SEARCH_OPTION[PHONE_TYPE][8]['meta']=1;

$SEARCH_OPTION[PHONE_TYPE][70]['table']='glpi_users';
$SEARCH_OPTION[PHONE_TYPE][70]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][70]['linkfield']='FK_users';
$SEARCH_OPTION[PHONE_TYPE][70]['name']=$LANG["common"][34];
$SEARCH_OPTION[PHONE_TYPE][70]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[PHONE_TYPE][71]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][71]['linkfield']='FK_groups';
$SEARCH_OPTION[PHONE_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[PHONE_TYPE][71]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][9]['table']='glpi_phones';
$SEARCH_OPTION[PHONE_TYPE][9]['field']='date_mod';
$SEARCH_OPTION[PHONE_TYPE][9]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][9]['name']=$LANG["common"][26];
$SEARCH_OPTION[PHONE_TYPE][9]['meta']=1;

$SEARCH_OPTION[PHONE_TYPE][10]['table']='glpi_phones';
$SEARCH_OPTION[PHONE_TYPE][10]['field']='comments';
$SEARCH_OPTION[PHONE_TYPE][10]['linkfield']='comments';
$SEARCH_OPTION[PHONE_TYPE][10]['name']=$LANG["common"][25];
$SEARCH_OPTION[PHONE_TYPE][10]['meta']=1;

$SEARCH_OPTION[PHONE_TYPE][23]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[PHONE_TYPE][23]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][23]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[PHONE_TYPE][23]['name']=$LANG["common"][5];
$SEARCH_OPTION[PHONE_TYPE][23]['meta']=2;

$SEARCH_OPTION[PHONE_TYPE][24]['table']='glpi_users';
$SEARCH_OPTION[PHONE_TYPE][24]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][24]['linkfield']='tech_num';
$SEARCH_OPTION[PHONE_TYPE][24]['name']=$LANG["common"][10];
$SEARCH_OPTION[PHONE_TYPE][24]['meta']=2;

$SEARCH_OPTION[PHONE_TYPE][42]['table']='glpi_dropdown_phone_power';
$SEARCH_OPTION[PHONE_TYPE][42]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][42]['linkfield']='power';
$SEARCH_OPTION[PHONE_TYPE][42]['name']=$LANG["phones"][36];
$SEARCH_OPTION[PHONE_TYPE][42]['meta']=1;

$SEARCH_OPTION[PHONE_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[PHONE_TYPE][80]['field']='completename';
$SEARCH_OPTION[PHONE_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[PHONE_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[PHONE_TYPE][80]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE]['tracking']=$LANG["setup"][143];

$SEARCH_OPTION[PHONE_TYPE][60]['table']='glpi_tracking';
$SEARCH_OPTION[PHONE_TYPE][60]['field']='count';
$SEARCH_OPTION[PHONE_TYPE][60]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][60]['name']=$LANG["stats"][13];
$SEARCH_OPTION[PHONE_TYPE][60]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE]['financial']=$LANG["financial"][3];

$SEARCH_OPTION[PHONE_TYPE][29]['table']='glpi_contracts';
$SEARCH_OPTION[PHONE_TYPE][29]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][29]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][29]['name']=$LANG["common"][16]." ".$LANG["financial"][1];
$SEARCH_OPTION[PHONE_TYPE][29]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][30]['table']='glpi_contracts';
$SEARCH_OPTION[PHONE_TYPE][30]['field']='num';
$SEARCH_OPTION[PHONE_TYPE][30]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][30]['name']=$LANG["financial"][4]." ".$LANG["financial"][1];
$SEARCH_OPTION[PHONE_TYPE][30]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][25]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][25]['field']='num_immo';
$SEARCH_OPTION[PHONE_TYPE][25]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][25]['name']=$LANG["financial"][20];
$SEARCH_OPTION[PHONE_TYPE][25]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][26]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][26]['field']='num_commande';
$SEARCH_OPTION[PHONE_TYPE][26]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][26]['name']=$LANG["financial"][18];
$SEARCH_OPTION[PHONE_TYPE][26]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][27]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][27]['field']='bon_livraison';
$SEARCH_OPTION[PHONE_TYPE][27]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][27]['name']=$LANG["financial"][19];
$SEARCH_OPTION[PHONE_TYPE][27]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][28]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][28]['field']='facture';
$SEARCH_OPTION[PHONE_TYPE][28]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][28]['name']=$LANG["financial"][82];
$SEARCH_OPTION[PHONE_TYPE][28]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][37]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][37]['field']='buy_date';
$SEARCH_OPTION[PHONE_TYPE][37]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][37]['name']=$LANG["financial"][14];
$SEARCH_OPTION[PHONE_TYPE][37]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][38]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][38]['field']='use_date';
$SEARCH_OPTION[PHONE_TYPE][38]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][38]['name']=$LANG["financial"][76];
$SEARCH_OPTION[PHONE_TYPE][38]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][50]['table']='glpi_dropdown_budget';
$SEARCH_OPTION[PHONE_TYPE][50]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][50]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][50]['name']=$LANG["financial"][87];
$SEARCH_OPTION[PHONE_TYPE][50]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][51]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][51]['field']='warranty_duration';
$SEARCH_OPTION[PHONE_TYPE][51]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][51]['name']=$LANG["financial"][15];
$SEARCH_OPTION[PHONE_TYPE][51]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][52]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][52]['field']='warranty_info';
$SEARCH_OPTION[PHONE_TYPE][52]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][52]['name']=$LANG["financial"][16];
$SEARCH_OPTION[PHONE_TYPE][52]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][120]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][120]['field']='end_warranty';
$SEARCH_OPTION[PHONE_TYPE][120]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][120]['name']=$LANG["financial"][80];
$SEARCH_OPTION[PHONE_TYPE][120]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][53]['table']='glpi_enterprises_infocoms';
$SEARCH_OPTION[PHONE_TYPE][53]['field']='name';
$SEARCH_OPTION[PHONE_TYPE][53]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][53]['name']=$LANG["financial"][26];
$SEARCH_OPTION[PHONE_TYPE][53]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][54]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][54]['field']='value';
$SEARCH_OPTION[PHONE_TYPE][54]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][54]['name']=$LANG["financial"][21];
$SEARCH_OPTION[PHONE_TYPE][54]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][55]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][55]['field']='warranty_value';
$SEARCH_OPTION[PHONE_TYPE][55]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][55]['name']=$LANG["financial"][78];
$SEARCH_OPTION[PHONE_TYPE][55]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][56]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][56]['field']='amort_time';
$SEARCH_OPTION[PHONE_TYPE][56]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][56]['name']=$LANG["financial"][23];
$SEARCH_OPTION[PHONE_TYPE][56]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][57]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][57]['field']='amort_type';
$SEARCH_OPTION[PHONE_TYPE][57]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][57]['name']=$LANG["financial"][22];
$SEARCH_OPTION[PHONE_TYPE][57]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][58]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][58]['field']='amort_coeff';
$SEARCH_OPTION[PHONE_TYPE][58]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][58]['name']=$LANG["financial"][77];
$SEARCH_OPTION[PHONE_TYPE][58]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][59]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][59]['field']='alert';
$SEARCH_OPTION[PHONE_TYPE][59]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][59]['name']=$LANG["common"][41];
$SEARCH_OPTION[PHONE_TYPE][59]['meta']=0;

$SEARCH_OPTION[PHONE_TYPE][122]['table']='glpi_infocoms';
$SEARCH_OPTION[PHONE_TYPE][122]['field']='comments';
$SEARCH_OPTION[PHONE_TYPE][122]['linkfield']='';
$SEARCH_OPTION[PHONE_TYPE][122]['name']=$LANG["common"][25]." - ".$LANG["financial"][3];
$SEARCH_OPTION[PHONE_TYPE][122]['meta']=0;

//////GROUP_TYPE

$SEARCH_OPTION[GROUP_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[GROUP_TYPE][1]['table']='glpi_groups';
$SEARCH_OPTION[GROUP_TYPE][1]['field']='name';
$SEARCH_OPTION[GROUP_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[GROUP_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[GROUP_TYPE][1]['meta']=1;

$SEARCH_OPTION[GROUP_TYPE][2]['table']='glpi_groups';
$SEARCH_OPTION[GROUP_TYPE][2]['field']='ID';
$SEARCH_OPTION[GROUP_TYPE][2]['linkfield']='';
$SEARCH_OPTION[GROUP_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[GROUP_TYPE][2]['meta']=1;

$SEARCH_OPTION[GROUP_TYPE][16]['table']='glpi_groups';
$SEARCH_OPTION[GROUP_TYPE][16]['field']='comments';
$SEARCH_OPTION[GROUP_TYPE][16]['linkfield']='comments';
$SEARCH_OPTION[GROUP_TYPE][16]['name']=$LANG["common"][25];
$SEARCH_OPTION[GROUP_TYPE][16]['meta']=1;

$SEARCH_OPTION[GROUP_TYPE][3]['table']='glpi_groups';
$SEARCH_OPTION[GROUP_TYPE][3]['field']='ldap_field';
$SEARCH_OPTION[GROUP_TYPE][3]['linkfield']='ldap_field';
$SEARCH_OPTION[GROUP_TYPE][3]['name']=$LANG["setup"][260];
$SEARCH_OPTION[GROUP_TYPE][3]['meta']=1;

$SEARCH_OPTION[GROUP_TYPE][4]['table']='glpi_groups';
$SEARCH_OPTION[GROUP_TYPE][4]['field']='ldap_value';
$SEARCH_OPTION[GROUP_TYPE][4]['linkfield']='ldap_value';
$SEARCH_OPTION[GROUP_TYPE][4]['name']=$LANG["setup"][601];
$SEARCH_OPTION[GROUP_TYPE][4]['meta']=1;

$SEARCH_OPTION[GROUP_TYPE][5]['table']='glpi_groups';
$SEARCH_OPTION[GROUP_TYPE][5]['field']='ldap_group_dn';
$SEARCH_OPTION[GROUP_TYPE][5]['linkfield']='ldap_group_dn';
$SEARCH_OPTION[GROUP_TYPE][5]['name']=$LANG["setup"][261];
$SEARCH_OPTION[GROUP_TYPE][5]['meta']=1;

$SEARCH_OPTION[GROUP_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[GROUP_TYPE][80]['field']='completename';
$SEARCH_OPTION[GROUP_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[GROUP_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[GROUP_TYPE][80]['meta']=0;

//////ENTITY_TYPE

$SEARCH_OPTION[ENTITY_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[ENTITY_TYPE][1]['table']='glpi_entities';
$SEARCH_OPTION[ENTITY_TYPE][1]['field']='name';
$SEARCH_OPTION[ENTITY_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[ENTITY_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[ENTITY_TYPE][1]['meta']=1;

$SEARCH_OPTION[ENTITY_TYPE][2]['table']='glpi_entities';
$SEARCH_OPTION[ENTITY_TYPE][2]['field']='ID';
$SEARCH_OPTION[ENTITY_TYPE][2]['linkfield']='';
$SEARCH_OPTION[ENTITY_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[ENTITY_TYPE][2]['meta']=1;

$SEARCH_OPTION[ENTITY_TYPE][14]['table']='glpi_entities';
$SEARCH_OPTION[ENTITY_TYPE][14]['field']='completename';
$SEARCH_OPTION[ENTITY_TYPE][14]['linkfield']='completename';
$SEARCH_OPTION[ENTITY_TYPE][14]['name']=$LANG["common"][51];
$SEARCH_OPTION[ENTITY_TYPE][14]['meta']=1;

$SEARCH_OPTION[ENTITY_TYPE][16]['table']='glpi_entities';
$SEARCH_OPTION[ENTITY_TYPE][16]['field']='comments';
$SEARCH_OPTION[ENTITY_TYPE][16]['linkfield']='comments';
$SEARCH_OPTION[ENTITY_TYPE][16]['name']=$LANG["common"][25];
$SEARCH_OPTION[ENTITY_TYPE][16]['meta']=1;

$SEARCH_OPTION[ENTITY_TYPE][3]['table']='glpi_entities_data';
$SEARCH_OPTION[ENTITY_TYPE][3]['field']='address';
$SEARCH_OPTION[ENTITY_TYPE][3]['linkfield']='';
$SEARCH_OPTION[ENTITY_TYPE][3]['name']=$LANG["financial"][44];
$SEARCH_OPTION[ENTITY_TYPE][3]['meta']=0;

$SEARCH_OPTION[ENTITY_TYPE][10]['table']='glpi_entities_data';
$SEARCH_OPTION[ENTITY_TYPE][10]['field']='fax';
$SEARCH_OPTION[ENTITY_TYPE][10]['linkfield']='';
$SEARCH_OPTION[ENTITY_TYPE][10]['name']=$LANG["financial"][30];
$SEARCH_OPTION[ENTITY_TYPE][10]['meta']=0;

$SEARCH_OPTION[ENTITY_TYPE][11]['table']='glpi_entities_data';
$SEARCH_OPTION[ENTITY_TYPE][11]['field']='town';
$SEARCH_OPTION[ENTITY_TYPE][11]['linkfield']='';
$SEARCH_OPTION[ENTITY_TYPE][11]['name']=$LANG["financial"][101];
$SEARCH_OPTION[ENTITY_TYPE][11]['meta']=0;

$SEARCH_OPTION[ENTITY_TYPE][12]['table']='glpi_entities_data';
$SEARCH_OPTION[ENTITY_TYPE][12]['field']='state';
$SEARCH_OPTION[ENTITY_TYPE][12]['linkfield']='';
$SEARCH_OPTION[ENTITY_TYPE][12]['name']=$LANG["financial"][102];
$SEARCH_OPTION[ENTITY_TYPE][12]['meta']=0;

$SEARCH_OPTION[ENTITY_TYPE][13]['table']='glpi_entities_data';
$SEARCH_OPTION[ENTITY_TYPE][13]['field']='country';
$SEARCH_OPTION[ENTITY_TYPE][13]['linkfield']='';
$SEARCH_OPTION[ENTITY_TYPE][13]['name']=$LANG["financial"][103];
$SEARCH_OPTION[ENTITY_TYPE][13]['meta']=0;

$SEARCH_OPTION[ENTITY_TYPE][4]['table']='glpi_entities_data';
$SEARCH_OPTION[ENTITY_TYPE][4]['field']='website';
$SEARCH_OPTION[ENTITY_TYPE][4]['linkfield']='';
$SEARCH_OPTION[ENTITY_TYPE][4]['name']=$LANG["financial"][45];
$SEARCH_OPTION[ENTITY_TYPE][4]['meta']=0;

$SEARCH_OPTION[ENTITY_TYPE][5]['table']='glpi_entities_data';
$SEARCH_OPTION[ENTITY_TYPE][5]['field']='phonenumber';
$SEARCH_OPTION[ENTITY_TYPE][5]['linkfield']='';
$SEARCH_OPTION[ENTITY_TYPE][5]['name']=$LANG["financial"][29];
$SEARCH_OPTION[ENTITY_TYPE][5]['meta']=0;

$SEARCH_OPTION[ENTITY_TYPE][6]['table']='glpi_entities_data';
$SEARCH_OPTION[ENTITY_TYPE][6]['field']='email';
$SEARCH_OPTION[ENTITY_TYPE][6]['linkfield']='';
$SEARCH_OPTION[ENTITY_TYPE][6]['name']=$LANG["setup"][14];
$SEARCH_OPTION[ENTITY_TYPE][6]['meta']=0;


//////STATE_TYPE

$SEARCH_OPTION[STATE_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[STATE_TYPE][1]['table']='state_types';
$SEARCH_OPTION[STATE_TYPE][1]['field']='name';
$SEARCH_OPTION[STATE_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[STATE_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[STATE_TYPE][1]['meta']=1;

$SEARCH_OPTION[STATE_TYPE][2]['table']='state_types';
$SEARCH_OPTION[STATE_TYPE][2]['field']='ID';
$SEARCH_OPTION[STATE_TYPE][2]['linkfield']='ID';
$SEARCH_OPTION[STATE_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[STATE_TYPE][2]['meta']=1;

$SEARCH_OPTION[STATE_TYPE][31]['table']='glpi_dropdown_state';
$SEARCH_OPTION[STATE_TYPE][31]['field']='name';
$SEARCH_OPTION[STATE_TYPE][31]['linkfield']='state';
$SEARCH_OPTION[STATE_TYPE][31]['name']=$LANG["state"][0];
$SEARCH_OPTION[STATE_TYPE][31]['meta']=0;

$SEARCH_OPTION[STATE_TYPE][3]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[STATE_TYPE][3]['field']='completename';
$SEARCH_OPTION[STATE_TYPE][3]['linkfield']='location';
$SEARCH_OPTION[STATE_TYPE][3]['name']=$LANG["common"][15];
$SEARCH_OPTION[STATE_TYPE][3]['meta']=1;

$SEARCH_OPTION[STATE_TYPE][8]['table']='state_types';
$SEARCH_OPTION[STATE_TYPE][8]['field']='serial';
$SEARCH_OPTION[STATE_TYPE][8]['linkfield']='serial';
$SEARCH_OPTION[STATE_TYPE][8]['name']=$LANG["common"][19];
$SEARCH_OPTION[STATE_TYPE][8]['meta']=1;

$SEARCH_OPTION[STATE_TYPE][9]['table']='state_types';
$SEARCH_OPTION[STATE_TYPE][9]['field']='otherserial';
$SEARCH_OPTION[STATE_TYPE][9]['linkfield']='otherserial';
$SEARCH_OPTION[STATE_TYPE][9]['name']=$LANG["common"][20];
$SEARCH_OPTION[STATE_TYPE][9]['meta']=1;

$SEARCH_OPTION[STATE_TYPE][16]['table']='state_types';
$SEARCH_OPTION[STATE_TYPE][16]['field']='comments';
$SEARCH_OPTION[STATE_TYPE][16]['linkfield']='comments';
$SEARCH_OPTION[STATE_TYPE][16]['name']=$LANG["common"][25];
$SEARCH_OPTION[STATE_TYPE][16]['meta']=1;

$SEARCH_OPTION[STATE_TYPE][70]['table']='glpi_users';
$SEARCH_OPTION[STATE_TYPE][70]['field']='name';
$SEARCH_OPTION[STATE_TYPE][70]['linkfield']='FK_users';
$SEARCH_OPTION[STATE_TYPE][70]['name']=$LANG["common"][34];
$SEARCH_OPTION[STATE_TYPE][70]['meta']=0;

$SEARCH_OPTION[STATE_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[STATE_TYPE][71]['field']='name';
$SEARCH_OPTION[STATE_TYPE][71]['linkfield']='FK_groups';
$SEARCH_OPTION[STATE_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[STATE_TYPE][71]['meta']=0;

$SEARCH_OPTION[STATE_TYPE][19]['table']='state_types';
$SEARCH_OPTION[STATE_TYPE][19]['field']='date_mod';
$SEARCH_OPTION[STATE_TYPE][19]['linkfield']='';
$SEARCH_OPTION[STATE_TYPE][19]['name']=$LANG["common"][26];
$SEARCH_OPTION[STATE_TYPE][19]['meta']=1;

$SEARCH_OPTION[STATE_TYPE][23]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[STATE_TYPE][23]['field']='name';
$SEARCH_OPTION[STATE_TYPE][23]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[STATE_TYPE][23]['name']=$LANG["common"][5];
$SEARCH_OPTION[STATE_TYPE][23]['meta']=2;

$SEARCH_OPTION[STATE_TYPE][24]['table']='glpi_users';
$SEARCH_OPTION[STATE_TYPE][24]['field']='name';
$SEARCH_OPTION[STATE_TYPE][24]['linkfield']='tech_num';
$SEARCH_OPTION[STATE_TYPE][24]['name']=$LANG["common"][10];
$SEARCH_OPTION[STATE_TYPE][24]['meta']=0;

$SEARCH_OPTION[STATE_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[STATE_TYPE][80]['field']='completename';
$SEARCH_OPTION[STATE_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[STATE_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[STATE_TYPE][80]['meta']=0;

//////RESERVATION_TYPE


$SEARCH_OPTION[RESERVATION_TYPE][4]['table']='glpi_reservation_item';
$SEARCH_OPTION[RESERVATION_TYPE][4]['field']='comments';
$SEARCH_OPTION[RESERVATION_TYPE][4]['linkfield']='comments';
$SEARCH_OPTION[RESERVATION_TYPE][4]['name']=$LANG["common"][25];
$SEARCH_OPTION[RESERVATION_TYPE][4]['meta']=1;

$SEARCH_OPTION[RESERVATION_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[RESERVATION_TYPE][1]['table']='reservation_types';
$SEARCH_OPTION[RESERVATION_TYPE][1]['field']='name';
$SEARCH_OPTION[RESERVATION_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[RESERVATION_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[RESERVATION_TYPE][1]['meta']=1;

$SEARCH_OPTION[RESERVATION_TYPE][2]['table']='reservation_types';
$SEARCH_OPTION[RESERVATION_TYPE][2]['field']='ID';
$SEARCH_OPTION[RESERVATION_TYPE][2]['linkfield']='ID';
$SEARCH_OPTION[RESERVATION_TYPE][2]['name']=$LANG["common"][2];
$SEARCH_OPTION[RESERVATION_TYPE][2]['meta']=1;

$SEARCH_OPTION[RESERVATION_TYPE][31]['table']='glpi_dropdown_state';
$SEARCH_OPTION[RESERVATION_TYPE][31]['field']='name';
$SEARCH_OPTION[RESERVATION_TYPE][31]['linkfield']='state';
$SEARCH_OPTION[RESERVATION_TYPE][31]['name']=$LANG["state"][0];
$SEARCH_OPTION[RESERVATION_TYPE][31]['meta']=0;

$SEARCH_OPTION[RESERVATION_TYPE][3]['table']='glpi_dropdown_locations';
$SEARCH_OPTION[RESERVATION_TYPE][3]['field']='completename';
$SEARCH_OPTION[RESERVATION_TYPE][3]['linkfield']='location';
$SEARCH_OPTION[RESERVATION_TYPE][3]['name']=$LANG["common"][15];
$SEARCH_OPTION[RESERVATION_TYPE][3]['meta']=1;

$SEARCH_OPTION[RESERVATION_TYPE][16]['table']='reservation_types';
$SEARCH_OPTION[RESERVATION_TYPE][16]['field']='comments';
$SEARCH_OPTION[RESERVATION_TYPE][16]['linkfield']='comments';
$SEARCH_OPTION[RESERVATION_TYPE][16]['name']=$LANG["common"][25];
$SEARCH_OPTION[RESERVATION_TYPE][16]['meta']=1;

$SEARCH_OPTION[RESERVATION_TYPE][70]['table']='glpi_users';
$SEARCH_OPTION[RESERVATION_TYPE][70]['field']='name';
$SEARCH_OPTION[RESERVATION_TYPE][70]['linkfield']='FK_users';
$SEARCH_OPTION[RESERVATION_TYPE][70]['name']=$LANG["common"][34];
$SEARCH_OPTION[RESERVATION_TYPE][70]['meta']=0;

$SEARCH_OPTION[RESERVATION_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[RESERVATION_TYPE][71]['field']='name';
$SEARCH_OPTION[RESERVATION_TYPE][71]['linkfield']='FK_groups';
$SEARCH_OPTION[RESERVATION_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[RESERVATION_TYPE][71]['meta']=0;

$SEARCH_OPTION[RESERVATION_TYPE][19]['table']='reservation_types';
$SEARCH_OPTION[RESERVATION_TYPE][19]['field']='date_mod';
$SEARCH_OPTION[RESERVATION_TYPE][19]['linkfield']='';
$SEARCH_OPTION[RESERVATION_TYPE][19]['name']=$LANG["common"][26];
$SEARCH_OPTION[RESERVATION_TYPE][19]['meta']=1;

$SEARCH_OPTION[RESERVATION_TYPE][23]['table']='glpi_dropdown_manufacturer';
$SEARCH_OPTION[RESERVATION_TYPE][23]['field']='name';
$SEARCH_OPTION[RESERVATION_TYPE][23]['linkfield']='FK_glpi_enterprise';
$SEARCH_OPTION[RESERVATION_TYPE][23]['name']=$LANG["common"][5];
$SEARCH_OPTION[RESERVATION_TYPE][23]['meta']=2;

$SEARCH_OPTION[RESERVATION_TYPE][24]['table']='glpi_users';
$SEARCH_OPTION[RESERVATION_TYPE][24]['field']='name';
$SEARCH_OPTION[RESERVATION_TYPE][24]['linkfield']='tech_num';
$SEARCH_OPTION[RESERVATION_TYPE][24]['name']=$LANG["common"][10];
$SEARCH_OPTION[RESERVATION_TYPE][24]['meta']=0;

$SEARCH_OPTION[RESERVATION_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[RESERVATION_TYPE][80]['field']='completename';
$SEARCH_OPTION[RESERVATION_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[RESERVATION_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[RESERVATION_TYPE][80]['meta']=0;

// TRACKING_TYPE - used for massive actions

$SEARCH_OPTION[TRACKING_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[TRACKING_TYPE][2]['table']='glpi_tracking';
$SEARCH_OPTION[TRACKING_TYPE][2]['field']='status';
$SEARCH_OPTION[TRACKING_TYPE][2]['linkfield']='status';
$SEARCH_OPTION[TRACKING_TYPE][2]['name']=$LANG["joblist"][0];
$SEARCH_OPTION[TRACKING_TYPE][2]['meta']=1;

$SEARCH_OPTION[TRACKING_TYPE][3]['table']='glpi_tracking';
$SEARCH_OPTION[TRACKING_TYPE][3]['field']='priority';
$SEARCH_OPTION[TRACKING_TYPE][3]['linkfield']='priority';
$SEARCH_OPTION[TRACKING_TYPE][3]['name']=$LANG["joblist"][2];
$SEARCH_OPTION[TRACKING_TYPE][3]['meta']=1;

$SEARCH_OPTION[TRACKING_TYPE][4]['table']='glpi_users';
$SEARCH_OPTION[TRACKING_TYPE][4]['field']='name';
$SEARCH_OPTION[TRACKING_TYPE][4]['linkfield']='author';
$SEARCH_OPTION[TRACKING_TYPE][4]['name']=$LANG["job"][4];
$SEARCH_OPTION[TRACKING_TYPE][4]['meta']=1;

$SEARCH_OPTION[TRACKING_TYPE][71]['table']='glpi_groups';
$SEARCH_OPTION[TRACKING_TYPE][71]['field']='name';
$SEARCH_OPTION[TRACKING_TYPE][71]['linkfield']='FK_group';
$SEARCH_OPTION[TRACKING_TYPE][71]['name']=$LANG["common"][35];
$SEARCH_OPTION[TRACKING_TYPE][71]['meta']=0;

$SEARCH_OPTION[TRACKING_TYPE][5]['table']='glpi_users';
$SEARCH_OPTION[TRACKING_TYPE][5]['field']='name';
$SEARCH_OPTION[TRACKING_TYPE][5]['linkfield']='assign';
$SEARCH_OPTION[TRACKING_TYPE][5]['name']=$LANG["job"][5]." - ".$LANG["job"][6];
$SEARCH_OPTION[TRACKING_TYPE][5]['meta']=1;

$SEARCH_OPTION[TRACKING_TYPE][6]['table']='glpi_enterprises';
$SEARCH_OPTION[TRACKING_TYPE][6]['field']='name';
$SEARCH_OPTION[TRACKING_TYPE][6]['linkfield']='assign_ent';
$SEARCH_OPTION[TRACKING_TYPE][6]['name']=$LANG["job"][5]." - ".$LANG["financial"][26];
$SEARCH_OPTION[TRACKING_TYPE][6]['meta']=1;

$SEARCH_OPTION[TRACKING_TYPE][8]['table']='glpi_groups';
$SEARCH_OPTION[TRACKING_TYPE][8]['field']='name';
$SEARCH_OPTION[TRACKING_TYPE][8]['linkfield']='assign_group';
$SEARCH_OPTION[TRACKING_TYPE][8]['name']=$LANG["job"][5]." - ".$LANG["common"][35];
$SEARCH_OPTION[TRACKING_TYPE][8]['meta']=1;

$SEARCH_OPTION[TRACKING_TYPE][7]['table']='glpi_dropdown_tracking_category';
$SEARCH_OPTION[TRACKING_TYPE][7]['field']='name';
$SEARCH_OPTION[TRACKING_TYPE][7]['linkfield']='category';
$SEARCH_OPTION[TRACKING_TYPE][7]['name']=$LANG["common"][36];
$SEARCH_OPTION[TRACKING_TYPE][7]['meta']=1;



// OCSNG_TYPE
$SEARCH_OPTION[OCSNG_TYPE]['common']=$LANG["common"][32];

$SEARCH_OPTION[OCSNG_TYPE][1]['table']='glpi_ocs_config';
$SEARCH_OPTION[OCSNG_TYPE][1]['field']='name';
$SEARCH_OPTION[OCSNG_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[OCSNG_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[OCSNG_TYPE][1]['meta']=0;

$SEARCH_OPTION[OCSNG_TYPE][2]['table']='glpi_ocs_config';
$SEARCH_OPTION[OCSNG_TYPE][2]['field']='date_mod';
$SEARCH_OPTION[OCSNG_TYPE][2]['linkfield']='';
$SEARCH_OPTION[OCSNG_TYPE][2]['name']=$LANG["common"][26];
$SEARCH_OPTION[OCSNG_TYPE][2]['meta']=0;

// PROFILE_TYPE
$SEARCH_OPTION[PROFILE_TYPE]['common']=$LANG["common"][16];
$SEARCH_OPTION[PROFILE_TYPE][1]['table']='glpi_profiles';
$SEARCH_OPTION[PROFILE_TYPE][1]['field']='name';
$SEARCH_OPTION[PROFILE_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[PROFILE_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[PROFILE_TYPE][1]['meta']=0;

$SEARCH_OPTION[PROFILE_TYPE][2]['table']='glpi_profiles';
$SEARCH_OPTION[PROFILE_TYPE][2]['field']='interface';
$SEARCH_OPTION[PROFILE_TYPE][2]['linkfield']='interface';
$SEARCH_OPTION[PROFILE_TYPE][2]['name']=$LANG["profiles"][2];
$SEARCH_OPTION[PROFILE_TYPE][2]['meta']=0;


// MAILGATE_TYPE
$SEARCH_OPTION[MAILGATE_TYPE]['common']=$LANG["common"][16];
$SEARCH_OPTION[MAILGATE_TYPE][1]['table']='glpi_mailgate';
$SEARCH_OPTION[MAILGATE_TYPE][1]['field']='name';
$SEARCH_OPTION[MAILGATE_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[MAILGATE_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[MAILGATE_TYPE][1]['meta']=0;

$SEARCH_OPTION[MAILGATE_TYPE][80]['table']='glpi_entities';
$SEARCH_OPTION[MAILGATE_TYPE][80]['field']='completename';
$SEARCH_OPTION[MAILGATE_TYPE][80]['linkfield']='FK_entities';
$SEARCH_OPTION[MAILGATE_TYPE][80]['name']=$LANG["entity"][0];
$SEARCH_OPTION[MAILGATE_TYPE][80]['meta']=0;

// TRANSFER_TYPE
$SEARCH_OPTION[TRANSFER_TYPE]['common']=$LANG["common"][16];
$SEARCH_OPTION[TRANSFER_TYPE][1]['table']='glpi_transfers';
$SEARCH_OPTION[TRANSFER_TYPE][1]['field']='name';
$SEARCH_OPTION[TRANSFER_TYPE][1]['linkfield']='name';
$SEARCH_OPTION[TRANSFER_TYPE][1]['name']=$LANG["common"][16];
$SEARCH_OPTION[TRANSFER_TYPE][1]['meta']=0;

?>
