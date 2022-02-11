<?php require('header.php'); ?>
<title><?php echo $websitename; ?>-管理后台</title>


<div class="uk-container uk-container-expand uk-background-muted main">
	<div class="uk-section uk-section-xsmall uk-padding-remove-top">
		<nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
			<div class="uk-navbar-left uk-visible@s">
				<div class="uk-navbar-item">
					<ul class="uk-breadcrumb uk-margin-remove-bottom">
						<li><a href="" uk-icon="icon: home"></a></li>
						<li><a href="#">系统设置</a></li>
						<li><span>项目一</span></li>
					</ul>
				</div>

			</div>
			<div class="uk-navbar-right">
				<div class="uk-navbar-item">
					<form action="javascript:void(0)">
						<input class="uk-input uk-form-width-small" type="text" placeholder="输入关键字">
						<button class="uk-button uk-button-default">搜索</button>
					</form>
				</div>
				<div class="uk-navbar-item">
					<button href="" class="uk-icon uk-margin-small-right uk-icon-image" style="background-image: url(https://keenthemes.com/keen/themes/keen/theme/demo2/dist/assets/media/flags/226-united-states.svg);"></button>
					<div uk-dropdown>
						<ul class="uk-nav uk-dropdown-nav">
							<li><a href="#">中文</a></li>
							<li><a href="#">English</a></li>
						</ul>
					</div>
					<a href="" class="uk-margin-small-right"><span uk-icon="icon: bell; ratio: 1"></span><span class="uk-badge uk-text-top">2</span></a>
				</div>
			</div>
		</nav>




		<!-- 图表 -->
		<div class="uk-child-width-1-1 uk-grid-match" uk-grid>
			<div>

				<div class="uk-card uk-card-default">
					<div class="uk-card-body">
						<div id="tb1" style="width: 100%;height:450px;"></div>

					</div>
				</div>

			</div>
		</div>


		<div class="uk-child-width-1-1 uk-child-width-1-3@m uk-grid-match" uk-grid>
			<div>
				<div class="uk-card uk-card-default uk-card-hover">
					<div class="uk-card-badge"><button class="uk-button uk-button-default uk-button-small" type="button">切换 <span class="uk-margin-small-right uk-icon" uk-icon="chevron-down"></span></button>
						<div uk-dropdown="mode: click">
							<ul class="uk-nav uk-dropdown-nav">
								<li><a href="#"><span class="uk-margin-small-right uk-icon" uk-icon="icon: image"></span>昨天</a></li>
								<li><a href="#"><span class="uk-margin-small-right uk-icon" uk-icon="icon: settings"></span>今天</a></li>
								<li><a href="#"><span class="uk-margin-small-right uk-icon" uk-icon="icon: trash"></span>明天</a></li>
							</ul>
						</div>
					</div>
					<div class="uk-card-body">
						<h3 class="uk-card-title">Primary</h3>
						<p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

			</div>
			<div>

				<div class="uk-card uk-card-primary uk-card-hover">
					<div class="uk-card-badge">Hot</div>
					<div class="uk-card-body">
						<h3 class="uk-card-title">Primary</h3>
						<p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p uk-margin="">
							<a class="uk-button uk-button-default uk-first-column" href="#">Button</a>
							<a class="uk-button uk-button-text uk-margin-small-left" href="#">Button</a>
						</p>
					</div>
				</div>

			</div>
			<div>

				<div class="uk-card uk-card-secondary uk-card-hover uk-card-body">
					<h3 class="uk-card-title">Secondary</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore.</p>
				</div>

			</div>
		</div>



		<div class="uk-child-width-1-1" uk-grid>
			<div class="uk-overflow-auto">
				<div class="uk-card uk-card-default">
					<div class="uk-card-header">
						<h3 class="uk-card-title uk-margin-remove-bottom">表格组件</h3>
					</div>
					<div class="uk-card-body">
						<div class="uk-overflow-auto">
							<table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
								<thead>
									<tr>
										<th class="uk-table-shrink"></th>
										<th class="uk-table-shrink">Preserve</th>
										<th class="uk-table-expand">Expand + Link</th>
										<th class="uk-width-small">Truncate</th>
										<th class="uk-table-shrink uk-text-nowrap">Shrink + Nowrap</th>
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
										<td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor.</td>
										<td class="uk-text-nowrap">Lorem ipsum dolor</td>
									</tr>
									<tr>
										<td><input class="uk-checkbox" type="checkbox"></td>
										<td><img class="uk-preserve-width uk-border-circle" src="http://www.getuikit.net/skin/ukv3/images/avatar.jpg" width="40" alt=""></td>
										<td class="uk-table-link">
											<a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
												tempor.</a>
										</td>
										<td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor.</td>
										<td class="uk-text-nowrap">Lorem ipsum dolor</td>
									</tr>
									<tr>
										<td><input class="uk-checkbox" type="checkbox"></td>
										<td><img class="uk-preserve-width uk-border-circle" src="http://www.getuikit.net/skin/ukv3/images/avatar.jpg" width="40" alt=""></td>
										<td class="uk-table-link">
											<a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
												tempor.</a>
										</td>
										<td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor.</td>
										<td class="uk-text-nowrap">Lorem ipsum dolor</td>
									</tr>
									<tr>
										<td><input class="uk-checkbox" type="checkbox"></td>
										<td><img class="uk-preserve-width uk-border-circle" src="http://www.getuikit.net/skin/ukv3/images/avatar.jpg" width="40" alt=""></td>
										<td class="uk-table-link">
											<a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
												tempor.</a>
										</td>
										<td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor.</td>
										<td class="uk-text-nowrap">Lorem ipsum dolor</td>
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