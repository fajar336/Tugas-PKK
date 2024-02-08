<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sidebar Example</title>
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/62383ba947.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidebar">
        <a href="#" class=" item home">W</a>
        <i class="fa-solid item fa-magnifying-glass glass"></i>
        <i class="fa-solid item fa-bars bars"></i>
        <form action="logout" method="post">
            @csrf
            <button type="submit" class="logout">L</button>
        </form>
        <a href="login" class="fa">A</a>
    </div>
    <!-- <div class="content">
        <p>test</p>
    </div> -->
    <!-- Content -->
    <div class="content">
        <h1 style="margin: 0; margin-top: 20px;">Home</h1>
        <hr style="margin: 0; margin-bottom: 20px;">
        <p>welcome to PlayMusic posting this a music website indicating for project sekai: colorful Stage!</p>
        <p class="p">this web does not own all the song, all credits go to its rightful owner, including but not limited to Sega, Colorful Palette and Crypton. This website is a fanmade database only for entertainment purpose, has no official relation to Sega or Colorful Palette</p>
        <h3>Pintasan</h3>
        <a href="Vocal.php"><button class="SCButton">Alternative Vocal</button></a>
        <a href="unit"><button class="unit">Unit</button></a>
        <a href="character.php"><button class="SCButton">Character</button></a>
        <a href="welcome"><button class="SCButton">Album</button></a>
        <div class="table-content">
            <h3>Lagu Yang Diperbarui</h3>
            <table width="100%" style="border-style:solid; border-color:gray; border-collapse: collapse;" class="table">
                <thead style="text-align: center; border-bottom: solid 2.5px gray">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Singer/Team</th>
                    <th>Time Added</th>
                </thead>
                <tbody style="text-align:center">
                    <tr style="border-bottom: solid 1px gray" class="tr">
                        <td style="padding:6.5px;">1</td>
                        <td></td>
                        <td></td>
                        <td>23 Januari 2024</td>
                    </tr>
                    <tr style=" border-bottom: solid 1px gray">
                        <td style="padding:6.5px;">2</td>
                        <td></td>
                        <td>Hatsune Miku</td>
                        <td>24 Januari 2024</td>
                    </tr>
                    <tr style="border-bottom: solid 1px gray">
                        <td style="padding:6.5px;">3</td>
                        <td></td>
                        <td>Lana Del Ray</td>
                        <td>24 Januari 2024</td>
                    </tr>
                    <tr style="border-bottom: solid 1px gray">
                        <td style="padding:6.5px;">4</td>
                        <td></td>
                        <td>The Weeknd</td>
                        <td>24 Januari 2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- <button type="button" class="btn">Basic</button>
        <button type="button" class="btn btn-primary">Beranda</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-link">Link</button> -->
    </div>
</body>
</html>
