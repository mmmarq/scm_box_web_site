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
$sql = "INSERT INTO web_site_access (ip,date,time,page) VALUES('".$_SERVER['REMOTE_ADDR']."',NOW(),NOW(),'documents.php')";
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
<div id="contentDocumentHeader">
<div id="siteDescription">
<p align="center">Documents!</p>
</div>
</div>

<div id="fullWidth">

<div id="highlighted">
<h1>&#9762;Attention&#9762;</h1>
<p>&quot;Raspberry Pi SCM in a Box&quot; project was not designed to run into a opened network. It was designed to run under a protected LAN. All usernames and passwords created for initial setup are listed below and you can change them, but keep in mind to change all needed configuration files in case you change some password.</p>
<p>&nbsp;</p>
<p>Raspberry Pi usernames/passwords:
<ul>
<li>pi / raspberry</li>
<li>gerrit2 / raspberry</li>
</ul></p>
<p>Postgresql usernames/passwords:
<ul>
<li>gerrit2 / bugless (gerrit database)</li>
<li>bugs / bugless (bugzilla database)</li>
</ul></p>
<p>Ldap admin username/password:
<ul>
<li>cn=admin,dc=ldap,dc=raspberry,dc=pi / raspberry</li>
</ul></p>
<p>Initial username/password to login into gerrit and bugzilla:
<ul>
<li>admin / raspberry</li>
</ul></p>
</div>

