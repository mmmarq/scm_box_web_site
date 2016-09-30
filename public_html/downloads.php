<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><title>Raspberry Pi SCM in a Box</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1">
<meta name="author" content="Marcelo M Marques">
<meta name="description" content="Raspberry Pi SCM in a Box is the faster and easier way to set a software configuration management system up and running to learning and even to a small business environment.">
<meta name="keywords" content="software,configuration,management,system,raspberry,raspberrypi,bugzilla,gerrit,git,linux,raspbian,postgres,postgresql,version,control">
<link rel="stylesheet" href="mike02.css" type="text/css">

<!-- Image Preloader -->
<script type="text/javascript" src="http://ajax.googlesapi.com/ajax/libs/jquery/jquery.min.js"></script>

<?php include 'db_parameters.php';?>
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO web_site_access (ip,date,time,page) VALUES('".$_SERVER['REMOTE_ADDR']."',NOW(),NOW(),'downloads.php')";
if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

</head>

<body>
<div id="container">
<div id="headerWrap">
<div id="header">
<h1><a href="index.php">Raspberry Pi SCM in a Box</a></h1>
<ul id="navigation">
<li><a href="contact.php">Contact</a></li>
<li><a href="links.php">Links</a></li>
<li><a href="documents.php">Documents</a></li>
<li><a href="downloads.php">Downloads</a></li>
<li><a href="index.php">Home</a></li>
</ul>
</div>
</div>

<div id="content">
<div id="contentDownloadHeader">
<div id="siteDescription">
<p align="center">Downloads!</p>
</div>
</div>
<div id="fullWidth">
<h2>All versions!</h2>
<div id="highlighted"><p><b>October 2016 image</b> - <a href="https://1drv.ms/u/s!AtRAjmYCNrjhmB621y68mKvQOGaQ" target="_blank">Download</a></p></div>
<ul>
<li><p>Raspbian - Version: 2016-09-23-raspbian-jessie-lite</p></li>
<li><p>Gerrit Code Review - Version: 2.12.14</p></li>
<li><p>Bugzilla - Version: 5.0.3</p></li>
</ul>
<p>MD5: <font face="Courier New,Courier,monospace">33303b5084c0319bb014702e68acaaeb</font></p>
<p>SHA1: <font face="Courier New,Courier,monospace">d10c912ddea942819183c15fc6ca24ce86eb9609</font></p>
<p><h2></h2></p>
</div>
</div>
<div id="footer">
<p>Raspberry Pi SCM in a Box - &copy; 2016 Marcelo Martim Marques</p>
</div>
</div>
</body></html>