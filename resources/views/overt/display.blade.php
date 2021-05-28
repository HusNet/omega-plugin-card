<div id="{{ preg_replace("/[\s_]/", "-", preg_replace("/[\s-]+/", " ", preg_replace("/[^a-z0-9_\s-]/", "", strtolower($header)))) }}" class="card {{ @$cardClass }}">
	<div class="card-header {{ @$headerClass }}">
		{{ @$header }}
	</div>
	<div class="card-body {{ @$contentClass }}">
		{{ @$content }}
	</div>
	<div class="card-footer {{ @$footerClass }}">
		{{ @$footer }}
	</div>
</div>