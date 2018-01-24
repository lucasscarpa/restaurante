@extends('admin.layouts.dashboard')

@section('script')
    <script src="{{ url('js/mesa.js') }}"></script>
@endsection 


   
@section('page_heading', "Mesas")
    

@section('section')

    @include('administrativo.mesas')

@endsection
    