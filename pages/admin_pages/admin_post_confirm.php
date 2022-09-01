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
            <?=$_POST['content']?>
        </div>
        <form>
            <input type="hidden" value="">
            <input type="button" value='完了' id='complete'>
            <input type='button' value="編集" id='edit'>
        </form>
    </div>
</body>
