readcookie();

function newTodo(){
	var ft_list = document.getElementById('ft_list');
	var new_task = prompt("Enter new task : ");
	if (/\S/.test(new_task)){
		var new_elem = document.createElement('div');
		new_elem.innerHTML = new_task;
		new_elem.setAttribute("onclick", "delItem(this)");
		ft_list.insertBefore(new_elem, ft_list.childNodes[0]);
		savecookie(ft_list);
	}
}

function delItem(itemtodel){
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
	for (var i = 0; i < ft_list.childNodes['length']; i++){
		elem = ft_list.childNodes[i].innerHTML;
		cookie = cookie.concat("/",elem);
	}
	document.cookie = cookie;
}

function readcookie(){
	var cookie = document.cookie;
	var elem;
	elem = cookie.match('todo/([^;]*)');
	test1 = elem;
	if (elem){
		elem = elem[1];
		elem = elem.split('/');
		var ft_list = document.getElementById('ft_list');
		for (task in elem)
		{
			var new_elem = document.createElement('div');
			new_elem.innerHTML = elem[task];
			new_elem.setAttribute("onclick", "delItem(this)");
			ft_list.appendChild(new_elem);
		}
	}
}
