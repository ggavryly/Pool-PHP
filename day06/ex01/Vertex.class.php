<?php
Class Vertex
{
	public static $verbose = False;
	private $x;
	private $y;
	private $z;
	private $w;
	private $color;

	public static function doc()
	{
		return (file_get_contents("Vertex.doc.txt"));
	}
	public function __construct(array $kaka)
	{
		if (array_key_exists("x", $kaka) && array_key_exists("y", $kaka) && array_key_exists("z", $kaka))
		{
			$this->x = (float)$kaka["x"];
			$this->y = (float)$kaka["y"];
			$this->z = (float)$kaka["z"];
			if (array_key_exists("w", $kaka))
			{
				$this->w = (float)$kaka["w"];
			}
			else
			{
				$this->w = 1.00;
			}
			if (array_key_exists("color", $kaka) && is_a($kaka["color"], Color))
			{
				$this->color = $kaka["color"];
			}
			else
			{
				$this->color = new Color(array('rgb' => 0xffffff));
			}
			if (self::$verbose == true)
			{
				echo $this."constructed\n";
			}
		}
		else
		{
			if (self::$verbose == true)
			{
				echo ("Vertex constructed fail\n".self::doc());
			}
			return false;
		}
	}
	public function	__destruct()
	{
		if (self::$verbose == TRUE)
			echo ($this." destructed\n");
	}
	public function	get_x()
	{ 
		return ($this->x); 
	}
	public function	set_x($x) 
	{ 
		$this->x = (float)$x; 
	}
	public function	get_y() 
	{ 
		return ($this->y); 
	}
	public function	set_y($y) 
	{
		$this->y = (float)$y; 
	}
	public function	get_z() 
	{ 
		return ($this->z); 
	}
	public function	set_z($z) {
		$this->z = (float)$z; 
	}
	public function	get_w() 
	{
		return ($this->w); 
	}
	public function	set_w($w) 
	{
		$this->w = (float)$w; 
	}
	public function	get_color() 
	{
		return ($this->color); 
	}
	public function	set_color(Color $color) 
	{ 
		$this->color = $color; 
	}
	public function __toString()
	{
		$string = sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f ", $this->x, $this->y, $this->z, $this->w);
		if (self::$verbose)
		{
			$string .= ", ".$this->color;
		}
		$string .= " )";
		return ($string);
	}
}
?>

