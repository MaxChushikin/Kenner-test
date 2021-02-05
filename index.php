<?php
	spl_autoload_register(function ($class_name) {
		try
		{
			if (!file_exists('vendor/' . $class_name . '.php')) {
				throw new Exception('Failed to open uploaded file');
			} else {
				include 'vendor/' . $class_name . '.php';
			}
		}
		catch (Exception $hi)
		{
			die("Class [ vendor/$class_name.php' ] is not exists");
		}
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

	$factory->addType($merge_robot);

	$res = reset($factory->createMergeRobot(1));

	echo '<pre style="background: #272727; padding: 10px 15px; color: #088000; text-align: left; font-size: 13px;">';
	var_dump ($res->getSpeed());
	var_dump ($res->getHeight());
	var_dump ($res->getWeight());
	echo '</pre>';
	die ();