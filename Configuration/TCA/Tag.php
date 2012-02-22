<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$locallang = 'LLL:EXT:hnm_blog/Resources/Private/Language/locallang.xml:';
$tagLabels = $locallang . 'domain.model.tag.';

$TCA['tx_hnmblog_domain_model_tag'] = array(
	'ctrl' => $TCA['tx_hnmblog_domain_model_tag']['ctrl'],
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			)
		),
		'name' => array(
			'exclude' => 0,
			'label' => $tagLabels . 'name',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim,required',
				'max' => 255,
			)
		),
		'posts' => array(
			'exclude' => 1,
			'label' => $tagLabels . 'posts',
			'config' => array(
				'type' => 'select',
				'maxitems' => 99999,
				'size' => 15,
				'foreign_table' => 'tx_hnmblog_domain_model_post',
				'MM' => 'tx_hnmblog_post_tag_mm',
				'MM_opposite_field' => 'tags',
			),
		),
	),
	'types' => array(
		'1' => array('showitem' => 'name, --div--;' . $locallang . 'tca.sheet.relations, posts'),
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);