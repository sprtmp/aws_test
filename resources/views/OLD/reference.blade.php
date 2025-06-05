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
    
    <!----Custom css--->
    <link rel="stylesheet" href="./sass/style.css" />
    <title>ZSI Lapidoptera</title>

</head>
<body class="main-body">
    <header class="container-fluid fixed-top">
        <div class="top-part row d-flex justify-content-between p-2">
             <div class="icon">
               <img src="./images/bull.png" class="left-logo" />
             </div>
             <div class="icon">
               <img src="./images/Ashok-Stambh.jpg" class="middle-logo"/>
             </div>
             <div class="icon">
               <img src="./images/logo.png" class="right-logo" />
             </div>
 
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon">
                     <i class="fa-solid fa-bars"></i>
                 </span>
             </button>
 
        </div>
 
     
        <!-- <img src="./images/Ashok-Stambh.jpg" class="img-fluid ashoka-stabh" /> -->
        <div class="bottom-part  navbar-collapse" id="navbarTogglerDemo02">
          <img src="./images/header-2.png" />
         <ul>
             <li><a href="index.html">Home</a></li>
             <li><a href="#">Introduction</a></li>
             <li><a href="catalog.html">Catalogue</a></li>
             <li><a href="#">Distribution</a></li>
             <li><a href="#">Statistics</a></li>
             <li><a href="#">Gallery</a></li>
             <li><a href="reference.html">Reference</a></li>
             <li><a href="#">About us</a></li>
         </ul>
        </div>
     </header>

    <main>
        <div class="page-title my-5">
            <h1>References</h1>
            <img src="./images/lapidoptera.png" class="img-fluid"/>
        </div> 
        <div class="pdf-container px-4 pb-5">
            <div class="pdf-file">
                <img src="./images/pdf.png" alt="">
                <p>Arctiinae</p>
            </div>
            <div class="pdf-file">
                <img src="./images/pdf.png" alt="">
                <p>Nonditrysian</p>
            </div>
            <div class="pdf-file">
                <img src="./images/pdf.png" alt="">
                <p>Drepanoidea</p>
            </div>
            <div class="pdf-file">
                <img src="./images/pdf.png" alt="">
                <p>Nolidae</p>
            </div>
            <div class="pdf-file">
                <img src="./images/pdf.png" alt="">
                <p>Tortricidae</p>
            </div>
        </div> 
    </main>

    <footer class="pt-5 pb-2 px-4">
        <div class="container-fluid pb-2">
           <div class="info row d-flex align-items-center justify-content-between">
               <p class="col-md-5 p-0">Copyright © 2025 Zoological Survey Of India. All Rights Reserved.</p>
               <ul class="mt-3 col-md-2 d-flex justify-content-lg-end justify-content-center gap-1">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
               </ul>
           </div>
        </div>
   </footer>

<!------Bootstrap script------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!------Custom JS---->
<script src="./js/menu-style.js"></script>

<script>
    var toggler__icon = document.querySelector(".navbar-toggler-icon");
    var bottom_part = document.querySelector(".bottom-part");
    var menuList = document.querySelector("header .bottom-part ul") 
    var f = false;
    toggler__icon.addEventListener("click", ()=> {
        x=(!f);
        f=x;
        if(f) {
          bottom_part.classList.remove('collapse');
          menuList.classList.add('showMenu');
          toggler__icon.innerHTML = '<i class="fa-solid fa-xmark"></i>'
        } else {
          bottom_part.classList.add('collapse');
          menuList.classList.remove('showMenu');
          toggler__icon.innerHTML = '<i class="fa-solid fa-bars"></i>'
        }
    });
</script>

</body>
</html>