<?php
include_once('Lannister.class.php');

Class Jaime extends Lannister
{
	public function sleepWith($xxx)
	{
		if ( $xxx instanceof Lannister)
		{
			if ($xxx instanceof Tyrion)
			{
				print("Not even if I'm drunk !".PHP_EOL);
			}
			else if ($xxx instanceof Cersei)
			{
				print("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
			}
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