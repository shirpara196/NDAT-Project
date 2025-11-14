
var iconArray = {
    '':'',
};


function svgIcon() {
    $(".n-icon").each(function() {
        var dataIcon = $(this).data("icon");
        var dataIconWidth = $(this).data("iconwidth");
        var dataIconHeight = $(this).data("iconheight");
        if (dataIcon in iconArray) {
            $(this).html(iconArray[dataIcon]);
            $(this).find('svg').css({ "width": dataIconWidth, "height": dataIconHeight });
        } else {
            console.log(dataIcon + ": This icon(s) does not exists")
        }
    });
}

svgIcon();

/* HTML Example: <i class="n-icon" data-icon="iconname" data-iconwidth="24px" data-iconheight="24px"></i> */
