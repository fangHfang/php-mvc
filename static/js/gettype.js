$(".cont_type p").click(function () {
    $(this).css("color","#66a5ec").siblings().css("color","#333");
    $.ajax({
        url:"index.php?m=index&c=commodity&a=getcommodity",
        data:{cid:$(this).attr("data-id")},
        dataType:"json",
        success:function (r) {
            console.log(r);
            let str="";
            $.each(r,function (index,val) {
                str+=`<a href="index.php?m=index&c=commodity&a=showlist?id=${val.tid}" class="hot_down_img">
            <img src="${val.thumb}" alt="">
            <p>${val.tname}&nbsp;（10斤）</p>
            <em>${val.tprice}</em>
            <div class="hot_down_img1">
                <span></span>
            </div>
        </a>`;
            });
            $(".cont_main").html(str);

        }
    });
});
