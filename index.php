<html>
	<head>
		<link rel="stylesheet" type="text/css" href="design.css">
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>linux-webui - Linux Server Control Panel</title>
	</head>
    <body>
        <div class="wrapper">
        	<div class="header">
        		<table class="header_table">
        			<tr>
        				<td id="header_table_data_left">
        					<a href="."><div class="header_button">
        						<p>&nbsp;</p>
        						<h3 class="header_button_text">Info</h3>
        						<p>&nbsp;</p>
        					</div></a>
        					<div class="header_button">
								<p>&nbsp;</p>
        						<h3 class="header_button_text">Services</h3>
        						<p>&nbsp;</p>
        					</div>
        					<div class="header_button">
								<p>&nbsp;</p>
        						<h3 class="header_button_text">Storage</h3>
        						<p>&nbsp;</p>
        					</div>
        					<div class="header_button">
								<p>&nbsp;</p>
        						<h3 class="header_button_text">Users</h3>
        						<p>&nbsp;</p>
        					</div>
        					<div class="header_button">
								<p>&nbsp;</p>
        						<h3 class="header_button_text">Web</h3>
        						<p>&nbsp;</p>
        					</div>
        					<div id="header_button_last">
								<p>&nbsp;</p>
        					</div>
        				</td>
        				<td id="header_table_data_right">
        					<h3 id="header_brand_text">linux-webui</h3>
        				</td>
        			</tr>
        		</table>
        	</div>
        	<div class="body">
        		<div>&nbsp;</div>
        		<div class="body_content">
        			<div class="body_content_box">
        				<h3>OS Info</h3>
        					<?php echo "<pre>Distro: ".shell_exec('./shellscripts/linuxdistro.sh')."</pre>"; ?>
        					<?php echo "<pre>Hostname: ".shell_exec('uname -n')."</pre>"; ?>
        					<?php echo "<pre>Kernel: ".shell_exec('uname -r')."</pre>"; ?>
        					<?php echo "<pre>Uptime: ".shell_exec("uptime | awk '{print $3,$4,$5}' | sed 's/,$//'")."</pre>"; ?>
        					<?php echo "<pre>&nbsp;</pre>"; ?>
        			</div>
        			<div class="body_content_box">
        				<h3>System Info</h3>
        				<?php echo "<pre>CPU: ".shell_exec("cat /proc/cpuinfo | grep \"model name\" | awk '{print $4,$5,$6,$7,$8,$9}' | tail -1")."</pre>"; ?>
        				<?php echo "<pre>RAM: ".shell_exec("free -m | grep Mem | awk '{print $2}'")."</pre>"; ?>
        				<?php echo "<pre>&nbsp;</pre>"; ?>
        				<?php echo "<pre>&nbsp;</pre>"; ?>
        				<?php echo "<pre>&nbsp;</pre>"; ?>
        			</div>
        			<div class="body_content_box">
        				<h3>IP Addresses</h3>
        				<?php echo "<pre>".shell_exec("ifconfig | grep \"inet \" | awk '{print $2}'")."</pre>"; ?>
        				<?php echo "<pre>&nbsp;</pre>"; ?>
        				<?php echo "<pre>&nbsp;</pre>"; ?>
        				<?php echo "<pre>&nbsp;</pre>"; ?>
        			</div>
        			<div class="body_content_box">
        				<h3>Memory Info</h3>
        				<?php echo "<pre>".shell_exec("free -m")."</pre>"; ?>
        				<?php echo "<pre>&nbsp;</pre>"; ?>
        			</div>
        			<div class="body_content_box">
        				<h3>Disk Info</h3>
        				<?php echo "<pre>".shell_exec("df -h | grep Filesystem")."</pre>"; ?>
        				<?php echo "<pre>".shell_exec("df -h | grep /dev/sd")."</pre>"; ?>
        				<?php echo "<pre>".shell_exec("df -h | grep /dev/loop")."</pre>"; ?>
        				<?php echo "<pre>&nbsp;</pre>"; ?>
        			</div>
        			<div class="body_content_box">
        				<h3>Logged in users</h3>
        				<?php echo "<pre>".shell_exec("w")."</pre>"; ?>
        				<?php echo "<pre>&nbsp;</pre>"; ?>
        			</div>
        		</div>
        	</div>
            <div class="push"></div>
        </div>
        <div class="footer">
            <p>&copy; 2014 Viraj Chitnis</p>
        </div>
    </body>
</html>