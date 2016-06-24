readcookie();

function newTodo(){
	var ft_list = document.getElementById('ft_list');
	var new_task = prompt("Enter new task : ");
	var new_elem = document.createElement('div');
	new_elem.innerHTML = new_task;
	new_elem.setAttribute("onclick", "delItem(this)");
	ft_list.insertBefore(new_elem, ft_list.childNodes[0]);
	savecookie(ft_list);
	// console.log(ft_list);
}

function delItem(itemtodel){
	// console.log("delitem");
	var ft_list = document.getElementById('ft_list');
	var conf = confirm("Delete this task?");
	if (conf){
		itemtodel.parentNode.removeChild(itemtodel);
		savecookie(ft_list);
	}
}

function savecookie(ft_list){
	var cookie = "todo";
	var elem;
	test1 = ft_list;
	for (var i = 0; i < ft_list.childNodes['length'] - 1; i++){
		elem = ft_list.childNodes[i].innerHTML;
		// console.log(elem);
		cookie = cookie.concat("/",elem);
	}
	test = cookie;
	document.cookie = cookie;
}

function readcookie(){
	var cookie = document.cookie;
	var elem;
	elem = cookie.match('todo[^;]*');
		// console.log(elem);
	if (elem){
		elem = elem[0];
		console.log(elem);
		elem = elem.split('/');
		elem.shift();
		console.log(elem);
		var ft_list = document.getElementById('ft_list');
		for (var task in elem)
		{
			// console.log(elem[task]);
			var new_elem = document.createElement('div');
			new_elem.innerHTML = elem[task];
			new_elem.setAttribute("onclick", "delItem(this)");
			// ft_list.insertBefore(new_elem, ft_list.childNodes[0]);
			ft_list.appendChild(new_elem);
			savecookie(ft_list);
		}
	}
	// console.log(elem);
}
