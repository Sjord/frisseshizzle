<?php
$file = basename($_GET['file']);
return readfile(dirname(__FILE__).'/pics/'.$file);
