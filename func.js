$(document).ready(function(){

  $('form').submit(function(){

		var username=$('#username').val();
		var message=$('#message').val();

		if(username!=""&&message!=""){
          $('#loader').show();

		$.post('post.php',{username:username,message:message},function(data){
           $('#feedback').after("<hr>Poster par :"+username+"<br/>"+message+"<br/>").show();
           $('#loader').hide();
           $('#username').attr('value','');
           $('#message').attr('value','');
		});
	}
		return false;
	});
});
