<div class="card">
	<div class="card-header">
		{{ @$header }}
	</div>
	<div class="card-body">
		{{ @$content }}
	</div>
	<div class="card-footer {{ $footerMute ? 'text-muted' : '' }}">
		{{ @$footer }}
	</div>
</div>