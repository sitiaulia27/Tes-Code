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
                <form action="{{ route('score.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="club">Nama Club</label>
                            <select id="club" name="id" data-placeholder="club" class="custom-select w-100">
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="score">Hasil</label>
                            <select id="score" name="id" data-placeholder="club" class="custom-select w-100">
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
