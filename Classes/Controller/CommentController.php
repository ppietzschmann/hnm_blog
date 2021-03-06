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
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Tx_HnmBlog_Controller_CommentController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @param Tx_HnmBlog_Domain_Model_Post $post
	 * @param Tx_HnmBlog_Domain_Model_Comment $newComment
	 * @dontvalidate $newComment
	 * @return void
	 */
	public function newAction(Tx_HnmBlog_Domain_Model_Post $post = NULL, Tx_HnmBlog_Domain_Model_Comment $newComment = NULL) {
		$this->view->assign('post', $post);
		$this->view->assign('newComment', $newComment);
	}

	/**
	 * @param Tx_HnmBlog_Domain_Model_Comment $newComment
	 * @return void
	 */
	public function createAction(Tx_HnmBlog_Domain_Model_Comment $newComment) {
		$this->objectManager
			->get('Tx_HnmBlog_Domain_Repository_CommentRepository')
				->add($newComment);
		$this->redirect('show', 'Post', NULL, array('post' => $newComment->getPost()));
	}

}
?>