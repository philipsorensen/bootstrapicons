@props([
	'size' => 16,
	'color' => 'currentColor',
	'class' => ''
])

<svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" fill="{{ $color }}" class="bi bi-file {{ $class }}" viewBox="0 0 16 16">
	<path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
</svg> 