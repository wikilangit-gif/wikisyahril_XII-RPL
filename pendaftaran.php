<!DOCTYPE html>
<html>
<head>
    <title>PENDAFTARAN BELI NOVEL ANIME</title>
    <?php include 'navigasi.php';?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000ff;
            color: #000000ff;
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

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #287ed4ff;
            padding: 24px;
            animation: fadeInUp 1s ease 0.2s both;
        }

        form {
            max-width: 500px;
            margin: 18px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
               animation: fadeInUp 1s ease 0.2s both;
            transition: 0.5s ease;
        }

        form:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 70px rgba(12, 31, 204, 0.77);
        }

        label, input, select, textarea {
            display: block;
            width: 100%;
            font-size: 16px;
            margin-bottom: 15px;
        }

        input, select, textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fafafa;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #3216d4ff;
            outline: none;
            background-color: #fff;
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: transform 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
            transform: translateY(-8px);
        }

    </style>
</head>
<body>
    <h1>PEMBELIAN NOVEL ANIME</h1>

    <form id="orderForm">
        Nama :<br>
        <input type="text" id="nama" required><br>
        
        Nama novel :<br>
        <select id="novel" required>
            <option value="" disabled selected>Pilih Kategori</option>
            <option value="naruto shipuden">naruto shipuden</option>
            <option value="one pich">one pich</option>
        </select><br>
        
        nomer hp:<br>
        <input type="number" id="hp" required><br>
        
        Alamat:<br>
        <textarea id="alamat" required></textarea><br>
        
        pesan untuk penjual:<br>
        <textarea id="pesan" required></textarea><br>
        
        jumlah pemesanan:<br>
        <input type="number" id="jumlah" required><br>
        
        <button type="submit">Tambah Produk</button>
    </form>

    <div class="data-list" id="dataList">
        <h2>Data Pesanan:</h2>
        <div id="orders">
            <p>Belum ada pesanan</p>
        </div>
    </div>

   
    
</body>
<?php include 'footer.php'?>
</html>
