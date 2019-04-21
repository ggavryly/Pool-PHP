<?php
Class Color {
	public static $verbose = False;
	public $red = -1;
	public $blue = -1;
	public $green = -1;

	public static function no_limit($zivra)
	{
		if ($zivra > 255)
			return (255);
		else if ($zivra < 0)
			return (0);
		return ($zivra);
	}
	public function __construct(array $kaka)
	{
		if (array_key_exists("rgb", $kaka))
		{
			$rgb = intval($kaka["rgb"], 0);
			$this->red = self::no_limit(($rgb / (256*256)) % 256);
			$this->green = self::no_limit(($rgb / 256) % 256);
			$this->blue = self::no_limit($rgb % 256);
		}
		else
		{
			if (array_key_exists("red", $kaka))
			{
				$this->red = self::no_limit(intval($kaka["red"], 0));
			}
			if (array_key_exists("green", $kaka))
			{
				$this->green = self::no_limit(intval($kaka["green"], 0));
			}
			if (array_key_exists("blue", $kaka))
			{
				$this->blue = self::no_limit(intval($kaka["blue"], 0));
			}
		}
		if (self::$verbose == true)
			echo ($this."constructed.\n");
	}
	public function __toString()
	{
		$string = sprintf("Color ( red: %3d, green: %3d, blue: %3d ) ", $this->red, $this->green, $this->blue);
		return ($string);
	}
	public static function doc()
	{
		return (file_get_contents("Color.doc.txt"));
	}
	public function add(Color $color)
	{
		return (new Color(array('red' => $this->red + $color->red, 'green' => $this->green + $color->green, 'blue' => $this->blue + $color->blue)));
	}
	public function sub(Color $color)
	{
		return (new Color(array('red' => $this->red - $color->red, 'green' => $this->green - $color->green, 'blue' => $this->blue - $color->blue)));
	}
	public function mult($cf)
	{
		return (new Color(array('red' => $this->red * $cf, 'green' => $this->green * $cf, 'blue' => $this->blue * $cf)));
	}
	public function __destruct()
	{
		if (self::$verbose == true)
			echo ($this."destructed.\n");
	}

}