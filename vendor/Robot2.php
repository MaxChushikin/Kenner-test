<?php
	class Robot2 implements RobotInterface
	{
		private int $speed = 33;
		private int $height = 33;
		private int $weight = 33;

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