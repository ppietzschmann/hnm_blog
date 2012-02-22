<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$locallang = 'LLL:EXT:hnm_blog/Resources/Private/Language/locallang.xml:';
$postLabels = $locallang . 'domain.model.post.';

$TCA['tx_hnmblog_domain_model_post'] = array(
	'ctrl' => $TCA['tx_hnmblog_domain_model_post']['ctrl'],
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
			'label' => $postLabels . 'title',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim,required',
				'max' => 255,
			)
		),
		'bodytext' => array(
			'exclude' => 0,
			'label' => $postLabels . 'text',
			'config' => array(
				'type' => 'text',
				'rows' => 5,
				'cols' => 35,
			)
		),
		'comments' => array(
			'exclude' => 0,
			'label' => $postLabels . 'comments',
			'config' => array(
				'type' => 'inline',
				'maxitems' => 99999,
				'size' => 15,
				'foreign_table' => 'tx_hnmblog_domain_model_comment',
				'foreign_field' => 'post',
			),
		),
		'tags' => array(
			'exclude' => 0,
			'label' => $postLabels . 'tags',
			'config' => array(
				'type' => 'select',
				'maxitems' => 99999,
				'size' => 15,
				'foreign_table' => 'tx_hnmblog_domain_model_tag',
				'MM' => 'tx_hnmblog_post_tag_mm',
			),
		),
		'blog' => array(
			'exclude' => 0,
			'label' => $postLabels . 'blog',
			'config' => array(
				'type' => 'select',
				'maxitems' => 1,
				'foreign_table' => 'tx_hnmblog_domain_model_blog'
			),
		),
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid, title, bodytext, --div--;' . $locallang . 'tca.sheet.relations, blog, tags, comments'),
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);