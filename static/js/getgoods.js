$(".tit1").click(function () {
    $(".tit21").css("color","#333");
    $(this).find(".tit21").css("color","#5f9ef6");
    if($(this).hasClass("price")) {
        $.ajax({
            url: "index.php?m=index&c=commodity&a=getgoodprice",
            data: {tid: $(".tit").attr("id")},
            dataType: "json",
            success: function (r) {
                let str = "";
                $.each(r, function (index, val) {
                    str += `<a href="index.php?m=index&c=product&a=product&id=${v['gid']}" class="price">
            <img src="${'val.thumb'}" alt="">
            <p>${'val.tname'}&nbsp;（10斤）</p>
            <!--<em>{$v['tprice']}</em>-->
            <div class="hot_down_img1">
                <span></span>
            </div>
        </a>`;
                });
                $(".cont_main").html(str);
            }
        });
    }
});
