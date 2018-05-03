
$('#sharepost').click(function(){
//function share_comment(event,obj){
	
	var post= $('#postcontent').val();
	//var post_id=obj.getAttribute('post-id'),User_id=obj.getAttribute('user-id');
    if(hasWhiteSpace(post) && post!="")
		{
		$.ajax({
			url : "https://codenomad.org/secret-angels/share_post",
			type : 'post',
			data : {'post':post},
			success : function (result){
				location.reload()
				
				return false;
			} 
		})
		}else{
			error_alert("Please"," Write Some Thing in Text Area");
			
		}
	})//	End Share Post function 

//		Function for Put comment on post  
function post_comment(event,obj){
	var x = event.which || event.keyCode;
	var comment= obj.value;
	var post_id=obj.getAttribute('post-id'),User_id=obj.getAttribute('user-id');
    if(x==13){
		if(hasWhiteSpace(comment) && comment!="")
		{
		$.ajax({
			url : "https://codenomad.org/secret-angels/Post_comment",
			type : 'post',
			data : {'post_id':post_id,'commenter':User_id, 'comment':comment},
			success : function (result){
				obj.value="";
				
			$.ajax({	
			url : "https://codenomad.org/secret-angels/Show_comment",
			type : 'post',
			data : {post_add:post_id},
			success : function (result){
				$(obj).parent().parent().prev().prev().text('Hide Comment');
				$(obj).parent().parent().prev().html('');
				$(obj).parent().parent().prev().append(result);
				
				//obj.next('.div-comment-holder').html('');
				//obj.next('.div-comment-holder').html(result);
				
				return false;
			} 
		})
				return false;
			} 
		})
		}else{
			
		}
		obj.value="";
	}
	
}//	End Post Comment function 


//		Function for Item comment 
function Item_comment(event,obj){
	var x = event.which || event.keyCode;
	
	if(obj.value){
		var comment= obj.value;
	}
	else
	{
		var comment= $(obj).parent().find('input[type="text"]').val();
	}
	//var post_id=obj.getAttribute('post-id');
	var item_code=$('.popcomment').attr('item-id');
    if(x==13 || x==1){
		if(hasWhiteSpace(comment) && comment!="")
		{	
		$.ajax({
			url : "https://codenomad.org/secret-angels/Item_comment",
			type : 'post',
			data : {'item_code':item_code,'comment':comment},
			success : function (result){
				console.log("here is "+result+'commented');
				if(result=="you must login first")
				{
					  alert(result);
					window.location.reload();
				}
				//$(".commentis").html('');
				$("#fname").val('');
				// $('.commentit01').scrollTop($('.commentit01')[0].scrollHeight);
				

				$(".commentis01").append(result);

					$("#testDiv01").animate({ scrollTop: $('#testDiv01').prop("scrollHeight")}, 1000);
					
				

				// $("#testDiv01").animate({ scrollTop: $("#testDiv01").height() }, 1000);
				/* setTimeout(function(){$("#div1").animate({
					scrollTop: $('#div1')[0].scrollHeight - $('#div1')[0].clientHeight
				}, 1000);}, 1000); */

				
				
				//obj.value="";
				
				return false;
			} 
		}) 
		Get_total_comment(item_code);
		}
		else{
			console.log('bye'+comment);
			console.log(hasWhiteSpace(comment));
		}
		obj.value="";
	}
	
}//	End Item Comment function 

function Show_item_comment(item_code)
{

	$.ajax({
			url : "https://codenomad.org/secret-angels/Show_item_comment",
			type : 'post',
			data : {'item_code':item_code},
			success : function (result){
				console.log(result);
				$(".commentis01").html('');
				$(".commentis01").append(result);
				
				//obj.value="";
				
				return false;
			} 
		}) 
}

//		Code for Ajax show comment 
$(".btn-show-cmt").click(function(){
	var obj=$(this);
	var action=obj.text();
	if(action=='Show Comment'){
	var post_add = obj.prev().prev('div').attr('post-id');
	
	$.ajax({	
			url : "https://codenomad.org/secret-angels/Show_comment",
			type : 'post',
			data : {post_add:post_add},
			success : function (result){
				obj.next('.div-comment-holder').html('');
				obj.next('.div-comment-holder').html(result);
				obj.text('Hide Comment');
				return false;
			} 
		})
	}else if(action=='Hide Comment'){
		
		obj.next('.div-comment-holder').html('');
		obj.text('Show Comment');
	}
	
}); 


