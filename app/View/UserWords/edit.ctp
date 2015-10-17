<script>
  $(function() {
    $(".rateit1").rateit();
    $("#rate0").bind('rated', function() {
      $('#rank-0').val($(this).rateit('value'));
    });
  });
</script>

<div style="margin-top:120px;">
  <h3 style="margin:25px 0px 30px 0px; text-decoration: underline;">編集</h3>
</div>
<div class="container">
  <form class="form-horizontal" style="margin-bottom:50px;" method="post" action="/wordPot/user_words/view/<?php echo $userwords['UserWord']['id']; ?>">
    <div style="width:50%;margin:auto;">
      <h1 style="width:100px;margin:auto;"><?php echo $userwords['Word']['word']; ?></h1>
      <h3>重要度</h3>
      <div class="rateit1" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" data-rateit-value="<?php echo $userwords['UserWord']['rank']; ?>"></div>
  		<h3>メモ</h3>
      <div class="form-group">
        <label class="control-label" for="text"></label>
        <div class="col-sm-8">
          <textarea style="width:541px;height:150px;resize:none;margin-right:auto;" name="data[UserWord][comment]"><?php echo $userwords['UserWord']['comment'];?></textarea>
        </div>
      </div>
      <div class="form-group" style="width:20%;height:100px;margin-left:auto;">
        <div class="col-sm-4">
         <input class="btn" type="submit" value="編集" style="background-color: #ffbd66; width:90px;">
        </div>
      </div>
      <input type="hidden" name="data[UserWord][rank]" value="0">
    </div>
  </form>
</div>