<!DOCTYPE html>
<?php
require('../function.php');
error_reporting(0);
?>
<html>
<script src="./status/admin.js"></script>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../var/uikit-3.10.1/css/uikit.min.css" />
    <script src="../var/uikit-3.10.1/js/uikit.min.js"></script>
    <script src="../var/uikit-3.10.1/js/uikit-icons.min.js"></script>


		<title>学校/管理员登录</title>
	</head>
	<body class="uk-background-muted">
		<div uk-height-viewport class="uk-section uk-section-small uk-flex uk-flex-middle uk-text-center" style="min-height: calc((100vh - 80px) - 0px);">
							<div class="uk-width-1-1">
								<div class="uk-container" style="max-width: 330px;">
									<p><svg width="90" height="83" viewBox="0 0 168 155" xmlns="http://www.w3.org/2000/svg" style="color: rgb(30,135,240);" class=" uk-svg" data-svg="/skin/ukv3/images/uikit-logo-large.svg">
									  <path fill="#fff" d="M117.4 33.3L93.3 47.9l27.8 15.8v41.5L83.8 126l-36.7-20.8V73L23 60.7v58.9l59.9 35.2 62.1-35.2V49.2l-27.6-15.9zM106.2 27.5L82.9 14 58.6 29.1l23.6 13z"></path>
									</svg></p>
									<p class="uk-text-lead">管理员登录</p>
									<form method="post" action="index.php">
									    <div class="uk-margin">
									        <div class="uk-inline uk-width-1-1">
									            <span class="uk-form-icon" uk-icon="icon: user"></span>
									            <input class="uk-input" type="text" placeholder="UserName" name="username">
									        </div>
									    </div>
									    <div class="uk-margin">
									        <div class="uk-inline uk-width-1-1">
									            <span class="uk-form-icon" uk-icon="icon: lock"></span>
									            <input class="uk-input" type="password" placeholder="Password" name="password">
									        </div>
									    </div>
										<div class="uk-margin">
										    <div class="uk-inline">
										        <label><input class="uk-checkbox" type="checkbox"> 记住登录状态</label>
										    </div>
										</div>
										<button class="uk-button uk-button-primary uk-width-1-1" type="submit">Login</button>
										<p class="uk-margin-medium-top	"><a href="<?php echo $websiteurl; ?>"><?php echo $websitename;?></a> &copy; <?php echo date("Y",time());?></p>
									</form>
								</div>
							</div>
							
						</div>

<?php
session_start();

foreach ($_POST as $key => $value) {$_POST[$key] = trim($value);}

$admin_username = '"'.$_POST["username"].'"';
$admin_password = '"'.md5($_POST["password"]).'"';
$textUser = $con->where(array('username'=>$admin_username,'password'=>$admin_password))->select('admin');

//判断登录状态
if($_SESSION["admin"]==NULL){
    
    if ($textUser!=null and $_POST!=null){
        session_start();
        $_SESSION["admin"] = true;
		$_SESSION['user']=$_POST["username"];  //记录当前登录用户。
        Header("HTTP/1.1 303 See Other");
        Header("Location: home.php");
        exit;
    } 
    elseif($textUser==null and $_POST!=null){
        echo('<script>UIkit.modal.alert("账户或密码错误")</script>');
    }
    elseif($_POST==null){exit;}
    else{exit;}
}
else{
    Header("HTTP/1.1 303 See Other");
    Header("Location: home.php");
    exit;
}

?>