// Function For check white space in comment text
function hasWhiteSpace(s)
{
	reWhiteSpace = new RegExp(/^\s+$/);
    // Check for white space
    if (reWhiteSpace.test(s)) {
        alert("Please Check Your Fields For Spaces");
         return false;
    }
return true;
}

//		Function for play video on click	 
/* $("#display_vid").click(function(){
//$("video").click(function(){
	alert($('#menu3').html());
	return false; 
            /* if (this.paused)
                this.play()
            else
                this.pause() */
			/*var obj=$(this);
			var video = $('<video />', {
			id: 'video',
			src: obj.find('source').attr('src'),
			type: 'video/mp4',
			height:'100%',
			width:'100%',
			autoplay:true,
			controls: true
			});

			
			$('#videoplay07').css("display", "block");
			video.appendTo($('.playvideocls'));
			
        }); */
function playmyvideo(obj1){
	var obj=$(obj1);
			var video = $('<video />', {
			id: 'video',
			src: obj.find('source').attr('src'),
			type: 'video/mp4',
			height:'100%',
			width:'100%',
			autoplay:true,
			controls: true
			});

			
			$('#videoplay07').css("display", "block");
			video.appendTo($('.playvideocls'));
			
}
// 		End video play on click

//		Code for Open Image slider 
 $(".overlay").click(function(){
	$("#popupslide").css("display","block");	
});

//		Code for Open Image slider for models 
 function openslider(){
	$("#popupslide01").css("display","block");	
};

//		Code for close image slider
$(".closetab").click(function(){
	$("#popupslide").css("display","none");
});

// Code for open popup for edit profile pic 
$(".modelcamera").click(function(){
	$("#id01").css("display","block");
});
// Code for open popup for Choose Gallery pic 
$("#id201").click(function(){
	
	$("#id02").css("display","block");
});


	
	
 

$( document ).ready(function() {
    $('div.rating-stars').addClass("star_rating");
	});
	
$("#mywall").click(function() {
    $('html, body').animate({
        scrollTop: $("#timeline").offset().top
    }, 1500);
});


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});



//		Functin For Do like On Post
function post_like(x) {
	var post_id= $(x).attr('item-id');
	$.ajax({	
			url : "https://codenomad.org/secret-angels/post_like",
			type : 'post',
			data : {post_add:post_id},
			success : function (result){
				console.log(result);
				console.log('match found ',result.indexOf("you must login first"));
				if(result=="you must login first")
				{
					alert("You must login first");
					window.location.reload();
				}
				else{
				x.classList.toggle("fa-thumbs-down");
				$('.only_like').html(result==0? '0 Likes': result+' Likes');
				}
				return false;
			} 
	})
}



// code for image slider on models_profile page 

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	
  showSlides(slideIndex += n);
  
}


function currentSlide(n) {
  showSlides(slideIndex = n);
}
function Get_post_likes(post_id) {
  $.ajax({	
			url : "https://codenomad.org/secret-angels/get_total_like",
			type : 'post',
			dataType: 'json',
			data : {post_add:post_id},
			success : function (result){
				var obj=$('.only_like'),like='fa fa-thumbs-up popcomment',unlike='fa fa-thumbs-up popcomment fa-thumbs-down';
				
				 $.each(result, function(key, value) {
						result.total == null ? obj.html('0 Likes'):obj.html(result.total+' Likes');  
						result.like_status ? $('#popup_thumbs').attr('class',unlike) : $('#popup_thumbs').attr('class',like);
						
				});
			} 
	})
	$('#popup_thumbs').attr('item-id',post_id);
}
function Get_total_comment(post_id) {
  $.ajax({	
			url : "https://codenomad.org/secret-angels/Get_total_comment",
			type : 'post',
			data : {post_add:post_id},
			success : function (result){
				$('.numberlikes1').text(result+' comments');
				return false;
			} 
	})
}

