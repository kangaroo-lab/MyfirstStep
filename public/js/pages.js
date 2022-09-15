
function header(){
    $.ajax({
        url: "../component/header.html",
        cache: false,
        success: function(html){
            document.write(html);
        }
    });
}

function footer(){
    $.ajax({
        url:"../component/footer.html",
        cache: false,
        success: function(html){
            document.write(html);
        }
    });
}
