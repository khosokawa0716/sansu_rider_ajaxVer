$(function () {

    var secondsDown = $('.js-time').val();

    $('.btn-push').on('click',function (e) {
        e.preventDefault();


        $.ajax({
            type: 'post',
            url: 'ajax_sample.php',
            dataType: 'json',
            data: {
                playerAnswer: $(this).val(),
                seconds: $('.timer').val()
            }
        }).done(function(data, status) {
            // console.log(data);
            // console.log(status);
            var q2 = data.quest;
            var playerAnswer = data.pl;
            var message = data.ms;
            var seconds = data.sec;
            var whatEnemy = data.whatEnemy;
            var enemy = data.enemy;
            var enemyImg = data.eimg;
            var enemyName = data.ename;
            var remainingHpRatio = data.rh;
            var button1 = data.b1;
            var button2 = data.b2;
            var button3 = data.b3;
            var imgClass = data.imgCl;
            var timeClass = data.timCl;
            console.log("次に出す問題："+q2);
            console.log("押したボタン："+playerAnswer);
            console.log("残りの時間："+seconds); // 間違えた場合は減った時間が返る
            console.log("何体目の敵か："+whatEnemy);
            console.log("ライダーオブジェクト："+enemy);
            console.log("新しい敵の画像ファイル名："+enemyImg);
            console.log("表示したメッセージ："+message);
            console.log("残りのHPの割合："+remainingHpRatio);
            console.log("画像の演出："+imgClass);

            $('.js-question').text(q2);
            $('.js-button1').val(button1).text(button1);
            $('.js-button2').val(button2).text(button2);
            $('.js-button3').val(button3).text(button3);
            $.when(
                $('.js-message').append(message).show().fadeOut(500)
            ).done(function(){
                $('.js-message').empty();
            });
            $('.js-meter').val(remainingHpRatio).text(remainingHpRatio+"%");
            $(function(){
                if(enemyImg){ // 新しい敵が出現したとき
                    $('.js-number').text(whatEnemy);
                    $('.js-name').text(enemyName);
                    $('.js-img').attr('src',enemyImg);
                } else {
                    $.when(
                        $('.js-img').removeClass("buruburuImg")
                    ).done(function(){
                        $('.js-img').delay(15).queue(function(next) {
                            $(this).addClass(imgClass);
                            next();
                        });
                    });
                }
            });
            $.when(
                $('.js-time').removeClass("buruburuTime"),
                secondsDown = seconds
            ).done(function(){
                $('.js-time').delay(15).queue(function(next) {
                    $(this).addClass(timeClass);
                    next();
                });
            });
            });
    });

    // var secondsDown = document.getElementById('seconds').value;

    var id = setInterval(
      function(){
        if(secondsDown > 0){
        // document.getElementById('seconds').value = --secondsDown;
        $('.js-time').val(--secondsDown);
        } else {
        clearInterval(id);//idをclearIntervalで指定している
            window.location.href = 'result2.php';
        }}, 1000
    );
});