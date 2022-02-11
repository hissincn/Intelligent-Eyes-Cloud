<?php 
require('header.php'); 
require('../API/school.php'); 
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
							<table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
								<thead>
									<tr>
										<th class="uk-width-small">选择</th>
										<th class="uk-width-small">ID</th>
										<th class="uk-table-expand">学校名称</th>
				
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input class="uk-checkbox" type="checkbox"></td>
										<td><img class="uk-preserve-width uk-border-circle" src="http://www.getuikit.net/skin/ukv3/images/avatar.jpg" width="40" alt=""></td>
										<td class="uk-table-link">
											<a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
												tempor.</a>
										</td>
										
									</tr>
									<tr>
										<td><input class="uk-checkbox" type="checkbox"></td>
										<td><img class="uk-preserve-width uk-border-circle" src="http://www.getuikit.net/skin/ukv3/images/avatar.jpg" width="40" alt=""></td>
										<td class="uk-table-link">
											<a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
												tempor.</a>
										</td>
										
									</tr>
							
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>



    </div>
</div>