<h2>Image Installation</h2>
<p>With the &quot;Raspberry Pi SCM in a Box&quot; image file uncompressed, you need to use an image writing tool to install it on your SD card. You need a SD card with, at least, 4GB of space. To install you can follow the guide from official Raspberry Pi web site. Choose the guide for your system:</p>
<p><ul>
<li><a href="https://www.raspberrypi.org/documentation/installation/installing-images/linux.md" target="_blank">Linux</a></li>
<li><a href="https://www.raspberrypi.org/documentation/installation/installing-images/mac.md" target="_blank">Mac OS</a></li>
<li><a href="https://www.raspberrypi.org/documentation/installation/installing-images/windows.md" target="_blank">Windows</a></li>
</ul></p>
<h2>After first boot</h2>
<p>Once you have your system up after first boot, you need to log in your raspberry (via ssh or default console) using Raspberry Pi default username and password (see above) and follow the steps below:</p>
<p>&nbsp;</p>
<p><b>Time zone setup</b>:</p>
<p><ul>
<li>Run: <font face="Courier New,Courier,monospace">sudo raspi-config</font></li>
<li>Select: <font face="Courier New,Courier,monospace">5 Internationalisation Options</font> &rarr; <font face="Courier New,Courier,monospace">I2 Change Timezone</font> &rarr; <font face="Courier New,Courier,monospace">Geographic area</font> &rarr; <font face="Courier New,Courier,monospace">Time zone</font></li>
</ul></p>
<p>&nbsp;</p>
<p><b>File system expander (only if you are using an SD card greater then 4GB)</b>:</p>
<p><ul>
<li>Run: <font face="Courier New,Courier,monospace">sudo raspi-config</font></li>
<li>Select: <font face="Courier New,Courier,monospace">1 Expand Filesystem</font></li>
<li>Reboot your system to perform file system expansion</li>
</ul></p>
<p>&nbsp;</p>
<p><b>Configuration files update</b>:</p>
<p>&nbsp;</p>
<p>This next step will request from you some important setup information. If you want to make your system able to send notification mails, please make sure you have the SMTP server name, port number, username and password available.</p>
<p><ul>
<li>Run: <font face="Courier New,Courier,monospace">cd /home/pi/scm_box_setup</font></li>
<li>Run: <font face="Courier New,Courier,monospace">git pull</font></li>
<li>Run: <font face="Courier New,Courier,monospace">sudo ./scm_tool_config.py</font></li>
<li>Enter the requested informations, when all files has been changed, system will reboot again to make sure all services will load new configuration files properlly.</li>
</ul></p>
<p>&nbsp;</p>
<h2>Services URL</h2>
<ul>
<li><font face="Courier New,Courier,monospace">http://&lt;RASPI_IP_ADDRESS&gt;</font> default home page</li>
<li><font face="Courier New,Courier,monospace">http://&lt;RASPI_IP_ADDRESS&gt;/phpldapadmin</font> for user access control</li>
<li><font face="Courier New,Courier,monospace">http://&lt;RASPI_IP_ADDRESS&gt;/bugzilla</font> for bug tracking</li>
<li><font face="Courier New,Courier,monospace">http://&lt;RASPI_IP_ADDRESS&gt;/gerrit</font> for source code access and review</li>
</ul>
<p>&nbsp;</p>
<h2>Initial tools setup</h2>
<p><b>Create new users</b>:</p>
<p>&nbsp;</p>
<p>There is only one user able to login into bugzilla and gerrit after first boot, its username is <font face="Courier New,Courier,monospace">admin</font>. This user is the administrator for both tools, so you need to create new Ldap user account for regular users. Follow the instructions bellow to create a new ldap user</p>
<p><ul>
<li>In your browser access Raspberry Pi Ldap admin page: <font face="Courier New,Courier,monospace">http://&lt;RASPI_IP_ADDRESS&gt;/phpldapadmin</font></li>
<li>Login using admin credentials: <font face="Courier New,Courier,monospace">cn=admin,dc=ldap,dc=raspberry,dc=pi</font> and password: <font face="Courier New,Courier,monospace">raspberry</font></li>
<li>Click on <font face="Courier New,Courier,monospace">&#9734; Create new entry here</font> under <font face="Courier New,Courier,monospace">development</font> Organization Unit (ou).</li>
<li>Select <font face="Courier New,Courier,monospace">Generic: User Account</font></li>
<li>Fill all new user information (User ID will be login information for new user) and click on <font face="Courier New,Courier,monospace">Create Object</font> button and then click on <font face="Courier New,Courier,monospace">Commit</font> button</li>
<li>Click on <font face="Courier New,Courier,monospace">Add new attribute</font> and select <font face="Courier New,Courier,monospace">Email</font> on pick list, add new user e-mail address and click on <font face="Courier New,Courier,monospace">Update Object</font> button and then click on <font face="Courier New,Courier,monospace">Update Object</font> button again</li>
<li>Now the new user is able to login into Bugzilla and Gerrit.
<li>Repeat the steps above for all new users</li>
</ul></p>
<h2 id="installLocation">Tools and database install location</h2>
<p>&nbsp;</p>
<p>The most important piece of "Raspberry Pi SCM in a Box" data is available under the folder named: <font face="Courier New,Courier,monospace">/my_services/</font>. There you can see the following subfolders:
<ul>
<li><font face="Courier New,Courier,monospace">bugzilla/</font></li>
<li><font face="Courier New,Courier,monospace">gerrit/</font></li>
<li><font face="Courier New,Courier,monospace">postgresql/</font></li>
</ul></p>
<p>Unfortunately we know that an SD card is not the faster and more reliable storage device to place your data. An SSD drive plugged on USB port can be more than <b>50%</b> faster then a SD card. So, if you are planning to make your little SCM tools server support a small team connected to it, I strongly recommend you to move <font face="Courier New,Courier,monospace">/my_services</font> folder content to a different storage device (external HD per example).</p>
<p>Please, follow basic steps below to make your tools available on a external storage device:</p>
<p><ul>
<li>Plug your external device on Raspberry Pi</li>
<li>Identify your device number under <font face="Courier New,Courier,monospace">/dev/sd[a..z][1..9]</font></li>
<li>Stop all services that access <font face="Courier New,Courier,monospace">/my_services</font>
<ul><li><font face="Courier New,Courier,monospace"># sudo service gerrit stop</font></li>
<li><font face="Courier New,Courier,monospace"># sudo service apache2 stop</font></li>
<li><font face="Courier New,Courier,monospace"># sudo service postgresql stop</font></li>
</ul></li>
<li>Rename <font face="Courier New,Courier,monospace">/my_services</font> to <font face="Courier New,Courier,monospace">/my_services-bkp</font>
<ul><li><font face="Courier New,Courier,monospace"># sudo mv /my_services /my_services-bkp</font></li>
</ul></li>
<li>Create new <font face="Courier New,Courier,monospace">/my_services</font> folder
<ul><li><font face="Courier New,Courier,monospace"># sudo mkdir /my_services</font></li>
</ul></li>
<li>Mount your external storage device as <font face="Courier New,Courier,monospace">/my_services</font>
<ul><li><font face="Courier New,Courier,monospace"># sudo mount /dev/sd[a..z][1..9] /my_services</font></li>
</ul></li>
<li>Set correct <font face="Courier New,Courier,monospace">/my_services</font> folder permission
<ul><li><font face="Courier New,Courier,monospace"># sudo chmod 777 /my_services</font></li>
</ul></li>
<li>Copy <font face="Courier New,Courier,monospace">/my_services-bkp</font> folder content to new <font face="Courier New,Courier,monospace">/my_services</font>
<ul><li><font face="Courier New,Courier,monospace"># sudo rsync -av /my_services-bkp/* /my_services</font></li>
</ul></li>
<li>Edit <font face="Courier New,Courier,monospace">/etc/fstab</font> file to auto mount <font face="Courier New,Courier,monospace">/my_services</font> folder on boot time
<ul><li>E.g:<font face="Courier New,Courier,monospace">/dev/sda1&nbsp;/my_services&nbsp;<b>ext4</b>&nbsp;defaults,noatime&nbsp;0&nbsp;0</font></li>
<li>User a different file system type than <b>ext4</b> if your device use a different one.</li>
</ul></li>
<li>Restart services
<ul>
<li><font face="Courier New,Courier,monospace"># sudo service postgresql start</font></li>
<li><font face="Courier New,Courier,monospace"># sudo service apache2 start</font></li>
<li><font face="Courier New,Courier,monospace"># sudo service gerrit start</font></li></ul></li>
</ul></p>
</div>
</div>

<div id="footer">
<p>Raspberry Pi SCM in a Box - &copy; 2016 Marcelo Martim Marques</p>
</div>
</div>
</body></html>