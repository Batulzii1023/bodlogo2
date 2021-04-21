// Database Structure 
CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` text NOT NULL,
 `email` text NOT NULL,
 `password` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

<?php
if(isset($_POST['signup']))
{
 $host="localhost";
 $username="root";
 $password="";
 $databasename="sample";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);

 $name=$_POST['name'];
 $email=$_POST['email'];
 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 $password = substr( str_shuffle( $chars ), 0, 8 );
 mysql_query("insert into users values('','$name','$email','$password')");
 echo "Your Password Is : ".$password;
}
?>