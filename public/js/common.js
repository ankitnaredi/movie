function checkBlankField(id,msg,msgContainer)
 {
	 if(jQuery("#"+id).val().length < 1)
	 {
		 if(jQuery("#"+id).siblings(".faerrors").length > 0 && jQuery("#"+id).siblings(".fasuccess").length)
		  {
			  jQuery("#"+id).siblings(".faerrors").css("display","block");
			  jQuery("#"+id).siblings(".fasuccess").css("display","none");
		  }
		 jQuery("#"+id).addClass("errorBorder").removeClass("successBorder");
		 jQuery("."+msgContainer).css("display","block");
		 jQuery("."+msgContainer).html(msg);
	 }
	 else
	 {
		 jQuery("#"+id).removeClass("errorBorder").addClass("successBorder");
		  if(jQuery("#"+id).siblings(".faerrors").length > 0 && jQuery("#"+id).siblings(".fasuccess").length)
		  {
			  jQuery("#"+id).siblings(".faerrors").css("display","none");
			  jQuery("#"+id).siblings(".fasuccess").css("display","block");
		  }
		  jQuery("."+msgContainer).html('');	
		   jQuery("."+msgContainer).css("display","none");  
	 }
 }
 function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
//console.log(charCode);
  if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46) {
      return false;
  }
  return true;
}