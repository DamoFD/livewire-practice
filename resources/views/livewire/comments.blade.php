<section class="w-2/3 mt-20">
    <h1 class="text-3xl font-extrabold">Comments</h1>
    <div class="mt-20 w-full">
        <form class="flex w-full" wire:submit.prevent="addComment">
            <input wire:model.debounce.500ms="newComment" class="w-5/6 mr-4 border-2 border-gray-200 rounded-lg text-lg" type="text" />
            <button class="py-2 px-6 bg-blue-600 rounded-lg text-white" type="submit">Add</button>
        </form>
        @error('newComment')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        @foreach ($comments as $comment)
        <div class="mt-10 border-2 border-gray-200 rounded-lg">
            <div class="flex m-2 items-center">
                <h2 class="text-lg font-extrabold">{{$comment->creator->name}}</h2>
                <p class="ml-4 text-gray-400">{{$comment->created_at->diffForHumans()}}</p>
            </div>
            <p class="mx-2 pb-2">{{$comment->body}}</p>
        </div>
            @endforeach
    </div>
</section>
