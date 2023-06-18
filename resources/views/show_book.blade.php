<x-app-layout>
    <div class="p-10 grow bg-white">
        <h1 class="font-bold text-5xl mb-10 block">{{ __('Detail Buku') }}</h1>

        <div class="flex flex-col bg-slight-magenta p-10 rounded-xl gap-8">
            <div class="flex items-start gap-10">
                <div class="w-1/5">
                    <img src="{{ asset('storage/'.$book->image) }}" alt="{{ $book->image }}" class="object-cover rounded-md">
                </div>
                <div class="text-xl mt-1 flex flex-col gap-5">
                    <div>
                        <span class="font-bold">{{ __('Book ID: ') }}</span>
                        <span>{{ $book->book_id }}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{ __('Title: ') }}</span>
                        <span>{{ $book->title }}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{ __('Author: ') }}</span>
                        <span>{{ $book->author }}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{ __('Genre: ') }}</span>
                        <span>{{ $book->genre }}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{ __('Publish Year: ') }}</span>
                        <span>{{ $book->year }}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{ __('Category: ') }}</span>
                        <span>{{ $book->category }}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{ __('Stock: ') }}</span>
                        <span>{{ $book->stock }}</span>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="block text-2xl font-bold">{{ __('Synopsis:') }}</h2>
                <p class="w-full whitespace-pre-line">{{ $book->synopsis }}</p>
            </div>
        </div>
    </div>
</x-app-layout>