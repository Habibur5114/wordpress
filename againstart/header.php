<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

    <title><?php bloginfo( "name" );?> </title>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<script src="  <?php echo get_template_directory_uri();?>./https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src=" <?php echo get_template_directory_uri();?>./https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src=" <?php echo get_template_directory_uri();?>./https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>./style.css">
<link rel="stylesheet" href=" <?php echo get_template_directory_uri();?>./https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href=" <?php echo get_template_directory_uri();?>./custom.css">

<?php wp_head();?>
</head>

<body>

    <nav class="navbar bg-light navbar-light navbar-expand-md ">
        <div class="container">



            <a href="index.html ">
                 <?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();}?>
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#habiba"> <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="habiba">
                <ul class="navbar-nav ml-auto">
                 


              

                   <?php
            
            wp_nav_menu(array(
           'theme-location' => 'Header menu',
            ));
         
         ?>
       

                
                 

                   
                 
                </ul>





            </div>
        </div>
    </nav>
