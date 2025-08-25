<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title> 
</head>
<body>
    <div class="nav">
<?php include 'navigasi.php';?>
</div>
    <style>
        :root {
            --primary: #F8BBD0;
            --secondary: #B3E5FC;
            --accent: #0059ffff;
            --text: #ffffffff;
            --light: #ffffffff;
             
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        body {
            background-color: #000000ff;
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


        .hero {
            width: 100%;
            height: 60vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 4px 8px 0 rgba(255, 0, 0, 1), 0 6px 20px 0 rgba(50, 10, 161, );
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            
           
        }
   
        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 2rem;
            background: linear-gradient(transparent, rgba(53, 6, 224, 0.69));
            color: white;
            text-align: center;
             animation: fadeInUp 1s ease 0.2s both;
        }

        .overlay h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .content {
            max-width: 800px;
            padding: 0 2rem;
            animation: fadeInUp 1s ease 0.2s both;
            align-self: center;
               
        }

        .quote-section {
            align-self: center;
            background-color: white;
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 2rem;
            margin-top: 2rem;
            box-shadow: 0 4px 12px rgba(29, 19, 160, 5);
            transition:  transform 0.3s ease;
      
        }
             .quote-section:hover{
                transform: translateY(-7px);
                
             }

        .quote {
            font-size: 1rem;
            font-style: italic;
            margin-bottom: 1rem;
            color: #555;
            
        }

        .source {
            text-align: right;
            font-weight: bold;
            color: var(--accent);
        }

        .gallery-title {
            text-align: center;
            margin: 2rem 0;
            color: var(--text);
        }

        .gallery {
            display: flex;
            /* grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); */
            gap: 1rem;
            margin: 2rem;
            justify-content: center;
            margin-bottom: 6rem;

            
            
        }
        

        .gallery img {
            width: 170px;
            height: 170px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.5s ease;
            box-shadow: 0 6px 4px 0 rgba(35, 16, 146, 2), 0 6px 20px 0 rgba(15, 17, 148, 0.73);
        }

        .gallery img:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 4px 0 rgba(255, 0, 0, 1)
        }
        

    </style>
</head>
<body>
    <div class="hero">
        <img src="https://images2.alphacoders.com/116/1163369.jpg" alt="Anime character with pink hair standing on a rooftop at sunset, looking towards a futuristic city skyline" />
        <div class="overlay">
            <h1>Anime Sanctuary</h1>
        </div>
    </div>

    <div class="content">
        <div class="quote-section">
            <p class="quote">"If you only focus on the bad things, you'll miss out on the chance to enjoy the good things."</p>
            <p class="source">- Gon Freecss, Hunter x Hunter</p>
        </div>

        <div class="quote-section">
            <p class="quote">"Hard work betrays none, but dreams betray many."</p>
            <p class="source">- Hachiman Hikigaya, My Teen Romantic Comedy SNAFU</p>
        </div>
    </div>
        <h2 class="gallery-title">Featured Anime Moments</h2>
        <div class="gallery">
            <img src="https://i.pinimg.com/736x/40/c1/5b/40c15b962554622ba7a0f317219320b1.jpg" alt="Two anime characters clashing swords in a midnight rain scene, dramatic lighting" />
            <img src="https://i.pinimg.com/736x/4c/22/16/4c2216f6b1fc16a1fd0f08247c5cfdaf.jpg" alt="Group of anime friends laughing together under cherry blossom trees" />
            <img src="https://i.pinimg.com/736x/c5/49/fd/c549fd8d65a20f54d8c470cc634b4e03.jpg" alt="Epic mecha battle scene with glowing weapons against sunset backdrop" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6Vakbs3PT093KcHAe9kGNHFi0BGXBGGAybQ&s" alt="Close-up of anime girl with determined expression, wind blowing through her hair" />
            <img src="https://i.pinimg.com/736x/31/1f/9a/311f9a16b70e15aef75fcfa4735ce690.jpg" alt="Anime food scene featuring steaming ramen bowl with perfect detail" />
            <img src="https://i.pinimg.com/564x/ff/5b/f4/ff5bf49da1351e9576be29b8f66039f0.jpg" alt="Silhouette of samurai standing in bamboo forest with moon in background" />
        </div>

  
</body>

</html>
</body>
<?php include 'footer.php'?>
</html>