function showSlides(n) {
	
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) {slideIndex = 1}    
	if (n < 1) {slideIndex = slides.length}
	for (var i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	}
	slides[slideIndex-1].style.display = "block"; 
	Show_item_comment(slides[slideIndex-1].getAttribute("item-id"));
	Get_post_likes(slides[slideIndex-1].getAttribute("item-id"));
	Get_total_comment(slides[slideIndex-1].getAttribute("item-id"));
	return false;
}// END code for image slider on models_profile page 	  

	




function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
			
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});


///// Code for count Char and Edit Text Area text for models
var oldval=$('#field').val();
	 $(document).ready(function() {
    totalChar();
	
	 });
	 function totalChar()
	 {
		 var val=$('#field').val();
		
	var len = val.length;
	len=350-len;
	 $('#charNum').text("Remaining Words : "+len);
	 }
	 
	 function countChar(val) {
		var nam=$(val).attr('name');
		var charlen = (nam=='post' ? 50 : 350);
        var len = val.value.length;
        if (len > charlen) {
          val.value = val.value.substring(0,charlen );
        } else {
			len=charlen-len;
          $('#charNum').text("Remaining Words : "+len);
        }
      }
	  
	$('.editit').click(function(){
		$('#field').removeAttr('disabled')
		//$('#field').focus();
		var data = $('#field').val();
		oldval=$('#field').val();
		$('#field').focus().val('').val(data);
		$('.editit').css('display','none');
		$('.okit').css('display','block');
		$('#charNum').css('display','block');
		totalChar();
	})
	$('.okit').click(function(){
		$('#id07').css('display','block');
		$('.popup-btn').attr('btn-action','save');
	})
	
	// confirmation Popup action ###########
	$('#idsave').click(function(){
		var btn=$('.popup-btn').attr('btn-action');
		
		if(btn=='del_video'){
			var videoid=$(this).attr('data-vids-id');
			var videos=$(this).attr('data-vids');
			jQuery.ajax({
			type: "POST",
			url: "https://codenomad.org/secret-angels/delete_videos",
			data: {id:videoid,vids:videos},
			success: function(res){			
			res==1?$('i[data-vids-id='+videoid+']').closest('div').remove():'';
			} 
			}); 
			$("#id07").css("display", "none");
		}else if(btn=='del_image'){
			var id=$(this).attr('data-vids-id');
			var img=$(this).attr('data-vids');
			jQuery.ajax({
			type: "POST",
			url: "https://codenomad.org/secret-angels/delete_img",
			data: {id:id,img:img},
			success: function(res){ 	
			res==1?$('i[data-id='+id+']').closest('li').remove():'';
			} 
       });
			$("#id07").css("display", "none");
		}else if(btn=='save'){
		
		$('#field').attr('disabled','disabled');
		$('.editit').css('display','block');
		$('#charNum').css('display','none');
		$('#id07').css('display','none');
		$('.okit').css('display','none');
		totalChar();
		var content=$('#field').val(); 
		$.ajax({	
			url : "https://codenomad.org/secret-angels/Update_summary",
			type : 'post',
			data : {summary:content},
			success : function (result){
			$('#field').text(result);
				return false;
			} 
	})
	}
	})
	
	$('#idcancel').click(function(){
		$('#field').val(oldval);
		$('#field').attr('disabled','disabled');
		$('.editit').css('display','block');
		$('#id07').css('display','none');
		$('#charNum').css('display','none');
		$('.okit').css('display','none');
		totalChar();
	})
	
	
function error_alert(a, b) {
   clearTimeout(e);
   var c = $(".alert.alert-danger.global"),
       d = "is-hidden";
   c.html("<strong>" + a + "</strong> " + b).fadeIn(1000).removeClass(d);
   var e = setTimeout(function() {
       c.fadeOut(function(a) {
           c.removeClass(d).empty()
       })
   }, 3500)
}
function success_alert(a, b) {
   clearTimeout(e);
   var c = $(".alert.alert-success.global"),
       d = "is-hidden";
   c.html("<strong>" + a + "</strong> " + b).fadeIn(1000).removeClass(d);
   var e = setTimeout(function() {
       c.fadeOut(function(a) {
           c.removeClass(d).empty()
       })
   }, 3500)
}




