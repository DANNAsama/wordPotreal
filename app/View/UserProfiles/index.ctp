<br><br>  

<div style="margin:120px;">
  <div class="container-fluid well span6" style="overflow:hidden;">
  <!--<div class="row-fluid">-->
    <div class="span2" style="float:left; margin-left:100px;">
      <div>
        <?php if($userprofile["UserProfile"]["picture"] == ""){ ?>
        <img src="/wordPot/mistery.jpeg" alt="プロフィール画像" class="img-circle" style="width:180px;height:180px;">
        <?php }else{ ?>
        <img src="/wordPot/memberpicture/<?php echo $userprofile["UserProfile"]["picture"] ?>" alt="プロフィール画像" class="img-circle" style="width:180px;height:180px;">
        <?php } ?>
      </div>
     <div class="text" style="clear:both;margin-top:20px;text-align:center;"><h2><?php echo $userprofile["UserProfile"]["nickname"]?></h2></div>
    </div>
    <div style="float:left;margin-left:20px;">
      <div style="float:left;">
        <div class="comment" style="width:400px; height:250px; background-color:white; margin-left:100px;"><p><font size="4"><?php echo $userprofile["UserProfile"]["description"]?></font></p></div>
        <div class="span2" style="float:left;margin-top:200px;margin-left:30px;">

        <?php
          if($current_id == $userprofile["UserProfile"]["user_id"]) {
          echo '<button class="btn" type="submit" style="background:#ffbd66;margin-top:10px;" onclick="location.href=\'/wordPot/user_profiles/edit?id='.$userprofile["UserProfile"]["user_id"].'\'">編集</button>';}
        ?>
        </div>
      </div>
    </div>
    
  </div>
</div>

        
  
 


 

