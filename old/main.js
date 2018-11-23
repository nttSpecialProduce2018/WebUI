function header(){
    $.ajax({
        url: "header.html", // “Ç‚İ‚ŞHTMLƒtƒ@ƒCƒ‹
        cache: false,
        success: function(html){
            document.write(html);
        }
    });
}