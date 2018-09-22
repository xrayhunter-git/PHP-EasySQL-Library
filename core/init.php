<?php
    // Remembers old data over the session.
    session_start();

    // Generates a configuration.
    $GLOBALS['config'] = array(
        /*'mysql' => array(
            'host' => '127.0.0.1',
            'port' => 3306,
            'username' => 'root',
            'password' => '',
            'database' => 'githubTest'
        )*/
    );
    
    // Auto-loads all the class modules.
    spl_autoload_register(function($class) {
        require_once "lib/" . $class . ".php";
    });
?>