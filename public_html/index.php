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
$sql = "INSERT INTO web_site_access (ip,date,time,page) VALUES('".$_SERVER['REMOTE_ADDR']."',NOW(),NOW(),'index.php')";
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
<div id="contentHeader">
<div id="siteDescription">
<p align="center">Software Configuration Management<br>System in a Box!</p>
</div>
</div>
<div id="main">
<div class="post">
<h2>What is Inside the Box?!</h2>
<p>&quot;Raspberry Pi SCM in a Box&quot; proposes to introduce the user into the software configuration management system world. Our box starts running a small set of tools as described bellow:</p>
<p><ul>
<li><a>Raspbian Linux</a>: Raspberry Pi operational system</li>
<li><a>Git</a>: version control system tool</li>
<li><a>Bugzilla</a>: bug-tracking web tool</li>
<li><a>Gerrit</a>: code review tool</li>
<li><a>OpenLDAP</a>: user access control system</li>
<li><a>PostgreSQL</a>: bug-tracking and code review data storage</li>
</ul></p>
<p>With this tool box you can exercise the most important activities of a software developemnt life cycle:
<ul>
<li>Source code version control using <b>GIT</b></li>
<li>Source code revision using <b>Gerrit</b></li>
<li>Bug tracking using <b>Bugzilla</b></li>
<li>Access control using <b>Ldap</b></li>
</ul></p>
<p>Please access <a href="documents.php">Documents</a> page for more information about how-to setup your box.</p>
<p>&nbsp;</p>
<p>All those tools above are available for free, what means that you dont need to care about software licenses purshase.</p>
</div>
<div class="post">
<h2>System Requirement</h2>
<blockquote>
<p>Recommended:</p>
<div id="highlighted">
<p><ul>
<li><a href="https://www.raspberrypi.org/products/raspberry-pi-3-model-b/">Raspberry Pi 3 Model B</a></li>
<li>4GB SDCard</li>
<li><a href="documents.php#installLocation"><b>External storage device</b></a></li>
<li>Cabled Network Connection</li>
</ul></p>
</div>
</blockquote>
<blockquote>
<p>Minimal:</p>
<div id="highlighted">
<p><ul>
<li><a href="https://www.raspberrypi.org/products/raspberry-pi-2-model-b/">Raspberry Pi 2 Model B</a></li>
<li>4GB SDCard</li>
<li>Cabled Network Connection</li>
</ul></p>
</div>
</blockquote>
</div>
</div>
<div id="secondary">
<h2>About</h2>
<p>&quot;Raspberry Pi SCM in a Box&quot; is the faster and easier way to set a software configuration management system up and running to learning and even to a small business environment.</p>
<h2>Latest Version</h2>
<p>Sep 2016 image</p>
<ul>
<li><p>Raspbian Jessie Lite</p>
<p>Version: May 2016</p></li>
<li><p>Gerrit Code Review</p>
<p>Version: 2.12.14</p></li>
<li><p>Bugzilla</p>
<p>Version: 5.0.3</p></li>
</ul></p>
<p><a href="downloads.php">All versions download</a></p>
</div>
</div>
<div id="footer">
<p>Raspberry Pi SCM in a Box - &copy; 2016 Marcelo Martim Marques</p>
</div>
</div>
</body></html>