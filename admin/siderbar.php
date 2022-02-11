<h3><a href="<?php echo $websiteurl; ?>" class="uk-navbar-item uk-logo"><img uk-svg="" src="/skin/ukv3/images/uikit-logo.svg" class="uk-margin-small-right"
		 hidden="true"><svg width="28" height="34" viewBox="0 0 28 34" xmlns="http://www.w3.org/2000/svg" class="uk-margin-small-right uk-svg"
		 data-svg="/skin/ukv3/images/uikit-logo.svg">
			<polygon fill="#fff" points="19.1,4.1 13.75,1 8.17,4.45 13.6,7.44 "></polygon>
			<path fill="#fff" d="M21.67,5.43l-5.53,3.34l6.26,3.63v9.52l-8.44,4.76L5.6,21.93v-7.38L0,11.7v13.51l13.75,8.08L28,25.21V9.07 L21.67,5.43z"></path>
		</svg> <?php echo $websitename;?></a></h3>
<ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
	<li  class="uk-active uk-nav-header" href='home.php'><a href="home.php"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span>仪表盘</a></li>

    <li class="uk-nav-header">体检管理</li>
    <li class="uk-active"><a href="examNew.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>开始体检</a></li>
    <li><a href="examData.php"><span class="uk-margin-small-right" uk-icon="icon: pencil"></span> 体检数据</a></li>

    <li class="uk-parent">
        <a href="#"><span class="uk-margin-small-right" uk-icon="icon: database"></span> 查看报告</a>
        <ul class="uk-nav-sub">
            <li  class="uk-active"><a href="stuReport.php">查看学生</a></li>
            <li><a href="classReport.php">查看班级</a></li>
            <li><a href="schoolReport.php">查看学校</a></li>
        </ul>
    </li>



	<li class="uk-nav-header">信息管理</li>
	<li><a href="schoolMan.php"><span class="uk-margin-small-right" uk-icon="icon: gitter"></span> 学校管理</a></li>
    <li><a href="classMan.php"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> 班级管理</a></li>
	<li><a href="stuMan.php"><span class="uk-margin-small-right" uk-icon="icon: users"></span> 学生管理</a></li>


	<li class="uk-nav-divider"></li>
    <li class="uk-active"><a href="adminSetting.php"><span class="uk-margin-small-right" uk-icon="icon: cog"></span> 管理员设置</a></li>
</ul>
<a class="uk-button uk-button-default uk-width-1-1 uk-margin-top uk-button-small" href="javascript:jslogout();">退出登录</a>


