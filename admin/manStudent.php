<?php 
require('header.php');
if ($_POST['need_delete_student'] != null) {
    for ($i = 0; $i < count($_POST['need_delete_student']); $i++) {
        $student->delStu($_POST['need_delete_student'][$i]);
    }
    echo "<script language=JavaScript> location.replace(location.href);</script>";
}
?>
<title><?php echo $websitename;?>-学生管理</title>

<div class="uk-container uk-container-expand uk-background-muted main">
    <div class="uk-section uk-section-xsmall uk-padding-remove-top">
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-visible@s">
                <div class="uk-navbar-item">
                    <ul class="uk-breadcrumb uk-margin-remove-bottom">
                        <li><a href="home.php" uk-icon="icon: home"></a></li>
                        <li><span>信息管理</span></li>
                        <li><span>学生管理</span></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="uk-child-width-1-1" uk-grid>
            <div class="uk-overflow-auto">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title uk-margin-remove-bottom">学生管理</h3>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-overflow-auto">


                            <form class="uk-grid-small" uk-grid method="post">
                                <div class="uk-width-1-5@s">
                                    <input class="uk-input" type="text" placeholder="姓名" name="studentname">
                                </div>
                                <div class="uk-width-1-5@s">
                                    <input class="uk-input" type="text" placeholder="班级" name="class">
                                </div>
                                <div class="uk-width-1-5@s">
                                    <input class="uk-input" type="text" placeholder="出生日期" name="birthday">
                                </div>
                                <div class="uk-width-1-5@s">
                                    <input class="uk-input" type="text" placeholder="联系方式" name="phone">
                                </div>
                                <div class="uk-width-1-5@s">
                                    <button class="uk-button uk-button-primary" type="submit" name="addStudent">添加学生</button>
                                </div>
                            </form>

                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="uk-margin-medium-top">
                                    <button class="uk-button uk-button-primary" type="submit">删除选中</button>
                                </div>
                                <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th class="uk-width-small">选择</th>
                                            <th class="uk-table-expand">ID</th>
                                            <th class="uk-table-expand">姓名</th>
                                            <th class="uk-table-expand">班级</th>
                                            <th class="uk-table-expand">出生日期</th>
                                            <th class="uk-table-expand">联系方式</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($student->getStu() as $oneStu) {
                                            echo '<tr>
                                            <td><input class="uk-checkbox" type="checkbox" name="need_delete_student[]" value="' . $oneStu['ID'] . '"></td>
                                            <td>' . $oneStu['ID'] . '</td>
                                            <td class="editName" id="' . $oneStu['ID'] . '">' . $oneStu['name'] . '</td>
                                            <td class="editClass" id="' . $oneStu['ID'] . '">' . $oneStu['class'] . '</td>
                                            <td class="editBirthday" id="' . $oneStu['ID'] . '">' . $oneStu['birthday'] . '</td>
                                            <td class="editPhone" id="' . $oneStu['ID'] . '">' . $oneStu['phone'] . '</td>
                                            </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                            <?php

                            if (isset($_POST["addStudent"])) {                        
                                $student->addStu($_POST['studentname'], $_POST['class'], $_POST['birthday'],$_POST['phone']);
                                echo "<script language=JavaScript> location.replace(location.href);</script>";
                            } 
                            
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<script type="text/javascript">
    $(function() {
        $('.editName').editable('./operation.php?option=fromStudentChangeName', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击可以编辑...',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.editClass').editable('./operation.php?option=fromStudentChangeClass', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击可以编辑...',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.editBirthday').editable('./operation.php?option=fromStudentChangeBirthday', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击可以编辑...',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.editPhone').editable('./operation.php?option=fromStudentChangePhone', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击可以编辑...',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
</script>