<?php 
require('header.php');
require('../API/classes.php');
?>
<title><?php echo $websitename;?>-班级管理</title>

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
                            <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                                <thead>
                                    <tr>
                                        <th class="uk-width-small">选择</th>
                                        <th class="uk-width-small">ID</th>
                                        <th class="uk-table-expand">班级名称</th>
                                        <th class="uk-table-expand">年级</th>
                                        <th class="uk-table-expand">学校</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($classes->getClass() as $oneClass) {
                                        echo '<tr>
										<td><input class="uk-checkbox" type="checkbox"></td>
										<td>' . $oneClass['ID'] . '</td>
										<td class="edit" id="'.$oneClass['ID'].'">' . $oneClass['class'] . '</td>
                                        <td class="edit" id="'.$oneClass['ID'].'">' . $oneClass['grade'] . '</td>
                                        <td class="edit" id="'.$oneClass['ID'].'">' . $oneClass['school'] . '</td>
										</tr>';
                                    }

                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>


<script type="text/javascript">
    $(function() {
        $('.edit').editable('./jquery_save.php?option=changeClassesname', {
            
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
</script>
