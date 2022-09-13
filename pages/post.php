<?php include '../component/head.php'?>
<body>
    <div>
        <?php
            $flag = true;
            include '../component/header.php'
        ?>
        <div id='sumnailDiv'>
            <img id="sumnail"src="" alt="サムネイル">
        </div>
        <div id='titleDiv'>
            <p id='dateTime'></p>
            <h1 id='title'></h1>
        </div>
        <div id='fill'></div>
    </div>
    <?php
        include '../component/footer.php';
    ?>
</body>
<script>
    const url = new URL(location.href);
    const params = new URLSearchParams(url.search);
    const id = params.get('id');

    const fill = document.getElementById('fill');
    const titleTxt = document.getElementById('title');
    const sumnail = document.getElementById('sumnail');
    const dateTimeBox = document.getElementById('dateTime');

    const db = firebase.firestore();
    db.collection('post').doc(id)
        .onSnapshot((doc)=>{
            const data = doc.data();
            titleTxt.innerText = data.title;
            fill.innerHTML = data.post;
            sumnail.setAttribute('src',data.sumnail);
            dateTimeBox.innerText = data.date.toDate().toDateString()
        })
        .then(()=>{

        })
</script>
