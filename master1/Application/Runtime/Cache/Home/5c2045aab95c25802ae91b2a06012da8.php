<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="UTF-8" />

    <title>留学大师</title>
    <base href="http://localhost/project/Study master/master1/Public/">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Import google fonts -->
    <!--<link href="http://fonts.useso.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css" />-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-touch-icon-152x152.png" />

    <!-- start: CSS file-->

    <!-- Vendor CSS-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/skycons/css/skycons.css" rel="stylesheet" />
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Plugins CSS-->
    <link href="assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />
    <link href="assets/plugins/scrollbar/css/mCustomScrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />
    <link href="assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet" />
    <link href="assets/plugins/xcharts/css/xcharts.min.css" rel="stylesheet" />
    <link href="assets/plugins/morris/css/morris.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link href="assets/css/jquery.mmenu.css" rel="stylesheet" />

    <!-- Page CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/add-ons.min.css" rel="stylesheet" />

    <!-- end: CSS file-->


    <!-- Head Libs -->
    <script src="assets/plugins/modernizr/js/modernizr.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	
	<body>

	<!-- Start: Header -->
<div class="navbar" role="navigation">
    <div class="container-fluid container-nav">
        <!-- Navbar Action -->
        <ul class="nav navbar-nav navbar-actions navbar-left">
            <li class="visible-md visible-lg"><a href="index.html#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
            <li class="visible-xs visible-sm"><a href="index.html#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
        </ul>
        <!-- Navbar Left -->
        <div class="navbar-left">
            <!-- Search Form -->
            <form class="search navbar-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
                </div>
            </form>
        </div>
        <!-- Navbar Right -->
        <div class="navbar-right">
            <!-- Notifications -->
            <ul class="notifications hidden-sm hidden-xs">
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">10</span>
                    </a>
                    <ul class="dropdown-menu update-menu" role="menu">
                        <li><a href="#"><i class="fa fa-database bk-fg-primary"></i> Database </a></li>
                        <li><a href="#"><i class="fa fa-bar-chart-o bk-fg-primary"></i> Connection </a></li>
                        <li><a href="#"><i class="fa fa-bell bk-fg-primary"></i> Notification </a></li>
                        <li><a href="#"><i class="fa fa-envelope bk-fg-primary"></i> Message </a></li>
                        <li><a href="#"><i class="fa fa-flash bk-fg-primary"></i> Traffic </a></li>
                        <li><a href="#"><i class="fa fa-credit-card bk-fg-primary"></i> Invoices </a></li>
                        <li><a href="#"><i class="fa fa-dollar bk-fg-primary"></i> Finances </a></li>
                        <li><a href="#"><i class="fa fa-thumbs-o-up bk-fg-primary"></i> Orders </a></li>
                        <li><a href="#"><i class="fa fa-folder bk-fg-primary"></i> Directories </a></li>
                        <li><a href="#"><i class="fa fa-users bk-fg-primary"></i> Users </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="badge">5</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header">
                            <strong>Messages</strong>
                            <div class="progress progress-xs  progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar1.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>1 minute ago</small></span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar2.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>3 minute ago</small></span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar3.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>4 minute ago</small></span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar4.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>30 minute ago</small></span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar5.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>1 hours ago</small></span>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer text-center">
                            <a href="page-inbox.html">View all messages</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge">3</span>
                    </a>
                    <ul class="dropdown-menu list-group">
                        <li class="dropdown-menu-header">
                            <strong>Notifications</strong>
                            <div class="progress progress-xs  progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </li>
                        <li class="list-item">
                            <a href="page-inbox.html">
                                <div class="pull-left">
                                    <i class="fa fa-envelope-o bk-fg-primary"></i>
                                </div>
                                <div class="media-body clearfix">
                                    <div>Unread Message</div>
                                    <h6>You have 10 unread message</h6>
                                </div>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#">
                                <div class="pull-left">
                                    <i class="fa fa-cogs bk-fg-primary"></i>
                                </div>
                                <div class="media-body clearfix">
                                    <div>New Settings</div>
                                    <h6>There are new settings available</h6>
                                </div>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#">
                                <div class="pull-left">
                                    <i class="fa fa-fire bk-fg-primary"></i>
                                </div>
                                <div class="media-body clearfix">
                                    <div>Update</div>
                                    <h6>There are new updates available</h6>
                                </div>
                            </a>
                        </li>
                        <li class="list-item-last">
                            <a href="#">
                                <h6>Unread notifications</h6>
                                <span class="badge">15</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End Notifications -->
            <!-- Userbox -->
            <div class="userbox">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="profile-info">
                        <span class="name">John Smith Doe</span>
                        <span class="role">Developer</span>
                    </div>
                    <i class="fa custom-caret"></i>
                </a>
                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="dropdown-menu-header bk-bg-white bk-margin-top-15">
                            <div class="progress progress-xs  progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="page-profile.html"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench"></i> Settings</a>
                        </li>
                        <li>
                            <a href="page-invoice"><i class="fa fa-usd"></i> Payments</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file"></i> File</a>
                        </li>
                        <li>
                            <a href="page-login.html"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Userbox -->
        </div>
        <!-- End Navbar Right -->
    </div>
