<?php

namespace idekite\flexcodesdk;

use Config;

class flexcodesdk
{
    public static function getDevice()
    {
    	$data['device_name'] 		=  Config::get('FLEXCODE_DEVICE');
    	$data['serial_number'] 		=  Config::get('FLEXCODE_SN');
    	$data['verification_code'] 	=  Config::get('FLEXCODE_VC');
    	$data['activation_code'] 	=  Config::get('FLEXCODE_AC');
    	$data['verification_key'] 	=  Config::get('FLEXCODE_VKEY');

    	return response()->json($data);
    }
}