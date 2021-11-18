
<?php
/**
 * @package Starter Plugin
 * @version 1.0.0
 */
/*
Plugin Name: Starter Plugin
Description: Our CORE framework components, CLI commands, and any WordPress and/or theme functionality.
Author: Constructive
Version: 1.0.0
Author URI: https://constructive.co/
*/

#! /usr/bin/env php

use ConstructiveCore\ComponentCommand;
use Symfony\Component\Console\Application;

require 'vendor/autoload.php';

if ( defined( 'WP_CLI' ) && WP_CLI ) {
    require_once dirname( __FILE__ ) . '/cli/cli.php';
}

$app = new Application('Constructive Core Tool', "1.0");

$app->add(new ComponentCommand());

$app->run();