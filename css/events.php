<head>
<link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>"/>
</head>
<style> 
input[type=text] {
    width: 190px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
  background-image: url("./image/searchicon.png");
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
.seachit {
    float: right;
}

.tab-block {
  width: 650px;
  height: 290px;
  margin: 50px auto;
}
.tab-block .tab-mnu {
  display: block;
  list-style: none;
}
.tab-block .tab-mnu:after {
  content: '';
  display: table;
  clear: both;
}
.tab-block .tab-mnu li {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  float: left;
  background-color: #b2bbc0;
  color: white;
  width: 80px;
  text-align: center;
  padding-top: 13px;
  padding-bottom: 13px;
  cursor: pointer;
}
.tab-block .tab-mnu li:not(:last-child) {
  border-right: 1px solid #4c607c;
}
.tab-block .tab-mnu li:hover:not(.active) {
  background-color: #c0c7cb;
}
.tab-block .tab-mnu .active {
  background-color: #fff;
  color: #596165;
  border-bottom: 1px solid #eaecec;
  cursor: default;
}
.tab-block .tab-cont {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  border-top: 1px solid white;
  background-color: white;
  color: #292d2f;
}
.tab-block .tab-cont .tab-pane {
  padding: 20px 25px;
}


</style>
<?php include('header.php');
function dayofweek($day){
	if($day==1){
		return 'Monday';
	}else if($day==2){
		return 'Tuesday';
	}else if($day==3){
		return 'Wednesday';
	}else if($day==4){
		return 'Thursday';
	}else if($day==5){
		return 'Friday';
	}else if($day==6){
		return 'Saturday';
	}else if($day==7){
		return 'Sunday';
	}
}
?>
<div id="scheduledShowCalendar">
   <div>
      
      <div class="_2qWi2kjGwKcU U5hha9KKXeHO">
         <div class="_2peczMJx6fmZ">
   
<div class="_2PtPoj5-1sgt"><span><?echo dayofweek(date('w'));?></span><?echo date("d F Y");?></div>
<?for($i=0;$i<count($events);$i++){
		 ?>
            <div class="_22sAxyIK6rUX">
			 <div class="tab-block" id = "tab-block">
  
 

               <div class="aQm8i-TMvDry SLcaoRTmRde6">5:00 am</div>
               <div class="_2gfMexV983Z2">
                  <div class="_38sNIWuUir4c">
                     <div class="GKbZ0e912tgk">
                        <a class="eventplan" class="eventplan" href="/en/chat-html5/YanaMilfy">
                           <figure style="background-image: url(&quot;<?php echo base_url('/uploads/gallery/'.$events[$i]['profile_img']); ?>"></figure>
                        </a>
                        <div class="_3zbb1x5MPSkT">
                           <div class="_38HnN02yHka5"><a class="eventplan" class="eventplan"href="/en/chat-html5/YanaMilfy"><? echo $events[$i]['First_name'];?></a><span><? echo $events[$i]['title'];?></span></div>
                           <div class="_1bhZC0LdAr0S"><? echo $events[$i]['message'];?></div>
                        </div>
                     </div>
                     <div class="_2oi-EiffOjRz">
                       
                        <div class="_2FPIP0r6BicC"><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span></div>
                        <div class="_1E9VZmlnsEXl"><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span></div>
                        <div class="_1uQoSsvxsnEq">
                           <div class="_36EXVGx9CZ5p">
                              <span class="_1T_XfsZoatEc">Scheduled Show</span>
                              <div class="_2WJimPc1kDz3"><? echo $events[$i]['title'];?></div>
                              <div class="_2q6fE84MYlLs">
                                 <div class="_2Ibym7A1iJBb">
                                    <div class="_3s6JoOK8YPYG">Date</div>
                                    <div class="_3_ZEM7wIyURb"><? echo $events[$i]['date'];?></div>
                                 </div>
                                 <div class="_2Ibym7A1iJBb">
                                    <div class="_3s6JoOK8YPYG">Time</div>
                                    <div class="_3_ZEM7wIyURb"><?echo $events[$i]['time'];?></div>
                                 </div>
                                 <div class="_2Ibym7A1iJBb">
                                    <div class="_3s6JoOK8YPYG">Duration</div>
                                    <div class="_3_ZEM7wIyURb"><?echo $events[$i]['duration'];?></div>
                                 </div>
                              </div>
                           </div>
                           <div class="TU_suNP_NfLo"></div>
                           <div class="_2QAKaaLQL35U">
                              <div><button id="CalendarTicket_bookShowBtn_638200" tabindex="-1" class="_UVVekdZJ1fH">Get ticket </button></div>
                              <div class="_3PedXc901csr">4.99 credits</div>
             </div>
                        </div>
                     </div>
                  </div>
    
               </div>
            </div>
   
         </div>
      </div>
   </div>
</div>
</div>
         
           

			
<?}?>
		<script>
$(document).ready(function(){
  
  var tabWrapper = $('#tab-block'),
      tabMnu = tabWrapper.find('.tab-mnu  li'),
      tabContent = tabWrapper.find('.tab-cont > .tab-pane');
  
  tabContent.not(':first-child').hide();
  
  tabMnu.each(function(i){
    $(this).attr('data-tab','tab'+i);
  });
  tabContent.each(function(i){
    $(this).attr('data-tab','tab'+i);
  });
  
  tabMnu.click(function(){
    var tabData = $(this).data('tab');
    tabWrapper.find(tabContent).hide();
    tabWrapper.find(tabContent).filter('[data-tab='+tabData+']').show(); 
  });
  
  $('.tab-mnu > li').click(function(){
    var before = $('.tab-mnu li.active');
    before.removeClass('active');
    $(this).addClass('active');
   });
  
});
</script>
	
            
			
			
        
			
      
                 
            
            
      
