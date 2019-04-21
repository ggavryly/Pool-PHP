<?php
include_once('Lannister.class.php');

Class Tyrion extends Lannister
{	
	public function sleepWith($xxx)
	{
		if ($xxx instanceof Lannister)
		{
			print("Not even if I'm drunk !".PHP_EOL);
		}
		else if ($xxx instanceof Stark)
		{
			if ($xxx instanceof Sansa)
			{
				print("Let's do this.".PHP_EOL);
			}
			else
			{
				print("Not even if I'm drunk !".PHP_EOL);
			}
		}
	}
}
?>