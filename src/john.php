#!/usr/bin/env php
<?php 

/**
 * John - github repo dependency generator for normal people.
 *
 * @author     BenLowery <benloweryweb@gmail.com>
 * @copyright  2015 BenLowery
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 * @version    @0.9
*/

require 'vendor/autoload.php';
use app\John;
	
	$app = new John();
	
	$app->LoadCommands();