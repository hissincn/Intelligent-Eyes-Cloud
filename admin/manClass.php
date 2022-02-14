<?php
require('header.php');
if ($_POST['need_delete_classes'] != null) {
    for ($i = 0; $i < count($_POST['need_delete_classes']); $i++) {
        $classes->delClass($_POST['need_delete_classes'][$i]);
    }
    echo "<script language=JavaScript> location.replace(location.href);</script>";
}

?>
<title><?php echo $websitename; ?>-班级管理</title>

<div class="uk-container uk-container-expand uk-background-muted main">
    <div class="uk-section uk-section-xsmall uk-padding-remove-top">
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-visible@s">
                <div class="uk-navbar-item">
                    <ul class="uk-breadcrumb uk-margin-remove-bottom">
                        <li><a href="home.php" uk-icon="icon: home"></a></li>
                        <li><span>信息管理</span></li>
                        <li><span>班级管理</span></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="uk-child-width-1-1" uk-grid>
            <div class="uk-overflow-auto">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title uk-margin-remove-bottom">班级管理</h3>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-overflow-auto">


                            <form class="uk-grid-small" uk-grid method="post">
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="班级" name="classname">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="年级" name="gradename">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <input class="uk-input" type="text" placeholder="学校代号(ID)" name="schoolid">
                                </div>
                                <div class="uk-width-1-4@s">
                                    <button class="uk-button uk-button-primary" type="submit" name="addClass">添加班级</button>
                                </div>
                            </form>

                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="uk-margin-medium-top">
                                    <button class="uk-button uk-button-primary" type="submit">删除选中</button>
                                </div>
                                <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th class="uk-width-1-6">选择</th>
                                            <th class="uk-width-1-6">ID</th>
                                            <th class="uk-table-expand">班级名称</th>
                                            <th class="uk-table-expand">年级</th>
                                            <th class="uk-table-expand">学校代号(ID)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($classes->getClass() as $oneClass) {
                                            echo '<tr>
                                            <td><input class="uk-checkbox" type="checkbox" name="need_delete_classes[]" value="' . $oneClass['ID'] . '"></td>
                                            <td>' . $oneClass['ID'] . '</td>
                                            <td class="editClass" id="' . $oneClass['ID'] . '">' . $oneClass['class'] . '</td>
                                            <td class="editGrade" id="' . $oneClass['ID'] . '">' . $oneClass['grade'] . '</td>
                                            <td class="editSchool" id="' . $oneClass['ID'] . '">' . $oneClass['school'] . '</td>
                                            </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                            <?php

                            if (isset($_POST["addClass"])) {                        
                                $classes->addClass($_POST['classname'], $_POST['gradename'], $_POST['schoolid']);
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
        $('.editClass').editable('./operation.php?option=fromClassChangeClass', {

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
        $('.editGrade').editable('./operation.php?option=fromClassChangeGrade', {

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
        $('.editSchool').editable('./operation.php?option=fromClassChangeSchool', {

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