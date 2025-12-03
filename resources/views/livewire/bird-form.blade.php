<div>
    <form wire:submit="submit">

        <div>
            <label for="bird_count">Bird Count</label>
            <input wire:model="bird_count" type="number">
        </div>

        <div>
            <label for="notes">Notes</label>
            <textarea wire:model="notes"></textarea>
        </div>

        <button>Add a New Bird Count Entry</button>
    </form>

    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <div>
        @foreach($entries as $entry)
            <div wire:key=" {{$entry->id}} wire:transition">
                <div>
                    {{ $entry->bird_count }}
                </div>
                <div>
                    {{$entry->notes}}
                </div>
                <button wire:click="delete({{ $entry->id }})">Delete</button>
            </div>
        @endforeach
    </div>
</div>
