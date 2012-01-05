<?php
	$key=array('baee186cd1cfeb01fcacaee4964705440d415142820f48ba732617dce818205c',
	'91829b656907b79ecfbedc674ebd278adf5800e1c07d2229c1be3a8f3aafc47f');

	for($i=0;$i<2;$i++){
	$result = array();
	$ch = curl_init();

	$url= '';
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, 'https://www.gravitydev.com/api/project'.$url.'?key='.$key[$i]);
	$result = curl_exec($ch);
	//print_r($result);
	$obj=json_decode($result);
	$array=array();
	foreach($obj as $member=>$data)
		{
				$array[$member]=$data;
		}
	print_r($array);
	echo '<br><br/>';
	echo $array['name'];
	$arr=$array['participants'];
	echo '<br><br/>';
	echo $arr[0]->{'name'};
	}

	/*echo $result;
	echo '<br/><br/>';
	echo $obj->{'name'};
	echo '<br/>';
	echo $obj->{'start_date'};
	echo '<br/>';
	print_r($obj->{'participants'});
	echo $obj->{'participants'};*/
	curl_close($ch);

?>