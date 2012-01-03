<?php
class HyperlinkHelper extends AppHelper{
        var $helpers = array('Html');
        
        function makeLink($title,$url){
           $link = $this->Html->link($title,$url,array('class'=>'edit'));
           echo $this->Html->css('link');
           return "<div class=\"editOuter\">$link</div>";
           //return $link;
        }
}

?>
