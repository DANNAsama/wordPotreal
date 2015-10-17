<style>
  #scroll-box {
    height: 400px;
    overflow: hidden;
    overflow-y: scroll;
    border: 1px solid #ccc;
    padding: 0 20px;
  }
</style>
<script>
  jQuery(function($){
    var id = 0;
    var target = $('#scroll-box');
    setInterval(function(){
      if (id > 20) {
        return;
      }
      target.animate({ scrollTop: $('#target' + id).offset().top -55}, 'slow');
      id++;
    }, 1000);
  });

  $(function() {
    $(".rateit1").rateit();
    $("#rate0").bind('rated', function(){
    });
  });
</script>

<div style="margin: 120px;">
      <h3 style="margin:25px 0px 20px 0px; text-decoration: underline;">タイムライン    </h3>


<div id="scroll-box">
<?php
  $i = 0;
  foreach ($userwords as $userword) { ?>
      
      <div class="msg" id ="target<?php echo $i; ?>" style="background-color:white; height:100px;">
        <?php if($userword['UserProfile']['picture'] == ''){ ?>
          <img src="/wordPot/mistery.jpeg" alt="プロフィール画像" width="60px" height="60px"  style="border: 2px solid; float:left; margin-left:10px; border-radius:30px; margin-top:10px;">
        <?php }else{ 
          echo '<img src="/wordPot/memberpicture/'.$userword['UserProfile']['picture'].'" width="60px" height="60px"  style="border: 2px solid; float:left; margin-left:10px; border-radius:30px; margin-top:10px;">';} ?>
          <div style="width:200px; margin:0px; float:left;">
            <div style="padding-bottom:20px; padding-left:40px; margin-top:10px;">
              <?php echo '<a href="/wordPot/user_profiles/index?id='.$userword['UserWord']['user_id'].'">'; ?><?php echo $userword['UserProfile']['nickname']; ?></a><br />
            </div>
            <div style="padding-left:40px;">
              <div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" data-rateit-value="<?php echo $userword['UserWord']['rank']; ?>"></div>
            </div>
          </div>
          <div style="font-size:120%; margin-bottom:5px;"><?php echo $userword['Word']['word']?></div>
          <div class="comment"><p><?php echo $userword['UserWord']['comment']; ?></p></div>
          <form action="/wordPot/favorite_user_words/add/<?php echo $userword['UserWord']['id']; ?>">
          <input class="btn" style="background-color: #ffbd66;" type="button" value="★">
          </form>
        <input type="hidden" name="data[UserWord][rank]" value="0">
      </div>

<?php
  $i++;    
  }
?>
      </div>
    </div>

</div>