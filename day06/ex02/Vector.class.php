<?php
Class Vector
{
	private 	$x;
	private 	$y;
	private 	$z;
	private 	$w;
	public static $verbose = false;

	public static function doc()
	{
		return (file_get_contents("Vector.doc.txt"));
	}
	public function __construct(array $kaka)
	{
		if (array_key_exists("dest", $kaka) && is_a($kaka["dest"], Vertex))
		{
			$d = $kaka["dest"];
			if (array_key_exists("orig", $kaka) && is_a($kaka["orig"], Vertex))
			{
				$o = $kaka["orig"];
			}
			else
			{
				$o = new Vertex (array ("x" => 0, "y" => 0, "z" => 0, "w" => 1.0));
			}
			$this->x = $d->get_x() - $o->get_x();
			$this->y = $d->get_y() - $o->get_y();
			$this->z = $d->get_z() - $o->get_z();
			$this->w = $d->get_w() - $o->get_w();
			if (self::$verbose == true)
				echo ($this." constructed\n");
		}
		else
		{
			if (self::$verbose == true)
				echo "Vector constructed fail\n".self::doc();
			return false;
		}
	}
	public function	__destruct()
	{
		if (self::$verbose == true)
			echo ($this." destructed\n");
	}
	public function __toString()
	{
		$string = sprintf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f )", $this->x, $this->y, $this->z, $this->w);
		return ($string);
	}
	public function get_x()
	{
		return ($this->x);
	}
	public function get_y()
	{
		return ($this->y);
	}
	public function get_z()
	{
		return ($this->z);
	}
	public function get_w()
	{
		return ($this->w);
	}
	public function magnitude()
	{
		return (sqrt(pow($this->x, 2) + pow($this->y, 2) + pow($this->z, 2)));
	}
	public function normalize()
	{
		$len_vec = abs($this->magnitude());
		return (new Vector(array ("dest" => new Vertex(array("x" => $this->x / $len_vec, "y" => $this->y / $len_vec, "z" => $this->z / $len_vec)))));
	}
	public function add(Vector $test)
	{
		return (new Vector(array ("dest" => new Vertex(array("x" => $this->x + $test->x, "y" => $this->y + $test->y, "z" => $this->z + $test->z)))));
	}
	public function sub(Vector $test)
	{
		return (new Vector(array ("dest" => new Vertex(array("x" => $this->x - $test->x, "y" => $this->y - $test->y, "z" => $this->z - $test->z)))));
	}
	public function opposite()
	{
		return (new Vector(array ("dest" => new Vertex(array("x" => -$this->x, "y" => -$this->y, "z" => -$this->z)))));
	}
	public function scalarProduct($test)
	{
		return (new Vector(array ("dest" => new Vertex(array("x" => $this->x * $test, "y" => $this->y * $test, "z" => $this->z * $test)))));
	}
	public function dotProduct(Vector $test)
	{
		return (($this->x * $test->x) + ($this->y * $test->y) + ($this->z * $test->z));
	}
	public function cos(Vector $test)
	{
		$ths_len = $this->magnitude();
		$test_len = $test->magnitude();
		return ($this->dotProduct($test) / ($ths_len * $test_len));
	}
	public function crossProduct(Vector $test)
	{
		return (new Vector(array ("dest" => new Vertex(array("x" => ($this->_y * $rhs->_z) - ($this->_z * $rhs->_y),
			"y" => ($this->_z * $rhs->_x) - ($this->_x * $rhs->_z),
			"z" => ($this->_x * $rhs->_y) - ($this->_y * $rhs->_x))))));
	}
}
?>
