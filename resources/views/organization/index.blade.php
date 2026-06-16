<x-app>

    <x-slot:title>{{ $title }}</x-slot:title>
    @session('success')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession
    <a class="btn btn-primary mb-4" href="{{ route('organization.create') }}">Create</a>
    <ul class="list-group">
        @foreach ($organizations as $organization)
            <li class="list-group-item  ">
                {{ $loop->iteration }}. {{ $organization->organizationLeader?->leader_name }} --
                {{ $organization->name }}
                <form action="{{ route('organization.destroy', $organization) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <a href="{{ route('organization.edit', $organization) }}" class="btn btn-warning  ">Edit</a>
                    <button type="submit" class="btn btn-danger "
                        onclick="return confirm('Anda Yakin')">Delete</button>
                </form>
            </li>
        @endforeach

    </ul>
</x-app>
