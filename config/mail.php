<?php

return array(
    "driver" => "smtp",
    "host" => "smtp.gmail.com",
    "port" => 587,
    "from" => array(
        "address" => "ndapakistan@gmail.com",
        "name" => "National Design Awards"
    ),
    "encryption"=>"tls",
    "username" => "ndapakistan@gmail.com",
    "password" => "iyegrvghpynzawih",
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false,
);
