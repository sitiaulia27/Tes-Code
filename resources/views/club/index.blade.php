@extends('index')

@section('title')
    {{ trans('Klub') }}
@endsection


@section('content')
<section class="section">
<div class="section-header">
            <h1>Klub</h1>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <a href="{{ route ('index') }}" method="POST" data-bs-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-5">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th style="width:560px">Nama</th>
                                <th style="width:560px">Kota</th>
                                <th style="width:560px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $club)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $club->name }}</td>
                                <td>{{ $club->kota }}</td>
                                <td>
                                <form action="{{ route('club.destroy', $club->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