</div>
<!-- End: Header -->

		<div class="container-fluid content">	
			<div class="row">

				<div class="sidebar">
    <div class="sidebar-collapse">
        <!-- Sidebar Header Logo-->
        <div class="sidebar-header">
            <img src="assets/img/logo.png" class="img-responsive" alt="" />
        </div>
        <!-- Sidebar Menu-->
        <div class="sidebar-menu">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-sidebar">
                    <div class="panel-body text-center">
                        <div class="bk-avatar">
                            <img src="assets/img/avatar.jpg" class="img-circle bk-img-60" alt="" />
                        </div>
                        <div class="bk-padding-top-10">
                            <i class="fa fa-circle text-success"></i> <small>Administrator</small>
                        </div>
                    </div>
                    <div class="divider2"></div>
                    <li class="nav-parent">
                        <a>
                            <i class="glyphicon glyphicon-home" aria-hidden="true"></i><span>首页服务</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="<?php echo U('home/madeList');?>"><i class="glyphicon glyphicon-pushpin"></i><span class="text"> 定制服务</span></a></li>
                            <li><a href="page-activity.html"><i class="fa fa-plane"></i><span class="text"> 接机服务</span></a></li>
                            <li><a href="fa-truck"><i class="fa fa-truck"></i><span class="text"> 包车服务</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-tags" aria-hidden="true"></i><span>攻略</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="form-elements.html"><i class="glyphicon glyphicon-pencil"></i><span class="text">添加攻略</span></a></li>
                            <li><a href="form-wizard.html"><i class="fa fa-tag"></i><span class="text">新生攻略</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-gittip"></i><span class="text">师兄分享</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-instagram" aria-hidden="true"></i><span>我的服务</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="form-elements.html"><i class="fa fa-ticket"></i><span class="text">优惠券</span></a></li>
                            <li><a href="form-wizard.html"><i class="fa fa-credit-card"></i><span class="text">订单</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-share-square-o"></i><span class="text">发布</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-road"></i><span class="text">司机行程</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i><span>人员管理</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="form-elements.html"><i class="fa fa-users"></i><span class="text">用户管理</span></a></li>
                            <li><a href="form-wizard.html"><i class="fa fa-user-md"></i><span class="text">司机管理</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-user"></i><span class="text">管理员</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-comments-o" aria-hidden="true"></i><span>消息管理</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="form-elements.html"><i class="fa fa-comment"></i><span class="text">评论管理</span></a></li>
                            <li><a href="form-wizard.html"><i class="fa fa-comment-o"></i><span class="text">评价管理</span></a></li>
                            <li><a href="form-dropzone.html"><i class="glyphicon glyphicon-comment"></i><span class="text">反馈管理</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-comments"></i><span class="text">消息管理</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-flask" aria-hidden="true"></i><span>学生服务</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="form-elements.html"><i class="fa fa-ticket"></i><span class="text">购买机票</span></a></li>
                            <li><a href="form-wizard.html"><i class="fa fa-hand-o-right"></i><span class="text">行前指导</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-star-half-o"></i><span class="text">个性需求</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-shield"></i><span class="text">管家服务</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-bookmark"></i><span class="text">行李寄存</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-rocket"></i><span class="text">转学服务</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-exclamation-triangle"></i><span class="text">危机处理</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-arrow-circle-left"></i><span class="text">寻找实习</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="glyphicon glyphicon-briefcase " aria-hidden="true"></i><span>家长服务</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="form-elements.html"><i class="glyphicon glyphicon-search"></i><span class="text">探望子女</span></a></li>
                            <li><a href="form-wizard.html"><i class="glyphicon glyphicon-lock"></i><span class="text">商务考察</span></a></li>
                            <li><a href="form-dropzone.html"><i class="glyphicon glyphicon-phone-alt"></i><span class="text">移民咨询</span></a></li>
                            <li><a href="form-dropzone.html"><i class="glyphicon glyphicon-bullhorn"></i><span class="text">监护服务</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-book"></i><span class="text">办理签证</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-building-o"></i><span class="text">房屋出租</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-dashboard (alias)"></i><span class="text">海外房产</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-random"></i><span class="text">商务合作</span></a></li>
                        </ul>
                    </li>


                </ul>
            </nav>
        </div>
        <!-- End Sidebar Menu-->
    </div>
    <!-- Sidebar Footer-->
    <div class="sidebar-footer">
        <ul class="sidebar-terms">
            <li><a href="index.html#">Terms</a></li>
            <li><a href="index.html#">Privacy</a></li>
            <li><a href="index.html#">Help</a></li>
            <li><a href="index.html#">About</a></li>
        </ul>

    </div>
    <!-- End Sidebar Footer-->
