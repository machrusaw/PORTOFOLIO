@extends('layout')

@section('content')
<div class="container my-5" id="allprojects" style="padding-top: 50px;">
    <h2 class="text-center fw-bold mb-3">All Projects</h2>
    <p class="text-center mb-5 text-muted">
        Semua project yang telah saya kerjakan. Gunakan filter untuk melihat berdasarkan kategori.
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

{{-- Script Filter --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.category-filter');
    const projectCards = document.querySelectorAll('.project-card');
    const noProjectMsg = document.getElementById('no-project-msg');

    function filterProjects(selected) {
        let found = false;
        projectCards.forEach(card => {
            const category = card.getAttribute('data-category');
            if (selected === 'all' || category === selected) {
                card.style.display = 'block';
                found = true;
            } else {
                card.style.display = 'none';
            }
        });
        noProjectMsg.classList.toggle('d-none', found);
    }

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
@endsection
