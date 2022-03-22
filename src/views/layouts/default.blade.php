@include('Constra.partials.meta')
@include('Constra.partials.header')

<div class="container">
  <div class="block">
    @yield('content')
  </div>
</div>


{{-- <main class="main-content">
    @yield('content')
</main> --}}

@include('Constra.partials.footer')
