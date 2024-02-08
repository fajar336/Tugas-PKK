<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <link rel="stylesheet" href="css/welcome.css">
    <script src="https://kit.fontawesome.com/68b9e09491.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="item">
                <a href="home" class="home">W</a>
                <i class="fa-solid fa-magnifying-glass glass"></i>
                <i class="fa-solid fa-bars bars"></i>
                <a href="admin" class="admin">M</a>
                <form action="logout" method="post">
                    @csrf
                <button type="submit" class="logout">L</button>
                </form>
                <a href="login" class="fa">A</a>
            </div>
        </div>
        <!-- CONTENT/TAMPILAN -->
        <div class="content">
            <h1 style="color: white;" class="buttom">Album</h1>
            <h5><div class="card-album">Every singles and album that has been officially release</div></h5>
            <!-- content -->
            <h1 class="buttom2">Save album/singles</h1>
            <div class="album">
                <div class="albm">
                    <a href="play"><img src="{{asset ('storage/img/gambar1.jpg')}}" class="album1"></a>
                    <h1 class="h1">Singles Album</h1>
                </div>
                
                <div class="img">
                    <a href="#"><img src="{{asset ('storage/img/gambar2.jpg')}}" class="album2"></a>
                    <!-- <div class="tambah">

                    </div> -->
                </div>
            </div>
            <!-- Single Album -->
            <div class="body-album">
                <div class="single">
                    <img src="{{asset ('storage/img/gambar1.jpg')}}" class="single1" >
                    <p>Canon Gray - Memories</p>
                </div>
                <div class="s">
                    <img src="{{asset ('storage/img/gambar1.jpg')}}" class="single2" >
                    <p>Opening Boboiboy</p>
                </div>
                <div class="si">
                    <img src="{{asset ('storage/img/gambar1.jpg')}}" class="single3" >
                </div>
                <div class="sin">
                    <img src="{{asset ('storage/img/gambar1.jpg')}}" class="single4" >
                </div>
                <div class="sing">
                    <img src="{{asset ('storage/img/gambar1.jpg')}}" class="single5" >
                </div>
                </div>
            </div>
        </div>
</body>
</html>