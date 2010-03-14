<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Company'	=> 'index, show, new, create, edit, update, delete',
		'Category'	=> 'index, new, list, create, edit, update, delete',
	),
	array(
		'Company'	=> 'new, show, edit',
		'Category'	=> 'new, edit',
	)
);
?>