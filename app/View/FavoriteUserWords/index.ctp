<script>
  $(function() {
    $(".rateit1").rateit();
    $("#rate0").bind('rated', function(){
    });
  });
</script>
<div style="margin: 120px;">
  <h3 style="margin:25px 0px 20px 0px; text-decoration: underline;">お気に入り</h3>
  <?php $i=1; ?>
  <?php foreach ($userwords as $userword):?>
  <div class="msg">
    <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
    <div style="width:200px; margin:0px; float:left;">
      <a href="/wordPot/user_profiles/index/<?php echo $userwords['UserWord']['user_id']; ?>"><?php echo $userwords['User']['username']; ?></a><br />
      <div class="rateit1" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" data-rateit-value="<?php echo $userwords['UserWord']['rank'];?>"></div>
    </div>
    <div class="new word"><?php echo $userwords['Word']['word']?></div>
    <div class="comment">コメント</div> 
  </div>
  <?php $i++ :?>
  <?php endforeach; ?>
</div>