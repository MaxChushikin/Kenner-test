<?php
	class Robot1 implements RobotInterface
	{
		private int $speed = 22;
		private int $height = 22;
		private int $weight = 22;

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