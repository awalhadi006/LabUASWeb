<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function indaex()
	{
        return view('/home');
	}
}
