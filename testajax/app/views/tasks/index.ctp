
<html>
<head>
    <title></title>
</head>
<body>
<div id="add_task">

	<?php
    //<form onSubmit="return false;">
echo $this->Form->create();
    print $this->Form->input('Task/title', array('id' => 'add_input'));
	print $this->Ajax->submit('Add task', array('url' => 'add', 'update'=>'tasks_todo'));
	echo $this->Form->end();
	//</form>
    ?>

</div>
<h3>To do</h3>
<div id="tasks_todo">
<?php

foreach ($data as $row)
{

	$item = $row['Task'];

	if ($item['done'] == 0)
	{

		print '<div class="task" id="todo_' . $item['id'] . '">';
		print '<input id="todo_check_' . $item['id'] . '" type="checkbox" onClick="new Ajax.Updater(\'tasks_done\',\'/tasks/done/' . $item['id']. '\', {asynchronous:true, evalScripts:true});new Effect.Fade(\'todo_' . $item['id'] . '\');" /> ';
		print '<label for="todo_check_' . $item['id'] . '">' . $item['title'] . '</label>';
		print '</div>';


	}

}
?>
</div>
<h3>Done</h3>
<div id="tasks_done">
<?php

foreach ($data as $row)
{

	$item = $row['Task'];

	if ($item['done'] == 1)
	{

		print '<div class="task" id="done_' . $item['id'] . '">';
		print '<input id="done_check_' . $item['id'] . '" type="checkbox" checked="true" onClick="new Ajax.Updater(\'tasks_todo\',\'/tasks/undo/' . $item['id']. '\', {asynchronous:true, evalScripts:true});new Effect.Fade(\'done_' . $item['id'] . '\');" /> ';
		print '<label for="done_check_' . $item['id'] . '">' . $item['title'] . '</label>';
		print $ajax->link('Delete', 'delete/' . $item['id'], array('update'=>'tasks_done'));
		print '</div>';


	}

}
?>

</div>

</body>
</html>