<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/468c02fa87.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- <header>
        ヘッダー
    </header> -->

    <main>
        <label class="label_diary" for="name"><br>　みらいを描いて見ましょう。</label>
        <section class="container">
            <form id="form" class="form" action="{{ url('/home')}}" method="post">
                {{ csrf_field() }}
                <li>
                    <label class="label_diary" for="date"><br>　みらいの実現日は？:</label>
                    <input type="date" style = "font-family: Jost, Zen Maru Gothic;" placeholder="みらいの実現日は？" id="date" name="date" tabindex="1"/>
                </li>
                <li>
                    <label class="label_diary" for="message">　実現したいみらいは？:</label>
                    <textarea style = "font-family: 'Zen Maru Gothic';"placeholder="実現したいみらいは？" id="message" name="message" tabindex="2"></textarea>
                </li>
                <button type="submit" name="add">
                    追加
                </button>
            </form>
            <button class="fixed_btn"><i class="fa-solid fa-pen-to-square" style="font-size: 23px"></i></button>
        </section>
    </main>

    <footer>
        <div class="container-menu">
            <div class="row-menu">
                <!-- <div class="col-4">
                    <button type="button" class="btn btn-primary">みらいあ</button>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary">みらいい</button>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary">みらいう</button>
                </div> -->
                <!-- <button type="button" class="btn btn-primary btn-lg col-4 text-nowrap"> 遠くのみらい</button>
                <button type="button" class="btn btn-primary btn-lg col-4">みらい交換</button>
                <button type="button" class="btn btn-primary btn-lg col-4">マイみらい</button> -->
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-menu rounded-0 w-130px h-70px" style="font-family: 'Zen Maru Gothic'; font-size: 12px; padding-top: 4%;" for="btnradio1"><i class="fa-solid fa-earth-asia" style="font-size: 20px;"></i><br>遠くのみらい</label>
                    
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-menu rounded-0 w-130px h-70px" style="font-family: 'Zen Maru Gothic'; font-size: 12px; padding-top: 4%;" for="btnradio2"><i class="fa-solid fa-right-left fa-rotate-135" style="font-size: 20px;"></i><br>みらい交換</label>
                
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-menu rounded-0 w-130px h-70px" style="font-family: 'Zen Maru Gothic'; font-size: 12px; padding-top: 4%;" for="btnradio3"><i class="fa-solid fa-star" style="font-size: 20px;"></i><br>マイみらい</label>
                </div>
            </div>
          </div>
    </footer>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>