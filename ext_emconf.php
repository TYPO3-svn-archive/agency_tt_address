<?php

########################################################################
# Extension Manager/Repository config file for ext "agency_tt_address".
#
# Auto generated 28-04-2012 11:27
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Agency Registration for tt_address',
	'description' => 'An address and newsletter subscription variant of the Agency Registration.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.0.2',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'tt_address',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Franz Holzinger',
	'author_email' => 'franz@ttproducts.de',
	'author_company' => 'jambage.com',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-5.4.99',
			'typo3' => '4.4.0-6.2.99',
			'agency' => '0.1.2-',
			'tt_address' => '2.2.0-',
			'div2007' => '1.0.3-',
		),
		'conflicts' => array(
			'sr_feuser_register' => '',
			'sr_email_subscribe' => '',
		),
		'suggests' => array(
			'sr_freecap' => '1.5.3-',
		),
	),
	'_md5_values_when_last_written' => 'a:22:{s:9:"ChangeLog";s:4:"5fa5";s:16:"contributors.txt";s:4:"ff50";s:16:"ext_autoload.php";s:4:"fd00";s:21:"ext_conf_template.txt";s:4:"fcd3";s:12:"ext_icon.gif";s:4:"8d58";s:17:"ext_localconf.php";s:4:"4824";s:14:"ext_tables.php";s:4:"d53f";s:14:"ext_tables.sql";s:4:"81cc";s:13:"locallang.xml";s:4:"5ee3";s:16:"locallang_db.xml";s:4:"a9ae";s:14:"doc/manual.sxw";s:4:"ad32";s:45:"hooks/class.tx_agencyttaddress_hooks_cms.php";s:4:"b51e";s:37:"pi1/class.tx_agencyttaddress_pi1.php";s:4:"e7ca";s:42:"pi1/class.tx_sremailsubscribe_pi1_base.php";s:4:"1051";s:23:"pi1/flexform_ds_pi1.xml";s:4:"5230";s:19:"pi1/icon_delete.gif";s:4:"f914";s:17:"pi1/locallang.xml";s:4:"72ec";s:41:"pi1/tx_sremailsubcribe_htmlmail_xhtml.css";s:4:"01ea";s:41:"pi1/tx_sremailsubscribe_pi1_css_tmpl.html";s:4:"2d4a";s:38:"pi1/tx_sremailsubscribe_pi1_sample.txt";s:4:"2954";s:31:"static/css_styled/constants.txt";s:4:"a196";s:27:"static/css_styled/setup.txt";s:4:"5097";}',
	'suggests' => array(
	),
);

?>
