<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Marketing</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/profil.png') }}" alt="logo-branch">
            <h2>SusiTuna</h2>
        </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Contact</a></li>
                    <button>Order Now</button>
                </ul>
            </nav>
    </header>
    <main>
        <section class="hero-section">
            <div class="hero-text">
                <h1>Hush Modern Restaurant</h1>
                <p>
                    Hush Modern Restaurant menghadirkan suasana modern yang elegan dan tenang, cocok untuk menikmati momen istimewa di tengah kesibukan kota. Desain minimalis yang hangat menciptakan pengalaman bersantap yang nyaman dan berkelas.
                    Setiap hidangan disajikan dengan bahan pilihan dan sentuhan kreativitas modern, menghasilkan cita rasa yang khas dan berkesan. Di Hush, setiap kunjungan terasa istimewa.
                </p>
                <button>Order Now</button>
            </div>
        
            <figure class="hero-image">
                <img src="{{ asset('images/sushi_mid.png') }}" alt="hero image">
            </figure>
        </section>
        <section id="ourbestcollections">
            <div class="kolom">
                <h2>Our Best Collections</h2>
                <p>
                    Dari resep klasik hingga kreasi modern, temukan rasa yang paling sesuai dengan selera Anda.
                </p>
            </div>
            <div class="card-list">
                <div class="card-collections">
                    <img src="{{ asset('images/signature_rolls.png') }}" alt="signature-rolls" style="width:100%; height:250px; object-fit:cover; border-radius:8px;">
                    <h3>Signature rolls</h3>
                    <h4>Varian Standar : Rp. 45.000 - Rp 75.000 per roll.</h4>
                    <h4>Varian Premium : Rp. 85.000 - Rp 150.000 per roll.</h4>
                    <p>Perpaduan rasa unik dan tekstur kontemporer yang menjadi favorit pelanggan tetap kami.</p>
                </div>
                <div class="card-collections">
                    <img src="{{ asset('images/sushi_product5.jpg') }}" alt="signature-rolls" style="width:100%; height:250px; object-fit:cover; border-radius:8px;">
                    
                    <h3>Authentic Nigiri</h3>
                    <h4>Varian Standar : Rp. 9.000 - Rp 15.000 per potong.</h4>
                    <h4>Varian Premium : Rp. 18.000 - Rp 25.000 per potong.</h4>
                    <p>Keharmonisan sempurna antara kesegaran topping dan nasi yang di lakukan dengan tangan.</p>
                </div><div class="card-collections">
                    <img src="{{ asset('images/sushi_product4.jpg') }}" alt="signature-rolls" style="width:100%; height:250px; object-fit:cover; border-radius:8px;">
                    
                    <h3>Raw Sashimi</h3>
                    <h4>Porsi Personal/kecil : Rp 35.000 - Rp 50.000.</h4>
                    <h4>Porsi Shading/Medium : Rp 75.000 - Rp 120.000.</h4>
                    <p>Potongan ikan murni yang lembut dan manis, menonjolkan kualitas bahan tanpa tambahan.</p>
                </div><div class="card-collections">
                    <img src="{{ asset('images/sushi_product1.jpg') }}" alt="signature-rolls" style="width:100%; height:250px; object-fit:cover; border-radius:8px;">
                    
                    <h3>Warm Sides</h3>
                    <h4>Edamame Rebus/Garam : Rp 15.000 - Rp 22.000.</h4>
                    <h4>Gyoza Isi Ayam : Rp 25.000 - Rp 35.000 (6 pcs).</h4>
                    
                    <p>Lengkapi santapan Anda dengan aneka hidangan pendamping mulai dari Ramen hingga Gyoza</p>
                </div>
            </div>

            

        <section class="hero-section-2">
            <head class="text-hero-1">
                <h1>Cudur Home</h1>
                <p>teesfs</p>
            </head>
            <section class="container-card">
                <div class="card">
                    <head></head>
                </div>
            </section>

        </section>
    </main>
</body>
</html