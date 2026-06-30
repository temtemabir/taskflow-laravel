@props(['title' => null])
<div class="card">
@if($title)
<h3 style="margin-bottom: 1rem;">{{ $title }}</h3> @endif
{{ $slot }}
</div>
