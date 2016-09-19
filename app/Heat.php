<?php
/**
 * Created by PhpStorm.
 * User: one
 * Date: 19.09.2016
 * Time: 14:34
 */

namespace app;


class Heat
{
	public function RandHead ($headTemperature)
	{
		$rand = rand(1, 10);
		return $headTemperature + $rand;
	}
}