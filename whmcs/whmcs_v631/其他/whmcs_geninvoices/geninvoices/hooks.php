<?php
if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

function geninvoices_hook_login($vars) {
    // Your code goes here
}

// Define Client Login Hook Call
#add_hook("ClientLogin",1,"geninvoices_hook_login");

function geninvoices_hook_logout($vars) {
    // Your code goes here
}

// Define Client Logout Hook Call
#add_hook("ClientLogout",1,"geninvoices_hook_logout");