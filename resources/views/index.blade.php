@include('header')



    <main class="m-0 position-relative">

        <!-- <video autoplay muted loop id="myVideo">

            <source src="./images/video-4.mp4" type="video/mp4">

        </video> -->

        <video autoplay muted loop class="myVideo" id="desk-vid">

            <source src="./images/desk-vid.mp4" type="video/mp4">

        </video>



        <video autoplay muted loop class="myVideo" id="mob-vid">

            <source src="./images/mob-vid.mp4" type="video/mp4">

        </video>



        <div class="vid-content">

            <!-- <h3>lepidoptera of</h3> -->

            <h1>lepidoptera of india</h1>

            <form method="get" action="catalouge">
                <div class="search-bar mt-4" data-aos="fade-up">
                    <i class="fa-solid fa-magnifying-glass"></i>
                     <input type="text" name="taxon" value="" id="search-input" autocomplete="off" />
                </div>
            </form>
            <div class="m-1"><span id="loader"></span><ul id="suggestions" ></ul></div>
        </div>

        <div class="counter">

            <p>Species Updated</p>

            <h4>3421</h4>

        </div>

    </main>



    <section style="overflow: hidden;">

        <ul class="nav nav-pills mb-3 justify-content-center mt-5 mb-4" id="pills-tab" role="tablist">

            <li class="nav-item" role="presentation" data-aos="fade-up">

                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-tab1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Recent updates</button>

            </li>

            <!-- <li class="nav-item" role="presentation" data-aos="fade-up">

                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-tab2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Latest Publication</button>

            </li> -->

            <!-- <li class="nav-item" role="presentation">

                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>

            </li> -->

        </ul>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-tab1" role="tabpanel" aria-labelledby="pills-home-tab">

                

                <div class="container-fluid home-lepidoptera px-4">

                    <div class="row g-4 g-xxl-5" data-aos="fade-up" data-aos-easing="linear">

                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-1.jpg" data-fancybox="lepi-img">

                              <img src="./images/lepi-1.jpg" class="img-fluid w-100" alt="">

                            </a>

                            <div class="information" data-aos="fade-in">

                                <span>20/01/2025</span>

                                <h2>Astreus</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-2.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-2.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information" data-aos="fade-in">

                                <span>20/01/2025</span>

                                <h2>Omissa</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-3.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-3.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information" data-aos="fade-in">

                                <span>20/01/2025</span>

                                <h2>Plagiata</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-4.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-4.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information" data-aos="fade-in">

                                <span>20/01/2025</span>

                                <h2>Collaris</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-1.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-1.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information" data-aos="fade-in">

                                <span>20/01/2025</span>

                                <h2>Astreus</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-2.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-2.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information">

                                <span>20/01/2025</span>

                                <h2>Omissa</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-3.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-3.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information">

                                <span>20/01/2025</span>

                                <h2>Plagiata</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-4.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-4.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information">

                                <span>20/01/2025</span>

                                <h2>Collaris</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-1.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-1.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information">

                                <span>20/01/2025</span>

                                <h2>Astreus</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-2.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-2.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information">

                                <span>20/01/2025</span>

                                <h2>Omissa</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-3.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-3.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information">

                                <span>20/01/2025</span>

                                <h2>Plagiata</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/big-lepi-4.jpg" data-fancybox="lepi-img">

                                <img src="./images/lepi-4.jpg" class="img-fluid w-100" alt="">

                            </a>    

                            <div class="information">

                                <span>20/01/2025</span>

                                <h2>Collaris</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>

                    </div>

                    <!--<a href="javascript:void(0)" class="load-more" data-aos="fade-in">-->

                    <!--    View More -->

                    <!--    <div class="circle">-->

                    <!--        <i class="fa-solid fa-arrow-down"></i>-->

                    <!--    </div>-->

                    <!--</a>-->

                </div>

            </div>

            <div class="tab-pane fade" id="pills-tab2" role="tabpanel" aria-labelledby="pills-profile-tab">

               <div class="container-fluid home-paper-cutting px-4" data-aos="fade-up" data-aos-easing="linear">

                    <div class="row g-4 g-xxl-5 mb-4">

                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/paper-1.jpg" data-fancybox="paper-img">

                              <img src="./images/paper-1.jpg" class="img-fluid w-100" alt="">

                            </a>

                            <div class="description">

                                <span>Published On: 06/02/2022 </span>

                                <h2>Times City</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/paper-2.jpg" data-fancybox="paper-img">

                              <img src="./images/paper-2.jpg" class="img-fluid w-100" alt="">

                            </a>

                            <div class="description">

                                <span>Published On: 06/12/2021 </span>

                                <h2>Times India</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/paper-1.jpg" data-fancybox="paper-img">

                              <img src="./images/paper-1.jpg" class="img-fluid w-100" alt="">

                            </a>

                            <div class="description">

                                <span>Published On: 06/02/2023 </span>

                                <h2>The Telegraph</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6">

                            <a href="./images/paper-3.jpg" data-fancybox="paper-img">

                              <img src="./images/paper-3.jpg" class="img-fluid w-100" alt="">

                            </a>

                            <div class="description">

                                <span>Published On: 04/02/2020 </span>

                                <h2>Daily Updates</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id urna luctus, ultrices sem eget, tempor mi. Pellentesque nec pulvinar mi. </p>

                                <a href="#">Learn More <i class="fa-solid fa-arrow-up"></i></a>

                            </div>

                        </div>

                    </div>  

                </div>      

            </div>

        </div>

    </section>



    <footer>

      <div class="footer-wrap d-flex flex-column align-items-center" data-aos="fade-in" data-aos-easing="linear">

         <!-- <button>No Of Visitors: 9889</button> -->

         <p class="text-center">For any suggestion/ Query/ update please mail us at <a href='#'>indianlepidopteradb@gmail.com</a>

        <br> Cite this website as: Singh, N., Joshi, R. & Banerjee, D. (2022 - <script>document.write(new Date().getFullYear())</script>) Lepidoptera of India. Zoological Survey of India.
        (<a href='#'>https://www.indianlepidoptera.in</a>) (accessed 21 February <script>document.write(new Date().getFullYear())</script>) </p>

        <span class="text-center">
            <span class="footer-text-2">Formerly known as: Catalogue of India Lepidoptera.</span>
            Copyright © 2022 - <script>document.write(new Date().getFullYear())</script> Zoological Survey Of India. All Right Reserved
        </span> 

      </div>

      <div class="number-visit">
      No. of visitors: 9889
        </div>

    </footer>


    



<!------Bootstrap script------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<!-------Menu style Script-->

<script src="./js/menu-style.js"></script>



<script> 



let i = 1;

let interval = setInterval(() => {

    i++; 

    document.querySelector(".counter h4").innerHTML = i;

    if(i >= <?=$count;?>) { 

        clearInterval(interval);

    }

}, 1);



</script>



<script>

    var toggler__icon = document.querySelector(".navbar-toggler-icon");

    var bottom_part = document.querySelector(".bottom-part");

    var menuList = document.querySelector("header .bottom-part ul"); 

    var f = false;

    toggler__icon.addEventListener("click", ()=> {

        x=(!f);

        f=x;

        if(f) {

          bottom_part.classList.remove('collapse');

          menuList.classList.add('showMenu');

          toggler__icon.innerHTML = '<i class="fa-solid fa-xmark"></i>';

        } else {

          bottom_part.classList.add('collapse');

          menuList.classList.remove('showMenu');

          toggler__icon.innerHTML = '<i class="fa-solid fa-bars"></i>';

        }

    });

</script>



<script type="text/javascript">

    $(function () {

		$(".home-lepidoptera > .row > .col-md-4").slice(0, 4).show();

		$("body").on('click touchstart', '.load-more', function (e) {

			e.preventDefault();

			$(".home-lepidoptera > .row > .col-md-4:hidden").slice(0, 4).slideDown();

			if ($(".home-lepidoptera > .row > .col-md-4:hidden").length == 0) {

				$(".load-more").css('visibility', 'hidden');

			}

			$('html,body').animate({

				scrollTop: $(this).offset().top

			}, 1000);

		});

	});

</script>



<!-----Fancy box url-->

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>



<script>

    Fancybox.bind("[data-fancybox]", {

     Carousel: {

       infinite: false,

     },

     Slideshow: {

       playOnStart: false,

       timeout: 3000,

     },

     Toolbar: {

        display: {

            left: [],

            middle: [],

            right: ["slideshow", "close"],

        },

     },

     Images: {

       zoom: true,

     },

   });

</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var csrfToken = '{{ csrf_token() }}';
        $('#suggestions').hide();
        $('#search-input').on('keyup', function() {
            var searchValue = $(this).val();
            if (searchValue.length >= 1) {
                getSuggestions(searchValue); 
                //$('#suggestions').show();
            } else {
                $('#suggestions').empty();
                $('#suggestions').hide();
            }
        });

        function getSuggestions(searchValue) {
            $.ajax({
                url: '{{ route('getSuggestions') }}',  
                type: 'POST',  
                data: JSON.stringify({
                    search_value: searchValue
                }),
                contentType: 'application/json', 
                headers: {
                    'X-CSRF-TOKEN': csrfToken 
                },
                beforeSend: function() {
                    $('#loader').html('<div class="text-center text-light p-1" style="background-color:#000"><div class="spinner-border text-light text-center" role="status"><span class="sr-only">Loading...</span></div> Loading...</div>');
                    $('#suggestions').hide();
                },
                dataType: 'json', 
                success: function(data) {
                    $('#suggestions').show();
                    $('#suggestions').empty();
                    $('#loader').html('');
                   
                    // data.forEach(function(suggestion) {
                    //     $('#suggestions').append('<li class="sglist"><a href="catalouge?taxon=' + decodeURIComponent(suggestion) + '">' + suggestion + '</a></li>');
                    // });
                     if (data.length === 0) {
                        $('#suggestions').append('<li class="text-light text-center">No result found</li>');
                    } else {
                        data.forEach(function(suggestion) {
                            $('#suggestions').append('<li class="sglist"><a href="catalouge?taxon=' + decodeURIComponent(suggestion) + '">' + suggestion + '</a></li>');
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error fetching suggestions: ', error);
                }
            });
        }
    });
</script>



</body>

</html>