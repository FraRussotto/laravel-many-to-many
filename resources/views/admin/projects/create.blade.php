@extends('layouts.admin')

@section('content')
    <h3 class="text-center mb-5">Inserimento nuovo prodotto</h3>
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <p>Uno o più campi non sono compilati correttamente.</p>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    aria-describedby="title" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="date" name="date"
                    aria-describedby="title" value="{{ old('date') }}">
                @error('date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control @error('name') is-invalid @enderror" placeholder="Descrizione prodotto" id="description"
                    name="description" style="height: 200px">{{ old('description') }}</textarea>
                <label for="floatingTextarea2">Description</label>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="link" name="link"
                    aria-describedby="title" value="{{ old('link') }}">
                @error('link')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="text-center">

                <button type="submit" class="btn btn-primary">Crea</button>
                <button type="reset" class="btn btn-warning">Reset</button>

            </div>
        </form>
    </div>
@endsection
