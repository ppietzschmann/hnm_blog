<?php

########################################################################
# Extension Manager/Repository config file for ext "hnm_blog".
#
# Auto generated 21-02-2012 13:47
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Haus Neuer Medien Blog',
	'description' => 'An Blog based on Extbase.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 'extbase',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Felix Oertel',
	'author_email' => 'felix@oer.tel',
	'author_company' => 'f.oer.tel Schulung',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3.0-1.3.99',
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.5.0-4.5.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:10:{s:12:"ext_icon.gif";s:4:"8c8e";s:17:"ext_localconf.php";s:4:"13ea";s:14:"ext_tables.php";s:4:"09ec";s:38:"Classes/Controller/StartController.php";s:4:"15ae";s:30:"Classes/Domain/Model/Start.php";s:4:"9051";s:40:"Resources/Private/Language/locallang.xml";s:4:"ca47";s:44:"Resources/Private/Layouts/defaultLayout.html";s:4:"98dc";s:42:"Resources/Private/Partials/formErrors.html";s:4:"669f";s:44:"Resources/Private/Templates/Start/Index.html";s:4:"4826";s:14:"doc/manual.sxw";s:4:"f02d";}',
	'suggests' => array(
	),
);

?>