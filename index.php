<?php
	spl_autoload_register(function ($class_name) {
		include 'vendor/' . $class_name . '.php';
	});

	$factory = new FactoryRobot();

	$factory->addType(new Robot1(11, 11, 11));

	$factory->addType(new Robot2(22, 22, 22));

	$factory->createRobot1(5);
	$factory->createRobot2(2);

//	$merge_robot = new MergeRobot();
//	$merge_robot->addRobot(new Robot2(22, 22, 22));
//	$merge_robot->addRobot($factory->createRobot1(2));