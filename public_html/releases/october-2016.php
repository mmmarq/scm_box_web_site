<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><title>Raspberry Pi SCM in a Box</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1">
<meta name="author" content="Marcelo M Marques">
<meta name="description" content="Raspberry Pi SCM in a Box is the faster and easier way to set a software configuration management system up and running to learning and even to a small business environment.">
<meta name="keywords" content="software,configuration,management,system,raspberry,raspberrypi,bugzilla,gerrit,git,linux,raspbian,postgres,postgresql,version,control">
<link rel="stylesheet" href="../mike02.css" type="text/css">

<!-- Image Preloader -->
<script type="text/javascript" src="http://ajax.googlesapi.com/ajax/libs/jquery/jquery.min.js"></script>

</head>

<?php include '../db_parameters.php';?>
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO web_site_access (ip,date,time,page) VALUES('".$_SERVER['REMOTE_ADDR']."',NOW(),NOW(),'october-2016.php')";
if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<?php
$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
parse_str($query);
parse_str($query, $arr);
?>

<body>
<div id="container">
<div id="headerWrap">
<div id="header">
<h1><a href="index.php">Raspberry Pi SCM in a Box</a></h1>
<ul id="navigation">
<li><a href="../contact.php">Contact</a></li>
<li><a href="../links.php">Links</a></li>
<li><a href="../documents.php">Documents</a></li>
<li><a href="../downloads.php">Downloads</a></li>
<li><a href="../index.php">Home</a></li>
</ul>
</div>
</div>

<div id="content">
<div id="contentHeader">
<div id="siteDescription">
<p align="center">Software Configuration Management<br>System in a Box!</p>
</div>
</div>

<div id="fullWidth">

<h2>Welcome to Raspberry Pi SCM in a Box</h2>
    
<p>Se below the links to access your local services:</p>
<p><ul>
<li><a href="http://<?php echo $ip;?>/bugzilla/" target="_blank">Bugzilla bug tracking</a></li>
<li><a href="http://<?php echo $ip;?>/gerrit/" target="_blank">Gerrit code review</a></li>
<li><a href="http://<?php echo $ip;?>/phpldapadmin/" target="_blank">Ldap admin page</a></li>
</ul></p>
<p>Default administrator login and password for Bugzilla and Gerrit is: <font face="Courier New,Courier,monospace">admin / raspberry</font></p>
<p>Default administrator login and password for Ldap is: <font face="Courier New,Courier,monospace">cn=admin,dc=ldap,dc=raspberry,dc=pi / raspberry</font></p>
<h2>Tutorial</h2>
<p><ul>
<li><a href="https://try.github.io/levels/1/challenges/1" target="_blank">Learning GIT</a></li>
<li><a href="http://www.guru99.com/bugzilla-tutorial-for-beginners.html" target="_blank">Bugzilla for beginners</a></li>
<li><a href="https://www.mediawiki.org/wiki/Gerrit/Tutorial" target="_blank">Gerrit tutorial</a></li>
</ul></p>

</div>
</div>

<div id="footer">
<p>Raspberry Pi SCM in a Box - &copy; 2017 Marcelo Martim Marques</p>
</div>
</div>
</body></html>