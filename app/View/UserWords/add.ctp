<script>
    $(function() {
        $(".rateit1").rateit();
        //$(".rateit1").bind('rated', function() { alert('rating: ' + $(this).rateit('value'));
        
        $("#rate0").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-0').val($(this).rateit('value'));
        });
        
        $("#rate1").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-1').val($(this).rateit('value'));
        });
        $("#rate2").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-2').val($(this).rateit('value'));
        });
        $("#rate3").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-3').val($(this).rateit('value'));
        });
        $("#rate4").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-4').val($(this).rateit('value'));
        });
        $("#rate5").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-5').val($(this).rateit('value'));
        });
        $("#rate6").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-6').val($(this).rateit('value'));
        });
        $("#rate7").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-7').val($(this).rateit('value'));
        });
        $("#rate8").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-8').val($(this).rateit('value'));
        });
        $("#rate9").bind('rated', function() {
          //alert('rate0:rating: ' + $(this).rateit('value'));
        //$("#rank-" + $(this).attr('data-id')).val($(this).rateit('value'));
        $('#rank-9').val($(this).rateit('value'));
        });
    });
</script>

<div style="margin:120px;">
  <h3 style="margin:25px 0px 30px 0px; text-decoration: underline;">まとめて追加</h3>
  <form method = "post">
    <input class="btn" type="submit" value="追加" style="background-color: #ffbd66; width:100px; ">
    <?php for ($i=0; $i <10 ; $i++) : ?>
    <div style="border: 1px solid #c0c0c0; margin: 15px 30px 30px 0px; padding:15px; border-radius:10px 10px; background-color:white;">
      <b>重要度</b>
      <div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" id="rate<?php echo $i;?>"></div>
      <input style="width:10%;" type="text" placeholder="英単語" name="data[<?php echo $i; ?>][Word][word]">
      <textarea placeholder="memo" cols="80" style="margin-left:10%; width:60%; border:1px #c0c0c0 solid;" name="data[<?php echo $i;?>][UserWord][comment]"></textarea>
      <input type="hidden" name="data[<?php echo $i;?>][UserWord][rank]" id="rank-<?php echo $i;?>" value="0">
    </div>
  <?php endfor;?>
  
    <div style="margin-bottom:20%;" class="centered">
      <input class="btn" type="submit" value="追加" style="background-color: #ffbd66; width:200px;">
    </div>
  </form>
</div>