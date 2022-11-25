<x-app-layout>

    <div class="bg-gray-100 w-96 px-4  md:w-8/12 py-12 md:px-6 drop-shadow-md rounded-md md:container mt-6 md:mx-auto">
        <form action="{{ url('update-post/'.$post->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <textarea name="title"  placeholder="Enter the Title of your post"
                    class="border-2 border-gray-600 py-2 px-6 w-80 md:w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0"
                    cols="20" rows="4" :value="old('title', $post->title" required autocomplete="title"></textarea>

                <div>
                    @error('title')
                    <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-8">
                <textarea name="description"  placeholder="Enter the First Paragraph of your post"
                    class="border-2 border-gray-600 py-2 px-6 w-80 md:w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0"
                    cols="20" rows="4" :value="old('description', $post->description" required autocomplete="description"></textarea>

                <div>
                    @error('description')
                    <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-8">
                <textarea name="body"  placeholder="Write message..."
                    class="border-2 border-gray-600 py-2 px-6 w-80 md:w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0"
                    cols="20" rows="8" :value="old('body', $post->body" required autocomplete="body"></textarea>

                <div>
                    @error('body')
                    <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <input type="date" name="date"   placeholder="Select Post Date"
                    class="border-2 border-gray-600 py-2 px-6 w-80 md:w-full rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0" :value="old('date', $post->date" required autocomplete="date">

                <div>
                    @error('date')
                    <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">

                <select
                    class="border-2 border-gray-600 py-2 px-6 w-80 md:w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0"
                    name="categories" :value="old('categories', $post->categories" required autocomplete="categories" >
                    <option value="">Select a Category</option>
                    <option value="Imo Politics">Imo Politics</option>
                    <option value="Foreign news">Foreign news</option>
                    <option value="Politics">Politics</option>
                    <option value="Economy">Economy</option>
                    <option value="War">War</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Sports">Sports</option>
                    <option value="Crime watch">Crime watch</option>
                    <option value="Insecurity">Insecurity</option>
                    <option value="Opinion">Opinion</option>
                </select>

                <div>
                    @error('categories')
                    <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="flex space-x-12 md:flex md:justify-between">

                <a href="{{ route('posts.post') }}"
                    class="bg-red-700 py-2  px-3 border-2 text-white font-sans rounded hover:bg-red-900">
                    Cancel
                </a>

                <button type="submit" class="py-2 px-3 border-2 text-white font-sans bg-sky-800 rounded">
                    Update post
                </button>
            </div>


        </form>

    </div>

</x-app-layout>
