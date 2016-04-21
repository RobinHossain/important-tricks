
<?php 

// Query For Finding Duplicate Data
SELECT id, COUNT(id) c FROM `crcalls` GROUP BY id HAVING c>1
