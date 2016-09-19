<?php

namespace app;

class Water
{
	public $temperature;

	public function getTemperature ()
	{
		return $this->temperature;
	}

	public function changeTemperature($degree)
	{
		if($degree > $this->temperature) {
			$x = $degree - $this->temperature; // разница между температурой смешиваемых жидкостей
			$this->temperature = $this->temperature + $x;
			echo "Температура воды увеличится на " . $x . " градусов, и будет равна " . $this->temperature . "<br>";
		} elseif ($degree < $this->temperature) {
			$x = $this->temperature - $degree; // разница между температурой смешиваемых жидкостей
			$this->temperature = $this->temperature - $x;
			echo "Температура воды уменьшится на " . $x . " градусов, и будет равна " . $this->temperature . "<br>";
		} else {
			echo "Температура не поменялась";
		}
	}
}