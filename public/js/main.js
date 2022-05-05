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

    // Change title to slug
    $('.slug').keyup(function() {
        var slug;
        slug = $(this).val();
        slug = slug.toLowerCase();
        slug = slug.replace(/á|à|ả|ạ|ã|ằ|ắ|ẳ|ẵ|ặ|ấ|ầ|ẩ|ậ|ẫ|â|ă/gi, "a");
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ề|ế|ể|ễ|ệ/gi, "e");
        slug = slug.replace(/ì|í|ỉ|ĩ|ị/gi, "i");
        slug = slug.replace(/ò|ó|ỏ|ọ|õ|ơ|ờ|ớ|ở|ỡ|ợ|ô|ồ|ố|ổ|ỗ|ộ/gi, "o");
        slug = slug.replace(/ù|ú|ủ|ũ|ụ|ư|ử|ừ|ứ|ữ|ự/gi, "u");
        slug = slug.replace(/ỳ|ý|ỷ|ỵ|ỹ/gi, "y");
        slug = slug.replace(/đ/gi, "d");
        slug = slug.replace(
            /\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\;|\:|_/gi,
            ""
        );
        slug = slug.replace(/ /gi, "-");
        slug = slug.replace(/\-\-\-\-\-/gi, "-");
        slug = slug.replace(/\-\-\-\-/gi, "-");
        slug = slug.replace(/\-\-\-/gi, "-");
        slug = slug.replace(/\-\-/gi, "-");
        slug = "@" + slug + "@";
        slug = slug.replace(/\@\-|\-\@|\@/gi, "");
        console.log(slug);
        $(".convert-slug").val(slug);
    })
});