$(function(){
    let 
    $form=$('.app'),
    $result=$('.result'),
    $error=$('.error'),
    $load=$('.loading'),
    $isRun=false;
    $('send').on('click',function(){
        if (isRun) {
            return
        };
        isRun=true;
        $load.fadeIn();
        $result.empty();
        $.post('app.php',$form.serialize(),function (data) {
           if (data.reg) {
            $result.html('Заявка отправлена');
            $form.slideUp();
           }else{
            $error.empty();
            for(let name in data.errors){
                $target=$('[name='+name+']');
                if ($target.length>0) {
                    $target.next().text(data.errors[name]);
                }
            }


           }
        },'json')
        .always(function () {
            $load.fadeUp();
            $isRun=false;
        })
        .fail(function () {
            $result.html('Все сложно')
        })


    })
})