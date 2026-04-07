<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <ul class="list-group">
        @foreach ($students as $student)
            <li class="list-group-item">{{ $loop->iteration }}.{{ $student->nim }}--{{ $student->name }}An item</li>
        @endforeach
    </ul>
</x-app>
