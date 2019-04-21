<?php
include_once("IFighter.class.php");

Class NightsWatch implements IFighter
{
	private $legion = array();

	public function recruit($boez)
	{
		$this->legion[] = $boez;
	}
	public function fight()
	{
		foreach ($this->legion as $boez)
		{
			if (method_exists($boez, "fight"))
			{
				$boez->fight();
			}
		}
	}
}

?>