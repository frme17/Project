<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Bastema",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "custom"   => [
            "title"      => "Standardtema",
            "class"      => "standard",
            "stylesheets" => [
                "css/custom.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "alternative"     =>  [
            "title"      => "Alternativt tema",
            "class"      => "alternativ",
            "stylesheets" => [
                "css/alternative.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],
    ]
];
