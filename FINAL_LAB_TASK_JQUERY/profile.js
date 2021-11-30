$(document).ready(function() {

    $('#profile_form').submit(function(e) {
    
      e.preventDefault();
      var name = $('#name').val();
      var email = $('#email').val();
    
      
     
  
      $(".error").remove();
  
      if (name.length < 1) {
        $('#name').after('<span class="error">This field is required</span>');
      }
    
      if (email.length < 1) {
        $('#email').after('<span class="error">This field is required</span>');
      }