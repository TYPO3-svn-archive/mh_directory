<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Martin Hesse <info@mh-dev.de>, MH-Dev. - Webdevelopment
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Controller for the company object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

// TODO: As your extension matures, you should use Tx_Extbase_MVC_Controller_ActionController as base class, instead of the ScaffoldingController used below.
class Tx_MhDirectory_Controller_CompanyController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_MhDirectory_Domain_Model_companyRepository
	 */
	protected $companyRepository;
	
	/**
	 * @var Tx_MhDirectory_Domain_Model_categoryRepository
	 */
	protected $categoryRepository;
	
	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		$this->companyRepository	= t3lib_div::makeInstance('Tx_MhDirectory_Domain_Repository_CompanyRepository');
		$this->categoryRepository	= t3lib_div::makeInstance('Tx_MhDirectory_Domain_Repository_CategoryRepository');
		
		#var_dump($this->settings);
		#var_dump($this->request);
		#var_dump($this->response);
	}
	
	/**
	 * index action
	 * 
	 * @return string The rendered index action
	 */
	public function indexAction() {
		$this->view->assign('companies', $this->companyRepository->findAll());
	}
	
	/**
	 * list action
	 *
	 * @return string The rendered list action
	 */
	public function listAction() {
	}
	
	/**
	 * edit action
	 *
	 * @return string The rendered edit action
	 */
	public function editAction() {
	}
	
	/**
	 * create action
	 *
	 * @return string The rendered create action
	 */
	public function createAction() {
	}
	
	
	/**
	 * show action
	 * 
	 * @param int $company_uid
	 * @return string The rendered show action
	 */
	public function showAction($company_uid = 1) {
		// findOneBy* (Magic)
		// findBy* (Magic)
		$company = $this->companyRepository->findOneByUid($company_uid);
		$this->view->assign('company', $company);
		#var_dump($company);
	}
}
?>