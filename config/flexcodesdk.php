<?php

return [
	 /*
     * Set configuration for flexcode
     */

    'devices' => array(
        // add device here
        array(
            'name' 	=> env('FLEXCODE_DEVICE'),
            'sn' 	=> env('FLEXCODE_SN'),
            'vc'	=> env('FLEXCODE_VC'),
            'ac' 	=> env('FLEXCODE_AC'),
            'vkey' 	=> env('FLEXCODE_VKEY'),
        ),
    ),
];