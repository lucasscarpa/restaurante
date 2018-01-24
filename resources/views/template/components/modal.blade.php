<div class="modal fade" @if (isset($id)) id="{{ $id }}" @endif tabindex="-1" role="dialog">
    <div class="modal-dialog @if (isset($size)) {{ $size }} @endif" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $title }}</h4>
            </div>

            <div class="modal-body">
                {{ $body }}
            </div>

            @if (isset($footer))
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>