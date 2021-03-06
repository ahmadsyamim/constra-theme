<!doctype html>
<html lang="en" class="no-js">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta_title', setting('site.title'))</title>
    <meta name="description" content="@yield('meta_description')">

    <!-- Open Graph -->
    <meta property="og:site_name" content="{{ setting('site.title') }}" />
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="@yield('meta_image', url('/') . '/images/apple-touch-icon.png')" />
    <meta property="og:description" content="@yield('meta_description', setting('site.description'))" />

    <!-- Icons -->
    <meta name="msapplication-TileImage" content="{{ url('/') }}/ms-tile-icon.png" />
    <meta name="msapplication-TileColor" content="#8cc641" />
    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="{{ url('/') }}/images/apple-touch-icon.png" />

    <!-- Styles -->
    <!-- Bootstrap -->
    {{ HTML::style('Constra/assets/plugins/bootstrap/bootstrap.min.css') }}
    <!-- FontAwesome -->
    {{ HTML::style('Constra/assets/plugins/fontawesome/css/all.min.css') }}  
    <!-- Animation -->
    {{ HTML::style('Constra/assets/plugins/animate-css/animate.css') }}
    <!-- slick Carousel -->
    {{ HTML::style('Constra/assets/plugins/slick/slick.css') }}
    {{ HTML::style('Constra/assets/plugins/slick/slick-theme.css') }}
    <!-- Colorbox -->
    {{ HTML::style('Constra/assets/plugins/colorbox/colorbox.css') }}
    <!-- Template styles-->
    {{ HTML::style('Constra/css/styles.css') }}

    @push('scripts')
    <!-- initialize jQuery Library -->
    {{ HTML::script('Constra/assets/plugins/jQuery/jquery.min.js') }}
    <!-- Bootstrap jQuery -->
    {{ HTML::script('Constra/assets/plugins/bootstrap/bootstrap.min.js') }}
    <!-- Slick Carousel -->
    {{ HTML::script('Constra/assets/plugins/slick/slick.min.js') }}
    {{ HTML::script('Constra/assets/plugins/slick/slick-animation.min.js') }}
    <!-- Color box -->
    {{ HTML::script('Constra/assets/plugins/colorbox/jquery.colorbox.js') }}
    <!-- shuffle -->
    {{ HTML::script('Constra/assets/plugins/shuffle/shuffle.min.js') }}
    <!-- Template custom -->
    {{ HTML::script('Constra/js/scripts.js') }}
    @endpush

    @if (setting('site.google_analytics_tracking_id'))
    <!-- Google Analytics (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
        </script>
    @endif
    @if (setting('admin.google_recaptcha_site_key'))
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <script>
            function setFormId(formId) {
                window.formId = formId;
            }

            function onSubmit(token) {
                document.getElementById(window.formId).submit();
            }
        </script>
    @endif

</head>
<body class="body masthead" id="page-top">
