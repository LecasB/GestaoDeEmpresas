<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo2.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo2.png">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="Admin.php" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Menu de Administração </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Produto <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="inserirprod.php" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Inserir Produto </div>
                            </a>
                        </li>
                        <li>
                            <a href="listarprod.php" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Listar Produto </div>
                            </a>
                        </li>
                        <li>
                            <a href="removerprod.php" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Remover Produto </div>
                            </a>
                        </li>
                    </ul>
                </li>
                
                
        
                
                
                        
                        <li>
                            <a href="login-light-login.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-update-profile.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-change-password.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Grid <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-regular-table.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-tabulator.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-accordion.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-button.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-modal.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Modal </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-alert.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-progress-bar.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tooltip.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dropdown.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-toast.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Toast </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-typography.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-loading-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-form.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-datepicker.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tail-select.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Tail Select </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-file-upload.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Wysiwyg Editor </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-validation.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-chart.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slider.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-image-zoom.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Simple Menu -->
            <nav class="side-nav side-nav--simple">
                <a href="Admin.php" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo2.png">
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="Admin.php" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Menu de Administração </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Produto <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="inserirprod.php" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Inserir Produto </div>
                                </a>
                            </li>
                            <li>
                                <a href="listarprod.php" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Listar Produtos </div>
                                </a>
                            </li>
                            <li>
                                <a href="removerprod.php" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Remover Produto </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
					
                        
         
            </nav>
            <!-- END: Simple Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Aplicação</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Menu de Administração</a> </div>
                    <!-- END: Breadcrumb -->
            
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-6.jpg">
                        </div>
                        <div class="dropdown-box w-56">
                            <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                                <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                                    <div class="font-medium">Admin</div>
                                    
                                </div>
                                <div class="p-2">
                    
                                    <a href="alterarpass.php" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Mudar Password </a>
                                    
                                </div>
                                <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                                    <a href="index.php" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Alterar Password: 
                                </h2>
                               
                        <!-- END: General Report -->
						
						
						<?php

         function mysqli_result($res,$row,$field=0){
                  $res->data_seek($row);
                  $datarow=$res->fetch_array();
                   return$datarow[$field];
         }
?>

<html>
         <head>
                   <meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
                                                                   
                  <title>Alterar Password</title>
                  <link rel="stylesheet"href="Estilos.css"type="text/css"media="screen"charset="utf-8"/>
         </head>
                  <?php include"DBConnection.php";echo"<br>"?>
         <body>
         <div id="Body">
                    <?php
                  if(isset($_SESSION["iduser"]))
                  {
                    $fiduser = $_SESSION['iduser'];
                  }
                  ?>
                  <?php
                   
                    if(isset($_POST["fiduser"]))
                    {
                    $fuser=$_POST['fuser'];
                    $fpass=$_POST['fpass'];
                    $fiduser2=$_POST['fid2'];
                    $query=mysqli_query($link,"update utilizadores set user= '$fuser',pass='$fpass'where id='$fiduser2'");
                    if($query){
                           echo"Actualizado com sucesso.";
                 }else{
           echo"Erro ao Actualizar!Erro:".mysqli_error()."";
              }
            }
            ?>
            <?php
           
            $query="SELECT*FROM utilizadores where id='user'";
            $result=mysqli_query($link,$query);
            $num=mysqli_num_rows($result);
            mysqli_close($link);
            $i=0;
           
            // echo$result;
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                while($i<$num)
    {
    $campo1=mysqli_result($result,$i,"id");
     $campo2=mysqli_result($result,$i,"user");
     $campo3=mysqli_result($result,$i,"pass");
     ?>
	 
    <fieldset><legend><b></b></legend><br><br><br><br><br><br><br><br>
    <form name="alterar_password" id="alterar_password" action="alterarpass.php" method="post">
            <input id="fiduser"name="fiduser"
            value=""type="hidden"size="20"/>
            <label id="fiduser"for="fiduser"></label>
            <table width="100%"border="0">
    <tr>
    <td><label id="fid2"for="label">
        <div align="right"><b></b></div>
      </label></td>
      <td><label id="fid2"for="label"></label>
     <input id="fid2"name="fid2"value="<?php echo$campo1 ?>"type="text"size="2"/></td>
        </tr>
        <tr>
        <td><div align="right"><b>User:</b></div></td>
        <td> <div> <label></label> <input id="fuser"name="fuser"value="<?php echo$campo2?>" type="text" class="input w-full rounded-full border mt-2" placeholder="User"> </div></td> 
        </tr>
        <tr>
        <td><div align="right"><b>Password:</b></div></td>
        <td><div class="mt-3"> <label></label> <input type="password" id="fpass" name="fpass" value="<?php echo$campo3?>" type="disabled"  class="input w-full rounded-full border mt-2" placeholder="Password" > </div></td> 
        </tr>
        <tr>
                      <tr>
        <td><button class="button bg-theme-1 text-white mt-5">
        <div align="right"><b>Guardar</b></div>
        </button>
             <div align="right"></div></td></tr>
        </tr>
   
                    </tr>
                 </table>
           </form>
           
            </fieldset>
                       
                       </div>
                       
           </body>
           
           <?php
           $i++;
           }
           ?>          
    </html>
                  
                  
                 
                       
                     
                    </div>
                    <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
                        <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                            
                           
                     
                            
                        </div>
                    </div>
					<img src="https://www.seekpng.com/png/detail/203-2037457_secure-stratoguard-workload-security-icon-png.png">
                </div>
            </div>
            <!-- END: Content -->
        </div>

        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>