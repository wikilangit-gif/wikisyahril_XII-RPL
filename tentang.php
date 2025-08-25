<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tentang</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: black;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 70px;
               animation: fadeInUp 1s ease 0.2s both;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 550px;
            max-width: 100%;
            background-color: white;
            transition: transform 0.5s, box-shadow 0.5s;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 60px 0 #009688;
          
        }
        .img-box {
            width: 100%;
            height: 220px;
            overflow: hidden;
            border-radius: 10px 10px 0 0;
        }
        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .content h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: black;
        }
        .content p {
            color: #333;
            margin-top: 5px;
            font-family: 'Times New Roman', Times, serif;
            padding: 20px;
        }
        .content a {
            display: inline-block;
            padding: 12px 15px;
            background-color: #009688;
            text-decoration: none;
            color: aliceblue;
            font-weight: 500;
            border-radius: 5px;
            transition: opacity 0.3s;
        }
        .content a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <?php include 'navigasi.php'; ?>
    <div class="container">
        <div class="card">
            <div class="img-box">
                <img src="https://i.pinimg.com/originals/c1/27/1b/c1271b0c51dab4330acae052956e683e.jpg" alt="Slur Uzuki">
            </div>
            <div class="content">
                <h2>WIKI SYAHRIL</h2>
                <p>Saya adalah seorang front-end enthusiast dengan keahlian dalam HTML dan CSS, 
                    serta pemahaman dasar JavaScript untuk menciptakan interaksi sederhana. Memiliki ketertarikan kuat pada keindahan visual,
                     saya selalu berusaha menggabungkan estetika dan fungsi dalam setiap desain, memastikan tampilan yang menarik, rapi, dan nyaman digunakan.
                </p>
                <a href="https://wa.me/089519945166">Order jasa Desain</a>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
