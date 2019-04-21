<pre>
<?php
	$ke = array('name', 'count', 'category_id', 'price', 'marker', 'img', 'new-img', 'picture');
	$value = json_decode($_POST['Update']);
	$value_null = unserialize("../../rush00/file_path/file_path");
	$i = 0;
	$copy_value = $value;
	foreach ($copy_value as $key => $elem)
	{
		$copy_value[$key] = array_fill_keys($ke, $copy_value[$key]['name']);
	}
    print_r($value_null);
	$i = 0;
	foreach ($value as $key => $elem)
	{
		$copy_value[$key]['name'] = $value[$key][0];
		$copy_value[$key]['count'] = $value[$key][1];
		$copy_value[$key]['category_id'] = $value[$key][2];
		$copy_value[$key]['price'] = $value[$key][3];
		$copy_value[$key]['marker'] = $value[$key][4];
		$copy_value[$key]['img'] = $value[$key][5];
		if ($_FILES['file']['name'][$i] !== "")
		{
			echo "BLAKA\n";
			$copy_value[$key]['new-img'] = $_FILES['file']['name'][$i];
		}
		else
		{
			echo "MAKAR\n";
			$copy_value[$key]['new-img'] = $value_null[$key]['new-img'];
		}
		$copy_value[$key]['picture'] = $value[$key][7];
		$i++;
	}
	print_r($copy_value);
	$seri = serialize($copy_value);
	file_put_contents("../../rush00/file_path/file_path", $seri);
	header('Location: table.php');
?>