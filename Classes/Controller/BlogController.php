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
class Tx_HnmBlog_Controller_BlogController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_HnmBlog_Domain_Repository_BlogRepository
	 */
	protected $blogRepository;

	/**
	 * @param Tx_HnmBlog_Domain_Repository_BlogRepository $blogRepository
	 */
	public function injectRepository(Tx_HnmBlog_Domain_Repository_BlogRepository $blogRepository) {
		$this->blogRepository = $blogRepository;
	}

	/**
	 * Index action for this controller.
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('blogs', $this->blogRepository->findAll());
	}

	/**
	 * @param Tx_HnmBlog_Domain_Model_Blog $blog
	 * @return void
	 */
	public function showAction(Tx_HnmBlog_Domain_Model_Blog $blog) {
		$this->view->assign('blog', $blog);
	}

	/**
	 * @param integer $foo
	 * @return string
	 */
	public function ajaxAction($foo = 0) {
		var_dump($foo);die();
		$this->view->assign('blogs', $this->blogRepository->findAll());
	}
}
?>