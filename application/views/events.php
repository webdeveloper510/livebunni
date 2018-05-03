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
  .container{
      width: 800px;
      margin: 0 auto;
    }



    ul.tabs{
      margin: 0px;
      padding: 0px;
      list-style: none;
    }
  ul.tabs li {
    background: none;
    color: white;
    display: inline-block;
    padding: 4px 59px;
    cursor: pointer;
   border-right: 1px solid #030303;

}

    ul.tabs li.current{
      background: #301c24;
          color: #ffffff;
    }

    .tab-content{
      display: none;
      background: white;
      padding: 15px;
    }

    .tab-content.current{
      display: inherit;
    }
ul.tabs {
    margin-top: 50px;
    padding: 0px;
    list-style: none;
}
ul.tabs.eventcheck {
    background-color: #cf1d65;
}
._36EXVGx9CZ5p {
    box-sizing: border-box;
    text-align: left;
    padding: 10px 15px 5px 20px;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    -webkit-justify-content: space-around;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -webkit-flex-basis: 60%;
    -ms-flex-preferred-size: 60%;
    flex-basis: 60%;
    border-right: 1px solid #030303;
}
li.tab-link.current:hover {
    color: #ffe271;
    text-shadow: 41px 14px 73px #000000a8;
    text-shadow: 1px 2px 3px 4px blue;
    font-size: 14px;
    /* font-weight: bold; */
}
</style>
<?php include($header);
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
function new_date($events_date){
  $temp=explode("-",$events_date);
  $temp1=$temp[2].':'.$temp[1];
  return $temp1; 
  //return "23:02";
}


?> 
<div class="container-fluid">

  


<!----start--->
  <div id="scheduledShowCalendar">
   <div>
   
      <div class="_2qWi2kjGwKcU U5hha9KKXeHO">
         <div class="_2peczMJx6fmZ">
          <?php if(count($events)==0){ echo "<h3>There is no event yet</h3>"; } else { ?>
            <div class="_2PtPoj5-1sgt"><?php $temp=explode("-",$events[0]['date']);echo $temp[2].'-'.$temp[1].'-'.$temp[0];?></div>
            <div class="_22sAxyIK6rUX">
               <div class="aQm8i-TMvDry SLcaoRTmRde6"><?echo $events[0]['time']?></div>
               <div class="_2gfMexV983Z2">
                  <?for($i=0;$i<count($events);$i++){?>
          <div class="_38sNIWuUir4c">
                     <div class="GKbZ0e912tgk">
                        <a href="/en/chat-html5/KellyConorss">
                           <figure style="background-image: url(' <?php if($events[$i]['profile_img']){echo base_url('/uploads/gallery/'.$events[$i]['profile_img']);}else{echo base_url('/uploads/gallery/avatar.png');}  ?>');">
 </figure>
               
                        </a>
                        <div class="_3zbb1x5MPSkT">
                           <div class="_38HnN02yHka5"><a href="<?php echo base_url('profile/').$events[$i]['First_name']; ?>"><?php echo $events[$i]['First_name'].' '.$events[$i]['Last_name']?></a><span><?php  echo $events[$i]['title']?></span></div>
                           <div class="_1bhZC0LdAr0S"><?echo $events[$i]['message'];?></div>
                        </div>
                     </div>
                     <div class="_2oi-EiffOjRz">
                        <span class="VhMHMZJ-Yu9X"></span>
                        <div class="_2FPIP0r6BicC"><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span></div>
                        <div class="_1E9VZmlnsEXl"><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span><span class="_1pKneJEnZubR"></span></div>
                        <div class="_1uQoSsvxsnEq">
                           <div class="_36EXVGx9CZ5p">
                              <span class="_1T_XfsZoatEc">Scheduled Show</span>
                              <div class="_2WJimPc1kDz3"><?echo $events[$i]['title']?></div>
                              <div class="_2q6fE84MYlLs">
                                 <div class="_2Ibym7A1iJBb">
                                    <div class="_3s6JoOK8YPYG">Date</div>
                                    <div class="_3_ZEM7wIyURb"><?echo $events[$i]['date'];  //new_date($events[$i]['date']);?></div>
                                 </div>
                                 <div class="_2Ibym7A1iJBb">
                                    <div class="_3s6JoOK8YPYG">Time</div>
                                    <div class="_3_ZEM7wIyURb"><?echo $events[$i]['time']?></div>
                                 </div>
                                 <div class="_2Ibym7A1iJBb">
                                    <div class="_3s6JoOK8YPYG">Duration</div>
                                    <div class="_3_ZEM7wIyURb"><?echo $events[$i]['duration']?></div>
                                 </div>
                 <div class="_2Ibym7A1iJBb">
                                    <div class="_3s6JoOK8YPYG">Price</div>
                                    <div class="_3_ZEM7wIyURb">$<?echo $events[$i]['price']?></div>
                                 </div>
                              </div>
                           </div>
                           <div class="TU_suNP_NfLo"></div>
                           <div class="_2QAKaaLQL35U">
                              <div><?php if($user_profile[0]['Role']=="model"){ ?>
                <h4>Total bookings  </h4>
                <span><?php echo $events[$i]['total_bookings']; ?></span> 
                <h4>Earnings  </h4>
                <span><?php echo "$".$events_earnings[$i]['sum']; ?></span> 
                
                <?php } 
                else{
                  if(count($paid_info[$i])==0)
                  {
                ?>  
                <a href="<?php echo base_url()."Products/buy_ticket/".$events[$i]['id'].'/'.$this->session->userdata['userid']; ?>"><button id="CalendarTicket_bookShowBtn_650134" tabindex="-1" class="_UVVekdZJ1fH" onmouseover="check_login(this);">Get ticket <?php echo $user_profile['Role']?> </button></a>
                  <?php }
                  else{
                    ?>
                    <a href=""><button id="CalendarTicket_bookShowBtn_650134" tabindex="-1" class="_UVVekdZJ1fH">Join event </button></a>
                    <?php
                  }
                  } ?>
                </div>
                           </div>
                        </div>
                     </div>
                  </div><?}?>
    
               </div>
            </div>
   <?php } ?>
         </div>
      </div>
   </div>
</div>
<!----end-->

  
  
  
  
  
  
  
  
  
  
<!-----end----->


  </div>
  </div>

    <script>
$(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})
function check_login(e){
  var user_id = '<?php echo $this->session->userdata('userid'); ?>';
  $(e).parent().find('.error').html('');
  if(user_id=='')
  { 
    $(e).parent().append('<p class="error"><a href="">Log in</a> or <a href="">Sign up</a> to get ticket</p>');
  }
}
function remove_this(e){
  //$(e).find('.error').remove();
}
</script>
  
            
      
      
        
      
      
                 
            
            
      
