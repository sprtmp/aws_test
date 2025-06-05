<footer class="pt-5 pb-2 px-4">
         <div class="container-fluid pb-2">
            <div class="info row d-flex align-items-center justify-content-between">
                <p class="col-md-5 p-0">Copyright © 2025 Zoological Survey Of India. All Rights Reserved.</p>
                <ul class="mt-3 mt-md-0 col-md-2 d-flex justify-content-lg-end justify-content-center gap-1">
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

<!-----Data table script with pagination start-->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<!----------End of Data Table script----------->

<script>
//     new DataTable('#example', {
//     layout: {
//         bottomEnd: {
//             paging: {
//                 firstLast: false,
                
//             },
//             pageLength : 50
//         }
//     }
// });
$('#example').dataTable( {
"pageLength": 25
} );
</script>

<script>
    var drop_down = document.querySelector(".filter-drop-down");
    var flag = false;
    document.querySelector("#filter-btn").addEventListener("click",()=> {
       x=(!flag);
       flag=x;
       if(flag){
         drop_down.style.opacity = 1;
         drop_down.style.maxHeight = "200px";
       }else{
         drop_down.style.opacity = 0;
         drop_down.style.maxHeight = "0";
       }
    })
    
    drop_down.addEventListener("click", (event) => {
        event.stopPropagation();
    });


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

<!------Custom JS---->

<script src="./js/menu-style.js"></script>

</body>
</html>