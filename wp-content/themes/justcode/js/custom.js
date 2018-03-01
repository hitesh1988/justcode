var totalHour = 0;
var totalCost = 0;
var selectedOpt = [];
jQuery(document).ready(function () {
	jQuery(".img-check").click(function(){
				jQuery(this).toggleClass("check");
			});
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
	
	jQuery('.tabs .tab-links a').on('click', function(e)  {
	var currentAttrValue = jQuery(this).attr('href');
	// Show/Hide Tabs
	jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
	// Change/remove current tab to active
	jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
	e.preventDefault();
	});

	jQuery('input.techopt').on('click',function(){
		jQuery('.totalesti').slideUp();
		jQuery('.sendestimation').slideUp();
		jQuery('.totalPrice').html('');
		jQuery('.totalHours').html('');
	})

	jQuery('.getestimation').on('click',function(){
		jQuery('.button-wrapper .alert-message').hide();
		selectedOpt = [];
		var optCost = 0;
		var optHour = 0;
		var activeContainer = jQuery('.tab-pane.active');
		var seleopt = activeContainer.find('input.techopt:checked');
		if(seleopt.length > 0){
			jQuery(seleopt).each(function(i,v){
				var optID = jQuery(v).attr('id');
				selectedOpt.push(optID);
				if(estimationdata[optID].cost != ''){
					optCost += parseInt(estimationdata[optID].cost);
				}
				if(estimationdata[optID].hours != ''){
					optHour += parseInt(estimationdata[optID].hours);
				}
				jQuery('.sendestimation').slideDown();
			});
			jQuery('.totalPrice').html(optCost);
			jQuery('.totalHours').html(optHour);
			jQuery('.totalesti').slideDown();
			
			
			
		}else{
			//alert('Please select option first!!!');
			jQuery('.button-wrapper').append('<div class="alert-message">Please select option first!!!</div>');
		}
		 
		
	});	
	
	jQuery('.estimationemailbtn').on('click',function(){
		var Ele,emailsend,pid,EleOldText;
		emailsend = jQuery('.estimationemail').val();
		pid = jQuery('.tab-pane.active').attr('data-tid');
		Ele = jQuery(this);
		EleOldText =  Ele.html();
		if(emailsend != ''){ 
		
			Ele.attr("disabled", true);
			Ele.html(EleOldText +' <i class="fa fa-spinner" aria-hidden="true"></i>');
			jQuery.ajax({
				url : ajaxUrl,
				context : this,
				type : 'post',
				data : {
					action : 'saveestimation',
					emailsend : emailsend,
					pid :pid,
					selectedOpt : selectedOpt
				},
				success : function( response ) {
				   /* obj = JSON.parse(response);
					if(obj.sucess){
						
						jQuery('.projectprice').html(obj.price);
					}else{
						jQuery('.promocode-block').after('<p class="reponsetext">Invalid code</p>')
					} */
					Ele.attr("disabled", false);
					Ele.html(EleOldText);
				}
			});	
		}else{
			 jQuery('.estimationemail').addClass('input-invalid');
		}
		
		
	})

});
function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    /* return (false) */ return (true)
}
jQuery(window).on('load', function(){

    equalheightnoRow(".estimation-details-section .details-block > div");
    equalheightnoRow("#exTab1 .tab-content .row .col-border");
});

 
jQuery(window).resize(function () {

    equalheightnoRow(".estimation-details-section .details-block > div");
    equalheightnoRow("#exTab1 .tab-content .row .col-border");
    
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
