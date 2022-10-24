 <?php

$url= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);


?>
 
 
 
 
 
  <!--header start-->
        <header id="masthead" class="header ttm-header-style-classic">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact ttm-highlight-left text-left">
                            <li><i class="fa fa-clock-o"></i><strong>Open Hours:</strong> Mon - Sat, 10:00 AM - 7:00 PM</li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:info@smentainfotech.com">info@smentainfotech.com</a></li>
                                <li><i class="fa fa-phone"></i>+91 8341750690   &nbsp;  | &nbsp;  +91 7842264340</li>
                                <!--<li><i class="fa fa-phone"></i>+91 8522090803</li>-->
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/profile.php?id=100073584217718"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://twitter.com/SmentaInfotech"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    
                                    <li><a href="https://www.linkedin.com/in/smenta-infotech-b534aa22b"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index.html" title="" rel="home">
                                        <img id="logo-img" class="img-center" src="images/smentalogo.jpg" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    
                                    
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                          <li <?php if($url=='index.php')  {
                            echo "class='active'";
                            }
                            ?>>
                                            <a href="index.php">Home</a>
                                
                                        </li>
                                            
                                            <li <?php if($url=='aboutus.php')  {
                            echo "class='active'";
                            }
                            ?>>
                                                <a href="aboutus.php">About</a>
                                                
                                            </li>
                                            
                                            <li <?php if($url=='services.php')  {
                            echo "class='active'";
                            }
                            ?>>
                                                <a href="services.php">Services</a>
                                                <ul class="dropdown">
                                                    <li <?php if($url=='talentaquisition.php')  {
                            echo "class='active'";
                            }
                            ?>>
                                                <a href="talentaquisition.php">Talent Acquisition</a>
                                                
                                            </li>
                                             <li <?php if($url=='hrconsulting.php')  {
                            echo "class='active'";
                            }
                            ?>>
                                                <a href="hrconsulting.php">IT Consulting</a>
                                                
                                            </li>
                                             <li <?php if($url=='hrauditing.php')  {
                            echo "class='active'";
                            }
                            ?>>
                                                <a href="hrauditing.php">IT Auditing</a>
                                                
                                            </li>
                                            <li <?php if($url=='')  {
                            echo "class='active'";
                            }
                            ?>>
                                                <a href="#">IT Training</a>
                                                
                                            </li>
                                            <li <?php if($url=='payrolloutsourcing.php')  {
                            echo "class='active'";
                            }
                            ?>>
                                                <a href="payrolloutsourcing.php">payroll outsourcing</a>
                                                
                                            </li>
                                            
                                                </ul>
                                            
                                            </li>
                                             
                                             <li <?php if($url=='hrtraining.php')  {
                            echo "class='active'";
                            }
                            ?>>
                                                 <a href="hrtraining.php">IT Training</a>
                                                 
                                            </li>   
                                            
                                              <li <?php if($url=='contactus.php')  {
                            echo "class='active'";
                            }
                            ?>>
                                                  <a href="contactus.php">Contact Us</a>
                                                  
                                                </li>
                                            
                                            </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->