<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA["tx_wssitemanager_domainaliases"] = array (
	"ctrl" => $TCA["tx_wssitemanager_domainaliases"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "name,domain"
	),
	"feInterface" => $TCA["tx_wssitemanager_domainaliases"]["feInterface"],
	"columns" => array (
		"name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_domainaliases.name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"domain" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_domainaliases.domain",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_wssitemanager_domains",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "name;;;;1-1-1, domain")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_wssitemanager_domains"] = array (
	"ctrl" => $TCA["tx_wssitemanager_domains"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "hidden,name,hotel"
	),
	"feInterface" => $TCA["tx_wssitemanager_domains"]["feInterface"],
	"columns" => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		"name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_domains.name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"hotel" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_domains.hotel",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_wssitemanager_hotels",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "hidden;;1;;1-1-1, name, hotel")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_wssitemanager_servers"] = array (
	"ctrl" => $TCA["tx_wssitemanager_servers"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "name,host,sshuser,dbuser,dbpass,dir,type,closed"
	),
	"feInterface" => $TCA["tx_wssitemanager_servers"]["feInterface"],
	"columns" => array (
		"name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"host" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.host",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"sshuser" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.sshuser",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"dbuser" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.dbuser",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"dbpass" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.dbpass",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"dir" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.dir",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.type",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.type.I.0", "1"),
					Array("LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.type.I.1", "2"),
					Array("LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.type.I.2", "3"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"closed" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_servers.closed",		
			"config" => Array (
				"type" => "check",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "name;;;;1-1-1, host, sshuser, dbuser, dbpass, dir, type, closed")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_wssitemanager_hotels"] = array (
	"ctrl" => $TCA["tx_wssitemanager_hotels"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "hidden,fe_group,name,developers,servers,locked"
	),
	"feInterface" => $TCA["tx_wssitemanager_hotels"]["feInterface"],
	"columns" => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'fe_group' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.fe_group',
			'config'  => array (
				'type'  => 'select',
				'items' => array (
					array('', 0),
					array('LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2),
					array('LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--')
				),
				'foreign_table' => 'fe_groups'
			)
		),
		"name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_hotels.name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"developers" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_hotels.developers",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "fe_users",	
				"size" => 4,	
				"minitems" => 0,
				"maxitems" => 99,
			)
		),
		"servers" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_hotels.servers",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_wssitemanager_servers",	
				"size" => 5,	
				"minitems" => 0,
				"maxitems" => 99,	
				"MM" => "tx_wssitemanager_hotels_servers_mm",
			)
		),
		"locked" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wssitemanager/locallang_db.xml:tx_wssitemanager_hotels.locked",		
			"config" => Array (
				"type" => "check",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "hidden;;1;;1-1-1, name, developers, servers, locked")
	),
	"palettes" => array (
		"1" => array("showitem" => "fe_group")
	)
);
?>