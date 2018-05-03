
	
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<style>
div#mceu_11 {
    display: none;
	margin-top: 3%;
}
.url-field{
	display:none;
	margin-left: 40%;
    margin-top: 3%;
}

.dropbt{
position: relative;
margin-left: 41%;}
.savebt,.savebt1{
	float:right;
	display:none;
}
</style>
</html>
 <body> 
   <div class="dropdown dropbt">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select type
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li id="1">HTML</li>
      <li id="2">Url</li>
    </ul>
	</div>

<div class="urldiv">
<textarea>Write  your html here!</textarea>
<input type="url" class="url-field" id="url" name="url" placeholder="Enter your url here!" reqired>	

</div>
<button class="btn btn-primary savebt " type="button">save
   </button>
   <button class="btn btn-primary savebt1 " type="button">save
   </button>
</body>	
<script>
$('document').ready(function(){
	$('ul li').click(function(){
		var a= $(this).attr('id');
		if(a == 1){
			$('div#mceu_11 ,.savebt').css('display','block');
			$('#url ,.savebt1').css('display','none');
			
		}else if(a == 2){
			$('div#mceu_11 ,.savebt').css('display','none');
			$('#url ,.savebt1').css('display','block');
		}
	})
	// save button on click 
	$('.savebt').click(function(){
		// html get 
		var ht= $('#mce_1_ifr').contents().find("html").html();
		var data= $('#mce_1_ifr').contents().find("body").html();
		
		if(data == ''){
			alert('Please enter HTML');
			return false;
		}else{
		ajax_Call(ht);
		}
		console.log(ht);
	})
	$('.savebt1').click(function(){
		// url get
		var ht= $('#url').val();
		if(ht == ''){
			alert('Please enter url');
			return false;
		}else{
		ajax_Call(ht);
		}
		console.log(ht);
	})
	
	// ajax call
	function ajax_Call(ht){
		alert(ht);
			/* $.ajax({
				url : 'http://voicebunny.comeze.com/index.php',
				type : 'POST',
				data : {
					'urlData' : ht
					},
				dataType:'json',
				success : function(data) {              
						alert('Data: '+data);
				},
				error : function(request,error)
				{
					alert("Request: "+JSON.stringify(request));
				}

					
			}) */
	}
})
</script>	
<?php
/* echo file_get_contents("http://php.net/manual/en/function.file-get-contents.php");

add_action('admin_menu','my_plugin_settings');
function my_plugin_settings(){
	add_menu_page(	'myplugin', 
					'add_url', 
					'administrator', 
					'myplugin', 
					'my_plugin_settings_page',
					'dashicons-wordpress',
					'90'
					);
	
}

function my_plugin_settings_page(){
	echo "<h1>My Plugin</h1>";
	
} */
?>

