<x-layout>

    <h1>Index</h1>

    <div class="note-container single-note">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
    </div>

    <div class="notes">

        @foreach ($notes as $note)
        <div class="note">
            <div class="note-body">
                {{ Str::words($note->note, 30) }}
            </div>
            <div class="note-buttons">
                <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                <button class="note-delete-button">Delete</button>
            </div>
        </div>
        @endforeach

    </div>

</x-layout>
