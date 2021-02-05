<?php
	class Robot2 implements RobotInterface
	{

		private $speed;
		private $height;
		private $weight;

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