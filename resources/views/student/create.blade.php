<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('student.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">nim</label>
            <input type="number" class="form-control @error('nim') is-invalid @enderror" id="nim"
                name="nim"value="{{ old('nim') }}">
            @error('nim')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control @error('gender') is-invalid @else is-valid @enderror"
                id="nim" name="gender" value="{{ old('gender') }}">
            @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <a href="{{ route('student.index') }}" class="btn btn-warning">cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</x-app>
