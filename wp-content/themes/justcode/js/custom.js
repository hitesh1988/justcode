jQuery(document).ready(function () {

	jQuery( ".promocodebtn" ).on( "click", function(event ) {
		event.preventDefault();
		jQuery('.container .reponsetext').remove();
		var Ele,promocodeval,pid;
		promocodeval = jQuery('.promocodeval').val();
		pid = jQuery('.promocodeval').attr('data-pid');
		Ele = jQuery(this);
		if(promocodeval != ''){ 
			Ele.attr("disabled", true);
			jQuery('.promocode-block').find('form').append('<span class="loader"></span>');
			jQuery('.promocodeval').removeClass('input-invalid');
			jQuery.ajax({
				url : ajaxUrl,
				context : this,
				type : 'post',
				data : {
					action : 'promocode',
					promocodeval : promocodeval,
					pid :pid
				},
				success : function( response ) {
				    obj = JSON.parse(response);
					if(obj.sucess){
						
						jQuery('.projectprice').html(obj.price);
					}else{
						jQuery('.promocode-block').after('<p class="reponsetext">Invalid code</p>')
					}
					Ele.attr("disabled", false);
					jQuery('.promocode-block form').find('.loader').remove();
				}
			});	
		}else{
			 jQuery('.promocodeval').addClass('input-invalid');
		}
		
		
		
	});

});

jQuery(window).load(function () {

    equalheightnoRow(".estimation-details-section .details-block > div")
    
});
    
jQuery(window).resize(function () {

    equalheightnoRow(".estimation-details-section .details-block > div")
});


/***
# Equlae height Function
***/
equalheight = function (container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    jQuery(container).each(function () {
        $el = jQuery(this);
        jQuery($el).height('auto')
        topPostion = $el.position().top;
        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
};


equalheightnoRow = function (container) {

    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        jQueryel

    jQuery(container).each(function () {
        jQueryel = jQuery(this);
        jQuery(jQueryel).innerHeight('auto')
        rowDivs.push(jQueryel);
        currentTallest = (currentTallest < jQueryel.innerHeight()) ? (jQueryel.innerHeight()) : (currentTallest);

        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].innerHeight(currentTallest);
        }
    });

}
