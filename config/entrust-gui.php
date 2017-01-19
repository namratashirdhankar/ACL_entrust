<?php
return [
    "layout" => "entrust-gui::app",
    "route-prefix" => "admin",
    //"route-prefix" => "entrust-gui",

    "pagination" => [
        "users" => 5,
        "roles" => 5,
        "permissions" => 5,
    ],
    "middleware" => ['web', 'entrust-gui.admin'],
    "unauthorized-url" => '/login',
    "middleware-role" => 'admin',
    "confirmable" => true,
    "users" => [
      'fieldSearchable' => [],
    ],
];
