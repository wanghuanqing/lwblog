function layout() {
    $.ajax({
        url: '{:U("home/layout")}',
        type: 'post',
        dataType: 'json',
        data: {

        },
        success: function(data) {
            if (data.code == 200) {
                alert(data.msg);
                location = 'login.html';
            } else {
                alert(data.msg);
            }
        }
    })
}