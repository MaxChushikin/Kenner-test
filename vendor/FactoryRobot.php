<?php
	class FactoryRobot
	{
		public $robot_types = [];
		protected $robots = [];

		public function addType ($robot)
		{
			return $this->robot_types[get_class($robot)] = $robot;
		}

		public function createRobot1 ($count)
		{
			return $this->createRobots($this->robot_types['Robot2'], $count);
		}

		public function createRobot2 ($count)
		{
			return $this->createRobots($this->robot_types['Robot2'], $count);
		}

		private function createRobots ($robot_type, $count)
		{
			$robots = [];

			for ($i = 1; $i <= $count; $i++) {
				$robots[] = clone $robot_type;
			}

			array_push($this->robots, $robots);

			return $robots;
		}
	}