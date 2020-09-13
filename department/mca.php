<?php
    
    require_once "../lib/Database.php";
    require_once "../lib/Notice.php";
    $ntc = new Notice(new Database());
 

 ?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kingster &#8211; School, College &amp; University HTML Template</title>

    <link rel='stylesheet' href='../home/plugins/goodlayers-core/plugins/combine/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../home/plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../home/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../home/css/style-core.css' type='text/css' media='all' />
	<link rel='stylesheet' href='../home/css/kingster-style-custom.css' type='text/css' media='all' />
	
            
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/css/material-icons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/js/reports-plugins/buttons.dataTables.min.css"/>  
    <link rel="stylesheet" href="../assets/css/jquery-ui.css"/>  
	<link rel="stylesheet" href="../assets/css/jquery-ui.theme.css"/>  
    

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
                    <div class="kingster-main-menu-search" id="kingster-mobile-top-search"><i class="fa fa-search"></i></div>
                    <div class="kingster-top-search-wrap">
                        <div class="kingster-top-search-close"></div>
                        <div class="kingster-top-search-row">
                            <div class="kingster-top-search-cell">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                    <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                                <a class="" href="../index.php"><img src="../home/images/logo2.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="kingster-navigation kingster-item-pdlr clearfix ">
                            <div class="kingster-main-menu" id="kingster-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item kingster-normal-menu"><a href="./index.php">Home</a></li>
                                    <li class="menu-item kingster-normal-menu"><a href="./department.php">Notices</a></li>
                                    <li class="menu-item kingster-normal-menu"><a href="./library.php">library</a></li>
                                </ul>
                                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                            </div>
                            <div class="kingster-main-menu-right-wrap clearfix ">
                                <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div>
                                <div class="kingster-top-search-wrap">
                                    <div class="kingster-top-search-close"></div>
                                    <div class="kingster-top-search-row">
                                        <div class="kingster-top-search-cell">
                                            <form role="search" method="get" class="search-form" action="#">
                                                <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                                <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                                <input type="submit" class="search-submit" value="Search">
                                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>



            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
				<div class="wrapper">
					
				<div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-2.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->
 
	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li >
	                    <a href="allnotices.php">
	                        <i class="material-icons">library_books</i>
	                        <p>All notices</p>
	                    </a>
                    </li>
                    <li class="active">
	                    <a href="department/mca.php">
	                       <i class="material-icons">library_books</i>
	                        <p>Department of Computer Application(PG - SF)</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="admin_profile.php">
	                        <i class="material-icons">library_books</i>
	                        <p>Department of Mathematics(PG - R)</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="cod.php">
	                        <i class="material-icons">library_books</i>
	                        <p>Department of Physics(PG - R)</p>
	                    </a>
	                </li>
                     <li>
                        <a href="department.php">
                            <i class="material-icons">library_books</i>
	                        <p>Department of Chemistry(PG - R)</p>
	                    </a>
                    </li>
                    <li>
                        <a href="courses.php">
                            <i class="material-icons">library_books</i>
	                        <p>Department of Botany(PG - R)</p>
	                    </a>
                    </li>
                    <li>
	                    <a href="students.php">
	                        <i class="material-icons">library_books</i>
	                        <p>Department of Zoology(PG - R)</p>
	                    </a>
	                </li>
	                
	                <li>
	                    <a href="notices.php">
	                        <i class="material-icons">library_books</i>
	                        <p>Department of Commerce(PG - R)</p>
	                    </a>
	                </li>
                  
	               
	            </ul>
	    	</div>
		</div>
		<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">ONBS Dashboard</a>
					</div>
					<div class="collapse navbar-collapse">
					
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
				<div class="row">
                     
                <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                   <div class="">
                            <div class="well" style="background-image:url('../assets/img/ntc2.jpg');">
                                <div style="background: rgba(0,0,0,0.3);;">     
                                                                   
                                   
                                    <div class="jumbotron" style="background: white;">
                                         <?php                             
                                            require_once "../lib/Database.php";
                                            if(!isset($_GET['target'])){
                                                $target = "MCA";
                                            }
                                            echo $ntc->showNoticeByTarget($target);                       
                                         ?>  
                                    </div>
                                    
                                </div> 
                                                              
                            </div>
                       </div>
	                </div>
	            </div>
	        </div>         
	    </div>        
	</div><!-- End of wrapper div --> 

                       
				</div></div>
			</div>

</div>
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


    <script type='text/javascript' src='../home/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='../home/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='../home/plugins/goodlayers-core/plugins/combine/script.js'></script>
    <script type='text/javascript'>
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "#"
        };
    </script>
    <script type='text/javascript' src='../home/plugins/goodlayers-core/include/js/page-builder.js'></script>
    <script type='text/javascript' src='../home/js/jquery/ui/effect.min.js'></script>
   
    <script type='text/javascript' src='../home/js/plugins.min.js'></script>
    	<!-- custom methods,to include in  project! -->
	<script src="../assets/js/custom.js"></script>

    
<!--   Custom Scripts    -->
<script type="text/javascript">
       
       $(document).ready(function(){   
              $('#notice_table').DataTable({
                   order:[[0,'desc']]
              });			
       });			
</script>

</body>
</html>
