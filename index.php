<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hello FireStore</title>
  <?php include "component/head.php"?>
<style type="text/css">
  .container{
    display: flex;
    flex-direction: column;
  }
  .videoArea{
    position: relative;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
  }
  .videoArea > video{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    min-width: 100%;
    min-height: 100%;
    z-index: -1;
  }
  .logoTitleOnVideo{
    display: none;
    /*要素の配置*/
    position:absolute;
    /*要素を天地中央寄せ*/
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
    /*見た目の調整*/
    color:#fff;
    text-shadow: 0 0 15px #666;
  }
  .post_area_title{
      margin: 0 auto;
  }
  @media screen and (min-width: 769px){
    /* top contents */
    .inner{
        z-index: 1;
        margin: 0;
        padding-bottom: 50px;
    }
    .topContents{
        margin-left: 8.5vh;
        margin-right: 8.5vh;
        display: flex;
        justify-content: center;
        flex-direction: row;
    }
    .topContentsRow{
        display: flex;
        flex-direction: row;
    }

    .topContent{
        background-color: #fff;
        margin-left: 2vw;
        position: relative;
        width: 20vw;
        height: 25vh;
        margin-top: 48px;
        border-style: solid;
        border-radius: 44px;
        border-width: 1px;
        border-color: lightgray;
        text-align: center;
        display: flex;
        flex-direction: column;
        box-shadow:  0 0 10px #666;
        opacity: 0.7;
    }
    #topContentIcon{
        margin-top: 25px;
        flex:3;
        width: auto;
    }
    .topContentTextArea{
        margin-bottom: 7px;
    }
    .topContentTitle{
        margin-bottom: 0;
    }
    .topContentSub{
        font-size: 11px;
    }

    /* aboutUs */
    .aboutUs{
        background-blend-mode:lighten;
        background:linear-gradient(to bottom, transparent 0 1%,  #fff 80%),url('img/map.jpeg'); ;
        background-color:rgba(255,255,255,0.8);
        background-size: cover;
        margin-top: 30px;
        padding-top: 10vh;
        padding-left: 18vh;
        padding-right: 18vh;
        height: 80vh;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-bottom: 0;
    }
    .aboutUsTextArea{
        margin-top: 5vh;
        padding-left: 34px;
        height: 70vh;
        width: 60vh;
    }
    .aboutUsTitle{
        font-size: 5vh;
    }
    .post{
        font-size: 3vh;
        margin-bottom: 35px;
        word-break:break-word;
    }
    .button01 a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 auto;
        padding: 1em 2em;
        width: 25vh;
        color: rgba(0,0,0,0.6);
        font-size: 2vh;
        border: 1px solid rgba(0,0,0,0.6);
    }
    .button01 a::after {
        content: '';
        width: 5px;
        height: 5px;
        border-top: 3px solid rgba(0,0,0,0.6);
        border-right: 3px solid rgba(0,0,0,0.6);
        transform: rotate(45deg);
    }
    .button01 a:hover {
        color: #333333;
        text-decoration: none;
        background-color: rgba(255,255,255,0.8);
    }
    .button01 a:hover::after {
        border-top: 3px solid rgba(0,0,0,0.6);
        border-right: 3px solid rgba(0,0,0,0.6);
    }

    /* contents Area */
    .post_area{
        height: 80vh;
        padding-bottom: 30px;
        padding-right: 10vw;
        padding-left: 10vw;
    }
    /* TypeA */
    .typeA{
        margin-top: 0;
        background:linear-gradient(to top,rgba(255,255,255,0) 0, #fff 80%);
    }
  }
  @media screen and (max-width: 769px){
    /* top contents */
    .inner{
        z-index: 1;
        margin: 0;
        padding-bottom: 50px;
    }
    .topContents{
        margin-top: 5px;
        margin-left: 8.5vh;
        margin-right: 8.5vh;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    .topContentsRow{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .topContent{
        background-color: #fff;
        position: relative;
        width: 40vw;
        height: 20vh;
        margin-top: 48px;
        margin: 1vh;
        border-style: solid;
        border-radius: 44px;
        border-width: 1px;
        border-color: lightgray;
        text-align: center;
        display: flex;
        flex-direction: column;
        box-shadow:  0 0 10px #666;
        opacity: 0.7;
    }
    #topContentIcon{
        margin-top: 25px;
        flex:3;
        width: auto;
    }
    .topContentTextArea{
        margin-bottom: 7px;
    }
    .topContentTitle{
        margin: 0;
        margin-bottom: 0;
    }
    .topContentSub{
        margin: 0;
        font-size: 11px;
    }
    a{
        text-align: center;
        color: rgba(0,0,0,0.4);
        text-decoration: none;
    }
    a :hover{
        color: rgba(0,0,0,0.9);
        text-decoration: none;
    }

    /* aboutUs */
    .aboutUs{
        background:linear-gradient(to bottom, transparent 0 1%,  #fff 80%),url('img/map.jpeg'); ;
        background-color:rgba(255,255,255,0.8);
        background-blend-mode:lighten;
        background-size: cover;
        margin-top: 30px;
        padding-left: 18vh;
        padding-right: 18vh;
        width: auto;
        height: 50vw;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .aboutUsTextArea{
        padding-left: 10px;
        height: 30vh;
        width: 10vh;
    }
    .aboutUsTitle{
        font-size: 4.375vw;
        margin: 2vw auto;
    }
    .post{
        font-size: 2.5vw;
        margin-bottom: 35px;
        margin: 2vw auto;
    }
    .button01 a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 auto;
        padding: 1em 2em;
        width: 20vh;
        color: rgba(0,0,0,0.6);
        font-size: 2vh;
        border: 1px solid rgba(0,0,0,0.6);
    }
    .button01 a::after {
        content: '';
        width: 5px;
        height: 5px;
        border-top: 3px solid rgba(0,0,0,0.6);
        border-right: 3px solid rgba(0,0,0,0.6);
        transform: rotate(45deg);
    }
    .button01 a:hover {
        color: #333333;
        text-decoration: none;
        background-color: rgba(255,255,255,0.8);
    }
    .button01 a:hover::after {
        border-top: 3px solid rgba(0,0,0,0.6);
        border-right: 3px solid rgba(0,0,0,0.6);
    }
    .aboutUsImg{
        align-self: center;
    }

    /* contents Area */
    .post_area{
        padding-top:4vh;
        padding-bottom: 30px;
        width: 100%;
    }
    /* TypeA */
    .typeA{
        margin-top: 0;
        background:linear-gradient(to top,rgba(255,255,255,0) 0, #fff 40%);
    }
  }
</style>
</head>
<body>
<div class='container'>
  <?php
    $flag = false;
    include 'component/header.php'
  ?>
  <div class='homeVideoArea'>
    <div class='videoArea'>
      <h1 class='logoTitleOnVideo'>すてっぷ</h1>
      <video id='video'poster='img/sky.jpeg'webkit-playsinline playsinline muted autoplay loop>
        <source src='img/airplane.mp4' type="video/mp4">
      </video>
    </div>
  </div>

  <div class='inner'>

    <!-- トップのコンテンツカラム -->
    <div class='topContents'>
      <?php
          $array = array(
            array(
                "icon" =>"'fa-solid fa-person-walking-luggage fa-4x'",
                "ja" => "旅行",
                "eng" => "trip",
                "link" => "trip"
            ),
            array(
                "icon" => "'fa-solid fa-user-graduate fa-4x'",
                "ja" => "留学",
                "eng" => "study",
                "link" => "study"
            ),
            array(
                "icon" => "'fa-solid fa-pen-clip fa-4x'",
                "ja" => "心理テスト",
                "eng" => "test",
                "link" => "test"
            ),
            array(
                "icon" => "'fa-solid fa-book fa-4x'",
                "ja" => "豆知識",
                "eng" => "trivia",
                "link" => "trivia"
            ),
          );
          $i = 0;
      ?>
      <div class = 'topContentsRow'>
      <?php foreach($array as $val):?>
          <?php if($i==2):?>
              </div>
              <div class = 'topContentsRow'>
          <?php endif;?>
          <a href="list.php?category=<?=$val["link"]?>">
              <div class='topContent'>
                  <i id='topContentIcon'class=<?=$val["icon"]?>></i>
                  <div class='topContentTextArea'>
                      <p class='topContentTitle'><?=$val["ja"]?></p>
                      <p class='topContentSub'><?=$val["eng"]?></p>
                  </div>
              </div>
          </a>
      <?php $i+=1;endforeach;?>
      </div>
    </div>

    <!-- about usのコンテンツ -->
    <div class='aboutUs'>
      <div class='aboutUsTextArea'>
          <h2 class='aboutUsTitle'>About us</h2>
          <div class='postView'>
              <?php
                  $text = 'ooooooooooooooooooooooooooooo<br/>oooooooooooooo<br/>ooooooooooooooooooooooooooooo<br/>oooooooooooooo';
                  echo "<p class='post'>$text</p>";
              ?>
              <div class='button01'>
                  <a href="aboutUs.php">私たちについて</a>
              </div>
          </div>
      </div>
    </div>


    <!--  表示するテーブル -->
    <div class='post_area typeA'>
            <h3 class='post_area_title'>Title</h3>
            <div class='typeA_colomn'>
                <div class='typeA_row'>
                    <div class='typeA_contents'>
                        <img src="" alt="">
                    </div>
                </div>
            </div>
    </div>
    <div class='post_area typeB'>
            <h3 class='post_area_title'>Title</h3>
            <div class='typeB_colomn'>
                <div class='typeB_row'>
                    <div class='typeB_contents'></div>
                </div>
            </div>
    </div>
    <div class='post_area typeC'>
            <h3 class='post_area_title'>Title</h3>
            <div class='typeC_colomn'>
                <div class='typeC_row'>
                    <div class='typeC_contents'></div>
                </div>
            </div>
    </div>
    <div class='post_area typeD'>
            <h3 class='post_area_title'>Title</h3>
            <div class='typeD_colomn'>
                <div class='typeD_row'>
                    <div class='typeD_contents'></div>
                </div>
            </div>
    </div>

  </div>
  <?php include 'component/footer.php'?>

</div>

<script>
    $('.logoTitleOnVideo').fadeIn(3000);
    $(document).ready(function(){
        $('.recomendContentTypeA').hover(function(){
            $(this).stop(true, true).animate({ top:-2,opacity:1}, 150);
        }, function() {
            $(this).stop(true, true).animate({ top: 0,opacity:0.5}, 150);
    });
    });
    $(window).scroll(function(){
        var pos = $('.topContents').offset();
        if($(this).scrollTop() > pos.top ) {
            $('.aboutUsTextArea').fadeIn();
        }else{
            $('.aboutUsTextArea').fadeOut();
        }
    });
    $(document).ready(function(){
        $('.topContent').hover(function(){
            $(this).stop(true, true).animate({ top:-2,opacity:1}, 150);
        }, function() {
            $(this).stop(true, true).animate({ top: 0,opacity:0.7}, 150);
        });
    });
  // Firestoreのオブジェクト取得
  // var db = firebase.firestore();
  // 　db.collection("users").add({
  //   name: "小林",
  //   age: 27
  //   })
  //   .then((doc) => {
  //   console.log(`追加に成功しました (${doc.id})`);
  //   })
  //   .catch((error) => {
  //   console.log(`追加に失敗しました (${error})`);
  //   });

  // このあたりにこれから掲載するサンプルコードなどを記述。
</script>
</body>
</html>
