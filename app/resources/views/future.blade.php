<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/mirai_icon.svg">
    </link:rel>
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/468c02fa87.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <main>
            <p class="mail"><br><br>だれかのみらいが届きました！</p>
            <div class="future_mails">
                <div class="future_mail">
                    <p class="datetime" >{{$diary1->diary_time}} </p>
                    <!-- <hr class="mail_border"> -->
                    <p class="message_text">{{$diary1->diary_txt}}</p>
                </div>
                <div class="inebody">
                    <form id="form" class="diary_form" action="{{ url('/home')}}" method="post">
                        <input type="checkbox" id="like0" checked>
                        <label for="like0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </label>
                    </form>
                </div>
            </div>
            <div class="future_mails">
                <div class="future_mail">
                    <p class="datetime" >{{$diary2->diary_time}} </p>
                    <!-- <hr class="mail_border"> -->
                    <p class="message_text">{{$diary2->diary_txt}}</p>
                </div>
                <div class="inebody">
                    <form id="form" class="diary_form" action="{{ url('/home')}}" method="post">
                        <input type="checkbox" id="like1">
                        <label for="like1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </label>
                    </form>
                </div>
            </div>
            <div class="future_mails">
                <div class="future_mail">
                    <p class="datetime" >{{$diary3->diary_time}}</p>
                    <!-- <hr class="mail_border"> -->
                    <p class="message_text">{{$diary3->diary_txt}}
                    </p>
                </div>
                <div class="inebody">
                    <form id="form" class="diary_form" action="{{ url('/home')}}" method="post">
                        <input type="checkbox" id="like2">
                        <label for="like2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </label>
                    </form>
                </div>
            </div>

            <!-- <div class="future_mail">
                <div class="">
                    <p class="datetime">　YYYY/XX/DD </p>
                    <hr>
                    <p class="message_text">　ああああああああああ</p>
                </div>
                <div class="inebody">
                    <form id="form" class="diary_form" action="{{ url('/home')}}" method="post">
                        <input type="checkbox" id="like1">
                        <label for="like1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </label>
                    </form>
                </div>
            </div> -->

            <!-- <div class="future_mail">
                <div class="">
                    <p class="datetime">　YYYY/XX/DD </p>
                    <hr>
                    <p class="message_text">　ああああああああああ</p>
                </div>
                <div class="inebody">
                    <form id="form" class="diary_form" action="{{ url('/home')}}" method="post">
                        <input type="checkbox" id="like2">
                        <label for="like2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </label>
                    </form>
                </div>
            </div> -->

            <!-- <div class="future_mail">
                <div class="">
                    <p class="datetime">　YYYY/XX/DD </p>
                    <hr>
                    <p class="message_text">　ああああああああああ</p>
                </div>
                <div class="inebody">
                    <form id="form" class="diary_form" action="{{ url('/home')}}" method="post">
                        <input type="checkbox" id="like3">
                        <label for="like3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </label>
                    </form>
                </div>
            </div> -->

        </main>

        <footer>
            <div class="container-menu">
                <div class="row-menu">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="button" onclick="location.href='{{url('/future')}}'" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-menu rounded-0 w-130px h-70px" style="font-family: 'Zen Maru Gothic'; font-size: 12px; padding-top: 4%; background-color: #add8e6; margin-left: 0;" for="btnradio2"><i class="fa-solid fa-earth-asia" style="font-size: 20px;"></i><br>みんなのみらい</label>

                        <input type="radio" onclick="location.href='{{url('/index')}}'" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-menu rounded-0 w-130px h-70px" style="font-family: 'Zen Maru Gothic'; font-size: 12px; padding-top: 4%; margin-left: 0;" for="btnradio2"><i class="fa-solid fa-right-left fa-rotate-135" style="font-size: 20px;"></i><br>みらい交換</label>


                        <input type="button" onclick="location.href='{{url('/starpulldown')}}'" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-menu rounded-0 w-130px h-70px" style="font-family: 'Zen Maru Gothic'; font-size: 12px; padding-top: 4%; margin-left: 0;" for="btnradio3"><i class="fa-solid fa-star" style="font-size: 20px;"></i><br>マイみらい</label>
                    </div>
                </div>
              </div>
        </footer>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
