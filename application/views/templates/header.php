
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Vitorials</title>

        <meta name="author" content="Team Vitorials" />
        <meta name="description" content="Vitorials - A better way to learn technology" />
        <meta name="keywords" content="programming tutorials, vitorial, learn php css html javascript, free tutorials, free programming video courses" />
        
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/graphics/favicon_vitorials.ico">
        <!-- COMMON STYLE SHEETS FROM THE HEADER -->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ajaxfileupload.css" />-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/main.css" />

        <!-- COMMON SCRIPTS FROM THE HEADER -->
        <script src="<?= base_url();?>assets/js/jquery-1.4.1.min.js"></script>
        <script src="<?= base_url();?>ajaxfileupload.js"></script>
	</head>
<body>

<header>
    <section class="logo">
            <a href="<?=base_url();?>"><img src="<?=base_url();?>assets/graphics/logo.png" width="200px" height="39px" /></a>
    </section>
    <nav id="header">
        <a onclick="javascript:$('#notifications-list').hide();$('#user-settings-list').toggle();"><img src="<?php echo base_url(); ?>assets/graphics/user.svg" width="33px" height="25px" /></a>
        <a onclick="javascript:$('#user-settings-list').hide();$('#notifications-list').toggle();" class="no-border"><img src="<?php echo base_url(); ?>assets/graphics/notification.svg" width="25px" height="25px" /><span class="notification-badge">3</span></a>
    </nav>
    <section id="user-settings-list" style="display:none;">
        <ul>
            <li><a href="<?php echo base_url();?>index.php/preference/set_preference">Preferences</a></li>
            <li><a href="<?php echo base_url();?>index.php/profile">Account Settings</a></li>
            <li><a href="<?php echo base_url();?>index.php/logout">Logout</a></li>
        </ul>
    </section>
    <section id="notifications-list" style="display: none;">
        <h4>Notifications</h4>
        <ul>
            <li>A new notification<br/><span class="notif-time">33 mins</span></li>
            <li>Another new notification<br/><span class="notif-time">39 mins</span></li>
            <li>This is the oldest of notifications<br/><span class="notif-time">1 hr</span></li>
            <li>This is the oldest of notifications<br/><span class="notif-time">1 hr</span></li>
            <li>This is the oldest of notifications<br/><span class="notif-time">2 hr</span></li>
        </ul>
        <section id="see-all-notif">
            <a href="<?php echo base_url();?>index.php/notifications">See all notifications</a>
        </section>
    </section>
</header>