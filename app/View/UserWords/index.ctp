<script>
$(function(){
  $(".rateit1").rateit();
  $("#rate0").bind('rated',function(){
    $('#rank-0').val($(this).rateit('value'));
  });
});
</script>

<div style="margin: 120px;">
  <h3 style="margin:25px 0px 30px 0px; text-decoration: underline;">あなたの単語帳    </h3>
  <div>
    <button class="btn" style="background-color: #ffbd66;" onclick="location.href='/wordPot/user_words/add'">まとめて追加</button>
  </div>
  <div style="border: 1px solid #c0c0c0; margin: 15px 30px 30px 0px; padding:15px; border-radius:15px 15px; background-color:white;">
    <div>おてがる追加</div>
    <form method="post">
      <div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" id="rate0"></div>
      <input type="text" placeholder="英単語" name="data[Word][word]">
      <textarea placeholder="メモ" name="data[UserWord][comment]" cols="80" style="margin-left:20px;　border: 1px #c0c0c0;"></textarea>
      <input class="btn" type="submit" value="追加" style="margin-left:20px; background-color: #ffbd66;">
    </form>
  </div>


      <table class="table" style="background-color:white;">
      <tabl>
        <tr>
          <th>No.</th>
          <th>重要度</th>
          <th style="width:100px;">英単語</th>
          <th style="text-align:center;">意味</th>
          <th></th>
        </tr>
        <?php $i=1; ?>
        <?php foreach($userwords as $userword): ?>
          <?php try {

            $enc_word = urlencode($userword['Word']['word']);
            $url = "http://public.dejizo.jp/NetDicV09.asmx/SearchDicItemLite?Dic=EJdict&Word=$enc_word&Scope=HEADWORD&Match=STARTWITH&Merge=AND&Prof=XHTML&PageSize=1&PageIndex=0";
            
            $response_xml_data = file_get_contents($url);
            $data1 = simplexml_load_string($response_xml_data);
            $data2 = json_decode(json_encode($data1),true); //普通の配列の形にする
            //debug($data2);

            
            //debug($data->TitleList->DicItemTitle['ItemID']);

            $itemID = $data2['TitleList']['DicItemTitle']['ItemID'];

            $item_url="http://public.dejizo.jp/NetDicV09.asmx/GetDicItemLite?Dic=EJdict&Item=$itemID&Loc=&Prof=XHTML";
            $result_xml_data = file_get_contents($item_url);
            $result1 = simplexml_load_string($result_xml_data);
            $result2 = json_decode(json_encode($result1),true);
            //debug($result2);
          } catch (Exception $e) {
            
          } ?>
        
          <tr>
            <td><?php echo $i; ?></td>
            <td><div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" data-rateit-value="<?php echo $userword['UserWord']['rank']; ?>"></div></td>
            <td><?php echo '<a href="/wordPot/user_words/view/'.$userword['UserWord']['id'].'">'; ?><?php echo $userword['Word']['word']; ?></a></td>
            <td id="meaning"><?php echo $result2['Body']['div']['div']; ?></td>
            <td><?php echo '<button class="btn btn-default" action="/wordPot/user_words/edit/'.$userword['UserWord']['id'].'">'; ?>編集</button></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
        <!-- <tr>
          <td>2</td>
          <td><div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1"></div></td>
          <td><a>confirm</a></td>
          <td id="meaning">〈陳述・証拠・うわさなどを〉(正しいと)確かめる</td>
          <td><button class="btn btn-default">編集</button></td>
        </tr>
        <tr>
          <td>1</td>
          <td><div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1"></div></td>
          <td><a>apply</a></td>
          <td id="meaning">〈規則・原理などを〉〔…に〕適用する</td>
          <td><button class="btn btn-default">編集</button></td>
        </tr>-->
      </table>
    </div> 