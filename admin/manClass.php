<?php
require('header.php');
if ($_POST['need_delete_classes'] != null) {
    for ($i = 0; $i < count($_POST['need_delete_classes']); $i++) {
        $classes->delClass($_POST['need_delete_classes'][$i]);
    }
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
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                                    <p uk-margin>
                                        <button class="uk-button uk-button-primary" type="submit">删除选中</button>
                                        <a id="js-modal-dialog" class="uk-button uk-button-default" href="#">添加班级</a>
                                    </p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>


<script type="text/javascript">
    $(function() {
        $('.editClass').editable('./jquery_save.php?option=fromClassChangeClass', {

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
        $('.editGrade').editable('./jquery_save.php?option=fromClassChangeGrade', {

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
        $('.editSchool').editable('./jquery_save.php?option=fromClassChangeSchool', {

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

    UIkit.util.on('#js-modal-dialog', 'click', function (e) {
           e.preventDefault();
           e.target.blur();
           UIkit.modal.dialog('<form method="post"> <fieldset class="uk-fieldset"><legend class="uk-legend">新增班级</legend>        <div class="uk-margin">        <div class="uk-inline">               <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>                <input class="uk-input" type="text" placeholder="班级" name="changedUsername">            </div>        </div>        <div class="uk-margin">            <div class="uk-inline">                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>                <input class="uk-input" type="text" placeholder="班级" name="changedPassword">            </div>        </div>        <div class="uk-margin">            <div class="uk-inline">                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>                <input class="uk-input" type="text" placeholder="学校代号" name="changedPassword">            </div>        </div>        <div class="uk-margin">            <div class="uk-inline">                <button class="uk-button uk-button-primary" type="submit" name="changedUP">提交</button>            </div>        </div>    </fieldset></form>'); 
    };
    
    UIkit.util.on('#js-modal-prompt', 'click', function(e) {
        e.preventDefault();
        e.target.blur();
        UIkit.modal.prompt('学校名称:', ).then(function(name) {
            $.ajax({
                url: 'jquery_save.php',
                type: 'post',
                data: {
                    "option": "addSchool",
                    "schoolName": name
                },
                dataType: 'text',
                success: function() {
                    location.replace(location.href);
                }
            });

        });
 
    });
</script>

