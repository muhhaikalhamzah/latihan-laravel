<x-app>

    <x-slot:title>{{ $title }}</x-slot:title>
    @session('success')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession
    <a class="btn btn-primary mb-4" href="{{ route('student.create') }}">Create</a>
    <ul class="list-group">
        @foreach ($students as $student)
            <li class="list-group-item  ">
                {{ $loop->iteration }}. {{ $student->nim }} -- {{ $student->name }} -- {{ $student->gender }}
                <form action="{{ route('student.restore', $student) }}" method="POST" class="d-inline">
                    @method('PUT')
                    @csrf

                    <button type="submit" class="btn btn-warning "
                        onclick="return confirm('Anda Yakin Ingin Mengembalikan Data')">Restore</button>
                </form>
                <form action="{{ route('student.forcDelete', $student) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger "
                        onclick="return confirm('Anda Yakin Menghapus Permanent')">Force Delete</button>
                </form>
            </li>
        @endforeach

    </ul>
</x-app>
