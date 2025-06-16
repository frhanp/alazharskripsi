@props(['disabled' => false])

{{-- Menambahkan pl-10 (padding left) untuk memberi ruang bagi ikon --}}
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full pl-10 border-gray-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm']) !!}>