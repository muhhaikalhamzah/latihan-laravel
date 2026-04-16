<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('student.create') }}" role="button">create</a>

    <ul class="list-group">
        @foreach ($students as $student)
            <li class="list-group-item">
                {{ $loop->iteration }}.{{ $student->nim }}--{{ $student->name }}
                <a class="btn btn-warning btn-sm" href="{{ route('student.edit', $student) }}" role="button">edit</a>
                <form action="{{ route('student.destroy', $student) }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf

                    <button type="submit"
                        class="btn btn-danger btn-sm"onclick="return confirm('anda yakin')">delete</button>

                </form>


            </li>
        @endforeach
    </ul>
</x-app>
