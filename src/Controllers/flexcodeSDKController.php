<?php

namespace idekite\flexcodesdk\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use flexcodesdk;
use Config;
use Event;

class flexcodeSDKController extends Controller
{
    public function status()
    {
    	$data = flexcodesdk::getDevice();
    	return $data;
    }

    public function ac()
    {
    	echo env('FLEXCODE_AC') . env('FLEXCODE_SN');
    }

    public function register($id)
    {
    	echo flexcodesdk::registerUrl($id);
    }

    public function save(Request $request, $id)
    {
    	$result = flexcodesdk::register($id, $request->input('RegTemp'));
        $response = Event::fire('fingerprints.register', array($result));
    }

    public function verify(Request $request, $id)
    {
    	$user = \App\User::findOrFail($id);
        echo flexcodesdk::verificationUrl($user, $request->all());
    }

    public function saveverify(Request $request, $id)
    {
    	$result = flexcodesdk::verify($id, $request->input('VerPas'));
        // set action for this verification, default to login
        $result['extras'] = $request->all();
        // Let's tell laravel result of our verification
        $response = Event::fire('fingerprints.verify', array($result));
    }

}