<?php include '../../component/head.php'?>
<body>
<style>
    img{
        width: 100%;
        height: auto;
    }
    @media screen and (min-width: 769px) {
        p{
            padding:0 auto;
            margin: 0 auto;
            padding-left: 10px;
        }
        .container{
            margin: 80px auto;
            width: 1080px;
            display: flex;
        }
        .comfirmPost{
            width: 65%;
        }
        .title_type_1{
            padding-left: 10px;
            border-bottom:dashed 2px orange;
            border-left: solid 4px orange;
        }
        .title_type_2{
            padding-left: 10px;
            border-bottom:solid 1px #ffd4b1;
        }
        .title_type_3{
            padding-left: 10px;
        }
        table{
            margin-top: 3vh;
            border-collapse: collapse;
            border-spacing: 0;
            table-layout: fixed;
        }
        thead tr{
            background: #ff952d;
            padding: 10px, 5px;
        }
        tbody tr {
            background: lemonchiffon;
        }
        tbody tr:nth-child(odd) {
            background: #fff;
        }
        td{
            padding: 10px;
        }
        th{
            padding: 10px;
        }
    }
    @media screen and (max-width: 769px){
        .container{
            margin: 0 auto;
            width: 90%;
        }
    }
</style>
    <?php
        $flag = true;
        include '../../component/header.php';
    ?>
    <div class='container'>
        <div class='comfirmPost'>
            <img src="<?=$_POST['sumnail_url']?>" alt="">
            <h1><?=$_POST['title']?></h1>
            <?=$_POST['content']?>
            <?=$_POST['tags']?>
        </div>
        <div class='buttonArea'>
            <input type="hidden" value="">
            <button id='complete' onclick='putHtml()'>完了</button>
            <button id='edit' onclick="history.back()">編集</button>
        </div>
    </div>
</body>
<script>
    const confirmTxt = '<?=$_POST['content']?>';
    const tags = <?=$_POST['tags']?>;
    const title = '<?=$_POST['title']?>';
    const sumnail = "<?=$_POST['sumnail_url']?>";

    function putHtml(){
        // Firestoreのオブジェクト取得
        var db = firebase.firestore();
            db.collection("post").add({
                name : 'user',
                date : Date.now(),
                title : title,
                sumnail : sumnail,
                tags : tags,
                post : confirmTxt
            })
                .then((doc) => {
                    window.location.href = 'admin_post_complete.php'; // 通常の遷移
                    window.open('admin_post_complete.php', '_blank'); // 新しいタブを開き、ページを表示
                    console.log(`追加に成功しました (${doc.id})`);
                })
                .catch((error) => {
                    console.log(`追加に失敗しました (${error})`);
                });
        console.log(confirmTxt)
        console.log(tags)
        console.log(title)
    }
</script>
