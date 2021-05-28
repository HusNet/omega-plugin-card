<div id="{{ preg_replace("/[\s_]/", "-", preg_replace("/[\s-]+/", " ", preg_replace("/[^a-z0-9_\s-]/", "", strtolower($header)))) }}" class="card {{ @$cardClass }}">
	@isset($header)
		<div class="card-header {{ @$headerClass }}">
			{{ @$header }}
		</div>
	@endisset
	@isset($content)
		<div class="card-body {{ @$contentClass }}">
			{{ @$content }}
		</div>
	@isset($footer)
	@endisset
		<div class="card-footer {{ @$footerClass }}">
			{{ @$footer }}
		</div>
	@endisset
</div>