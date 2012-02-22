<?php
/***************************************************************
*  Copyright notice
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
 * @copyright 	Copyright belongs to the respective authors
 * @license 	http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Tx_HnmBlog_Domain_Model_Blog extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_HnmBlog_Domain_Model_Post>
	 */
	protected $posts;

	/**
	 * @param string $title
	 * @return Tx_HnmBlog_Domain_Model_Blog this
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_HnmBlog_Domain_Model_Post> $posts
	 * @return Tx_HnmBlog_Domain_Model_Blog this
	 */
	public function setPosts(Tx_Extbase_Persistence_ObjectStorage $posts) {
		$this->posts = $posts;
		return $this;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_HnmBlog_Domain_Model_Post>
	 */
	public function getPosts() {
		return $this->posts;
	}
}
?>