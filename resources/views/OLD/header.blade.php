<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-----Bootstrp CDN----->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <!-----Font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-----Data table------>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css">

    <!----Custom css--->
    <link rel="stylesheet" href="{{ asset('sass/style.css') }}" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <title>Catalog</title>
</head>
<body class="main-body">
    <header class="container-fluid fixed-top">
        <div class="top-part row d-flex justify-content-between p-2">
             <div class="icon">
               <img src="{{ asset('images/bull.png') }}" class="left-logo" />
             </div>
             <div class="icon">
               <img src="{{ asset('images/Ashok-Stambh.jpg') }}" class="middle-logo"/>
             </div>
             <div class="icon">
               <img src="{{ asset('images/logo.png') }}" class="right-logo" />
             </div>
 
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon">
                     <i class="fa-solid fa-bars"></i>
                 </span>
             </button>
 
        </div>
 
     
        <!-- <img src="./images/Ashok-Stambh.jpg" class="img-fluid ashoka-stabh" /> -->
        <div class="bottom-part  navbar-collapse" id="navbarTogglerDemo02">
          <img src="{{ asset('images/header-2.png') }}" />
         <ul>
             <li><a href="{{url('/')}}">Home</a></li>
             <li><a href="#">Introduction</a></li>
             <li><a href="{{url('/catalouge')}}">Catalogue</a></li>
             <li><a href="#">Distribution</a></li>
             <li><a href="#">Statistics</a></li>
             <li><a href="#">Gallery</a></li>
             <li><a href="reference.html">Reference</a></li>
             <li><a href="#">About us</a></li>
         </ul>
        </div>
     </header>