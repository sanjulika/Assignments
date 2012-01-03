<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
</head>
<body>
<?php

//pr($questions);
//pr($count);
//pr($user_id);
echo $this->Form->create('Result',array('controller'=>'results','action'=>'add'));
echo $questions['Question']['question'];
echo $this->Form->input('Result.question_id',array('type'=>'hidden','value'=>$questions['Question']['id']));
echo $this->Form->input('Result.user_id',array('value'=>$user_id,'type'=>'hidden'));
echo $this->Form->input('assessment_id',array('type'=>'hidden','value'=>$ass_id));
echo $this->Form->input('count',array('type'=>'hidden','value'=>$count+1));
//echo $this->Form->input('Question.active',array('value'=>1,'type'=>'hidden'));

    /*for($i=0;$i<4;$i++){
        $options=array(
        $questions['Option'][$i]['id']=>$questions['Option'][$i]['option']
        );
    }*/
$options=array(
    $questions['Option'][0]['id']=>$questions['Option'][0]['option'],
    $questions['Option'][1]['id']=>$questions['Option'][1]['option'],
    $questions['Option'][2]['id']=>$questions['Option'][2]['option'],
    $questions['Option'][3]['id']=>$questions['Option'][3]['option']
);

echo $this->Form->radio('option_id',$options);
echo $this->Form->end('Next');
?>
</body>
</html>