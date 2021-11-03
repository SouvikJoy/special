<?php
/*
 * Copyright (c) 2021. Debugger Tech
 * All Rights Reserved.
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class Index extends Controller
{
	public function __invoke()
	{
        return view('welcome');
	}
}
