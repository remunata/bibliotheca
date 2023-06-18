<x-app-layout>
    <div class="p-10 grow">
        <h1 class="font-bold text-5xl text-white mb-10 block">{{ __('Dashboard') }}</h1>

        <div class="flex justify-between text-white bg-slight-magenta p-8 rounded-xl">
            <div class="px-5 flex flex-col items-start gap-5">
                <h1 class="font-bold text-4xl">{{ __('Welcome, Admin!') }}</h1>
                <div class="bg-dark-magenta rounded-xl flex flex-col items-center px-16 py-8">
                    <h2 class="text-xl font-medium">{{ __('Total Books') }}</h2>
                    <p class="text-4xl font-bold">{{ $books->count() }}</p>
                </div>
            </div>
            <div class="mr-20 flex items-center justify-center">
                <img src="{{ asset('/images/dashboard-icon.svg') }}" alt="Dashboard Icon" class="object-cover w-64">
            </div>
        </div>

        <div class="bg-white rounded-xl p-8 mt-10">
            <div class="flex items-center justify-between border-b border-b-abu pb-6">
                <h3 class="font-bold text-2xl">{{ __('Books') }}</h3>
                <div>
                    <a href="{{ route('book.create') }}" class="bg-dark-magenta text-white font-medium py-2 px-4 rounded-lg mr-5 hover:bg-dark-magenta/80 transition-all">{{ __('Add Book') }}</a>
                    <a href="{{ route('book.manage') }}" class="text-abu hover:text-gray-900 transition-all">{{ __('Manage') }}</a>
                </div>
            </div>
            <table class="table-auto w-full mt-6 mx-2 border-separate border-spacing-4">
                <thead class="text-left">
                    <tr>
                        <th>No</th>
                        <th>Book Title</th>
                        <th>Book ID</th>
                        <th>Genre</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-abu">
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->genre }}</td>
                            <td>{{ $book->stock }}</td>
                            <td><a href="{{ route('books.show', ['book' => $book->id]) }}" class="bg-dark-magenta text-white font-medium py-1 px-2 rounded-lg hover:bg-dark-magenta/80 transition-all">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
