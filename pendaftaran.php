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

        /* Data display */
        .data-list {
            max-width: 500px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            transition: 0.3s ease;
        }
        .data-list:hover{
            background: #2980b9;
            transform: translateY(-9);
            box-shadow: 0 4px 5px 0 #df710aff;

        }

        .data-item {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .data-item h3 {
            margin: 0 0 10px 0;
            color: #3498db;
        }

        .data-item p {
            margin: 5px 0;
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

    <script>
        let orderData = [];

        document.getElementById('orderForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Ambil data dari form
            let nama = document.getElementById('nama').value;
            let novel = document.getElementById('novel').value;
            let hp = document.getElementById('hp').value;
            let alamat = document.getElementById('alamat').value;
            let pesan = document.getElementById('pesan').value;
            let jumlah = document.getElementById('jumlah').value;

            // Tambah ke array
            orderData.push({
                nama: nama,
                novel: novel,
                hp: hp,
                alamat: alamat,
                pesan: pesan,
                jumlah: jumlah
            });

            // Tampilkan data
            showData();

            // Reset form
            this.reset();
        });

        function showData() {
            let html = '';
            
            for(let i = 0; i < orderData.length; i++) {
                html += `
                    <div class="data-item">
                        <h3>${orderData[i].nama}</h3>
                        <p><strong>Novel:</strong> ${orderData[i].novel}</p>
                        <p><strong>HP:</strong> ${orderData[i].hp}</p>
                        <p><strong>Alamat:</strong> ${orderData[i].alamat}</p>
                        <p><strong>Pesan:</strong> ${orderData[i].pesan}</p>
                        <p><strong>Jumlah:</strong> ${orderData[i].jumlah}</p>
                    </div>
                `;
            }

            document.getElementById('orders').innerHTML = html;
        }
    </script>
    
</body>
<?php include 'footer.php'?>
</html>