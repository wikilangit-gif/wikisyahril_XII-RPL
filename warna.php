<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warna</title>
</head>
<style>
    *, html, body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .cointainer {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .title {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 500;
        font-size: 30px;
        padding: 15px;
    }
    .box {
        width: 50%;
        height: 10%;
        background-color: #c6dae7ff;
        padding: 24px;
        border-radius: 18px;
        display: flex;
        justify-content: space-evenly;
    }
    .cirle {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
    }
    .red {
        background-color: red;
    }
    .blue {
        background-color: blue;
    }
    .aqua {
        background-color: aqua;
    }
    .pink {
        background-color: pink;
    }
     .white {
        background-color: white;
    }

</style>
<body>
    
    
<?php include 'navigasi.php';?>

    <div class="cointainer">
        <div class="title">Pilih Warna Yang Kamu Suka</div>
            <div class="box">
                <div class="cirle red">
                    <div class="vidio"></div>
                </div>    
                <div class="cirle blue"></div>
                <div class="cirle aqua"></div>
                <div class="cirle pink"></div>
                <div class="cirle white"></div>
        </div>
    </div>

<script>
    const cirle = document.querySelectorAll(".cirle");
    cirle.forEach((cirle) => {
        cirle.addEventListener("click",({target}) => {
            const {backgroundColor} = getComputedStyle(target);
            document.body.style.backgroundColor = backgroundColor;
        });
    });
</script>
</body>
<?php include 'footer.php'?>
</html>

