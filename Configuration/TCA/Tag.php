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
	),
	'types' => array(
		'1' => array('showitem' => 'name, --div--;' . $locallang . 'tca.sheet.relations'),
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);