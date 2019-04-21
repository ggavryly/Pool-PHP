<?php
Class Fighter
{
	private $remeslo;

	public function __construct($rem)
	{
		$this->remeslo = $rem;
	}
	public function get_remeslo()
	{
		return ($this->remeslo);
	}
}
?>