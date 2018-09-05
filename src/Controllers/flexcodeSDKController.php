<?php

namespace idekite\flexcodesdk\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use flexcodesdk;

class flexcodeSDKController extends Controller
{
    public function status()
    {
    	$data = flexcodesdk::getDevice();
    	return $data;
    }
}
