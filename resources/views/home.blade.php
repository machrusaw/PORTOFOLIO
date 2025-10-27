@extends('layout')

@section('content')

<div class="container hero-section">
    {{-- Hero --}}
    <div class="row align-items-center mb-5">
        {{-- Text Side --}}
        <div class="col-md-6 mb-4">
            <p class="fw-semibold text-uppercase hi-text mb-2">Hi, I am</p>
            <h4 class="fw-bold" style="color: #1c57d6;">Muhamad Machrus Ali Wahyudi</h4>
            <h1 class="fw-bold display-4 mb-3">Programmer<br>Web Developer</h1>
            <p class="mb-4" style="line-height: 1.8;">
                Saya adalah <b>Fresh Graduate</b> dari Universitas Trunojoyo Madura, Program Studi <b>S1 Sistem Informasi</b>, dengan predikat <b>Cumlaude (IPK 3.83)</b>. 
                Saya memiliki minat dan keahlian dalam pengembangan <b>front-end</b> dan <b>UI/UX</b>, termasuk pembuatan website interaktif dan responsif menggunakan <b>HTML, CSS, JavaScript, PHP,</b>  
                serta memanfaatkan <b>Laravel dan CodeIgniter (CI)</b> untuk sisi <b>backend</b>.
                Selama perkuliahan dan proyek pribadi, saya telah mengembangkan berbagai proyek web, mulai dari portfolio, aplikasi sederhana, hingga website interaktif. 
                Saya terbiasa berkolaborasi dalam tim, memiliki kemampuan pemecahan masalah, cepat beradaptasi dengan teknologi baru, dan berfokus pada pengalaman pengguna yang optimal. 
                Saat ini, saya mencari kesempatan untuk berkontribusi sebagai <b>Front-End & Back-End Developer</b>, membawa inovasi desain dan pengalaman pengguna yang maksimal.
            </p>
            <a href="#contact" class="btn btn-primary btn-lg px-4">Hire Me</a>
        </div>

        {{-- Image Side --}}
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/pf1.png') }}" 
                 alt="Profile" 
                 class="hero-img mb-3">
            
            {{-- Social Icons --}}
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/Machrusaw/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/Machrus37340442"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/machrusaw_"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/machrusaw/"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    {{-- About Me --}}
    <div class="row align-items-center mb-5" id="about">
        {{-- Image --}}
        <div class="col-md-6 text-center mb-4">
            <img src="{{ asset('images/pf1.png') }}" alt="About Image" class="about-img shadow-lg">
        </div>

        {{-- Text & Skills --}}
        <div class="col-md-6">
            <h2 class="fw-bold mb-3">About Me</h2>
            <p class="mb-4">
                Saya adalah seorang <strong>Front-End Developer</strong> dengan fokus pada pembuatan tampilan website yang responsif,
                clean, dan modern. Selain itu, saya memiliki pengalaman di bidang UI/UX Design serta pengembangan aplikasi berbasis web.
            </p>

            {{-- Skills Progress --}}
            <p class="mb-1"><strong>UX</strong></p>
<div class="progress mb-3">
    <div class="progress-bar custom-progress" style="width: 85%"> </div>
</div>

<p class="mb-1"><strong>Website Design</strong></p>
<div class="progress mb-3">
    <div class="progress-bar custom-progress" style="width: 90%"> </div>
</div>

<p class="mb-1"><strong>App Design</strong></p>
<div class="progress mb-3">
    <div class="progress-bar custom-progress" style="width: 80%"> </div>
</div>

<p class="mb-1"><strong>Graphic Design</strong></p>
<div class="progress mb-3">
    <div class="progress-bar custom-progress" style="width: 95%"> </div>
</div>

        </div>
    </div>

</div>

