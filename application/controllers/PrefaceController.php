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

class PrefaceController extends BaseController{
	
//set the main content value
	public function getIndex()
	{
		View::render('preface/preface');
	}

}
