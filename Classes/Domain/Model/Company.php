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
 * Companies
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_MhDirectory_Domain_Model_Company extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Company
	 * @var string
	 * @validate NotEmpty
	 */
	protected $company;
	
	/**
	 * Forename
	 * @var string
	 * @validate NotEmpty
	 */
	protected $forename;
	
	/**
	 * Lastname
	 * @var string
	 * @validate NotEmpty
	 */
	protected $lastname;
	
	/**
	 * Address
	 * @var string
	 * @validate NotEmpty
	 */
	protected $address;
	
	/**
	 * category
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_MhDirectory_Domain_Model_category>
	 */
	protected $category;
	
	
	
	/**
	 * Setter for company
	 *
	 * @param string $company Company
	 * @return void
	 */
	public function setCompany($company) {
		$this->company = $company;
	}

	/**
	 * Getter for company
	 *
	 * @return string Company
	 */
	public function getCompany() {
		return $this->company;
	}
	
	/**
	 * Setter for forename
	 *
	 * @param string $forename Forename
	 * @return void
	 */
	public function setForename($forename) {
		$this->forename = $forename;
	}

	/**
	 * Getter for forename
	 *
	 * @return string Forename
	 */
	public function getForename() {
		return $this->forename;
	}
	
	/**
	 * Setter for lastname
	 *
	 * @param string $lastname Lastname
	 * @return void
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * Getter for lastname
	 *
	 * @return string Lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}
	
	/**
	 * Setter for address
	 *
	 * @param string $address Address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Getter for address
	 *
	 * @return string Address
	 */
	public function getAddress() {
		return $this->address;
	}
	
	/**
	 * Setter for category
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_MhDirectory_Domain_Model_category> $category category
	 * @return void
	 */
	public function setCategory(Tx_Extbase_Persistence_ObjectStorage $category) {
		$this->category = $category;
	}

	/**
	 * Getter for category
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_MhDirectory_Domain_Model_category> category
	 */
	public function getCategory() {
		return $this->category;
	}
	
	/**
	 * Adds a Category
	 *
	 * @param Tx_MhDirectory_Domain_Model_category The Category to be added
	 * @return void
	 */
	public function addCategory(Tx_MhDirectory_Domain_Model_Category $category) {
		$this->category->attach($category);
	}
	
	/**
	 * Removes a Category
	 *
	 * @param Tx_MhDirectory_Domain_Model_category The Category to be removed
	 * @return void
	 */
	public function removeCategory(Tx_MhDirectory_Domain_Model_Category $category) {
		$this->category->detach($category);
	}
	
}
?>