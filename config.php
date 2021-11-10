<?php

/**
 * Configuration for database connection
 *
 */

$host       = "mysql";
$username   = "db1";
$password   = "db1";
$dbname     = "db1";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
