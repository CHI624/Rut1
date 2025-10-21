<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <header class="header">
        <a href="MyUniversity.php"><img src="photos_videos/Rutgers_Scarlet_Knights_logo.svg.png" class="logo_pic"></img></a>
        <p class="logo">MY UNIVERSITY</p>
        <div class="nav">
        <a href=MyUniversity.php><nav class="home">HOME</nav></a>
        <a href=resume.php><nav class="resume">RESUME</nav></a>
        <a href=index.php><nav class="person">PERSONAL</nav></a>
    </div>
    </header>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
   /* General page styling */
   @font-face {
  font-family: 'Shuttleblock';
  src: url('fonts/Shuttleblock Test Bold.woff') format('woff'),
       url('fonts/Shuttleblock Test Bold.woff2') format('woff2');
  font-weight: normal;
  font-style: normal;
  font-display: swap;
}

@font-face {
  font-family: 'Shuttleblock';
  src: url('fonts/VeniceBlvd-Bold.woff2') format('woff2'),
       url('fonts/VeniceBlvd-Bold.woff') format('woff');
  font-weight: bold;
  font-style: normal;
  font-display: swap;
}

   @font-face {
  font-family: 'Black';
  src: url('fonts/Black.woff') format('woff'),
       url('fonts/Black.woff2') format('woff2');
  font-weight: normal;
  font-style: normal;
  font-display: swap;
}
   @font-face {
  font-family: 'So-Random';
  src: url('fonts/So Random!.woff') format('woff'),
       url('fonts/So Random!.woff2') format('woff2');
  font-weight: normal;
  font-style: normal;
  font-display: swap;
}

   /* General page styling */
   @font-face {
  font-family: 'Home-Video';
  src: url('fonts/Home Video.woff') format('woff'),
       url('fonts/Home Video.woff2') format('woff2');
  font-weight: normal;
  font-style: normal;
  font-display: swap;
}
        header{
            background-image:linear-gradient(to right, #f94444ff, #bd0d0dff);
            height: 120px;
            width: 100%;
            position: absolute;
            z-index: 3;
        }
        .logo{
            color: #ffffffff;
            font-size: 50px;
            position: absolute;
            font-family: 'Trebuchet MS', sans-serif, bold;
            drop-shadow: 2px 2px 4px #000000;
            top: 10%;
            left: 23%;
            transform: translate(-50%, -50%);
        }
        .logo_div{
            display:flex;
            display: column;
            align-items: center;
            justify-content: center;
            position:relative;
        }
        .logo_pic{
            margin-top: 10px;
            margin-left: 10px;
            height: 100px;
            width: 100px;
            margin-right: 20px;
        }
        .nav{
            position: absolute;
            top: 50%;
            color:#ffffffff;
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
            right: 5%;
            transform: translateY(-50%);
            display: flex;
            gap: 20px;
        }
        .home{
            color:#ffffffff;
        }
        .home:hover{
            cursor: pointer;
            color: #ff8e8eff;
            text-decoration: underline;
        }
        .resume{
            color:#ffffffff;
        }
        .resume:hover{
            cursor: pointer;
            color: #ffb8b8ff;
            text-decoration: underline;
        }
        .person{
            color:#ffffffff;
        }
        .person:hover{
            cursor: pointer;
            color: #ffb8b8ff;
            text-decoration: underline;
        }
        .image{
            background-image:linear-gradient(to bottom, #f9444430, #560000ff);
            width: 90vh;
            height: 117vh;
            position: absolute;
            z-index:1;
        }
        .pic1{
            height: 400px;
            width: auto;
            margin-top: 230px;
            right: 20px;
            position: relative;
        }
        .image_header{
            position: absolute;
            top: 12%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Shuttleblock', sans-serif;
            font-size: 70px;
            color: #ffffffff;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
        }
        .image_header1{
            position: absolute;
            top: 12%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Shuttleblock', sans-serif;
            font-size: 35px;
            top: 23%;
            color: #ffffffff;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
        }
        .mydescription{
            position: absolute;
            top: 81%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            color: #ffffffff;
            text-align: center;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
        }
        
        .victor_pic{
            height: 350px;
            width: auto;
            position: relative;
            top: 420px;
            left: 650px;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        .name{
                        position: absolute;
            top: 23%;
            left: 75%;
            transform: translate(-50%, -50%);
            font-family: 'Roboto', sans-serif;
            font-size: 45px;
            color: #ffffffff;
            text-align: center;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
        }
        .resume1{
                        position: absolute;
            top: 93%;
            left: 76%;
            transform: translate(-50%, -50%);
            height: 50px;
            width: 200px;
            background-color: #ff6161ff;
            border: none;
            border-radius: 10px;
            outline:white;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            color: #ffffffff;
            text-align: center;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
        }
        .resume1:hover{
            cursor: pointer;
            background-color: #ff8e8eff;
            color: #000000ff;
            text-shadow: 2px 2px 4px #ffffffff;
        }
        .personal1{
                        position: absolute;
            top: 100%;
            left: 76%;
            transform: translate(-50%, -50%);
            height: 50px;
            width: 200px;
            background-color: #ff6161ff;
            border: none;
            border-radius: 10px;
            border-color:#ffffffff;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            color: #ffffffff;
            text-align: center;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
        }
        .personal1:hover{
            cursor: pointer;
            background-color: #ff8e8eff;
            color: #000000ff;
            text-shadow: 2px 2px 4px #ffffffff;
        }
        .navigation_vic{
            display: flex;
            display: column;
            gap: 20px;
            position: absolute;
            top: 90%;
            left: 76%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        .arrow{
            height: 60px;
            width: auto;
            position: absolute;
            top: 77%;
            left: 76%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        .link_title{
                       position: absolute;
            top: 81%;
            left: 76%;
            transform: translate(-50%, -50%);
            font-family: 'Roboto', sans-serif;
            font-size: 40px;
            color: #ffffffff;
            text-align: center;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000; 
        }
        .footer{
            background-image:linear-gradient(to right, #5c1a1aff, #1c0000ff);
            height: 100px;
            width: 100%;
            position: absolute;
            top: 115%;
            z-index: 3;
        }
        .footer_text{
            color: #ffffffff;
            font-size: 20px;
            position: absolute;
            font-family: 'Roboto', sans-serif;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 4;
        }
        .victor{
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        </style>

    <body>
        <div class="image">
            <p class="image_header">RUTGERS</p>
            <h3 class="image_header1">Newark</h3>
<img src="photos_videos/overheadrutgers.png" class="pic1"></img>
<text class="mydescription">
<h1>MY DESCRIPTION</h1>
<p>NAME: Rutgers University Newark</p>
<p>LOCATION: 380 University Ave, Newark, New Jersey, 07102</p>
<p>MY MAJOR: Computer Science</p>
<p>CLUBS: GSLSAMP Program(Defunct Spring 2025)</p>
</text>
    </div>
    <div class="parent">
    <div class="victor">
        <h1 class="name">VICTOR C. AGBARA</h1>
        <img src="photos_videos/vic_cir.png" class="victor_pic"></img>
        <img src="photos_videos/white arrow.png" class="arrow"></img>
        <h1 class="link_title">Links</h1>
        <a href="resume.php"><button class="resume1">VIEW RESUME</button></a>
        <a href="index.php"><button class="personal1">VIEW PERSONAL</button></a>
    </div>
</div>
    </body>
    <footer class="footer">
        <p class="footer_text">© 2025 Victor C. Agbara. All rights reserved.</p>
    </footer>    
    <script>

        </script>
</html>