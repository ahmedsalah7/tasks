$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
$(document).ready(function () {


    // With JQuery
    $("#ex14").slider({
        ticks: [0, 25, 50, 75, 100],
        ticks_positions: [0, 25, 50, 75, 100],
        ticks_labels: ['0%', '25%', '50%', '75%', '100%'],
        ticks_snap_bounds: 50,
        formatter: function(value) {
        return 'I‘v finshed: ' + value + '%';
    }
    });
    /*$("#myRange").click(function(){
    var x = $("#myRange").value;
    $("#demo").innerHTML = x;
    });*/
    $('.sidebar > i').click(function () {
        // $(this).toggleClass('fa-angle-double-right','fa-window-close-o',1000, "easeInOutQuad");
        $(this).toggleClass('fa-angle-double-right').toggleClass('fa-window-close-o');
        $('.fa-window-close-o').css('font-size', '2em');
        $('.fa-angle-double-right').css('font-size', '3em');
        $('.sidebar').toggleClass('pushmenu-open');
    });

    $('.main > .edit').click(function () {
        // $(this).toggleClass('fa-angle-double-right','fa-window-close-o',1000, "easeInOutQuad");
        $(this).toggleClass('fa fa-window-close-o');
        /*if ($('.main .description').attr('readonly')) {
	        $('.main .description').removeAttr('readonly');
	    } else {
	        $('.main .description').attr('readonly=""');
	    }*/
	    $('.main .description').attr('readonly', function (_, attr) { return !attr });
    });

    $('.main > .edit-2').click(function () {
        // $(this).toggleClass('fa-angle-double-right','fa-window-close-o',1000, "easeInOutQuad");
        $(this).toggleClass('fa fa-window-close-o');
        /*if ($('.main .description').attr('readonly')) {
	        $('.main .description').removeAttr('readonly');
	    } else {
	        $('.main .description').attr('readonly=""');
	    }*/
	    $('.main .description-2').attr('readonly', function (_, attr) { return !attr });
    });

    $('.main > .edit-3').click(function () {
        // $(this).toggleClass('fa-angle-double-right','fa-window-close-o',1000, "easeInOutQuad");
        $(this).toggleClass('fa fa-window-close-o');
        /*if ($('.main .description').attr('readonly')) {
	        $('.main .description').removeAttr('readonly');
	    } else {
	        $('.main .description').attr('readonly=""');
	    }*/
	    $('.main .description-3').attr('readonly', function (_, attr) { return !attr });
    });
});