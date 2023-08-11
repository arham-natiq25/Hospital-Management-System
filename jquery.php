<?php
 include "Pheader.php";
?>

<script>
 $('document').ready(function(){
  $("#form").validate({
    rules :
    {
      name : "required ",
      username : "required ",   
      address : "required ",   
      city : "required ",
      gender : { required : true },
      emial : "required ",
      password :
      {
        required :true,
        minlenght:8
      }
      cpassword :
      {
        required :true,
        value= name['password'],
      }

    },
    submitHandler : function(form){
        form.submit();
    }
  });
 });
</script>