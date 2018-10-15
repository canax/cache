<?php
/**
 * Config file for the Anax Cache module.
 */
return [
    // Use for styling the menu
    //"basepath" => ANAX_APP_PATH . "/cache",
    "basepath" => ANAX_INSTALL_PATH . "/cache",

    // Default age until item expires
    "age" => 7 * 24 * 60 * 60,
];
