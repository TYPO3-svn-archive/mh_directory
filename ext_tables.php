<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Directory'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Directory');

$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi1';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/ControllerActions.xml');

t3lib_extMgm::addLLrefForTCAdescr('tx_mhdirectory_domain_model_company','EXT:mh_directory/Resources/Private/Language/locallang_csh_tx_mhdirectory_domain_model_company.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_mhdirectory_domain_model_company');
$TCA['tx_mhdirectory_domain_model_company'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_company',
		'label' 			=> 'company',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mhdirectory_domain_model_company.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_mhdirectory_domain_model_category','EXT:mh_directory/Resources/Private/Language/locallang_csh_tx_mhdirectory_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_mhdirectory_domain_model_category');
$TCA['tx_mhdirectory_domain_model_category'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:mh_directory/Resources/Private/Language/locallang_db.xml:tx_mhdirectory_domain_model_category',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mhdirectory_domain_model_category.gif'
	)
);

t3lib_extMgm::allowTableOnStandardPages('tx_mhdirectory_company_category_mm');
$TCA['tx_mhdirectory_company_category_mm'] = array (
	'ctrl' => array (
		'title'             => 'Company <-> Category',
		'label'				=> 'uid_local',
		'label_alt'			=> 'uid_foreign',
		'label_alt_force'	=> TRUE,
		'tstamp'            => 'tstamp',
		'crdate'            => 'crdate',
		'enablecolumns'     => array(
			'disabled' => 'hidden'
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/relation.gif'
	)
);

?>