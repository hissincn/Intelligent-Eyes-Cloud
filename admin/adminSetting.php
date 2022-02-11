<?php require('header.php'); ?>
<title><?php echo $websitename; ?>-管理员设置</title>

<div class="uk-container uk-container-expand uk-background-muted main">
    <div class="uk-section uk-section-xsmall uk-padding-remove-top">
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-visible@s">
                <div class="uk-navbar-item">
                    <ul class="uk-breadcrumb uk-margin-remove-bottom">
                        <li><a href="home.php" uk-icon="icon: home"></a></li>
                        <li><span>管理员设置</span></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="uk-child-width-1-1 uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-body">

                        <!-- 修改用户名和密码 -->
                        <form method="post">
                            <fieldset class="uk-fieldset">
                                <legend class="uk-legend">设置当前账户的登录凭证</legend>
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                                        <input class="uk-input" type="text" value="<?php echo $_SESSION['user']; ?>" name="changedUsername">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                        <input class="uk-input" type="text" name="changedPassword">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <button class="uk-button uk-button-primary" type="submit" name="changedUP">更改凭证</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form><br /><br />

                        <!-- 修改网站设置 -->
                        <form method="post">
                            <fieldset class="uk-fieldset">
                                <legend class="uk-legend">系统设置</legend>

                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-horizontal-text">网站名称</label><br />
                                    <div class="uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: bookmark"></span>
                                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" value="<?php echo $websitename; ?>" placeholder="起个好听的名字吧" name="changedWebsiteName">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-horizontal-text">网站域名</label><br />
                                    <div class="uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: world"></span>
                                        <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" value="<?php echo $websiteurl; ?>" placeholder="输入网站域名" name="changedWebsiteUrl">
                                    </div>
                                </div>


                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <button class="uk-button uk-button-primary" type="submit" name="changedSetting">保存设置</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>


                        <?php

                        if (isset($_POST['changedUP'])) {

                            $change = array(
                                'username' => $_POST['changedUsername'],
                                'password' => md5($_POST['changedPassword']),
                            );

                            $GLOBALS['con']->where(array('username' => strval("'" . $_SESSION['user'] . "'")))->update('admin', $change);
                            echo '<script>jsChangedUP();</script>';
                        }

                        if (isset($_POST['changedSetting'])) {
                            echo ($_POST['changedWebsiteName'] . $_POST['changedWebsiteUrl']);
                            $GLOBALS['con']->where(array('item' => "'websitename'"))->update('options', array('content' => $_POST['changedWebsiteName']));
                            $GLOBALS['con']->where(array('item' => "'websiteurl'"))->update('options', array('content' => $_POST['changedWebsiteUrl']));
                            echo "<script language=JavaScript> location.replace(location.href);</script>";
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>