<!DOCTYPE html>
<?php
include('../function.php');
session_start();
?>
<html>
    	<head>		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/var/uikit-3.10.1/css/uikit.min.css" />
        <link rel="stylesheet" href="./status/main.css" />
        <script src="/var/uikit-3.10.1/js/uikit.min.js"></script>
        <script src="/var/uikit-3.10.1/js/uikit-icons.min.js"></script>
        <script src="status/admin.js"></script>
        <script type="text/javascript" src="/var/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="/var/jquery.jeditable.min.js"></script>
        <style type="text/css">
            @media (min-width: 639px) {
                .sidebar {
                    position: fixed;
                    top: 0;
                    bottom: 0;
                    box-sizing: border-box;
                    width: 240px !important;
                    padding: 30px 30px 60px 30px;
                    background: #223e9c;
                    overflow: auto;
                }

                .main {
                    padding: 30px 20px 0 260px;
                }
            }
        </style>
    </head>

    <body>
    <!-- phoneTypeSiderbarMOBI Nav -->
    <div uk-sticky="show-on-up: true; animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent;">
        <nav class="uk-navbar uk-navbar-container uk-margin uk-hidden@s">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="<?php echo $websiteurl; ?>"><?php echo $websitename;?></a>
            </div>
            <div class="uk-navbar-right">
                <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#m-nav" uk-toggle></a>
            </div>
        </nav>
    </div>

    <!-- phoneTypeSiderbar -->
    <div id="m-nav" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">
            <?php require('siderbar.php');?>
        </div>
    </div>

    <!-- pcTypeSiderbar -->
    <div class="uk-background-primary uk-light uk-visible@s sidebar">
        <?php require('siderbar.php');?>
    </div>
