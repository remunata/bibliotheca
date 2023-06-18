<x-app-layout>
    <div class="p-10 grow bg-white">
        <h1 class="font-bold text-5xl mb-10 block">{{ __('Add Book') }}</h1>

        <div class="border-2 border-dark-magenta rounded-2xl">
            <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data" class="flex">
                @csrf
                <div class="w-1/4 p-8 flex flex-col gap-5">
                    <div class="relative">
                        <label class="border-2 border-dashed border-dark-magenta cursor-pointer rounded-lg aspect-[3/4] flex flex-col justify-center ">
                            <input type="file" class="hidden" name="image" id="image" accept="image/*">
                            <div class="text-center font-medium text-dark-magenta text-2xl leading-10 hover:text-dark-magenta/80 transition-all">
                                Upload <br> Cover
                            </div>
                        </label>
                        <img id="img-prev" src="#" alt="Image Preview" class="w-full h-full object-cover absolute top-0 left-0 hidden">
                    </div>
                    <label for="image" id="img-btn-2" class="hidden py-1 text-center rounded-md bg-dark-magenta font-medium hover:bg-dark-magenta/80 hover:text-black/80 transition-all">
                        {{ __('Change Image') }}
                    </label>
                </div>
                <div class="grow p-8 flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="id" class="font-bold">{{ __('Book ID') }}</label>
                        <input type="text" name="id" id="id" class="w-full border rounded-2xl p-2">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="title" class="font-bold">{{ __('Title') }}</label>
                        <input type="text" name="title" id="title" class="w-full border rounded-2xl p-2">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="author" class="font-bold">{{ __('Author') }}</label>
                        <input type="text" name="author" id="author" class="w-full border rounded-2xl p-2">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="year" class="font-bold">{{ __('Publish Year') }}</label>
                        <input type="text" name="year" id="year" class="w-full border rounded-2xl p-2">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="genre" class="font-bold">{{ __('Genre') }}</label>
                        <input type="text" name="genre" id="genre" class="w-full border rounded-2xl p-2">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="category" class="font-bold">{{ __('Category') }}</label>
                        <input type="text" name="category" id="category" class="w-full border rounded-2xl p-2">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="stock" class="font-bold">{{ __('Stock') }}</label>
                        <input type="number" name="stock" id="stock" class="w-full border rounded-2xl p-2">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="synopsis" class="font-bold">{{ __('Synopsis') }}</label>
                        <textarea name="synopsis" id="synopsis" rows="5" class="w-full border rounded-2xl p-2"></textarea>
                    </div>
                    <div class="flex justify-end mt-5">
                        <a href="{{ route('dashboard') }}" class="bg-red text-white rounded-xl py-1.5 px-11 shadow-md hover:bg-red/80 transition-all">
                            {{ __('Cancel') }}
                        </a>
                        <input type="submit" value="{{ __('Add') }}" class="bg-red text-white rounded-xl py-1.5 px-14 ml-5 cursor-pointer shadow-md hover:bg-red/80 transition-all">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JS Links -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
        crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#img-prev').attr('src', e.target.result);
                    $('#img-prev').removeClass('hidden');
                    $('#img-btn-2').removeClass('hidden');
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
</x-app-layout>