$("#image1").click(function () {

    let file = $("#url1").get(0).files[0];
    if (!file) {
        return;
    }
    let fr = new FileReader();
    fr.readAsDataURL(file);
    fr.onload = function () {
        $("#url1").attr("data-image", fr.result);
    };
    let fd = new FormData();
    fd.append("file", file);
    $.ajax({
        url: $(this).attr("data-url"),
        type: "post",
        data: fd,
        processData: false,
        contentType: false,
        success: function (r) {
            if (/^\/\//.test(r)) {
                alert("成功");
                $("#hidden").val(r);
            }
        }
    })
});

$("#image2").click(function () {
    let files = $("#url2").get(0).files;
    if (!files) {
        return;
    }
    let str="";
    let len=files.length;
    let i=0;
    $.each(files, function (index, files) {
        let fd = new FormData();
        fd.append("file", files);
        $.ajax({
            url: $("#image2").attr("data-url"),
            type: "post",
            data: fd,
            processData: false,
            contentType: false,
            success: function (r) {
                str+=r+";";
                i++;
                if (/^\/\//.test(str)&&i===len) {
                    alert("成功");
                    str=str.slice(0,-1);
                    $("#hidden2").val(str);
                }
            }
        })
    })
});