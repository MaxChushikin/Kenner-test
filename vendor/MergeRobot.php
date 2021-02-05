<?php
	class MergeRobot extends FactoryRobot implements RobotInterface
	{
		private object $factory;

		public function __construct ()
		{
			$this->factory = new FactoryRobot();
		}

		public function addRobot($robotType)
		{
			$this->robot_types[get_class($robotType)] = $this->factory->addType($robotType);

			return $this->robots;
		}

		public function getSpeed ()
		{
			// TODO: Implement getSpeed() method.
		}

		public function getHeight ()
		{
			// TODO: Implement getHeight() method.
		}

		public function getWeight ()
		{
			// TODO: Implement getWeight() method.
		}
	}