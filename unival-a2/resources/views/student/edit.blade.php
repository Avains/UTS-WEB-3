@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- Menampilkan Nama Mahasiswa di Header -->
                <div class="card-header">
                    {{ __('Edit Student: ') . $student->name }}
                </div>

                <div class="card-body">
                    <!-- Form Edit Student -->
                    <form action="{{ route('student.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Method PUT digunakan untuk update -->

                        <!-- Input Nama -->
                        <div class="form-group mb-3">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                        </div>
                        
                        <!-- Input NIM -->
                        <div class="form-group mb-3">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ $student->nim }}" required>
                        </div>
                        
                        <!-- Input Kelas -->
                        <div class="form-group mb-3">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $student->kelas }}" required>
                        </div>

                        <!-- Tombol Submit dan Batal -->
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary me-2" onclick="return confirm('Data Berhasil diedit')">
                                {{ __('Update') }}
                            </button>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                {{ __('Batal') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
