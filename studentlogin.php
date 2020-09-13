<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ONLINE NOTICEBOARD</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    
	<!--     Fonts and icons     
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
     <link href="assets/css/material-icons.min.css" rel="stylesheet" />   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>   
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link rel='stylesheet' href='home/plugins/goodlayers-core/plugins/combine/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='home/plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all' />
    <link rel='stylesheet' href='home/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='home/css/style-core.css' type='text/css' media='all' />
	<link rel='stylesheet' href='home/css/kingster-style-custom.css' type='text/css' media='all' />
	
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/material-icons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/js/reports-plugins/buttons.dataTables.min.css"/>  
    <link rel="stylesheet" href="assets/css/jquery-ui.css"/>  
	<link rel="stylesheet" href="assets/css/jquery-ui.theme.css"/>  
    

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=5.0.3' type='text/css' media='all' />


</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <div class="kingster-mobile-header-wrap">
        <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
            <div class="kingster-mobile-header-container kingster-container clearfix">
                <div class="kingster-logo  kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <a class="" href="index.html"><img src="home/images/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="kingster-mobile-menu-right">
                   
                    <div class="kingster-mobile-menu"><a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger" href="#kingster-mobile-menu"><span></span></a>
                        <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item"><a href="department.php">Notices</a></li>
                                <li class="menu-item"><a href="library.php">library</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <div class="kingster-top-bar">
                <div class="kingster-top-bar-background"></div>
                <div class="kingster-top-bar-container kingster-container ">
                    <div class="kingster-top-bar-container-inner clearfix">
                        <div class="kingster-top-bar-left kingster-item-pdlr"><i class="fa fa-envelope-open-o" id="i_983a_0"></i>principal@anjaconline.org <i class="fa fa-phone" id="i_983a_1"></i> 04562-254100</div>
                        <div class="kingster-top-bar-right kingster-item-pdlr">
                            <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                                <li class="menu-item kingster-normal-menu"><a href="studentlogin.php">Student</a></li>
                               
                                <li class="menu-item kingster-normal-menu"><a href="stafflogin.php">Portal</a></li>
                            </ul>
                            <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button" href="#" target="_blank">Support Anjac</a></div>
                    </div>
                </div>
            </div>
            <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
                <div class="kingster-header-background"></div>
                <div class="kingster-header-container  kingster-container">
                    <div class="kingster-header-container-inner clearfix">
                        <div class="kingster-logo  kingster-item-pdlr">
                            <div class="kingster-logo-inner">
                                <a class="" href="index.html"><img src="home/images/logo2.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="kingster-navigation kingster-item-pdlr clearfix ">
                            <div class="kingster-main-menu" id="kingster-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item kingster-normal-menu"><a href="index.php">Home</a></li>
                                    <li class="menu-item kingster-normal-menu"><a href="department.php">Notices</a></li>
                                    <li class="menu-item kingster-normal-menu"><a href="library.php">library</a></li>
                                </ul>
                                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                            </div>
                            <div class="kingster-main-menu-right-wrap clearfix ">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
<div class="signup-page">
    
    <div class="wrapper">
        
		<div class="header header-filter" style="background-image: url('https://images.freecreatives.com/wp-content/uploads/2016/02/Blue-Pattern-Background-For-Free-Download.jpg'); background-size: cover; background-position: top center;">
			<div class="container">               
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form id="login" class="form" method="POST" action="studentlogin.php">
								<div class="header header-primary text-center">
									<h4>STUDENTS SIGN IN</h4>								
								</div>
								<p class="text-divider">Credentials required</p>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input name="username" type="text" class="form-control" placeholder="Username...">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input name="email" type="email" class="form-control" placeholder="Email...">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input name="password" required="" type="password" placeholder="Password..." class="form-control" />
									</div>

									<!-- If you want to add a checkbox to this form, uncomment this code-->

									<!--<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Subscribe to newsletter
										</label>
									</div> -->
								</div>
								<div class="footer text-center">
									<button class="btn btn-simple btn-primary btn-lg">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>            
		</div><!-- End of header div -->
</div>
    
	<footer>
                <div class="kingster-footer-wrapper ">
                    <div class="kingster-footer-container kingster-container clearfix">
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Contact Us</h3><span class="clear"></span>
                                <span>
                                <i class="fa fa-map-marker"></i>Ayya Nadar Janaki Ammal College,
                                Sivakasi,
                                Srivilliputhur Main Road,
                                Sivakasi - 626124, Tamilnadu,
                                </li></br>
                                <i class="fa fa-phone"></i> 04562-254100
                                </span>
                                <span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="kingster-copyright-wrapper">
                    <div class="kingster-copyright-container kingster-container clearfix">
                        <div class="kingster-copyright-left kingster-item-pdlr">Copyright All Right Reserved 2020,ANJAC</div>
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>

    	<!--   Core JS Files   -->
    	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    	<script src="assets/js/material.min.js"></script>
    	<script src="assets/js/material-kit.js" type="text/javascript"></script>
    	<!-- Material Dashboard javascript methods -->
    	<script src="assets/js/material-dashboard.js"></script>
        <script src="assets/js/bootstrap-notify.js" type="text/javascript"></script>
    	<!-- custom methods,to include in  project! -->
    	<script src="assets/js/custom.js"></script>


    <script type='text/javascript' src='home/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='home/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='home/plugins/goodlayers-core/plugins/combine/script.js'></script>
    <script type='text/javascript' src='home/plugins/goodlayers-core/include/js/page-builder.js'></script>
    <script type='text/javascript' src='home/js/jquery/ui/effect.min.js'></script>
    <script type='text/javascript' src='home/js/plugins.min.js'></script>
</body>
</html>
<?php 
      
      require_once "lib/Database.php";
        require_once "lib/Student.php";
        
        if(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['email'])){                                           
            $std = new Student(new Database);
            $std->loginStudent($_POST['username'],$_POST['email'],$_POST['password']);
        }
         ob_flush();
?>
