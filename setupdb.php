<?php
$db = new SQLITE3('login.db');
$db->prepare("DROP TABLE users");
$db->exec("CREATE TABLE users(id INTEGER PRIMARY KEY, firstname TEXT, lastname TEXT, user TEXT, pass TEXT, admins INT)");
$db->exec("CREATE TABLE policys(id INTEGER PRIMARY KEY, firstname TEXT, lastname TEXT, policyno TEXT, drivers TEXT)");
$db->exec("INSERT INTO users(firstname, lastname, user, pass, admins) VALUES('john','doe','johnd','5f4dcc3b5aa765d61d8327deb882cf99',1)");
$db->exec("INSERT INTO users(firstname, lastname, user, pass, admins) VALUES('Dona','Olsen','donao','5f4dcc3b5aa765d61d8327deb882cf99',0)");
$db->exec("INSERT INTO policys(firstname, lastname, policyno, drivers) VALUES('Dona','Olsen','FFI 313486','Dona Olsen')");
?>
<!DOCTYPE html>
<html>
    Successfully reseted the database file
</html>