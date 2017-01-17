<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="icon" type="image/png" href="images/tool_box_ico.png">
<title>Raspberry Pi SCM in a Box</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=iso-8859-1">
<meta name="author" content="Marcelo M Marques">
<meta name="description" content="Raspberry Pi SCM in a Box is the faster and easier way to set a software configuration management system up and running to a learning and even to a small business environment.">
<meta name="keywords" content="software,configuration,management,system,raspberry,raspberrypi,bugzilla,mantis,mantisbt,gerrit,git,jenkins,jenkins-ci,linux,raspbian,postgres,postgresql,mysql,version,control">
<link rel="stylesheet" href="mike02.css" type="text/css">

<!-- Image Preloader -->
<script type="text/javascript" src="http://ajax.googlesapi.com/ajax/libs/jquery/jquery.min.js"></script>

<?php include 'db_parameters.php';?>
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO web_site_access (ip,date,time,page) VALUES('".$_SERVER['REMOTE_ADDR']."',NOW(),NOW(),'links.php')";
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
<div id="contentLinksHeader">
<div id="siteDescription">
<p align="center">Links!</p>
</div>
</div>

<div id="fullWidth">

<h2>Useful Links</h2>
<p>As you know, &quot;Raspberry Pi SCM in a Box&quot; run a set of tools that are available for free. So, the best way to learn how to operate eache tool is navigate through its own web site:</p>
<p><ul>
<li><a href="https://www.raspberrypi.org/" target="_blank">Raspberry Pi official web site</a></li>
<li><a href="https://www.mantisbt.org/" target="_blank">MantisBT official web site</a></li>
<li><a href="https://gerrit-documentation.storage.googleapis.com/Documentation/2.13.5/index.html" target="_blank">Gerrit code review documentation</a></li>
<li><a href="https://jenkins.io/doc/book/" target="_blank">Jenkins documentation</a></li>
</ul></p>

<h2>Tutorial</h2>
<p><ul>
<li><a href="https://try.github.io/levels/1/challenges/1" target="_blank">Learning GIT</a></li>
<li><a href="https://www.mediawiki.org/wiki/Gerrit/Tutorial" target="_blank">Gerrit tutorial</a></li>
</ul></p>

</div>
</div>

<div id="footer">
<p>Raspberry Pi SCM in a Box - &copy; 2017 Marcelo Martim Marques</p>
</div>
</div>
</body></html>