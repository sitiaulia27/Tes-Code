@extends('index')

@section('title')
    {{ trans('Input Club') }}
@endsection

@section('content')
<section class="section">
        <div class="section-header">
            <h1>Tambah Klub</h1>
        </div>
        <div class="card">
            <div class="col-md-7">
                <div class="card-body">
                <form action="{{ route('club.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Klub</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required autofocus value="{{old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" id="kota" required autofocus value="{{old('kota') }}">
                        </div>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
