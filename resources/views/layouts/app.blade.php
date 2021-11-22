@include('partials.header')

{{-- Page specific styles --}}
@yield('styles')

<body class="mt-5 text-blue-50">
    <div id="app" style="background-color: #348FCF;">
    
    {{-- <div class="container mx-auto min-w-screen flex justify-center items-top"> --}}
        {{-- Yeild Content Here  --}}
                {{-- @yield('content') --}}
    {{-- </div> --}}

</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>