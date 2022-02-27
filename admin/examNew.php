<?php require('header.php'); ?>
<title><?php echo $websitename; ?>-开始体检</title>

<div class="uk-container uk-container-expand uk-background-muted main">
    <div class="uk-section uk-section-xsmall uk-padding-remove-top">
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-visible@s">
                <div class="uk-navbar-item">
                    <ul class="uk-breadcrumb uk-margin-remove-bottom">
                        <li><a href="home.php" uk-icon="icon: home"></a></li>
                        <li><span>体检管理</span></li>
                        <li><span>开始体检</span></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="uk-child-width-1-1" uk-grid>
            <div class="uk-overflow-auto">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title uk-margin-remove-bottom">正在进行视力测试...</h3>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-overflow-auto">
                            当前时间：<?php echo date("Y-m-d H:i:s");?><br>
                            <form class="uk-grid-small" uk-grid method="post">
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="学生ID" name="id">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="裸眼左（标准对数）" name="nake_L">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="裸眼右（标准对数）" name="nake_R">
                                </div>
                                <br/>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="矫正左（小数）" name="cor_L">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="矫正右（小数）" name="cor_R">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="球镜左" name="qiu_L">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="球镜右" name="qiu_R">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="柱镜左" name="zhu_L">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="柱镜右" name="zhu_R">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="轴位左" name="axis_L">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="轴位右" name="axis_R">
                                </div>
                                
                                <div class="uk-width-1-4@s">
                                    <button class="uk-button uk-button-primary" type="submit" name="addSight">完成</button>
                                </div>
                            </form>


                            <?php

                            if (isset($_POST["addSight"])) {
                                $sight->addSight(array($_POST['id'], $_POST['nake_L'], $_POST['nake_R'], $_POST['cor_L'], $_POST['cor_R'], $_POST['qiu_L'], $_POST['qiu_R'], $_POST['zhu_L'], $_POST['zhu_R'], $_POST['axis_L'], $_POST['axis_R'],date("Y-m-d H:i:s")));
                                //echo "<script language=JavaScript> location.replace(location.href);</script>";
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>