<?php
    $title = 'First Step Topページ';
    $description = 'post';
    include '../../component/head.php';
?>
<style>
body.no_scroll{
   overflow: hidden;
}
body{
    margin: 0px;
    padding: 0px;
    background-color: #e7e7e7;
}
p{
    padding:0 auto;
    margin: 0 auto;
    padding-left: 10px;
}
header{
    height: 8vh;
    padding: 0px;
    background-color: #9EF26A;
}
img{
    width:80%;
}
#post_area{
    display: table;
    background-color: white;
    width: 100%;
    height: 75vh;
}
.page_make{
    border: solid 0.5px lightgray;
    display: table-cell;
    width: 50%;
    border-width: 0.5px;
}
.post_write_area{
    position: relative;
}
.post_confirm_area{
    position: relative;
}
#post_write_area_input{
    position: fixed;
    align-items: center;
    width: 48%;
    height: 75vh;
    overflow: scroll;
    border-left: 1px;
    border-top: 0px;
    border-bottom: 0px;
    padding-left: 1vw;
}
#post_write_area_input:focus{
    outline: none;
}
#post_confirm_area_watch{
    background-color: #fffae1;
    overflow-wrap: break-word;
    white-space: pre-wrap;
    position: fixed;
    width: 48%;
    height: 75vh;
    overflow: scroll;
    border-left: 1px;
    border-top: 0px;
    border-bottom: 0px;
    padding-left: 1vw;
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
</style>
</head>
<body>
<header>
<div>
    <h1>Logo</h1>
</div>
</header>
    <div id='fill'>
        <div id='post'>
            <form action="admin_post_confirm.php"method="post">
            <div id='post_title_area'>
                <input placeholder="タイトル" tabindex="10" class="title_input" value="">
            </div>
            <div id='post_tag_area'>
                <input autocomplete="off" placeholder="タグ" tabindex="20" type="text" class="css-amcp4b ed5758y1" value="" >
            </div>
            <div id='post_area'>
                <div class='page_make post_write_area'>
                    <div id='post_write_area_input' spellcheck="false"autocomplete='off'translate='no'role='textbox'area_multiline='true'contenteditable='true'data-test-editor-body="true">
                        <div id='post_write_area_line'value=''>
                            <br>
                        </div>
                    </div>
                </div>
                <div class='page_make post_confirm_area'><div id='post_confirm_area_watch'></div></div>
            </div>
            <div id='post_button_area'>
                <input type="hidden" id='submit_content' name="content">
                <input type="submit" id='submit' value="送信">
            </div>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript">
function submit_post(){
    const submit_html = document.getElementById('post_confirm_area_watch')
    const submit_text = submit_html.innerHTML
    const send_content = document.getElementById('submit_content')
    send_content.setAttribute('value',submit_text)
    console.log('ON',submit_text)
}

const submit = document.getElementById('submit')
submit.onclick = submit_post


let i = 0
let col = 1
const confirmView = document.getElementById('post_confirm_area_watch')
let arr = [""]
let table_list = {}
let photo_dic = {}
let url_dic = {}
function enterKey(event){
    if(event.key==='Enter'){
        i = 0
        col += 1
    }
}

function addFile(event){
    const newelem = document.createElement('p')
    newelem.setAttribute('id','post_confirm_area_pa'+col)
    confirmView.appendChild(newelem)
    i+=1
}

