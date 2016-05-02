
<?php 

// Query For Finding Duplicate Data
SELECT id, COUNT(id) c FROM `crcalls` GROUP BY id HAVING c>1

// Query for import sql file with command/terminal
mysql -u username -p database_name -v < C:\xampp\htdocs\file.sql
