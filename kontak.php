<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
         background-color: black;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;

        }   
                    @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .ayo{
             display: flex;
            justify-content: center; 
            align-items: center;     
            height: 550px;
               animation: fadeInUp 1s ease 0.2s both;
            
        }
        .ayo video{
            max-width: 100%;
            height: auto;
             transition: transform 0.3s ease;
        }
        .ayo video:hover{
             transform: translateY(-5px);
             box-shadow: 0 6px 8px  rgba(243, 55, 55, 54);
        }
        video{
            max-width: 100%;
            height: auto;
            
        }
        .er{
         text-align: center;
         padding: 0.3rem;
         color: aliceblue;
         margin-bottom: 2px ;
          transition: transform 0.5s ease;   
        }
        .er a {
         margin-top: 544px ;
         letter-spacing: 2px;
         text-decoration: none;
         color: white;
         padding: 4px;
          transition: transform 0.3s ease;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          font-size: 1rem;
        }
        .aa:hover {
            /* text-shadow: 0 2px 2px green; */
            color: chartreuse;
                          
        }
        .aaa:hover {
            /* text-shadow: 2px 2px red; */
            color: brown;
        }
        .aaaa:hover {
            /* text-shadow: 2px 2px blueviolet; */
            color: aquamarine;
        }
    </style>
</head>
   <?php include 'navigasi.php'?>
<body>
    <div class="ayo"><video src="anime.mp4"  autoplay muted > </video> </div>
    <div class="er">
     <h3>kontak yang bisa di hubungi</h3>
        <a class="aa" href="#" >WhatApp</a>
        <a class="aaa" href="#" >Youtube</a>
        <a class="aaaa" href="#" >Instagram</a>
        </div>
</body>
<?php include 'footer.php'?>
</html>