<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/star_fall.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/468c02fa87.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div id="main_wrap" class="wrapper">
        <div id="star_fall"></div>
        <main>
            <p class="mymirai"><br><br>自分のみらい</p>
            <div id="color" class="future_hope">
              <div class="futur_mail">
                <p class="datetime" >{{$diary->diary_time}}</p>
                <!-- <hr class="mail_border"> -->
                <p class="message_text">{{$diary->diary_txt}}</p>
              </div>
                <!-- ドロップダウンの文字変化あり、レイアウトなし -->
                <div class="iine_btn">
                  <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle hope btn-hope btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:200px; display: inline-block;">
                        <!-- <i class="fa-solid fa-star" style="font-size: 12px; margin-bottom:5%;"></i> -->
                        <span>このみらいは叶った？</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><button id="came_true" class="dropdown-item dropdown-hoped" value="叶った"><i class="fas fa-medal"></i><span>&nbsp;叶った</span></button></li>
                        <li><button id="came_false" class="dropdown-item dropdown-hopenot" value="叶わなかった"><i class="fas fa-cloud-moon-rain"></i><span>&nbsp;叶わなかった</span></button></li>
                    </ul>
                  </div>
                  <i class="fa-solid fa-star star_img" ></i>

                </div>

                <!-- </div> -->
            </div>

            <label class="back_btn" for="pop-up"><i class="fa-solid fa-angle-left" style="font-size:23px; color: #fff;"></i></label>

        </main>

        <div class="transback" style="margin: 50px;">
            <p></p>
        </div>


        <footer>
            <div class="container-menu">
                <div class="row-menu">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" onclick="location.href='{{url('/future')}}'" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" >
                        <label class="btn btn-menu rounded-0 w-130px h-70px" style="font-family: 'Zen Maru Gothic'; font-size: 12px; padding-top: 4%; margin-left: 0;" for="btnradio1"><i class="fa-solid fa-earth-asia" style="font-size: 20px;"></i><br>みんなのみらい</label>

                        <input type="radio" onclick="location.href='{{url('/index')}}'" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-menu rounded-0 w-130px h-70px" style="font-family: 'Zen Maru Gothic'; font-size: 12px; padding-top: 4%; margin-left: 0;" for="btnradio2"><i class="fa-solid fa-right-left fa-rotate-135" style="font-size: 20px;"></i><br>みらい交換</label>

                        <input type="radio" onclick="location.href='{{url('/starpulldown')}}'" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" checked>
                        <label class="btn btn-menu rounded-0 w-130px h-70px" style="font-family: 'Zen Maru Gothic'; font-size: 12px; padding-top: 4%; margin-left: 0; background-color: #add8e6;" for="btnradio3">
                            <i class="fa-solid fa-star" style="font-size: 20px; color: #28757A;"></i><p style="color: #28757A; font-weight: 600;">マイみらい</p>
                        </label>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('js/star_fall.js')}}"></script>
    <!-- <script src="star_fall.js"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script>
            $(function(){
                $('.dropdown-menu .dropdown-item').click(function(){
                    var visibleItem = $('.dropdown-toggle', $(this).closest('.dropdown'));
                    visibleItem.text($(this).attr('value'));
                });
            });
        </script>
</body>
</html>
