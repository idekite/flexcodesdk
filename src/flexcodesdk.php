<?php

namespace idekite\flexcodesdk;

use Config;

class flexcodesdk
{
    public static function getDevice()
    {
    	$data['device_name'] 		=  env('FLEXCODE_DEVICE');
    	$data['serial_number'] 		=  env('FLEXCODE_SN');
    	$data['verification_code'] 	=  env('FLEXCODE_VC');
    	$data['activation_code'] 	=  env('FLEXCODE_AC');
    	$data['verification_key'] 	=  env('FLEXCODE_VKEY');

    	return response()->json($data);
    }
}