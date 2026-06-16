<x-app>

    <x-slot:title> {{ $title }}</x-slot:title>
    @session('error')
        <div class="alert alert-danger">
            {{ $value }}
        </div>
    @endsession
    <form method="POST" action="{{ route('organization.update', $organization) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @else is-valid @enderror" id="name"
                name="name" value="{{ old('name', $organization->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="leader_name" class="form-label">Leader</label>
            <input type="text" class="form-control @error('leader_name') is-invalid @else is-valid @enderror"
                id="leader_name" name="leader_name"
                value="{{ old('leader_name', $organization->organizationLeader?->leader_name) }}">
            @error('leader_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <a href="{{ route('organization.index') }}"class="btn btn-warning me-1">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
