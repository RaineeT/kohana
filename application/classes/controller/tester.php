<?php defined('SYSPATH') or die('No direct script access.');
/**
 *
 */
class Controller_Tester extends Controller
{
	public function action_index ()
	{
		$this->response->body('What Up!!!');
	}
}
