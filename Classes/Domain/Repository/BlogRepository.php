<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Jochen Rau <jochen.rau@typoplanet.de>
 *  (c) 2011 Bastian Waidelich <bastian@typo3.org>
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
 * A repository for blogs
 */
class Tx_HnmBlog_Domain_Repository_BlogRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * @param string $title
	 * @param integer $post
	 * @return Tx_Extbase_Persistence_QueryResultInterface
	 */
	public function findByTitleAndPost($title, $post) {
		$query = $this->createQuery();

		$query->matching(
			$query->logicalAnd(
				$query->like('title', '%' . $title . '%'),
				$query->contains('posts', $post)
			)
		)
			->setLimit(1)
			->setOrderings(array(
				'title' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
			));

		return $query->execute();
	}
}
?>