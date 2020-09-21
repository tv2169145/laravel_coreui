@extends('dashboard.base')

@section('content')
          <div id="app">
              <example-component login-user="{{ $username }}"></example-component>
          </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/app.js') }}"></script>
{{--    <script src="{{ asset('js/Chart.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>--}}
{{--    <script src="{{ asset('js/main.js') }}" defer></script>--}}
@endsection
