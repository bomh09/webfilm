jQuery(document).ready(function() {
    // function zero(num) {
    //     return num >= 0 && num < 10 ? "0" + num : num + "";
    // }

    // setInterval(function() {
    //     var now = new Date();

    //     var strDateTime = [
    //         [
    //             zero(now.getHours()),

    //             zero(now.getMinutes()),

    //             zero(now.getSeconds()),
    //         ].join(":"),
    //     ];

    //     document.querySelector("#current-time").innerHTML = strDateTime;
    // }, 1000);

    var url = window.location;

    // for sidebar menu but not for treeview submenu

    $("ul.nav-sidebar .nav-link")
        .filter(function() {
            return this.href == url;
        })
        .addClass("active");

    $("ul.nav-sidebar .nav-link")
        .filter(function() {
            return this.href == url;
        })
        .parent()
        .siblings()
        .find(".nav-link")
        .removeClass("active");

    // for treeview which is like a submenu

    $("ul.nav-treeview .nav-link")
        .filter(function() {
            return this.href == url;
        })
        .addClass("active");

    $("ul.nav-treeview .nav-link")
        .filter(function() {
            return this.href == url;
        })
        .parents(".nav-item")
        .addClass("menu-open");

    $("ul.nav-treeview .nav-link")
        .filter(function() {
            return this.href == url;
        })
        .parents(".nav-treeview")
        .siblings()
        .removeClass("active");

    $("ul.nav-treeview .nav-link")
        .filter(function() {
            return this.href == url;
        })
        .parents(".nav-item")
        .siblings()
        .find(".nav-link")
        .removeClass("active");
});
