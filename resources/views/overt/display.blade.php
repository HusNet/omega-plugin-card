<div id="{{ preg_replace("/[\s_]/", "-", preg_replace("/[\s-]+/", " ", preg_replace("/[^a-z0-9_\s-]/", "", strtolower($header)))) }}" class="card">
	@isset($header)
		<div class="card-header">
			{{ @$header }}
		</div>
	@endisset
	@isset($content)
		<div class="card-body">
			{{ @$content }}
		</div>
	@isset($footer)
	@endisset
		<div class="card-footer">
			{{ @$footer }}
		</div>
	@endisset
</div>