<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang</title>
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Raleway:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-gray-100 text-gray-800 font-poppins">
  <!-- Header -->
  <header class="bg-gradient-to-r from-[#00adef] to-[#0069A5] py-8 shadow-lg">
    <div class="container mx-auto flex justify-between items-center px-8">
      <h1 class="text-white font-raleway text-4xl tracking-wide">Selamat Datang</h1>
      <nav class="space-x-6">
      <li><a href="#about" class="hover:text-gray-400">About</a></li>
                    <li><a href="#portfolio" class="hover:text-gray-400">Portofolio</a></li>
                    <li><a href="#contact" class="hover:text-gray-400">Contact</a></li>
                    <li><a href="{{ route('about')}}" class="hover:text-gray-400">about</a></li>
                    <li><a href="{{ route('login')}}" class="hover:text-gray-400">Login</a></li>  
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto py-12 px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- About Me Section -->
      <section class="bg-white p-10 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-500 hover:shadow-2xl relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-[#00adef] opacity-20"></div>
        <h2 class="text-3xl font-bold mb-4 text-[#00adef] relative">About Me</h2>
        <p class="leading-relaxed text-gray-700 relative z-10">Hello, Nama Saya Almasah Fahri Zain, lahir pada 1 Desember 2007. Saya suka bermain voli, futsal, dan aktivitas lainnya yang melibatkan olahraga. Saya juga tertarik dalam pengembangan diri melalui pendidikan dan hobi.</p>
      </section>

      <!-- Alamat Rumah Section -->
      <section class="bg-white p-10 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-500 hover:shadow-2xl relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-[#00adef] opacity-20"></div>
        <h2 class="text-3xl font-bold mb-4 text-[#00adef] relative">Alamat Rumah</h2>
        <p class="leading-relaxed text-gray-700 relative z-10">Rumah saya berada di Wonosobo, daerah yang sejuk dan penuh dengan keindahan alam.</p>
      </section>

      <!-- Hobi Section -->
      <section class="bg-white p-10 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-500 hover:shadow-2xl relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-[#00adef] opacity-20"></div>
        <h2 class="text-3xl font-bold mb-4 text-[#00adef] relative">Hobi</h2>
        <p class="leading-relaxed text-gray-700 relative z-10">Saya suka bermain bola, terutama futsal, dan voli.</p>
      </section>

      <!-- Sekolah Section -->
      <section class="bg-white p-10 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-500 hover:shadow-2xl relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-[#00adef] opacity-20"></div>
        <h2 class="text-3xl font-bold mb-4 text-[#00adef] relative">Sekolah</h2>
        <p class="leading-relaxed text-gray-700 relative z-10">Saya bersekolah di SMK Telkom Purwokerto, tempat saya belajar dan mengembangkan keterampilan di bidang teknologi.</p>
      </section>

      <!-- Contact Section -->
      <section class="col-span-1 md:col-span-2 bg-white p-10 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-500 hover:shadow-2xl relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-[#00adef] opacity-20"></div>
        <h2 class="text-3xl font-bold mb-4 text-[#00adef] relative">Contact Saya</h2>
        <p class="leading-relaxed text-gray-700 relative z-10">Feel free to reach out to me at: <a href="mailto:your-email@example.com" class="text-[#00adef] hover:text-[#0092c6] transition duration-300">your-email@example.com</a></p>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto text-center">
      <p class="font-light">&copy; 2024 My Portfolio. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
