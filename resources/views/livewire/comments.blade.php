<section class="w-2/3 mt-20">
    <h1 class="text-3xl font-extrabold">Comments</h1>
    @if (session()->has('message'))
        <p class="bg-green-100 border-l-4 border-green-500 text-green-600">
            {{ session('message') }}
        </p>
    @endif
    <div class="mt-20 w-full">

        @if ($image)
            <img src="{{$image}}" class="max-w-full max-h-44 object-cover" alt="uploaded image" />
        @endif
        <input class="mt-2" type="file" wire:change="$emit('fileChosen')" id="image" />

        <form class="flex w-full mt-2" wire:submit.prevent="addComment">
            <input wire:model.debounce.500ms="newComment" class="w-5/6 mr-4 border-2 border-gray-200 rounded-lg text-lg" type="text" />
            <button class="py-2 px-6 bg-blue-600 rounded-lg text-white" type="submit">Add</button>
        </form>

        @error('newComment')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        @foreach ($comments as $comment)
        <div class="mt-10 border-2 border-gray-200 rounded-lg">
            <div class="flex m-2 items-center justify-between">
                <div class="flex">
                    <h2 class="text-lg font-extrabold">{{$comment->creator->name}}</h2>
                    <p class="ml-4 text-gray-400">{{$comment->created_at->diffForHumans()}}</p>
                </div>
                <i wire:click="remove({{$comment->id}})" class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer"></i>
            </div>
            <p class="mx-2 pb-2">{{$comment->body}}</p>
        </div>
        @endforeach
        {{$comments->links('pagination-links')}}
    </div>
</section>

<script>
    window.livewire.on('fileChosen', () => {
        let inputField = document.getElementById('image')
        let file = inputField.files[0]
        let reader = new FileReader()
        reader.onloadend = () => {
            window.livewire.emit('fileUpload', reader.result)
        }
        reader.readAsDataURL(file)
    })
</script>
