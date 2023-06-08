$(function() {
    
        $("select.js-example-placeholder-multiple").select2({placeholder : 'Select'});
        $("select.tag").select2({placeholder : 'Select tags',tags: true,tokenSeparators: [',']});
        
        $(".table").removeClass("table-striped table-bordered table-theme");
        
        $(window).bind("resize", function() {
        $(this).width() < 900 ? $(".table").addClass("table-responsive-lg table-responsive-md table-responsive-sm") : $(".table").removeClass("table-responsive-lg table-responsive-md table-responsive-sm")
        }).trigger("resize");

        setTimeout(function () {$('.alert').fadeOut('fast');}, 5000);


//        $(document).on("click", ".pagination a", function(e){
//	        var form_id = $(this).parent().parent().parent().parent().attr('id');
//	        $(".page-loader-wrapper").css("background", "transparent").show();
//	        var url = $(this).attr("href")+'&render='+form_id;
//	        e.preventDefault();
//	        e.stopPropagation();
//	        $.get(url)
//	        .done(function (data) {
//
//	            $("#"+form_id).html(data);
//	            $(".page-loader-wrapper").hide();
//
//	        })
//	        .fail(function () {
//
//	            console.log("Ajax fail: ");
//	            $(".page-loader-wrapper").hide();
//
//	        });
//    	});

    	$(".modal-header button.close").click(function(e){
	        $(this).parent().parent().parent().parent().removeClass('in important');
	    });
        
        $("div#settings.table-responsive").slimScroll({
            height: "calc(100vh - 100px)",
            wheelStep: 10,
            touchScrollStep: 50,
            color: "#1c222c",
            size: "7px",
            borderRadius: "3px",
            alwaysVisible: 1,
            position: "right"
        });
        // 1.showModalButton,2.modalContent
        $(document).on('click', '.showModalButton', function() {
            if ($('#modal').hasClass('show')) {
                $('#modal').find('#modelBootsrap4Content')
                     .load($(this).attr('value'));
                    $('.modal-header > #modal-label').val($(this).attr('title'));
            } else {
                $('#modal').modal('show')
                    .find('#modelBootsrap4Content')
                    .load($(this).attr('value'));
                    $('.modal-header > #modal-label').val($(this).attr('title'));
            }
        });

});