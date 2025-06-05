if (document.documentElement.clientWidth >= 992) {
    var top_part = document.querySelector(".top-part");
    var icons = document.querySelectorAll(".top-part .icon");
    var bottom_part = document.querySelector(".bottom-part");
    var menu_items = document.querySelector(".bottom-part ul");

    // Ensure elements are selected before using them
    if (top_part && icons.length > 0 && bottom_part && menu_items) {

        window.onscroll = function() { myFunction() };

        function myFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                // Ensure the icons NodeList is not empty
                if (icons[1]) {
                    icons[1].classList.add('mid-icon');
                }
                top_part.classList.add('all-icons');
                bottom_part.classList.add('bottom-part-style');
                menu_items.classList.add('menu-item-style');

                // Loop through all icons and add 'icon-width' class
                icons.forEach(function(icon) {
                    icon.classList.add('icon-width');
                });

            } else {
                // Remove classes only if the elements exist
                if (icons[1]) {
                    icons[1].classList.remove('mid-icon');
                }
                top_part.classList.remove('all-icons');
                bottom_part.classList.remove('bottom-part-style');
                menu_items.classList.remove('menu-item-style');

                icons.forEach(function(icon) {
                    icon.classList.remove('icon-width');
                });
            }
        }
    } else {
        console.error("One or more elements are missing in the DOM.");
    }
}
