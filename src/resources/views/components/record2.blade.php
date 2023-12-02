@props([
	'size' => 16,
	'color' => 'currentColor',
	'class' => ''
])

<svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" fill="{{ $color }}" class="bi bi-record2 {{ $class }}" viewBox="0 0 16 16">
	<path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8m0 1A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
	<path d="M10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
</svg> 