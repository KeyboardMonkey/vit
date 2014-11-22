$(document).ready(function(e){
 
   $('#dropdown').on('click',function(){
 
      $('.dropdownwrap').slideToggle();
 
   });
 
$('#myPassword').strength({
            strengthClass: 'strength',
            strengthMeterClass: 'strength_meter',
            strengthButtonClass: 'button_strength',
            strengthButtonText: '',
            strengthButtonTextToggle: ''
        });
})