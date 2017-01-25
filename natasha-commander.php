<?php

// Initialize the Composer autoloader
require 'vendor/autoload.php';

// Load commands
$commands = require 'config/commands.php';

// Read STDIN
$input = file_get_contents("php://stdin");

// Initialize and run the application
$app = new \Nxu\Natasha\CommandRunner($commands);
$app->execute($input);
