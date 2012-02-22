<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$locallang = 'LLL:EXT:hnm_blog/Resources/Private/Language/locallang.xml:';
$blogLabels = $locallang . 'domain.model.blog.';

$TCA['tx_hnmblog_domain_model_blog'] = array(
	'ctrl' => $TCA['tx_hnmblog_domain_model_blog']['ctrl'],
	'columns' => array(
		
		/**
		 * localising
		 */
		'sys_language_uid' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => Array(
					Array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					Array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => Array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_hnmblog_domain_model_blog',
				'foreign_table_where' => 'AND tx_hnmblog_domain_model_blog.uid=###REC_FIELD_l18n_parent### AND tx_hnmblog_domain_model_blog.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => Array(
			'config'=>array(
				'type'=>'passthrough'
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			)
		),
		'title' => array(
			'exclude' => 0,
			'label' => $blogLabels . 'title',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim,required',
				'max' => 255,
			)
		),
		'posts' => array(
			'exclude' => 1,
			'label' => $blogLabels . 'posts',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_blogexample_domain_model_post',
				'foreign_field' => 'blog',
				'foreign_sortby' => 'sorting',
				'maxitems' => 99999,
				'appearance' => array(
					'collapseAll' => 1,
					'expandSingle' => 1,
				),
			),
		),
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid, title, --div--;' . $locallang . 'tca.sheet.relations, posts'),
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);