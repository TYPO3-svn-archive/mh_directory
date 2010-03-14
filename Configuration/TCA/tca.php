<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_mhdirectory_domain_model_company'] = array(
	'ctrl' => $TCA['tx_mhdirectory_domain_model_company']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'company,forename,lastname,address,logo,category'
	),
	'types' => array(
		'1' => array('showitem' => 'company,forename,lastname,address,logo,category')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'company' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_company.company',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'forename' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_company.forename',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'lastname' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_company.lastname',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'address' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_company.address',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'logo' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_company.logo',
			'config'  => array(
				'type'          => 'group',
				'internal_type' => 'file',
				'allowed'       => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size'      => 3000,
				'uploadfolder'  => 'uploads/pics',
				'show_thumbs'   => 1,
				'size'          => 1,
				'maxitems'      => 1,
				'minitems'      => 0
			)
		),
		'category' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_company.category',
			'config'  => array(
				'type' => 'inline',
				'size' => 10,
				'minitems' => 0,
				'maxitems' => 9999,
				'autoSizeMax' => 30,
				'multiple' => 1,
				'foreign_table' => 'tx_mhdirectory_company_category_mm',
				'foreign_field' => 'uid_local',
				'foreign_selector' => 'uid_foreign',
				'foreign_unique' => 'uid_foreign',
				'foreign_sortby' => 'sorting',
				'foreign_label' => 'uid_foreign',
				'appearance' => array(
					'useCombination' => 1,
					'useSortable' => 1,
					'collapse' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
	),
);

$TCA['tx_mhdirectory_domain_model_category'] = array(
	'ctrl' => $TCA['tx_mhdirectory_domain_model_category']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,description,image'
	),
	'types' => array(
		'1' => array('showitem' => 'title,description,image')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_category.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'description' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_category.description',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'image' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_category.logo',
			'config'  => array(
				'type'          => 'group',
				'internal_type' => 'file',
				'allowed'       => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size'      => 3000,
				'uploadfolder'  => 'uploads/pics',
				'show_thumbs'   => 1,
				'size'          => 1,
				'maxitems'      => 1,
				'minitems'      => 0
			)
		),
	),
);


$TCA['tx_mhdirectory_company_category_mm'] = array(
	'ctrl' => $TCA['tx_mhdirectory_company_category_mm']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden, uid_local, uid_foreign'
	),
	'types' => array(
		'1' => array('showitem' => 'hidden, uid_local, uid_foreign')
	),
	'columns' => array(
		'uid_local' => array(		
			'label'   => 'uid_local',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_mhdirectory_domain_model_company',
				'maxitems' => 1,
			)
		),
		'uid_foreign' => array(		
			'label'   => 'uid_foreign',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_mhdirectory_domain_model_category',
				'maxitems' => 1,
			)
		),
	),
);

?>