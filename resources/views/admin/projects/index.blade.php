@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Projects</h2>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">+ Tambah Project</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->category->name ?? 'Tidak ada kategori' }}</td>
                <td>
                    {{-- Batasi panjang teks deskripsi biar tabel tidak kepanjangan --}}
                    {{ Str::limit($project->description, 50, '...') }}
                </td>
                <td>
                    @if($project->image)
                        <img src="{{ asset('storage/projects/' . $project->image) }}" width="80">
                    @else
                        <span class="text-muted">No Image</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center">Belum ada project</td></tr>
        @endforelse
    </tbody>
</table>


    {{ $projects->links() }}
@endsection
