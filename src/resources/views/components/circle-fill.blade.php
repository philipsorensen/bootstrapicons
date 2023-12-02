@props([
	'size' => 16,
	'color' => 'currentColor',
	'class' => ''
])

<svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" fill="{{ $color }}" class="bi bi-circle-fill {{ $class }}" viewBox="0 0 16 16"> < circle cx="8" cy="8" r="8"/>
</svg> 