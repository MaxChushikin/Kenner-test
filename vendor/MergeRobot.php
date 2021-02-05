<?php

	class MergeRobot extends FactoryRobot
	{
		private $factory;

		public function addRobot($robotType)
		{
			$this->robot_types[get_class($robotType)] = $this->factory->addType($robotType);

			return $this->robots;
		}
	}