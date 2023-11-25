@props(['category'])
<a href="/?category={{ $category->slug }}"
    {{ $attributes->merge(['class' => 'px-3 py-1 border  rounded-full text-xs uppercase font-semibold']) }}
   style="font-size: 10px"
>{{ $category->name }}</a>
