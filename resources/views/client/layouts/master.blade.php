    <html lang="vi">

    <head>
        @include('client.components.header.meta')

        @include('client.components.header.link')
        @yield('style')
        @include('client.components.header.script')
    </head>

    <body>
        @include('client.components.header.navigation')
        @yield('content')
        @include('client.components.footer')
        @yield('script')
    </body>

    </html>
