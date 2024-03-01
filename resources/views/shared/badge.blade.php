@php
    $class ??= 'primary';
    $label ??= null;
@endphp

<span class="badge text-bg-{{ $class }}">{{ $label }}</span>
