<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$locallang = 'LLL:EXT:hnm_blog/Resources/Private/Language/locallang.xml:';
$commentLabels = $locallang . 'domain.model.comment.';

$TCA['tx_hnmblog_domain_model_comment'] = array(
	'ctrl' => $TCA['tx_hnmblog_domain_model_comment']['ctrl'],
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			)
		),
		'bodytext' => array(
			'exclude' => 0,
			'label' => $commentLabels . 'text',
			'config' => array(
				'type' => 'text',
				'rows' => 5,
				'cols' => 35,
			)
		),
		'post' => array(
			'exclude' => 1,
			'label' => $commentLabels . 'post',
			'config' => array(
				'type' => 'input',
			),
		),
	),
	'types' => array(
		'1' => array('showitem' => 'bodytext, --div--;' . $locallang . 'tca.sheet.relations, post'),
	),
);