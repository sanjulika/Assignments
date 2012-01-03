<html>
<head>
    <title></title>
</head>
<body>
<?php

foreach ($data as $row)
{

	$item = $row['Task'];

	if ($item['done'] == 0)
	{

		print '<div class="task" id="todo_' . $item['id'] . '">';
        print '<input id="todo_check' . $item['id'] . '" type="checkbox" onClick="new Ajax.Updater(\'tasks_done\',\'/tasks/done/' . $item['id']. '\', {asynchronous:true, evalScripts:true});new Effect.Fade(\'todo_' . $item['id'] . '\');" /> ';
		print '<label for="todo_check_' . $item['id'] . '">' . $item['title'] . '</label>';
		print '</div>';

	}

}

?>

</body>
</html>