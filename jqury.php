<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
  $(document).ready(function(){
    $(document).on('click','.reister',function()
     {
        var username = $('#username').val();
        var password= $("#password").val(); 
        var passwordc= $("#passwordc").val();
        var action='reister';
        $.ajax({
           url:"insert_val.php",
           type:"post",
           data:{username:username,password:password,passwordc:passwordc,action:action},
           success:function(data)
           {
           	$("#text_r").html(data);
           }
        });
     });
  });
</script>