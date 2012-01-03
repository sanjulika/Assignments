<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
</head>
<body>
<?php
foreach ($data as $row)
{

	$item = $row['Task'];

	if ($item['done'] == 1)
	{

		print '<div class="task" id="done_' . $item['id'] . '">';
		print '<input id="done_check_' . $item['id']. '" type="checkbox" checked="true" onClick="new Ajax.Updater(\'tasks_todo\',\'/tasks/undo/' . $item['id']. '\', {asynchronous:true, evalScripts:true});new Effect.Fade(\'done_' . $item['id'] . '\');" /> ';
		print '<label for="done_check_' . $item['id'] . '">' . $item['title'] . '</label>';
		print $ajax->link('Delete', 'delete/' . $item['id'], array('update'=>'tasks_done'));
		print '</div>';


	}

}

?>
</body>
</html>