{{-- Services --}}
<div class="container my-5" id="services">
    <h2 class="text-center fw-bold mb-3">Services</h2>
    <p class="text-center mb-5">
        Lorem ipsum dolor sit amet consectetur. Tristique amet sed massa nibh lectus netus in. 
        Aliquet donec morbi convallis pretium
    </p>

    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        <div class="col">
            <div class="card h-100 text-center p-3 border-0 shadow-sm rounded-3" style="background-color: #e6e6e6;">
                <div class="mb-2">
                    <img src="{{ asset('images/1-icon.png') }}" width="200" alt="Web UI Icon">
                </div>
                <h5 class="fw-bold">Web UI Development</h5>
                <p class="mb-0">Pembuatan tampilan website yang responsif dan modern.</p>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center p-3 border-0 shadow-sm rounded-3" style="background-color: #e6e6e6;">
                <div class="mb-2">
                    <img src="{{ asset('images/2-icon.png') }}" width="200" alt="API Icon">
                </div>
                <h5 class="fw-bold">API Integration</h5>
                <p class="mb-0">Menghubungkan front-end dengan backend.</p>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center p-3 border-0 shadow-sm rounded-3" style="background-color: #e6e6e6;">
                <div class="mb-2">
                    <img src="{{ asset('images/3-icon.png') }}" width="200" alt="Performance Icon">
                </div>
                <h5 class="fw-bold">Performance Optimization</h5>
                <p class="mb-0">Optimasi kecepatan, ukuran file, dan SEO on-page.</p>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center p-3 border-0 shadow-sm rounded-3" style="background-color: #e6e6e6;">
                <div class="mb-2">
                    <img src="{{ asset('images/4-icon.png') }}" width="200" alt="Maintenance Icon">
                </div>
                <h5 class="fw-bold">Website Maintenance</h5>
                <p class="mb-0">Update konten, perbaikan bug, dan pengembangan fitur baru.</p>
            </div>
        </div>
    </div>
</div>
{{-- My Projects --}}
<div class="container my-5" id="projects">
    <h2 class="text-center fw-bold mb-3">My Projects</h2>
    <p class="text-center mb-5">
        Berikut beberapa project yang telah saya kerjakan. Klik kategori untuk memfilter project sesuai minat.
    </p>

    {{-- Filter Buttons --}}
    <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
        <button class="btn btn-outline-primary category-filter active" data-category="all">Semua</button>
        @foreach($categories as $category)
            <button class="btn btn-outline-primary category-filter" data-category="{{ $category->id }}">
                {{ $category->name }}
            </button>
        @endforeach
    </div>

        {{-- Project Cards --}}
    <div id="project-list" class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($projects as $project)
            <div class="col project-card" data-category="{{ $project->category_id }}">
                <div class="card shadow-sm rounded-4 h-100 border-0 overflow-hidden project-hover d-flex flex-column">
                    @if($project->image)
                        <img src="{{ asset('storage/projects/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                    @else
                        <img src="{{ asset('images/no-image.png') }}" class="card-img-top" alt="No image">
                    @endif
                    <div class="card-body flex-grow-1">
                        <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                        <p class="card-text text-muted mb-1">{{ $project->category->name ?? 'Tidak ada kategori' }}</p>
                        @if($project->description)
                            <p class="card-text small text-truncate" title="{{ $project->description }}">{{ $project->description }}</p>
                        @endif
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-center mt-auto">
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-sm btn-primary px-4">View Project</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Belum ada project</p>
        @endforelse
    </div>

    <div id="no-project-msg" class="text-center text-muted mt-4 d-none">
        Belum ada project pada kategori ini
    </div>
</div>

    {{-- View All Button --}}
    <div class="text-center mt-5">
        <a href="{{ route('projects.all') }}" class="btn btn-lg btn-primary px-5">View All Projects</a>
    </div>
</div>

{{-- Add custom JS to toggle project category filter --}}

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.category-filter');
    const projectCards = document.querySelectorAll('.project-card');
    const noProjectMsg = document.getElementById('no-project-msg');

    function filterProjects(selected) {
        let found = false;
        let count = 0;

        projectCards.forEach(card => {
            const category = card.getAttribute('data-category');

            // Reset semua ke hidden dulu
            card.style.display = 'none';

            // Filter project sesuai kategori & batasi max 6
            if ((selected === 'all' || category === selected) && count < 6) {
                card.style.display = 'block';
                found = true;
                count++;
            }
        });

        // Tampilkan pesan kalau kosong
        noProjectMsg.classList.toggle('d-none', found);
    }

    // Default → tampilkan 6 project terbaru
    filterProjects('all');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const selected = this.getAttribute('data-category');
            filterProjects(selected);
        });
    });
});
</script>

