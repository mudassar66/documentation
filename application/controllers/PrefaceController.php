<?php namespace Controllers;

/**
 *This class loads the purchase history for all user types.
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Marketplace
 *@package Marketplace\Controllers\Home
 *@link mobeoffice.com
 */

use Helpers\View;

class PrefaceController extends BaseController {
	
	/**
	 *This method loads the view page for the preface
	 *
	 *@param null
	 *@return void
	 */
	public function getIndex()
	{
		//load the view page
		View::render('preface/preface');
		
	}

}
