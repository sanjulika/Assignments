<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
</head>
<body>
<?php
    pr($questions);

echo $this->Html->link('Add questions',array('controller'=>'questions','action'=>'add'));
?>
<table>
    <tr>
    <th>id</th><th>Assessment id</th><th>Question</th>
    </tr>

<?php
//    foreach ($questions as $question):
//    echo $this->Html->link('Add questions in test',array('action'=>'add',$question['Question']['assessment_id']));
//    endforeach;
?>
<?php
    foreach ($questions as $question):
?>
    <tr>
        <td>
            <?php
                echo $question['Question']['id'];
            ?>
        </td>
        <td>
            <?php
                echo $question['Question']['assessment_id'];
            ?>
        </td>
        <td>
            <?php
                echo $question['Question']['question'];
            ?>
        </td>

    </tr>
<?php
endforeach;
?>


</body>
</html>