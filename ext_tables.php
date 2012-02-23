<?php

if (!defined ('TYPO3_MODE')) die ('Access denied.');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'HNM Blog Setup');

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY,'Display','LLL:EXT:hnm_blog/Resources/Private/Language/locallang.xml:plugin.display.name');

t3lib_extMgm::allowTableOnStandardPages('tx_hnmblog_domain_model_blog');
$TCA['tx_hnmblog_domain_model_blog'] = array (
	'ctrl' => array (
		'title'    => 'LLL:EXT:hnm_blog/Resources/Private/Language/locallang.xml:domain.model.blog',
		'label' => 'title',
		'label_alt' => 'uid',
		'label_alt_force' => TRUE,
		'dividers2tabs' => TRUE,
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
			// record type für single table inheritance
		// 'type' => 'record_type',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Blog.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif'
	)
);

t3lib_extMgm::allowTableOnStandardPages('tx_hnmblog_domain_model_post');
$TCA['tx_hnmblog_domain_model_post'] = array (
	'ctrl' => array (
		'title'    => 'LLL:EXT:hnm_blog/Resources/Private/Language/locallang.xml:domain.model.post',
		'label' => 'title',
		'label_alt' => 'uid',
		'label_alt_force' => TRUE,
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'dividers2tabs' => TRUE,
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Post.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif'
	)
);

t3lib_extMgm::allowTableOnStandardPages('tx_hnmblog_domain_model_comment');
$TCA['tx_hnmblog_domain_model_comment'] = array (
	'ctrl' => array (
		'title'    => 'LLL:EXT:hnm_blog/Resources/Private/Language/locallang.xml:domain.model.comment',
		'label' => 'bodytext',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'dividers2tabs' => TRUE,
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Comment.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif'
	)
);

t3lib_extMgm::allowTableOnStandardPages('tx_hnmblog_domain_model_tag');
$TCA['tx_hnmblog_domain_model_tag'] = array (
	'ctrl' => array (
		'title'    => 'LLL:EXT:hnm_blog/Resources/Private/Language/locallang.xml:domain.model.tag',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'dividers2tabs' => TRUE,
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Tag.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif'
	)
);
?>