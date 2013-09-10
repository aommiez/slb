<?php
$ldapconn = ldap_connect("136.250.9.56",389) or die("not connect");
if ($ldapconn){
	echo "ok";
} else {
	echo "not connect";
}

?>
