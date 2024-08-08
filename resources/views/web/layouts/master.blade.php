@extends('web.layouts.base')
@section('master')
    <div class="container-scroller">
        {{-- @include('web.includes.header') --}}
        <div class="container-fluid page-body-wrapper">
            @include('web.includes.sidebar')

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('contents')
                </div>

                {{-- @include('web.includes.footer') --}}
            </div>
        </div>
    </div>
@endsection
