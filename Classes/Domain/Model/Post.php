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
class Tx_HnmBlog_Domain_Model_Post extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $text;

	/**
	 * @var Tx_HnmBlog_Domain_Model_Blog
	 */
	protected $blog;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_HnmBlog_Domain_Model_Comment>
	 */
	protected $comments;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_HnmBlog_Domain_Model_Tag>
	 */
	protected $tags;

	/**
	 * @param string $title
	 * @return Tx_HnmBlog_Domain_Model_Post this
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
	 * @param string $text
	 * @return Tx_HnmBlog_Domain_Model_Post this
	 */
	public function setText($text) {
		$this->text = $text;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * @param Tx_HnmBlog_Domain_Model_Blog $blog
	 * @return Tx_HnmBlog_Domain_Model_Post this
	 */
	public function setBlog(Tx_HnmBlog_Domain_Model_Blog $blog) {
		$this->blog = $blog;
		return $this;
	}

	/**
	 * @return Tx_HnmBlog_Domain_Model_Blog
	 */
	public function getBlog() {
		return $this->blog;
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_HnmBlog_Domain_Model_Comment> $comments
	 * @return Tx_HnmBlog_Domain_Model_Post this
	 */
	public function setComments(Tx_Extbase_Persistence_ObjectStorage $comments) {
		$this->comments = $comments;
		return $this;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_HnmBlog_Domain_Model_Comment>
	 */
	public function getComments() {
		return $this->comments;
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_HnmBlog_Domain_Model_Tag> $tags
	 * @return Tx_HnmBlog_Domain_Model_Post this
	 */
	public function setTags(Tx_Extbase_Persistence_ObjectStorage $tags) {
		$this->tags = $tags;
		return $this;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_HnmBlog_Domain_Model_Tag>
	 */
	public function getTags() {
		return $this->tags;
	}
}
?>