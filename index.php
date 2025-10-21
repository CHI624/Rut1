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
            height: 250px;
            width: auto;
            position: relative;
            top: 200px;
            left: 415px;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        .name{
                        position: absolute;
            top: 5%;
            left: 51%;
            transform: translate(-50%, -50%);
            font-family: 'Roboto', sans-serif;
            font-size: 70px;
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
        .navigation_vic{
            display: flex;
            display: column;
            gap: 5px;
            position: absolute;
            height: 8px;
            width: auto;
            top: 87%;
            left: 49%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        .navigation_vic img{
            height: 60px;
            width: auto;
            margin: 0;
            padding: 0;
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
            top: 155%;
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
                .box{
            height: 980px;
            width: 900px;
            border: 20px solid #950000ff;
            position: absolute;
            top: 85%;
            left: 50%;
            border-radius:20px;
            transform: translate(-50%, -50%);
            background-color: #5b0202ff;
            border: none;
            outline:white;
        }
        .inner-box{
            height: 880px;
            
            width: 800px;
            margin-top: 55px;
            margin-left: 50px;
            background-color: #791e1eff;
            border-radius: 15px;
        }
        .victor_pic.expanded{
            position:fixed;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 90vw;
            height: 90vh;
            max-width: 700px;
            max-height: 900px;
            z-index:1000;
            object-fit: contain;
            background-color: white;
        }
        body.overlay-active{
            overflow: hidden;
        }
        .modal {
  display: none; 
  position: fixed; 
  z-index: 1000; 
  padding-top: 50px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  background-color: rgba(0,0,0,0.8);
}

.modal-content {
  margin: auto;
  display: block;
  max-width: 90%;
  max-height: 90%;
  border-radius: 10px;
}

.close {
  position: absolute;
  top: 20px;
  right: 40px;
  color: white;
  font-size: 40px;
  cursor: pointer;
}
.interests{
                        position: absolute;
            top: 40%;
            left: 23%;
            transform: translate(-50%, -50%);
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            color: #ffffffff;
            text-align: center;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
}
.history{
                        position: absolute;
            top: 60%;
            left: 15%;
            transform: translate(-50%, -50%);
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            color: #ffffffff;
            text-align: center;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
}
.links{
                        position: absolute;
            top: 81%;
            left: 51%;
            transform: translate(-50%, -50%);
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            color: #ffffffff;
            text-align: center;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
}
.bulletpoints{
            position: absolute;
            top: 51%;
            left: 20%;
            transform: translate(-50%, -50%);
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #ffffffff;
            text-align: left;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
}
.history_text{
                position: absolute;
            top: 70%;
            width: 765px;
            left: 53%;
            transform: translate(-50%, -50%);
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #ffffffff;
            z-index: 2;
            text-shadow: 2px 2px 4px #000000;
}
        </style>
    <body>
        <div class="box">
            <div class="inner-box">
            <h1 class="name">PERSONAL</h1>
            <img src="photos_videos/vic_cir.png" alt="Victor C. Agbara" class="victor_pic" id="victorPic">
            <h1 class="interests">INTEREST(s)/HOBBIES:</h1>
            <div class="bulletpoints">
            <p>- Music Production</p>
            <p>- Application Development</p>
            <p>- Video Editing</p>
            <p>- Graphic Design</p>
        </div>
            <h1 class="history">HISTORY:</h1>
            <div class="history_text">
            <p>Victor Agbara came from West Orange High School graduating in 2021 and admitting himself
                into Essex County College in Fall of 2021 as a Digital Design Major. He later changed his mind after a short
                stint at NJIT, transferred back to Essex County College in Spring of 2023 as a Computer Science Major and has been
                on a technological trajectory ever since. He is currently attending Rutgers University Newark as a Computer Science Major
                and is apart of the HLLC program.
            </p>
            </div>
            <h1 class="links">LINKS:</h1>
            <div class="navigation_vic">
            <a href="https://github.com/CHI624"><img src="photos_videos/gitlogo.png" class="link_pic"></img></a>
            <a href="https://www.linkedin.com/in/victor-agbara-22128b260/?trk=opento_sprofile_details"><img src="photos_videos/LinkedIn_icon.svg.png" class="link_pic"></img></a>
            <a href="https://www.instagram.com/chxmster24/"><img src="photos_videos/Instagram_logo_2022.svg.png" class="link_pic"></img></a>
            </div>
            </div>
        </div>
    </body>
        <footer class="footer">
        <p class="footer_text">© 2025 Victor C. Agbara. All rights reserved.</p>
    </footer>    
    <script>

        </script>
    </html>