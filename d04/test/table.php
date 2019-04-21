<pre>
<?php
	$products = unserialize(file_get_contents("../../rush00/file_path/file_path"));
	print_r($products);
    echo "<form  action='save_new.php' enctype='multipart/form-data' onsubmit='return read_update()' method='POST'>";

echo "<table id='table' width='30%' contenteditable='true' border='1'>";

echo "<tr><th>Name</th><th>Count</th><th>Category</th><th>Price</th><th>Sticker</th><th>Image_url</th><th>New Image</th><th>Image</th></tr>";
	foreach ($products as $key => $value)
	{
	    print_r($value['img']."\n");
		echo "<tr>";
		echo "<td>{$value['name']}</td>";
		echo "<td>{$value['count']}</td>";
		echo "<td>{$value['category_id']}</td>";
		echo "<td>{$value['price']}</td>";
		echo "<td>{$value['marker']}</td>";
		echo "<td>{$value['img']}</td>";
		echo "<td><input type='file' name='file[]' src='{$value['new-img']}'></td>";
		echo "<td><img width='50px' height='50px' src='../../rush00/img/items/{$value['img']}'></td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<script>
           var table = document.getElementById('table').children[0].children;
            function read_update(){
             var table_new = [];
             for (var i = 1; i < table.length; i++)
             {
                 var tr = table[i].children;
                 var rov = [];
                 for (var j = 0; j < tr.length; j++)
                 {
                        rov.push(tr[j].innerHTML);
                        console.dir(tr[j]);
                 }
                 table_new.push(rov);
             }
             console.dir(table_new);
            document.getElementById('Upda').value = JSON.stringify(table_new);
            return true;
           }
          </script>";
    echo "<button id='Upda' name='Update' type='submit' value=''>Update</button></form>";
?>