function makePutHtml(elem, event, num){
    let result = document
    i+=1
    let text = elem.innerText　
    switch(text[0]){
        case '＃':
            let j = 0
            for(let i=0; i<text.length; i++){
                if(text[i]=='＃' && i < 4){
                    j+=1;
                }
            }
            text = text.slice(j)
            result = result.createElement('h'+j);
            result.setAttribute('id','post_confirm_area_pa'+num)
            result.setAttribute('class','title_type_'+j)
            result.innerText = text;
            return result
            break;
        case "!":
            text.slice[0]
            result = result.createElement('img');
            result.setAttribute('id','post_confirm_area_pa'+num)
            const src = elem.getAttribute('value');
            result.setAttribute('src',photo_dic[text.match(/\[(.+)\]/)[1]])
            result.setAttribute('alt','img')
            return result
            break;
        case "<":
            result = result.createElement('iframe')
            const url = text.match(/\"(.+)\"/g)[0].split('"')[1]
            // result = new DOMParser().parseFromString(text,"text/xml").firstChild
            result.setAttribute('id','post_confirm_area_pa'+num)
            result.setAttribute('src',url)
            return result
        default:
            const name = text.match(/\［(.+)\］\（(.+)\）/)
            result = result.createElement('p');
            result.setAttribute('id','post_confirm_area_pa'+num)
            if(text[0]=='｜' && table_list[text]!=null){
                console.log('table!!')
                const table = document.createElement('table')
                table.setAttribute('id','post_confirm_area_pa'+num)
                const thead = document.createElement('thead')
                const tbody = document.createElement('tbody')
                table.appendChild(thead);
                table.appendChild(tbody);
                const headRow = document.createElement('tr');
                const h_con = text.split('｜')
                h_con.forEach(e=>{
                    if(e != ''){
                        const th = document.createElement('th')
                        th.innerHTML = e
                        headRow.appendChild(th)
                    }
                })
                thead.appendChild(headRow)
                table_list[text].forEach((arr,idx)=>{
                    const row = document.createElement('tr')
                    arr.forEach(e => {
                        if(e != ''){
                            const td = document.createElement('td')
                            td.innerHTML = e
                            row.appendChild(td)
                        }
                    })
                    tbody.appendChild(row)
                })

                console.log(table)
                return table
            }
            result.innerText = text;
            if(name!==null){
                const title = name[1]
                const url = name[2]
                result.innerHTML = result.innerHTML.replace(name[0],"<a href="+url+">"+title+"</a>")
                return result
            }

            return result
            break;
    }
}

function resetArr(){
    let delete_elem = document.getElementById('post_confirm_area_watch');
    while(delete_elem.firstChild){
        delete_elem.removeChild(delete_elem.firstChild)
    }
}

function findDiff(event){
    result = [];
    arr = [];
    resetArr();
    for(let i = 0; i < event.currentTarget.children.length; i++){
        const children = event.currentTarget.children
        const child = children[i];
        arr.push(child);
        if(child.innerText[0]=='｜'&&i+1<event.currentTarget.children.length){
            if(children[i+1].innerText.indexOf('｜ー') != -1 && i+2 < children.length){
                table_list[child.innerText] = []
                j = i+2
                if(children[j].innerText[0]==('｜')){
                    while(true){
                        if(j >= children.length || children[j].innerText.indexOf('｜')==-1){
                            console.log('BREAK')
                            break
                        }
                        console.log('ON'+j)
                        const text_arr = children[j].innerText.split('｜')
                        table_list[child.innerText].push(text_arr)
                        j+=1
                    }
                }
                i = j
            }
        }
    }
    i = 0;
    for(let idx=0;idx < arr.length; idx++){
        let elem = arr[idx]
        elem = makePutHtml(elem,event,idx);
        result[idx] = [true,idx,elem];
    }
    return result
}

function inputChange(event){
    let arr = findDiff(event)
    for(let i=0; i<arr.length; i++){
        elem = arr[i]
        if(elem[0]){
            const getText = event.data
            confirmView.appendChild(elem[2])
    }
    }
    confirmView.scrollTo(0, confirmView.scrollHeight);
}
let text = document.getElementById('post_write_area_input');

function txtInputWdrop(event, src, name){
    const input = event.target
    const text = "!["+name+"]("+src+")";
    input.innerText += text
}

const storage = firebase.storage();

function pushStorage(event,file){
    const storageRef = storage.ref('post-img/'+file.name)
    storageRef.put(file)
    storageRef.getDownloadURL()
        .then((url)=>{
            console.log(url)
            txtInputWdrop(event, url, file.name)
            photo_dic[file.name] = url
            return url
        })
}
text.addEventListener('keypress',enterKey)
text.addEventListener('input', inputChange);
text.addEventListener('drop',(event)=>{
	event.stopPropagation();
	event.preventDefault();
    const file = event.dataTransfer.files[0];
    const src = pushStorage(event,file)
    // const name = event.dataTransfer.files[0].name;
	// const reader = new FileReader();
	// reader.onload = function (e) {
    //     const src = e.target.result;
    //     txtInputWdrop(event, src, name)
    //     photo_dic[name] = src
    //     // const img = document.createElement('img')
    //     // img.setAttribute("src",src)
    //     // confirmView.appendChild(img)
	// }
	// reader.readAsDataURL(event.dataTransfer.files[0]);
})
</script>
<script>
</script>
