<div class="main-box">

	@if (isset($form))
		<form method="@if (isset($form_method)){{ $form_method }}@else{{ 'post' }}@endif" action="{{ $form }}" @if (isset($form_enctype)) enctype="$form_enctype" @endif>
			@if ( ! isset($form_method) )
				{{ csrf_field() }}
			@endif
	@endif

    @if (isset($head) || @isset($actions))
        <header class="main-box-header">
            @if (isset($head))
                <h2>{{ $head }}</h2>
            @endif

            @if (isset($actions))
                <div class="btn-actions">
                    {{ $actions }}
                </div>
            @endif
        </header>
    @endif

    <div class="main-box-body"@if (isset($body_id)) id="{{ $body_id }}"@endif>
        @if (isset($body))
            {{ $body }}
        @endif
    </div>

	@if (isset($form))
		</form>
	@endif

</div>
