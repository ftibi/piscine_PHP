readtask();

function newtask(){
	var ft_list = $('#ft_list');
	var new_task = prompt("Enter new task : ");
	savetask(new_task, event.timeStamp);
	if (/\S/.test(new_task)){
		var new_elem = $('<div></div>');
		new_elem.text(new_task);
		new_elem.attr("onclick", "deltask(this)");
		new_elem.addClass('task');
		ft_list.prepend(new_elem);
	}
}

function deltask(itemtodel){
	var conf = confirm("Delete this task?");
	if (conf){
		console.log(itemtodel.textContent);
		itemtodel.remove();
		$.post('delete.php', {'itemtodel':itemtodel.textContent});
	}
}

function savetask(task, time){
	$.post('insert.php', {'itemtoadd':task, 'id':time});
}

function readtask(){
	$.ajax({
		type: 'get',
		url: 'select.php',
		data: 'select',
		success: function (data){
			data = data.replace(/\d*\.\d*;/g,'');
			console.log(data);
			data = data.replace(/\n/g,';');
			console.log(data);
			data = data.split(';');
			console.log(data);
			data = data.slice(0, -1);
			var ft_list = $('#ft_list');
			for (task in data)
			{
				var new_elem = $('<div></div>');
				new_elem.html(data[task]);
				new_elem.attr("onclick", "deltask(this)");
				new_elem.addClass('task');
				ft_list.append(new_elem);
			}
		}
	})
}
