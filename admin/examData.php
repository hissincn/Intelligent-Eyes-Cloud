<?php require('header.php');
if ($_POST['need_delete_sight'] != null) {
    for ($i = 0; $i < count($_POST['need_delete_sight']); $i++) {
        $sight->delSight($_POST['need_delete_sight'][$i]);
    }
    echo "<script language=JavaScript> location.replace(location.href);</script>";
}
 ?>
<title><?php echo $websitename;?>-体检数据</title>

<div class="uk-container uk-container-expand uk-background-muted main">
    <div class="uk-section uk-section-xsmall uk-padding-remove-top">
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-visible@s">
                <div class="uk-navbar-item">
                    <ul class="uk-breadcrumb uk-margin-remove-bottom">
                        <li><a href="home.php" uk-icon="icon: home"></a></li>
                        <li><span>体检管理</span></li>
                        <li><span>体检数据</span></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="uk-child-width-1-1" uk-grid>
            <div class="uk-overflow-auto">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title uk-margin-remove-bottom">体检数据</h3>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-overflow-auto">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <p uk-margin>
                                    <button class="uk-button uk-button-primary" type="submit">删除选中</button>
                                </p>
                                <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th class="uk-width-3-6">选择</th>
                                            <th class="uk-width-3-6">ID</th>
                                            <th class="uk-width-3-6">学生ID</th>
                                            <th class="uk-table-expand">裸眼左（标准对数）</th>
                                            <th class="uk-table-expand">裸眼右（标准对数）</th>
                                            <th class="uk-table-expand">矫正左（小数）</th>
                                            <th class="uk-table-expand">矫正右（小数）</th>
                                            <th class="uk-table-expand">球镜左</th>
                                            <th class="uk-table-expand">球镜右</th>
                                            <th class="uk-table-expand">柱镜左</th>
                                            <th class="uk-table-expand">柱镜右</th>
                                            <th class="uk-table-expand">轴位左</th>
                                            <th class="uk-table-expand">轴位右</th>
                                            <th class="uk-table-expand">测试时间</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($sight->getSight() as $oneSight) {
                                            echo '<tr>
                                            <td><input class="uk-checkbox" type="checkbox" name="need_delete_sight[]" value="' . $oneSight['ID'] . '"></td>
                                            <td>' . $oneSight['ID'] . '</td>
                                            <td class="edit_student" id="' . $oneSight['ID'] . '">' . $oneSight['student'] . '</td>
                                            <td class="edit_naked_L" id="' . $oneSight['ID'] . '">' . $oneSight['naked_L'] . '</td>
                                            <td class="edit_naked_R" id="' . $oneSight['ID'] . '">' . $oneSight['naked_R'] . '</td>
                                            <td class="edit_corrected_L" id="' . $oneSight['ID'] . '">' . $oneSight['corrected_L'] . '</td>
                                            <td class="edit_corrected_R" id="' . $oneSight['ID'] . '">' . $oneSight['corrected_R'] . '</td>
                                            <td class="edit_DS_L" id="' . $oneSight['ID'] . '">' . $oneSight['DS_L'] . '</td>
                                            <td class="edit_DS_R" id="' . $oneSight['ID'] . '">' . $oneSight['DS_R'] . '</td>
                                            <td class="edit_DC_L" id="' . $oneSight['ID'] . '">' . $oneSight['DC_L'] . '</td>
                                            <td class="edit_DC_R" id="' . $oneSight['ID'] . '">' . $oneSight['DC_R'] . '</td>
                                            <td class="edit_Axis_L" id="' . $oneSight['ID'] . '">' . $oneSight['Axis_L'] . '</td>
                                            <td class="edit_Axis_R" id="' . $oneSight['ID'] . '">' . $oneSight['Axis_R'] . '</td>
                                            <td class="edit_date" id="' . $oneSight['ID'] . '">' . $oneSight['date'] . '</td>
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
        $('.edit_naked_L').editable('./operation.php?option=fromSightChangenakedL', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_naked_R').editable('./operation.php?option=fromSightChange_naked_R', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_corrected_L').editable('./operation.php?option=fromSightChange_corrected_L', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_corrected_R').editable('./operation.php?option=fromSightChange_corrected_R', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_DS_L').editable('./operation.php?option=fromSightChange_DS_L', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_DS_R').editable('./operation.php?option=fromSightChange_DS_R', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_DC_L').editable('./operation.php?option=fromSightChange_DC_L', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_DC_R').editable('./operation.php?option=fromSightChange_DC_R', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_Axis_L').editable('./operation.php?option=fromSightChange_Axis_L', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_Axis_R').editable('./operation.php?option=fromSightChange_Axis_R', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
    $(function() {
        $('.edit_date').editable('./operation.php?option=fromSightChangeDate', {

            width: 100,
            height: 18,
            onblur: 'ignore',
            placeholder:'添加数据',
            cancel: '取消',
            submit: '确定',
            tooltip: '单击以编辑',
            indicator: "&lt;img src='../var/spinner.svg' /&gt;",
            cssclass: 'custom-class',
            cancelcssclass: 'btn btn-danger',
            submitcssclass: 'btn btn-success',
            cssclass: 'custom-class',

        });
    });
</script>