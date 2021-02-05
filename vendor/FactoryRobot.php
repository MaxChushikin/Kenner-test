<?php
	class FactoryRobot
	{
		public $robot_types = [];

		public function addType ($robot)
		{
			return $this->robot_types[] = $robot;
		}
	}