<?php

	include "vendor/FactoryRobot.php";
	include "vendor/Robot1.php";
	include "vendor/Robot2.php";

	$factory = new FactoryRobot();

	$factory->addType(new Robot1());
	$factory->addType(new Robot2());

	echo '<pre style="background: #272727; padding: 10px 15px; color: #088000; text-align: left; font-size: 13px;">';
	    var_dump ($factory->createRobot1(5));
	echo '</pre>';
	die ();