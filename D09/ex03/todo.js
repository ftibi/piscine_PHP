readtask();

function newtask(){
	var ft_list = $('#ft_list');
	var new_task = prompt("Enter new task : ");
	var time = event.timeStamp;
	savetask(new_task, time);
	if (/\S/.test(new_task)){
		var new_elem = $('<div></div>');
		new_elem.text(new_task);
		new_elem.attr("onclick", "deltask(this)");
		new_elem.attr("time", time);
		new_elem.addClass('task');
		ft_list.prepend(new_elem);
	}
}

function deltask(itemtodel){
	var conf = confirm("Delete this task?");
	if (conf){
		var item = itemtodel.textContent;
		item = itemtodel.attributes[1].textContent;
		itemtodel.remove();
		$.post('delete.php', {'itemtodel':item});
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
			var time;
			data = data.split('\n');
			data = data.filter(function(n){return n != ""});
			var ft_list = $('#ft_list');
			for (task in data)
			{
				time = data[task].match(/\d*\.\d*/);
				time = time[0];
				str = data[task].replace(time, '');
				str = str.replace(';', '');
				var new_elem = $('<div></div>');
				new_elem.html(str);
				new_elem.attr("onclick", "deltask(this)");
				new_elem.attr("time", time);
				new_elem.addClass('task');
				ft_list.append(new_elem);
			}
		}
	})
}
