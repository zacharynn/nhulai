function secondsToHms(d) {
    d = Number(d);
    var h = Math.floor(d / 3600);
    var m = Math.floor(d % 3600 / 60);
    var s = Math.floor(d % 3600 % 60);
    return ((h > 0 ? h + ":" + (m < 10 ? "0" : "") : "") + m + ":" + (s < 10 ? "0" : "") + s)
}

$( document ).ready(function() {
    $('#mp3').on('click',function() {
        $('#myModal').modal();
        document.getElementById('player').play();
        if($('#playOrPause').hasClass('iconplay')) {
            $('#playOrPause').removeClass('iconplay');
            $('#playOrPause').addClass('iconpause');
            $('#playOrPause').css('opacity','.25')
        }
    })

    $('#player').on('timeupdate', function() {
        $('#timer').html(secondsToHms(this.duration - this.currentTime));
        var percentage = this.currentTime/this.duration * 100;
        $("#progressbar").progressbar("option","value", percentage);
    });

    $('#playOrPause').on('click',function() {
        if($(this).hasClass('iconpause')) {
            document.getElementById('player').pause();
            $(this).removeClass('iconpause');
            $(this).addClass('iconplay');
            $(this).css('opacity','1')
        } else {
            document.getElementById('player').play();
            $(this).removeClass('iconplay');
            $(this).addClass('iconpause');
            $(this).css('opacity','.25')
        }
    })

    $("#progressbar").progressbar({
        value :0
    });

    $("#progressbar").click(function(e){
        alert(1)
        var pos = $(this).offset();
        var maxWidth = $(this).css("width").slice(0, -2); //remove the 'px' from the css-value
        var clickPos = e.pageX - this.offsetLeft - pos.left; //where have you clicked in the progressbar?
        var percentage = clickPos / maxWidth * 100; //convert it to a percentage
        $("#progressbar").progressbar("option","value", percentage); //set the new value
        document.getElementById("player").currentTime = percentage/100*document.getElementById("player").duration;
    });
});

function playOrPause() {

}