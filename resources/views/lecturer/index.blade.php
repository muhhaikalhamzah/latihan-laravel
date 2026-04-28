<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('lecturer.create') }}" role="button">create</a>

    <ul class="list-group">
        @foreach ($lecturers as $lecturer)
            <li class="list-group-item">
                {{ $loop->iteration }}.{{ $lecturer->name }} -- {{ $lecturer->department->name }}
                <a class="btn btn-warning btn-sm" href="{{ route('lecturer.edit', $lecturer) }}" role="button">edit</a>
                <form action="{{ route('lecturer.destroy', $lecturer) }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf

                    <button type="submit"
                        class="btn btn-danger btn-sm"onclick="return confirm('anda yakin')">delete</button>

                </form>


            </li>
        @endforeach
    </ul>
</x-app>
