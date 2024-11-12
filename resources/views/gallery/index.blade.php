@extends('auth.layouts')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Dashboard</span>
                    <!-- Tombol untuk menambah gambar -->
                    <a href="{{ route('gallery.create') }}" class="btn btn-primary btn-sm">Tambah Gambar</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if (count($galleries) > 0)
                            @foreach ($galleries as $gallery)
                                <div class="col-sm-2">
                                    <div>
                                        <a class="example-image-link" href="{{ asset('storage/photosnew/' . $gallery->picture) }}"
                                            data-lightbox="roadtrip" data-title="{{ $gallery->description }}">
                                            <img class="example-image img-fluid mb-2"
                                                src="{{ asset('storage/photosnew/' . $gallery->picture) }}"
                                                alt="image-1" />
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h3>Tidak ada data.</h3>
                        @endif
                        <div class="d-flex">
                            {{ $galleries->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ '/admin/buku' }}" class="btn btn-secondary">Kembali</a>
@endsection
