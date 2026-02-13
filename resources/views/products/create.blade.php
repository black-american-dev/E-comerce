<x-layout>
    <div class="bigContainer">
    <br><br>
    <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mt-4 flex flex-col bg-gray-100 rounded-lg p-4 shadow-sm">
                <h2 class="ai-story-maker-dream-form text-black font-bold text-2xl">Add a new product </h2>

                <div class="mt-4">
                    <label class="text-black" for="name">Name</label>
                    <input name="name" placeholder="Enter a name for your product" class="w-full bg-white rounded-md border-gray-300 text-black px-2 py-1" type="text">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="text-black" for="description">Description</label>
                    <textarea name="description" placeholder="Describe your product in detail" class="w-full bg-white rounded-md border-gray-300 text-black px-2 py-1" id="description"></textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mt-4 flex flex-row space-x-2">
                    <div class="flex-1">
                        <label class="text-black" for="price">Price</label>
                        <input name="price" placeholder="What price did you feel your product worth?" class="w-full bg-white rounded-md border-gray-300 text-black px-2 py-1" id="emotions" type="text">
                        @error('price')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex-1">
                        <label class="text-black" for="slug">Slug</label>
                        <input name="slug" placeholder="What slug is in your product?" class="w-full bg-white rounded-md border-gray-300 text-black px-2 py-1" id="symbols" type="text">
                        @error('slug')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4 flex flex-row space-x-2">
                    <div class="flex-1">
                        <label class="text-black" for="image">Image</label>
                        <input name="image" placeholder="Upload your product's image" class="w-full bg-white rounded-md border-gray-300 text-black px-2 py-1" id="emotions" type="text">
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex-1">
                        <label class="text-black" for="stock">Stock</label>
                        <input name="stock" placeholder="How much you have in stock?" class="w-full bg-white rounded-md border-gray-300 text-black px-2 py-1" id="symbols" type="text">
                        @error('stock')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="bg-white text-black rounded-md px-4 py-1 hover:bg-gray-200 hover:text-gray-900" id="generate-button" type="button">Add </button>
                </div>
            </div>
        </div>
    </form>
</x-layout>