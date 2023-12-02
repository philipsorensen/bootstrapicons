@props([
	'size' => 16,
	'color' => 'currentColor',
	'class' => ''
])

<svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" fill="{{ $color }}" class="bi bi-ban-fill {{ $class }}" viewBox="0 0 16 16">
	<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M2.71 12.584c.218.252.454.488.706.707l9.875-9.875a7.034 7.034 0 0 0-.707-.707l-9.875 9.875Z"/>
</svg> 