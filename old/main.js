function header(){
    $.ajax({
        url: "header.html", // �ǂݍ���HTML�t�@�C��
        cache: false,
        success: function(html){
            document.write(html);
        }
    });
}