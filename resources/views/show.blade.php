
@extends('layout')


@section('content')



<div class="container my-5" style="padding-top: 50px;">

    {{-- Tombol Kembali --}}
    <a href="{{ url()->previous() }}" class="btn-back mb-4">← Back</a>

    {{-- Konten Utama --}}
    <div class="content-utama">
        {{-- Gambar Project --}}
        <div class="w-100 mb-4 text-center">
        <img src="{{ asset('storage/projects/' . $project->image) }}" 
    alt="{{ $project->title }}" 
    class="img-fluid"
    style="max-height: 600px; object-fit: contain; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.15);">

    </div>

        {{-- Kategori --}}
        <p class="text-muted mb-2">
            <i class="bi bi-folder2-open me-2"></i>
            {{ $project->category->name ?? 'Tanpa kategori' }}
        </p>

        {{-- Judul --}}
        <h1 class="fw-bold mb-4">{{ $project->title }}</h1>

        {{-- Deskripsi --}}
        <div class="project-description" style="line-height: 1.7;">
    {!! $project->description !!}
</div>

    </div>

    {{-- More Projects --}}
    <div class="more-project">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">More Projects</h2>
            <div class="row justify-content-center">
                @forelse ($moreProjects as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-0 h-100">
                            <img src="{{ asset('storage/projects/' . $item->image) }}" 
                                 class="card-img-top" 
                                 alt="{{ $item->title }}">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                                <p class="card-text text-muted small">
                                    {{ $item->category->name ?? 'Tidak ada kategori' }}
                                </p>
                                <a href="{{ route('projects.show', $item->id) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">Tidak ada project lain.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
