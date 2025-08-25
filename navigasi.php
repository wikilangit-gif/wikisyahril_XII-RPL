<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigasi Biru</title>
    <style>
        :root {
            --primary-color: #000000ff;
            --primary-hover: #020202ff;
            --text-light: #ffffffff;
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px 5px rgba(28, 76, 206, 0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        nav {
            background-color: black;
            padding: 1rem 2rem;
            box-shadow:0 5px 50px rgba(0, 89, 255, 1);
            position: sticky;
            top: 0;
            z-index: 50;
            width: 100%;
        }
        
        .navbar-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .logo {
            display: flex;
            align-items: left;
            gap: 0.5rem;
            color: var(--text-light);
            font-weight: 600;   
            font-size: 1.25rem;
            text-decoration: none;
        }
        
        .logo-icon {
            width: 32px;
            height: 32px;
        }
        
        .nav-links {
            display: flex;
            gap: 1.5rem;
            
        }
        
        .nav-link {
            position: relative;
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 0;
            transition: all 0.3s ease;
            
        }
        
        .nav-link:hover {
            color: rgba(6, 41, 240, 0.79);
        }
        
        .nav-link::after {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--text-light);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-link.active {
            font-weight: 600;
        }
        
        .nav-link.active::after {
            width: 100%;
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
        }
        
        .hamburger span {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            background-color: var(--text-light);
            transition: all 0.3s ease-in-out;
        }
        
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
            
            .nav-links {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background-color: var(--primary-hover);
                width: 100%;
                padding: 1rem 0;
                text-align: center;
                transition: 0.3s;
                gap: 1rem;
            }
            
            .nav-links.active {
                left: 0;
            }
        }
    </style>
</head>
<body>
    
    <nav>
        <div class="navbar-container">
            <a href="#" class="logo">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/3cebb534-22bb-489d-97c7-d98eb7aef93c.png" alt="Logo perusahaan berupa huruf N dengan gradasi biru" class="logo-icon">
                Anime Luck
            </a>
            
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                
            </div>
            
            <ul class="nav-links">
                <li><a href="beranda.php" class="nav-link active">Beranda</a></li>
                <li><a href="karakter.php" class="nav-link">Karakter</a></li>
                <li><a href="kontak.php" class="nav-link">Kontak</a></li>
                <li><a href="tentang.php" class="nav-link">Tentang</a></li>
                <li><a href="pendaftaran.php" class="nav-link">pendaftaran</a></li>
            </ul>
        </div>
    </nav>
    
</body>
</html>
