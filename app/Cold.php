<?php

namespace app;


class Cold
{
	public function RandCold ($coldTemperature)
	{
		$rand = rand(1, 10);
		return $coldTemperature - $rand;
	}
}