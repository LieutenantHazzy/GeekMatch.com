@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">Posts</h4>

            <ul>
                <li>
                    <a href="/admin/posts"
                       class="<?php echo e(request()->is('admin/product') ? 'text-blue-500' : ''); ?>">All Posts</a>
                </li>

                <li>
                    <a href="/admin/posts/create"
                       class="<?php echo e(request()->is('admin/product/create') ? 'text-blue-500' : ''); ?>">New Post</a>
                </li>
            </ul>

            <h4 class="font-semibold pt-6 mb-4">Categories</h4>

            <ul>
                <li>
                    <a href="/admin/category"
                       class="<?php echo e(request()->is('admin/category') ? 'text-blue-500' : ''); ?>">All
                        Categories</a>
                </li>

                <li>
                    <a href="/admin/category/create"
                       class="<?php echo e(request()->is('admin/category/create') ? 'text-blue-500' : ''); ?>">New
                        Category</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
