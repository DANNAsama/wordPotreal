<?php                      //model名
echo $this->Form->create('UserProfile', array('action'=>'edit', 'type'=>'file'));
?>
<div style="margin:120px;">
  <input type="hidden" name="user_id" value="<?php echo $userprofile["UserProfile"]["user_id"]?>">
  <input type="hidden" name="id" value="<?php echo $userprofile["UserProfile"]["id"]?>">
  <br><br>  
  <div class="container-fluid well span6" style="overflow:hidden;">
    <!--<div class="row-fluid">-->
   <div class="span2" style="float:left;">
    <div>
      <?php if($userprofile["UserProfile"]["picture"] == ""){ ?>
      <img src="/wordPot/mistery.jpeg" alt="プロフィール画像" class="img-circle" style="width:180px;height:180px;">
      <?php }else{ ?>
      <img src="/wordPot/memberpicture/<?php echo $userprofile["UserProfile"]["picture"] ?>" alt="プロフィール画像" class="img-circle" style="width:180px;height:180px;">
      <?php } ?>
      <input type="file" name="image" size="width:180px;" />
    </div>
    <div style="clear:both;margin-top:20px;"><input type="text" name="data[UserProfile][nickname]" style="width:180px;" value="<?php echo $userprofile["UserProfile"]["nickname"]?>"></div>
    </div>
    <div style="float:left;margin-left:20px;">
      <div style="float:left;">
      <textarea name="data[UserProfile][description]" cols="35" rows="10"><?php echo $userprofile["UserProfile"]["description"]?></textarea>
        <div class="span2" style="clear:both;">
       <!--  <form action="/wordPot/user_pofiles/index/<?php //echo $userwords['UserWord']['id']; ?>"> -->
        <button class="btn" type="submit" style="background:#ffbd66;margin-top:10px;">SAVE</button>
        </form>
        </div>
      </div>
    </div> 
  </div>
</div>
        
    




  
