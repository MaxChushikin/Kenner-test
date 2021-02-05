<?php
	spl_autoload_register(function ($class_name) {
		include 'vendor/' . $class_name . '.php';
	});

	$factory = new FactoryRobot();

	$factory->addType(new Robot1());

	$factory->addType(new Robot2());

	$factory->createRobot1(5);
	$factory->createRobot2(2);

	$merge_robot = new MergeRobot();
	$merge_robot->addRobot(new Robot2());
	$merge_robot->addRobot($factory->createRobot1(2));
	$merge_robot->addRobot($factory->createRobot2(5));

	echo '<pre style="background: #272727; padding: 10px 15px; color: #088000; text-align: left; font-size: 13px;">';
	var_dump ($merge_robot);
	echo '</pre>';
	die ();