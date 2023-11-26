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
<html lang="en" class="dark">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                        <span class="text-white text-lg ml-3"> ET<span class="font-medium">PC</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="https://gestao-obra.engwhere.com.br/wp-content/uploads/2018/09/GESTAO.png">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            Gestão de Empresas
                            <br>
                            
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">Consiga gerir as empresas todas a partir de um website!</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
				<?php //include("DBConnection.php");?>
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
				
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Log In
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Gestão de Empresas</div>
                        <div class="intro-x mt-8">
						<form method="post" action="Autentica.php">
                            <input type="text" name="user" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Usuário">
                            <input type="password" name="pass" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password">
                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                               
                              
                            </div>
                          
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="button w-24 inline-block mr-1 mb-2 bg-theme-1 text-white inline-flex items-center" type="submit"> Login <i data-loading-icon="oval" data-color="white" class="w-4 h-4 ml-auto"></i> </button>
                            <button class="button w-24 inline-block mr-1 mb-2 bg-theme-6 text-white inline-flex items-center" type="reset"> Limpar <i data-loading-icon="puff" data-color="white" class="w-4 h-4 ml-auto"></i> </button>
							</form>
                        </div>
                        <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                          
                            <br>
                           
                        </div>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
      
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>