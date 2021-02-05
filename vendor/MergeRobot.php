<?php
	class MergeRobot extends FactoryRobot implements RobotInterface
	{
		private object $factory;

		protected int $speed = 0;
		protected int $height = 0;
		protected int $weight = 0;


		public function __construct ()
		{
			$this->factory = new FactoryRobot();
		}

		public function addRobot($robotType)
		{
			if (is_array($robotType)){
				array_unshift($this->robots, $robotType);
			} elseif (is_object($robotType)){
				$this->robot_types[get_class($robotType)] = $this->factory->addType($robotType);
			}

			return $this->robots;
		}

		/**
		 * @return int
		 */
		public function getSpeed (): int
		{
			return $this->speed;
		}

		/**
		 * @return int
		 */
		public function getHeight (): int
		{
			return $this->height;
		}

		/**
		 * @return int
		 */
		public function getWeight (): int
		{
			return $this->weight;
		}
	}