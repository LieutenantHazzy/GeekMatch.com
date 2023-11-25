@props(['product'])

<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$product->category" class="{{ $product->category->color }} "/>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $product->slug }}">
                            {{ $product->title }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $product->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">
                {!! $product->slug !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <p class="font-bold">
                            <a href="/?author={{ $product->user->name }}">{{ $product->user->name }}</a>
                        </p>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/posts/{{ $product->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-green-400 hover:bg-green-500 rounded-full py-2 px-8"
                    >{{$product->price}}</a>
                </div>
            </footer>
        </div>
    </div>
</article>