{{-- Testimonials --}}
            <div class="container my-5" id="testimonials">
                <h2 class="text-center fw-bold mb-3">Testimonials</h2>

                <p class="text-center mb-5">
                    Berikut beberapa pengalaman dan pendapat klien yang telah bekerja sama dengan saya.
                </p>

                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner testimonial-carousel-inner">
                        <div class="carousel-item active testimonial-item">
                <div class="testimonial-card d-flex align-items-center">
                    <img src="{{ asset('images/testi1.png') }}" class="rounded-circle me-4" alt="Testimonial 1">
                    <div class="text-start">
                        <p class="testimonial-text">
                            Saya sangat puas dengan hasil project ini. Komunikasinya jelas dan hasilnya melebihi ekspektasi.
                        </p>
                        <h5>Aulia Rahman</h5>
                        <p class="testimonial-role">CEO, Kreatif Studio</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item testimonial-item">
                <div class="d-flex justify-content-center">
                    <div class="testimonial-card d-flex align-items-center">
                        <img src="{{ asset('images/testi2.png') }}" class="rounded-circle me-4" width="100" alt="Testimonial 2">
                        <div>
                            <p class="testimonial-text mb-2">
                                "Hasilnya luar biasa, kerja sama yang menyenangkan dan profesional."
                            </p>
                            <h5 class="mb-0">Rina Putri</h5>
                            <p class="testimonial-role mb-0">Founder, KreatifLab</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item testimonial-item">
                <div class="d-flex justify-content-center">
                    <div class="testimonial-card d-flex align-items-center">
                        <img src="{{ asset('images/testi3.png') }}" class="rounded-circle me-4" width="100" alt="Testimonial 3">
                        <div>
                            <p class="testimonial-text mb-2">
                                "Sangat profesional dan hasilnya sesuai dengan yang diharapkan."
                            </p>
                            <h5 class="mb-0">Fahmi Adi</h5>
                            <p class="testimonial-role mb-0">Manager, DesignPro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

{{-- Let's Contact Me --}}
<div class="container my-5" id="contact">
    <h2 class="text-center fw-bold mb-3">Let’s Contact Me</h2>
    <p class="text-center mb-5">
        Punya project menarik atau ingin bekerja sama? Kirim pesan Anda melalui form di bawah ini.
    </p>

    <div class="row justify-content-center align-items-center">
<div class="col-lg-6 mb-4">
    <div class="contact-card shadow-lg rounded-4 p-5">
        <h3 class="text-center fw-bold mb-4 gradient-text">Send Me a Message</h3>
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control modern-input" name="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control modern-input" name="email" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control modern-input" name="message" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <div class="d-grid mt-3">
                <button type="submit" class="btn btn-gradient btn-lg rounded-pill btn-submit">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>


        {{-- Contact Info --}}
        <div class="col-lg-5">
            <div class="contact-info p-4 p-md-5 rounded-4 shadow-lg bg-gradient-to-r from-primary to-purple text-white">
                <h4 class="fw-bold mb-4">Informasi Kontak</h4>
                <p class="mb-3"><i class="bi bi-envelope-fill me-3"></i> machrusaw99@gmail.com</p>
                <p class="mb-3"><i class="bi bi-telephone-fill me-3"></i> +62 895 6211 32215</p>
                <p class="mb-3"><i class="bi bi-geo-alt-fill me-3"></i> Kabupaten Lamongan, Jawa Timur, Indonesia</p>

                <h5 class="fw-semibold mt-4 mb-3">Follow Me</h5>
                <div class="d-flex gap-3">
                    <a href="https://www.facebook.com/Machrusaw/" class="text-white fs-4"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/Machrus37340442" class="text-white fs-4"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/machrusaw_" class="text-white fs-4"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/machrusaw/" class="text-white fs-4"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
        title: 'Selamat Datang!',
        html: 'Website ini akan terus di-update dan masih dalam proses pengerjaan.<br>Mohon maaf apabila masih ada kekurangan dan bug 🙏',
        icon: 'info',
        confirmButtonText: 'Oke, Mengerti',
        confirmButtonColor: '#1c57d6',
        background: '#fff',
        color: '#333',
        allowOutsideClick: false,
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    });
});
</script>



@endsection
