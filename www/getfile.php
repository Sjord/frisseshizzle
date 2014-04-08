<?php
$file = $_GET['file'];
return readfile(dirname(__FILE__).'/pics/'.$file);
