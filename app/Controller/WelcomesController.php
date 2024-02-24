<?php
App::uses('Sanitize', 'Utility');

class WelcomesController extends AppController
{
	public function beforeFilter()
	{
		parent::beforeFilter();
	}

	public function index()
	{
		$messege='welcome!';
		$this->set("msg",$messege);
		return;
	}
}
