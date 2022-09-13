<?php include '../../component/head.php'?>
<body>
<style>
</style>
    <?php
        $flag = true;
        include '../../component/header.php';
    ?>
    <div id='container'>
        <div id='post_list'>
        </div>
    </div>

</body>
<script>
    const db = firebase.firestore();

    const ref = db.collection('post');
    ref.onSnapshot((snapShot)=>{
        snapShot.forEach((doc)=>{
            const type = 'post_list';
            putLink(type,doc);
        })
    })

    function putLink(type,doc){
            const data = doc.data();
            const link = document.createElement('a');
            link.setAttribute('href','admin_edit.php?id='+doc.id);
            const divB = document.createElement('div');
            divB.setAttribute('class',type+'_contents');
            const postArea = document.getElementById(type);
            divB.innerText = data.title;
            link.appendChild(divB);
            postArea.appendChild(link);
    }

</script>
