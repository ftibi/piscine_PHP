readcookie();

function newTodo(){
	var ft_list = document.getElementById('ft_list');
	var new_task = prompt("Enter new task : ");
	var new_elem = document.createElement('div');
	new_elem.innerHTML = new_task;
	new_elem.setAttribute("onclick", "delItem(this)");
	ft_list.insertBefore(new_elem, ft_list.childNodes[0]);
	savecookie(ft_list);
	console.log(ft_list);
}

function delItem(itemtodel){
	// console.log("delitem");
	var conf = confirm("Delete this task?");
	if (conf){
		itemtodel.parentNode.removeChild(itemtodel);
		savecookie();
	}
}

function savecookie(ft_list){
	var cookie = document.cookie;
	cookie('list', ft_list);
}

function readcookie(){
	var cookie = document.cookie;
	if (cookie.list){
		console.log(cookie.list);
	}
}
