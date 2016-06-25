readcookie();

function newTodo(){
	var ft_list = $('#ft_list');
	var new_task = prompt("Enter new task : ");
	if (/\S/.test(new_task)){
		var new_elem = $('<div></div>');
		new_elem.text(new_task);
		new_elem.attr("onclick", "delItem(this)");
		new_elem.addClass('task');
		ft_list.prepend(new_elem);
		savecookie(ft_list);
	}
}

function delItem(itemtodel){
	var ft_list = $('#ft_list');
	var conf = confirm("Delete this task?");
	if (conf){
		itemtodel.remove();
		savecookie(ft_list);
	}
}

function savecookie(ft_list){
	var cookie = "todo";
	for (var key in $('.task'))
	{
		if (parseInt(key) == key){
			cookie = cookie.concat("/",$('.task')[key].textContent);
		}
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
		var ft_list = $('#ft_list');
		for (task in elem)
		{
			var new_elem = $('<div></div>');
			new_elem.html(elem[task]);
			new_elem.attr("onclick", "delItem(this)");
			new_elem.addClass('task');
			ft_list.append(new_elem);
		}
	}
}
