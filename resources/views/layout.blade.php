<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Link to external CSS file -->
    <link href="{{ asset('css/nav-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Loading Screen -->
<div id="loading-screen">
  <svg viewBox="0 0 200 100" width="200" height="100">
    <!-- Huruf M dengan dua lengkungan sempurna -->
    <path class="path-m" d="M10,80 
                             C40,20 60,20 100,80 
                             C140,20 160,20 190,80" />
  </svg>
</div>


    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo machrus.png') }}" alt="" style="height: 60px; width: auto;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#about">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                    <li class="nav-item">
                        <a class="btn btn-primary">Download CV</a>
                    </li>
                    <li class="nav-item">
                        <button id="themeToggle" class="btn btn-outline-light ms-2">
                         <i class="fas fa-moon"></i>
                    </button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- Content Section --}}
    <div class="content">
        @yield('content')
    </div>

    <footer class="footer text-light pt-5">
    <div class="container">
        <div class="row">
            {{-- About Section --}}
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">About Me</h5>
                <p class="small">
                    Saya adalah seorang Web Developer & UI/UX Designer yang fokus pada pembuatan website modern,
                    clean, dan interaktif. Portofolio ini adalah wadah karya saya.
                </p>
            </div>

            {{-- Quick Links --}}
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="{{ url('/#about') }}" class="text-light text-decoration-none">About Me</a></li>
                    <li><a href="{{ url('/#services') }}" class="text-light text-decoration-none">Services</a></li>
                    <li><a href="{{ url('/#projects') }}" class="text-light text-decoration-none">Projects</a></li>
                    <li><a href="{{ url('/#contact') }}" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>

            {{-- Contact / Social Media --}}
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Contact</h5>
                <p class="small mb-1"><i class="fa-solid fa-envelope me-2"></i> machrusaw99@gmail.com.com</p>
                <p class="small"><i class="fa-solid fa-phone me-2"></i> +62 895 6211 32215</p>

                <div class="mt-3">
                    <a href="https://www.facebook.com/Machrusaw/" class="btn btn-outline-light btn-sm rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/Machrus37340442" class="btn btn-outline-light btn-sm rounded-circle me-2"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/machrusaw_" class="btn btn-outline-light btn-sm rounded-circle me-2"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/machrusaw/" class="btn btn-outline-light btn-sm rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <hr class="border-secondary">

        {{-- Copyright --}}
        <div class="text-center py-3">
            <p class="mb-0 small">&copy; {{ date('Y') }} <strong>Machrus Ali</strong>. All Rights Reserved.</p>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  const themeToggle = document.getElementById('themeToggle');
  const body = document.body;

  themeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    const icon = themeToggle.querySelector('i');

    if (body.classList.contains('dark-mode')) {
      icon.classList.remove('fa-moon');
      icon.classList.add('fa-sun');
    } else {
      icon.classList.remove('fa-sun');
      icon.classList.add('fa-moon');
    }
  });
</script>

<script>
window.addEventListener('load', function() {
    const loader = document.getElementById('loading-screen');
    loader.style.opacity = '0';
    loader.style.transition = 'opacity 20s ease-out';
    setTimeout(() => loader.style.display = 'none', 500);
});
</script>




<!-- Back to Top Button -->
<button id="backToTop" title="Back to Top">
  <i class="fas fa-arrow-up"></i>
</button>

<script>
const backToTopButton = document.getElementById("backToTop");

// Tampilkan tombol saat scroll lebih dari 100px
window.onscroll = function() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    backToTopButton.style.display = "block";
  } else {
    backToTopButton.style.display = "none";
  }
};

// Scroll ke atas saat tombol diklik
backToTopButton.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>

</body>
</html>
