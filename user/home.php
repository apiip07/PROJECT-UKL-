<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="head">
        <ul class="navmenu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="projects.php">Project</a></li>
       </ul>

       <div class="nav-icon" onclick="redirWhatsapp()">
           <a href="#" class="btn">Contact</a>
           <div class="bx bx-menu" id="menu-icon"></div>
       </div>
    </header>
<div class="wrapper1" style="font-family: sans-serif;">
    <section class="home">
        <img src="assets/natural resources.avif" alt="">
        <div class="kolom">
            <h2 style="font-family: 'comic sans ms'; font-weight: 800; font-size: 45px; margin-bottom: 20px; color: #1a2238; width: 100%; line-height: 50px;">Lingkungan Dan Sumber Daya Alam</h2>
            <p>Lingkungan merujuk pada semua komponen fisik, biologis, dan sosial yang ada di sekitar kita. Ini mencakup segala sesuatu mulai dari udara, air, tanah, tumbuhan, hewan, manusia, hingga elemen non-hidup seperti batu, mineral, dan cuaca. Lingkungan juga melibatkan interaksi kompleks antara semua komponen ini.</p>
            <p>Sumber daya alam adalah bahan atau komponen lingkungan yang berguna bagi manusia. Mereka dapat dibagi menjadi dua kategori: sumber daya terbarukan dan sumber daya tak terbarukan. Sumber daya terbarukan adalah sumber daya alam yang dapat diperbaharui atau diperbarui dalam periode waktu tertentu, seperti energi matahari, angin, air, dan hutan. Sumber daya tak terbarukan, di sisi lain, adalah sumber daya yang ada dalam jumlah terbatas dan tidak dapat diperbarui dalam waktu yang singkat, seperti minyak bumi, gas alam, dan logam.</p>
            <p><a href="projects.php" class="tbl-pink">Learn More</a></p>
        </div>
    </section>

    <script>
        function redirWhatsapp() {
            window.location.href = "https://wa.me/6281515892907"
        }

    </script>
</div>
<footer>
    <p class="title">&copy; rapip website</p>
</footer>
</body>
</html>