<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_extMgm::allowTableOnStandardPages('tx_wssitemanager_domainaliases');

$TCA["tx_wssitemanager_domainaliases"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_domainaliases',		
		'label'     => 'name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY name",	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_wssitemanager_domainaliases.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "name, domain",
	)
);


t3lib_extMgm::allowTableOnStandardPages('tx_wssitemanager_domains');

$TCA["tx_wssitemanager_domains"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_domains',		
		'label'     => 'name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY name",	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_wssitemanager_domains.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, name, hotel",
	)
);


t3lib_extMgm::allowTableOnStandardPages('tx_wssitemanager_servers');

$TCA["tx_wssitemanager_servers"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers',		
		'label'     => 'name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'type' => 'type',	
		'default_sortby' => "ORDER BY name",	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_wssitemanager_servers.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "name, host, sshuser, dbuser, dbpass, dir, type, closed",
	)
);


t3lib_extMgm::allowTableOnStandardPages('tx_wssitemanager_hotels');

$TCA["tx_wssitemanager_hotels"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_hotels',		
		'label'     => 'name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY name",	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',	
			'fe_group' => 'fe_group',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_wssitemanager_hotels.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, fe_group, name, developers, servers, locked",
	)
);


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


t3lib_extMgm::addPlugin(array('LLL:EXT:wssitemanager/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY.'_pi1'),'list_type');


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi2']='layout,select_key';


t3lib_extMgm::addPlugin(array('LLL:EXT:wssitemanager/locallang_db.xml:tt_content.list_type_pi2', $_EXTKEY.'_pi2'),'list_type');


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi3']='layout,select_key';


t3lib_extMgm::addPlugin(array('LLL:EXT:wssitemanager/locallang_db.xml:tt_content.list_type_pi3', $_EXTKEY.'_pi3'),'list_type');


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi4']='layout,select_key';


t3lib_extMgm::addPlugin(array('LLL:EXT:wssitemanager/locallang_db.xml:tt_content.list_type_pi4', $_EXTKEY.'_pi4'),'list_type');
?>