<?php 

header('Content-type: text/plain');
header('Content-disposition: attachment');
echo html_entity_decode($raw); 

?>
