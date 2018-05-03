
$('#signup_submit').click(function(){
	event.preventDefault();
	var username = $('#reg_username').val();
	var password = $('#reg_pwd').val();
	var email = $('#reg_email').val(); 
	$.ajax({
		type : 'post',
		url : '../secret-angels/ajax/user_registration.php',
		data : { username : username , password : password , email : email },
		success : function(value){
			console.log(value);
		}
	});
});// Code For Login Pop$("#login").click(function(){    var user = $('input[name="username"]').val(),pass = $('input[name="password"]').val();		 		if(user=="" || pass=="")		{						clearTimeout(e);				$("#erroruser").html('<strong>Sorry!!</strong>All field should be filled').css({'background-color':'red','color':'white'});				$("#erroruser").show(1000);				var e = setTimeout(function() {					$("#erroruser").hide(1000); 										},5000 );			return false;		}else{			$.ajax({			url : "http://codenomad.biz/secret-angels/login_form",			type : 'post',			data : {'username':user,'password':pass},			success : function (result){				if(result=="main_page"){					window.location.replace("http://codenomad.biz/secret-angels/"+result);				}else if(result=="model_profile"){					window.location.replace("http://codenomad.biz/secret-angels/"+result);				}else{				$('#erroruser').text(result).hide();				clearTimeout(e);				$("#erroruser").html('<strong>Sorry!!</strong>'+result).css({'background-color':'red','color':'white'});				$("#erroruser").show(1000);				var e = setTimeout(function() {					$("#erroruser").hide(1000); 					},5000 );				}								return false;			} 		})		}  				});