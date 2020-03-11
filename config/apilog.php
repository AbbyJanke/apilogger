<?php

return [
    //currently supported drivers are 'db' and 'file'
    "driver" => "file",
    "filename" => "api-{Y-m-d}.log"

    // An array of request input data to be excluded from logs
    // recommended for passwords and information typically encrypted
    "exclude" => [
    	'password',
    	'password_confirmation'
    ]
];
