<?php
require('header.php');

if ($_POST['need_delete_school'] != null) {
    for ($i = 0; $i < count($_POST['need_delete_school']); $i++) {
        $school->delSchool($_POST['need_delete_school'][$i]);
    }
}


?>
<title><?php echo $websitename; ?>-学校管理</title>

<div class="uk-container uk-container-expand uk-background-muted main">
    <div class="uk-section uk-section-xsmall uk-padding-remove-top">
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-visible@s">
                <div class="uk-navbar-item">
                    <ul class="uk-breadcrumb uk-margin-remove-bottom">
                        <li><a href="home.php" uk-icon="icon: home"></a></li>
                        <li><span>信息管理</span></li>
                        <li><span>学校管理</span></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="uk-child-width-1-1" uk-grid>
            <div class="uk-overflow-auto">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title uk-margin-remove-bottom">学校管理</h3>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-overflow-auto">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                                <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                                    <p uk-margin>
                                        <button class="uk-button uk-button-primary" type="submit">删除选中</button>
                                        <a id="js-modal-prompt" class="uk-button uk-button-default" href="#">添加学校</a>
                                    </p>
                                    <thead>
                                        <tr>
                                            <th class="uk-width-small">选择</th>
                                            <th class="uk-width-small">ID</th>
                                            <th class="uk-table-expand">学校名称</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($school->getSchool() as $oneSchool) {
                                            echo '<tr>
                                            <td><input class="uk-checkbox" type="checkbox" name="need_delete_school[]" value="' . $oneSchool['ID'] .'"></td>
                                            <td>' . $oneSchool['ID'] . '</td>
                                            <td class="edit" id="' . $oneSchool['ID'] . '">' . $oneSchool['name'] . '</td>
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
        $('.edit').editable('./operation.php?option=formSchoolChangeSchool', {

            width: 200,
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
    UIkit.util.on('#js-modal-prompt', 'click', function(e) {
        e.preventDefault();
        e.target.blur();
        UIkit.modal.prompt('学校名称:', ).then(function(name) {
            $.ajax({
                url: 'operation.php',
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