@props(['active'])

@if($active == 1)

    <a href="#" class="color-green-500" style="color: green" >● </a>

@else

    <a href="#" class="color-red-500" style="color: red" >●</a>

@endif
