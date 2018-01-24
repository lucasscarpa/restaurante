@extends('template.master')

@section('content-master')

    <div id="theme-wrapper" class="theme-whbl">

        @include('template.navbar')

        <div id="page-wrapper" class="container">

            <div id="nav-col">
                <section id="col-left" class="col-left-nano">
                    <div id="col-left-inner" class="col-left-nano-content">
                        @include('template.sidebar')
                    </div>
                </section>
            </div>

            <div id="content-wrapper">
				@include('template.mensagens')

                @yield('content')
            </div>

        </div>

    </div>

@endsection
