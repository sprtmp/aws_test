@include('header')
    <main class="m-0">
        <!-- <video autoplay muted loop id="myVideo">
            <source src="./images/video-4.mp4" type="video/mp4">
        </video> -->
        <video autoplay muted loop class="myVideo" id="desk-vid">
            <source src="./images/desk-vid.mp4" type="video/mp4">
        </video>

        <video autoplay muted loop class="myVideo" id="mob-vid">
            <source src="./images/mob-vid.mp4" type="video/mp4">
        </video>

        <div class="vid-content mt-5">
            <h3>catalougue of</h3>
            <h1>indian lepidoptera</h1>
            <div class="search-bar mt-4">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="" value="" />
            </div>
        </div>
        <div class="counter">
            <p>Species Updated</p>
            <h4>3421</h4>
        </div>
    </main>

    <footer>

    </footer>

<!------Bootstrap script------->
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