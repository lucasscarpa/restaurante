<div class="panel panel-default">
    @if (isset($head))
        <div class="panel-head">
            {{ $head }}
        </div>
    @endif

    <div class="panel-body">
        @if (isset($body))
            {{ $body }}
        @endif
    </div>

    @if (isset($footer))
        <div class="panel-footer">
            {{ $footer }}
        </div>
    @endif
</div>