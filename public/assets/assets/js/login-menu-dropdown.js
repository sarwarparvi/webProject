var catDropdown = $(".category-dropdown"),
    catInitVal = catDropdown.data("visible");

if ($(".new-header").length && $(window).width() >= 992) {
    var sticky = new Waypoint.Sticky({
        element: $(".new-header")[0],
        stuckClass: "fixed",
        offset: -300,
        handler: function (direction) {
            // Show category dropdown
            if (catInitVal && direction == "up") {
                catDropdown
                    .addClass("show")
                    .find(".dropdown-menu-customer")
                    .addClass("show");
                catDropdown
                    .find(".dropdown-toggle-customer")
                    .attr("aria-expanded", "true");
                return false;
            }

            // Hide category dropdown on fixed header
            if (catDropdown.hasClass("show")) {
                catDropdown
                    .removeClass("show")
                    .find(".dropdown-menu-customer")
                    .removeClass("show");
                catDropdown
                    .find(".dropdown-toggle-customer")
                    .attr("aria-expanded", "false");
            }
        },
    });
}
