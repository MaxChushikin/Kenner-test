<?php
	class FactoryRobot
	{
		protected array $robot_types = [];
		protected array $robots = [];

		public function addType ($robot)
		{
			return $this->robot_types[get_class($robot)] = $robot;
		}

		public function __call ($name, $arguments)
		{
			if (strpos($name, 'create') !== false && isset($arguments[0])){
				$robot_type = str_replace('create', '', $name);

				return $this->createRobots($this->robot_types[$robot_type], $arguments[0]);
			}
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


		public function createMergeRobot ()
		{
			foreach ($this->robot_types['MergeRobot']->robots as $one_type_robots){
				$count = count($one_type_robots);
				$robot = reset($one_type_robots);

				$this->robot_types['MergeRobot']->speed = ($this->robot_types['MergeRobot']->getSpeed() == 0 || $this->robot_types['MergeRobot']->speed > $robot->getSpeed()) ? $robot->getSpeed() : $this->robot_types['MergeRobot']->getSpeed();
				$this->robot_types['MergeRobot']->height += ($count * $robot->getHeight());
				$this->robot_types['MergeRobot']->weight += ($count * $robot->getWeight());
			}
			return array_reverse($this->robot_types);
		}
	}