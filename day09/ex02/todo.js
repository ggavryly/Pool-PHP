podzryz();
function new_elem()
{
	var kek = prompt("New elem", "");
	var div = document.createElement("div");
    div.innerHTML = kek;
    div.onclick = choose_elem;
    var obr = JSON.parse(document.cookie);
    obr[obr.length] = div.innerHTML;
    document.cookie = JSON.stringify(obr);
    ft_list.insertBefore(div, ft_list.firstChild);
}
function podzryz()
{
	var split = JSON.parse(document.cookie);
	var count = split.length;
	for (var i = 0; i < count; i++)
	{
	 	var div = document.createElement("div");
	 	div.innerHTML = split[i];
	 	div.onclick = choose_elem;
	 	ft_list.insertBefore(div,ft_list.firstChild);
	}
}
function choose_elem(id_div)
{
	var elemento = id_div.srcElement;
	var split = JSON.parse(document.cookie);
	console.dir(split);
	if (confirm("A sure about delete this element?"))
	{
		id_div.srcElement.parentNode.removeChild(elemento);
		split.splice(split.indexOf(elemento.innerHTML), 1);
		document.cookie = JSON.stringify(split);
	}
}