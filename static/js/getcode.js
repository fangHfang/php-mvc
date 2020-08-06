var t=60;
$(".codes").click(function () {
    if(!$("[name=phone]").val()){
        return;
    }
    if(t!=60){
        return;
    }
    $(this).css({
        color:"#fff",
        fontSize:"12px"
    }).html("60s后重新发送");
    var st=setInterval(function () {
        t--;
        $(".codes").html(t+"s后重新发送");
        if(t==0){
            clearInterval(st);
            $(".codes").html("获取验证码");
            $(".codes").css({
                color: "#fff",
                fontSize:"0.38rem"
            });
            t=60;
        }
    },1000);
    $.ajax({
        url:"index.php?m=index&c=personal&a=checkphone",
        data:{phone:$("[name=phone]").val()},
    })
});
$("#login").validate({
    rules:{
        phone:{
            required:true,
            // remote:{
            //     url:"index.php?m=index&c=personal&a=checkrepeat",
            //     type:"get"
            // }
        },
        code:{
            required:true
        },
        password:{
            required:true
        }
    },
    messages:{
        phone:{
            required:"手机号不能为空",
            remote:"该号码已被注册"
        },
        code:{
            required:"验证码不能为空"
        },
        password:{
            required:"密码不能为空"
        }
    },
    errorPlacement:function(error,input){
        $("#error").append(error);
    }
});
// $(".sign").click(function () {
//      if($("#login").valid()){
//          $("#login").get(0).submit();
//      }
// });
