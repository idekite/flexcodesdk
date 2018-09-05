<?php

namespace idekite\flexcodesdk\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use flexcodesdk;

class flexcodeSDKController extends Controller
{
    public function test_controller()
    {
    	echo "aku di controller lo";
    }

    public function test_facade()
    {
    	$data = flexcodesdk::getDevice();
    	return $data;
    }
}
