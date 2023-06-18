<x-app-layout>
    <div class="p-10 grow bg-white {{ $books->count() < 3 ? 'h-screen' : '' }}">
        <div class="flex items-center justify-between mb-5">
            <h1 class="font-bold text-5xl">{{ __('Manage Book') }}</h1>
            <a href="{{ route('book.create') }}" class="bg-dark-magenta text-yellow font-medium py-2 px-4 rounded-lg mr-5 hover:bg-dark-magenta/80 transition-all">
                {{ __('Add Book') }}
            </a>
        </div>

        <div class="grid grid-cols-2 gap-10 w-full">
            @foreach($books as $book)
            <div class="flex border border-dark-magenta rounded-xl p-7 gap-10">
                <div class="w-1/3">
                    <img src="{{ asset('storage/'.$book->image) }}" alt="{{ $book->image }}" class="object-cover rounded-md">
                </div>
                <div class="flex flex-col justify-between py-1">
                    <div>
                        <h2 class="font-bold text-lg mb-2">{{ $book->title }}</h2>
                        <h3 class="font-medium">{{ $book->author }}</h3>
                        <p>{{ $book->genre }}</p>
                    </div>
                    <div class="flex w-full">
                        <a href="{{ route('books.edit', ['book' => $book->id]) }}" class="font-medium px-2 text-blue-500 hover:text-blue-900 transition-all">
                            {{ __('Edit') }}
                        </a>
                        <form method="post" action="{{ route('books.destroy', ['book' => $book->id]) }}">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="{{ __('Delete') }}" class="font-medium px-2 text-red cursor-pointer hover:text-red/50 transition-all">
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>