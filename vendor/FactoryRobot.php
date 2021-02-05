<?php
	class FactoryRobot
	{
		public $robot_types = [];

		public function addType ($robot)
		{
			$class = get_class($robot);

			return $this->robot_types[$class] = [
				'robot_obj' => $robot,
				'count'		=> 0
			];
		}

		public function createRobot1 ($count)
		{
			$class = 'Robot1';
			$this->robot_types[$class]['count'] = $count;

			return $this->robot_types['Robot1'];
		}

		public function createRobot2 ($count)
		{
			$class = 'Robot2';
			$this->robot_types[$class]['count'] = $count;

			return $this->robot_types['Robot1'];
		}
	}