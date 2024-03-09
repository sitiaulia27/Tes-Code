@extends('index')

@section('title')
    {{ trans('Input Score') }}
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
                            <label for="kategori">Nama Kategori</label>
                            <select id="kategori" name="id" data-placeholder="kategori" class="custom-select w-100">
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}" {{ $edit->kategori->id == $kategori->id ? 'selected' : '' }}>
                                    {{ $kategori->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <select name="result" id="result">
                                <option value="win">Win</option>
                                <option value="draw">Draw</option>
                                <option value="lose">Lose</option>
                            </select>
                        </div>
                        <input type="submit" href="" value="Simpan" class="btn btn-success float-right">
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
