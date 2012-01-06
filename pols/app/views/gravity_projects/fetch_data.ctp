<?php
	pr( $result );
	//---------------------------project-----------------------
	echo $result[0]['name'];
	echo '<br/>';
	echo $result[0]['start_date'];
	echo '<br/>';
	echo '<br/>';
	//participants
	$i=1;
	foreach( $result[0]['participants'] as $key=>$name ){
		echo $i.') '.$name['name']." ".$name['url'];
		echo '<br/>';
		$i++;
	}

	echo 'public project= '.$result[0]['is_public'];
	//-----------------------Stories-----------------------------------

echo '<br/>';
	echo 'Total no of stories= '.$result[1]['total'];
	echo '<br/>';
	echo 'Stories:<br/>';
	$i=1;
?>
<table>
	<tr>
		<th>sr.no</th>
		<th>item_id</th>
		<th>cost</th>
		<th>completed_date</th>
	</tr>

		<?php
		foreach( $result[1]['results'] as $key=>$story ):
			echo '<tr><td>'.$i.')</td><td>'.$story['item_id'].'</td><td>'.$story['cost'].'</td><td>'.$story['completed_date'].'</td></tr>';
		$i++;
		endforeach;
		?>

</table>

<?php


	//-------------------------Issue----------------------------

	echo '<br/><br/>total issues=';
	echo $result[2]['total'].'<br/>';
	echo 'Tasks:<br/>';
		$i=1;
	?>
	<table>
		<tr>
			<th>sr.no</th>
			<th>item_id</th>
			<th>reported_by</th>
			<th>assigned_to</th>
			<th>status</th>
			<th>severity</th>
			<th>created_date</th>
			<th>completed_date</th>
		</tr>
			<?php
			foreach( $result[2]['issues'] as $key=>$issue ):

				echo '<tr><td>'.$i.')</td><td>'.$issue['item_id'].'</td><td>'.$issue['reported_by']['name'].'</td><td>'.$issue['assigned_to']['name'].'</td>
				<td>'.$issue['status'].'</td><td>'.$issue['severity'].'</td><td>'.$issue['created_date'].'</td><td>'.$issue['completed_date'].'</td></tr>';
			$i++;
			endforeach;
			?>

	</table>
