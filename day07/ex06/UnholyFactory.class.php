<?php
include_once("Fighter.class.php");

Class UnholyFactory
{
	private $legion = array();

	public function absorb($boez)
	{
		if ($boez instanceof Fighter)
		{
			if (isset($this->legion[$boez->get_remeslo()]))
			{
				print("(Factory already absorbed a fighter of type ".$boez->get_remeslo().")".PHP_EOL);
			}
			else
			{
				$this->legion[$boez->get_remeslo()] = $boez;
				print("(Factory absorbed a fighter of type ".$boez->get_remeslo().")".PHP_EOL);
			}
		}
		else
		{
			print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
		}
	}
	public function fabricate($boez)
	{
		if (array_key_exists($boez, $this->legion))
		{
			print("(Factory fabricates a fighter of type ".$boez.")".PHP_EOL);
			return (clone $this->legion[$boez]);
		}
		else
			print("(Factory hasn't absorbed any fighter of type ".$boez.")".PHP_EOL);
		return (NULL);
	}
}
?>