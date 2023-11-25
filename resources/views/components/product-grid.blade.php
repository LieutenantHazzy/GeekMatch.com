@props(['product'])

<x-product-featured-card :product="$product[0]" />

@if ($product->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($product->skip(1) as $p)
            <x-product-card
                :product="$p"
                class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            />
        @endforeach
    </div>
@endif
