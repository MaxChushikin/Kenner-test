<?php

	include "vendor/FactoryRobot.php";
	include "vendor/Robot1.php";
	include "vendor/Robot2.php";
	include "vendor/MergeRobot.php";

	$factory = new FactoryRobot();

	$factory->addType(new Robot1(11, 11, 11));

	$factory->addType(new Robot2(22, 22, 22));

	echo '<pre style="background: #272727; padding: 10px 15px; color: #088000; text-align: left; font-size: 13px;">';
	    var_dump ($factory->createRobot1(5));
	    var_dump ($factory->createRobot2(2));
	echo '</pre>';

	$merge_robot = new MergeRobot();
	$merge_robot->addRobot(new Robot2(22, 22, 22));
	$merge_robot->addRobot($factory->createRobot1(2));

	echo '<pre style="background: #272727; padding: 10px 15px; color: #088000; text-align: left; font-size: 13px;">';
	    var_dump ($merge_robot);
	echo '</pre>';
	die ();