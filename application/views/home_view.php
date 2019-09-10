<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    	<title>Home</title>

    <link rel='stylesheet' href='../../assests/bt/css/bootstrap.css' type='text/css' media='screen'/>
    <link rel='stylesheet' href='../../assests/bt/css/3-col-portfolio.css' type='text/css' media='screen'/>
    <link rel='stylesheet' href='../../assests/bt/css/sidebar.css' type='text/css' media='screen'/>
    
        <link rel='stylesheet' href='../../../assests/bt/css/bootstrap.css' type='text/css' media='screen'/>
    <link rel='stylesheet' href='../../../assests/bt/css/3-col-portfolio.css' type='text/css' media='screen'/>
    <link rel='stylesheet' href='../../../assests/bt/css/sidebar.css' type='text/css' media='screen'/>
    
    <link rel='stylesheet' href='assests/bt/css/bootstrap.css' type='text/css' media='screen'/>
    <link rel='stylesheet' href='assests/bt/css/3-col-portfolio.css' type='text/css' media='screen'/>
    <link rel='stylesheet' href='assests/bt/css/sidebar.css' type='text/css' media='screen'/>

</head>

<body>

    <!-- Navigation -->
    <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
        <div class='container'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='#'>Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav'>
                    <li>
                        <a href='#'>About</a>
                    </li>
                    <li>
                        <a href='#'>Services</a>
                    </li>
                    <li>
                        <a href='#'>Contact</a>
                    </li>
                </ul>
                <div style="float: right">
                	<div class="btn btn-lg">
	                	<a href="signIn">
	                		sign in
	                	</a>
	                </div>
	                <div class="btn btn-lg">
	                	<a href="signUp">
	                		sign up
	                	</a>
	                </div>
                </div>
                
                
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <div class='container' 'container-fluid'>

    

     <div class='row-fluid'>
        
            <!-- Menu -->

    
    <div class='span2'>
    <div style='width:200px;height:300px;float:left;'>
    <div class='side-menu'>
        <nav class='navbar navbar-default' role='navigation'>
            <!-- Main Menu -->
            <div class='side-menu-container'>
                <ul class='nav navbar-nav'>
                    <li class='active'><a href='#'><span class='glyphicon glyphicon-dashboard'></span> Dashboard</a></li>
                    <li><a href='#'><span class='glyphicon glyphicon-plane'></span> Active Link</a></li>
                    <li><a href='#'><span class='glyphicon glyphicon-cloud'></span> Link</a></li>

                    <!-- Dropdown-->
                    <li class='panel panel-default' id='dropdown'>
                        <a data-toggle='collapse' href='#dropdown-lvl1'>
                            <span class='glyphicon glyphicon-user'></span> Sub Level <span class='caret'></span>
                        </a>

                        <!-- Dropdown level 1 -->
                        <div id='dropdown-lvl1' class='panel-collapse collapse'>
                            <div class='panel-body'>
                                <ul class='nav navbar-nav'>
                                    <li><a href='#'>Link</a></li>
                                    <li><a href='#'>Link</a></li>
                                    <li><a href='#'>Link</a></li>

                                    <!-- Dropdown level 2 -->
                                    <li class='panel panel-default' id='dropdown'>
                                        <a data-toggle='collapse' href='#dropdown-lvl2'>
                                            <span class='glyphicon glyphicon-off'></span> Sub Level <span class='caret'></span>
                                        </a>
                                        <div id='dropdown-lvl2' class='panel-collapse collapse'>
                                            <div class='panel-body'>
                                                <ul class='nav navbar-nav'>
                                                    <li><a href='#'>Link</a></li>
                                                    <li><a href='#'>Link</a></li>
                                                    <li><a href='#'>Link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href='#'><span class='glyphicon glyphicon-signal'></span> Link</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    </div>
</div>
    </div><!-- div span2-->
    
        <!-- Page Header -->

        
        <div class='col-md-4'>
        	<?php    echo form_open('home_controller/home_view')?>
        	<p class="dropdown"><b>Hospital </b><?php    echo $hospital  ?></p>
        	<p><b>Specialis </b><?php    echo $special  ?></p>
        	<input type="text" name="search" id="search" class="" placeholder="Search">
        	<button class="" type="submit">Search</button>
        	<?php    echo form_close()?>
        	
        	
        </div>
       <div class='span10'>
       <div style='float:left;width:800px;margin-left:15px;'>
        <div class='row'>
            <div class='col-lg-12'>
                <h1 class='page-header'>Doctors
                    <small>Doctors are always sincere</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class='row'>
        <?php  
           $counter = $doctorInfo['counter'];
        	if($counter>0){
				for($i=0; $i<$counter;$i++){
					$doctorName=$doctorInfo['doctorName'][$i];
					$mobile=$doctorInfo['mobile'][$i];
					$amobile=$doctorInfo['amobile'][$i];
					$district=$doctorInfo['district'][$i];
					
					echo "<div class='col-md-4 portfolio-item'>
	                <a href='#'>
	                    <img class='img-responsive' src='http://placehold.it/700x400' alt=''>
	                </a>
	                <h3>
	                    <a href='#'>$doctorName</a>
	                </h3>
	                <p>Mobile : $mobile $amobile</p>
	                <p>District: $district</p>
           	 		</div>";
				}
			}
			else{
				echo "<p>No Doctor Information Available Right Now</p>";
			}
			
              ?>
            
        </div>
        <!-- /.row -->
        <hr>
        <!-- Pagination -->
        <div class='row text-center'>
            <div class='col-lg-12'>
                <ul class='pagination'>
                    
                    <li class=''>
                        <a href='#'><?php   echo $this->pagination->create_links(); ?></a>
                    </li>
                    
                    <li>
                        <a href='#'>&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class='row'>
                <div class='col-lg-12'>
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
        </div>
</div>
    </div><!--row fluid-->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src='assests/bt/js/jquery.js'></script>

    <!-- Bootstrap Core JavaScript -->
    <script src='assests/bt/js/bootstrap.min.js'></script>

    <script type='text/javascript'>


    </script>
</body>

</html>
