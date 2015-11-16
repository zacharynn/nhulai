<!DOCTYPE html>
<html ng-app="nhulai">
<head>
    <title>Nhu Lai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{elixir('css/app.css')}}">
    {{--    <script src="{{elixir('js/common.js')}}"></script>--}}
</head>
<body>


<nav class="navbar navbar-inverse noborderradius">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#/"><img src="/images/logo.jpg" border="0"/></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#/"><span class="glyphicon glyphicon-home"></span> Trang Chu</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="" aria-expanded="false"><span
                                class="glyphicon glyphicon-facetime-video"></span> Video
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Page 1-1</a></li>
                        <li><a href="">Page 1-2</a></li>
                        <li><a href="">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href=""><span class="glyphicon glyphicon-music"></span> Nhac</a></li>
                <li><a href=""><span class="glyphicon glyphicon-picture"></span> Hinh Anh</a></li>
                <li><a href=""><span class="glyphicon glyphicon-star"></span> Tin Phat Su</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href=""><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>
                <li><a href=""><span class="glyphicon glyphicon-usd"></span> Ho Tro</a></li>>
            </ul>
        </div>

    </div>
</nav>


<div ng-view>
@include('pages.home')
</div>


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content"
             style="background-image: url(images/1amitofo1000e.jpg); background-repeat: no-repeat; background-position: center; background-size:100% auto">
            <div class="modal-header" style="border:0px;padding-top:0px">
                <button type="button" class="close" style="font-size:25px" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Kinh Lăng Nghiêm</h4>
            </div>
            <div class="modal-body" style="border:0px;padding:0px;height:100px;text-align: center">
                <a href="" class="iconsprites iconpause" id="playOrPause"></a>
                <audio src="mp3/kinh/thu-lang-nghiem/thich-tue-hai/59.mp3" id="player"></audio>
            </div>
            <div class="modal-footer" style="padding:0px;padding-bottom:2px;margin:0px">
                <div class="playerprogressbar" style="width:100%">
                    <div class="progressbar"></div>
                    <span class="playertimer" class="pull-right"> </span>
                </div>
            </div>

        </div>

    </div>
</div>
<div id="bottomplayer">
    <a id="playpausebutt" class="pull-left glyphicon glyphicon-pause btn">Pause</a>
    <div class="playerprogressbar">
        <div class="progressbar"></div>
        <span class="playertimer" class="pull-right"> </span>
    </div>
</div>
<script src="/js/angular.min.js"></script>
<script src="/js/angular-route.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function secondsToHms(d) {
        d = Number(d);
        var h = Math.floor(d / 3600);
        var m = Math.floor(d % 3600 / 60);
        var s = Math.floor(d % 3600 % 60);
        return ((h > 0 ? h + ":" + (m < 10 ? "0" : "") : "") + m + ":" + (s < 10 ? "0" : "") + s)
    }

    function pauseClick() {
        document.getElementById('player').pause();
        $('#playOrPause').removeClass('iconpause');
        $('#playOrPause').addClass('iconplay');
        $('#playOrPause').css('opacity', '1')
        $('#playpausebutt').removeClass('glyphicon-pause');
        $('#playpausebutt').addClass('glyphicon-play');
        $('#playpausebutt').html('Play')
    }

    function playClick() {
        document.getElementById('player').play();
        $('#playpausebutt').removeClass('glyphicon-play');
        $('#playpausebutt').addClass('glyphicon-pause');
        $('#playpausebutt').html('Pause');
        $('#playOrPause').removeClass('iconplay');
        $('#playOrPause').addClass('iconpause');
        $('#playOrPause').css('opacity', '.25');
    }


    $(document).ready(function () {
        $(document).on('click','#mp3', function (e) {
            e.preventDefault();
            $('#myModal').modal();
            playClick();
        })

        $(document).on('click','#playOrPause, #playpausebutt', function () {
            if ($(this).hasClass('iconpause')) {
                pauseClick();
            } else if($(this).hasClass('iconplay')) {
                playClick();
            } else if ($(this).hasClass('glyphicon-pause')) {
                pauseClick()
            } else {
                playClick();
            }
        })



        $(document).on('click','.progressbar',function (e) {
            var pos = $(this).offset();
            var maxWidth = $(this).css("width").slice(0, -2); //remove the 'px' from the css-value
            var clickPos = e.pageX - this.offsetLeft - pos.left; //where have you clicked in the progressbar?
            var percentage = clickPos / maxWidth * 100; //convert it to a percentage
            var player=document.getElementById("player");
            var currTime = parseInt(percentage / 100 * player.duration);
            for (var i=0;i<player.buffered.length;i++) {
                if(currTime >= player.buffered.start(i) && currTime <= player.buffered.end(i)) {
                    $(".progressbar").progressbar("option", "value", percentage);
                    player.currentTime = currTime;
                    player.play();
                    return true;
                }
            }
            alert('Seek position is downloading')
        });

        $(document).on('hidden.bs.modal','#myModal', function () {
            $("#bottomplayer").show();
        })

        $(document).on('show.bs.modal','#myModal', function () {
            $("#bottomplayer").hide();
        })
    });

    function playOrPause() {

    }

    var nhulaiApp = angular.module('nhulai', ['ngRoute']);

    nhulaiApp.config(function($routeProvider) {
        $routeProvider.when('/', {
                    templateUrl : '/home',
                    controller  : 'mainController'
                }).otherwise({});
    });

    // create the controller and inject Angular's $scope
    nhulaiApp.controller('mainController', function($scope) {
        $(".progressbar").progressbar({
            value: 0
        });
        $('#player').on('timeupdate', function () {
            $('.playertimer').html(secondsToHms(this.duration - this.currentTime));
            var percentage = this.currentTime / this.duration * 100;
            $(".progressbar").progressbar("option", "value", percentage);

        });
    });
</script>
</body>
</html>
