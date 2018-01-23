@extends('admin.layouts.dashboard')

@section('page_heading','Mesas')
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ url('js/teste.js') }}"></script>
@endsection 

@section('section')

    <template id="exemplo-app" v-for="">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <a href="#">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="text-center">1</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </template>    
@endsection