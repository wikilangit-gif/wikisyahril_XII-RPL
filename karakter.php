<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karakter</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #000000ff;
        }
              @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }}
        .container {
            position: relative; 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 100px 50px;
            padding: 100px 50px;
               animation: fadeInUp 1s ease 0.2s both;   
        }
        .card {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            width: 350px;
            max-width: 100%;
            height: 300px;
            background-color: white;
            box-shadow: 0 35px 80px rgba(0, 89, 255, 0.15);
            transition: 0.3s;
            border-radius: 10px;
        }
        .img-box {
            position: absolute;
            top: 20px;
            width: 300px;
            height: 220px;
            overflow: hidden;
            border-radius: 10px;
            transition: 0.5s;
        } 
        .card:hover {
            height: 400px;
            box-shadow: 0 3px 2px 2px rgba(183, 0, 2    55, 0.64);
        }
        .card:hover .img-box {
            top: -100px;
            transform: scale(0.7);
            box-shadow: 0 15px 45px rgba(255, 0, 0, 0.64);
        }
        .img-box img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .content {
            position: absolute;
            top: 253px;
            width: 100%;
            height: 35px;
            padding: 0 30px;
            text-align: center;
            overflow: hidden;
            transition: 0.5s;
        }
        .card:hover .content {
            top: 130px;
            height: 250px;   
        }
        .content h2 {
            font-size: 1.5rem;
            font-weight: 700px;
            color: black;
        }
        .content p {
            color: #333;
            margin-top: 5px;
        }
        .content a {
            position: relative;
            top: 15px;
            display: inline-block;
            padding: 12px 15px;
            background-color: #009688;
            text-decoration: none;
            color: aliceblue;
            font-weight: 500;
            border-radius: 5px;
             transition: transform 0.3s ease;
        }
        .content a:hover {
            opacity: 0.8;
            transform: translateY(-5px);

        }
    </style>
</head>
<body>
    <?php include 'navigasi.php'; ?>
    <div class="container">
        <div class="card">
            <div class="img-box">
                <img src="slur uzuki.jpg" alt="Slur Uzuki">
            </div>
            <div class="content">
                <h2>Slur Uzuki</h2>
                <p>Kei Uzuki (有う月づき憬けい Uzuki Kei?), also known as "X" or "Slur" 
                    (☓スラー Surā?), is the main antagonist of the Sakamoto Days series.
                    He is a serial killer seeking to overthrow the JAA with a group of fellow assassins. 
                </p>
                <a href="#">Tentang Karakter</a>
            </div>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="itachi.jpg" alt="Itachi Uchiha">
            </div>
            <div class="content">
                <h2>Itachi Uchiha</h2>
                <p>Itachi Uchiha (うちはイタチ, Uchiha Itachi) adalah karakter fiksi dalam serial manga dan anime Naruto.
                    Ia merupakan kakak kandung dari Sasuke Uchiha dan seorang mantan ketua Anbu Konohagakure dari Klan Uchiha.
                </p>
                <a href="#">Tentang Karakter</a>
            </div>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="gojo.jpg" alt="Gojo Satoru">
            </div>
            <div class="content">
                <h2>Gojo Satoru</h2>
                <p>Satoru Gojo (Japanese: 五条 悟, Hepburn: Gojō Satoru) is a fictional character from Gege Akutami's manga and anime series Jujutsu Kaisen. 
                    He was first introduced in Akutami's short series Tokyo Metropolitan Curse Technical School 
                </p>
                <a href="#">Tentang Karakter</a>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