</div>
		
				<!-- Main Page -->
				<div class="main ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="<?php echo U('index/index');?>">首页</a></li>
								<li class="active">添加定制</li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>MEADADD</h2>
						</div>					
					</div>
					<!-- End Page Header -->
					<div class="row">
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-heading bk-bg-primary">
									<h6><i class="fa fa-indent red"></i>添加定制服务</h6>
									<div class="panel-actions">
										<a href="<?php echo U('Home/madeList');?>" ><button class="bk-margin-5 btn label-warning">定制列表</button></a>
									</div>
								</div>
								<div class="panel-body">
									<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">
										<div class="form-group">
											<label class="col-md-3 control-label" for="text-input">标题：</label>
											<div class="col-md-9">
												<input type="text" id="text-input" name="text-input" class="form-control" placeholder="Text">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="textarea-input">内容：</label>
											<div class="col-md-9">
												<textarea id="textarea-input" name="textarea-input" rows="9" class="form-control" placeholder="Content.."></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="file-multiple-input">图片：</label>
											<div class="col-md-9">
												<input type="file" id="file-multiple-input" name="file-multiple-input" multiple />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">是否推荐：</label>
											<div class="col-md-9">
												<div class="radio-custom radio-inline">
													<input type="radio" id="inline-radio1" name="inline-radios" value="option1">
													<label for="inline-radio1">推荐</label>
												</div>
												<div class="radio-custom radio-inline">
													<input type="radio" id="inline-radio2" name="inline-radios" value="option2">
													<label for="inline-radio2">不推荐</label>
												</div>
											</div>
										</div>
										<br>
									</form>
								</div>	
							</div>	
						</div>
					</div>
				</div>
				<!-- End Main Page -->
			
			</div>
		</div><!--/container-->
		
		<div class="clearfix"></div>


	
<div class="clearfix"></div>


<!-- start: JavaScript-->

<!-- Vendor JS-->
<script src="assets/vendor/js/jquery.min.js"></script>
<script src="assets/vendor/js/jquery-2.1.1.min.js"></script>
<script src="assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/skycons/js/skycons.js"></script>

<!-- Plugins JS-->
<script src="assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
<script src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugins/bootkit/js/bootkit.js"></script>
<script src="assets/plugins/moment/js/moment.min.js"></script>
<script src="assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
<script src="assets/plugins/touchpunch/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.time.min.js"></script>
<script src="assets/plugins/xcharts/js/xcharts.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/placeholder/js/jquery.placeholder.min.js"></script>
<script src="assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/raphael/js/raphael.min.js"></script>
<script src="assets/plugins/morris/js/morris.min.js"></script>
<script src="assets/plugins/gauge/js/gauge.min.js"></script>
<script src="assets/plugins/d3/js/d3.min.js"></script>
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->

<!-- Theme JS -->
<script src="assets/js/jquery.mmenu.min.js"></script>
<script src="assets/js/core.min.js"></script>

<!-- Pages JS -->
<script src="assets/js/pages/index.js"></script>

<!-- end: JavaScript-->
		
	</body>
	
</html>