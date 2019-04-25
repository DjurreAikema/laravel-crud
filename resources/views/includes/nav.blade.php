<nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color: #4484CE">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Praktijk Piet Mulder
        </a>
        <a class="navbar-brand">
            |
        </a>
        <a class="navbar-brand" href="{{ route('home') }}" style="margin:0px 15px;">
            Home
        </a>
        <a class="navbar-brand" href="{{ route('treatment.index') }}" style="margin:0px 15px;">
            Behandelingen
        </a>
        <a class="navbar-brand" href="{{ route('product.index') }}" style="margin:0px 15px;">
            Producten
        </a>
        <a class="navbar-brand" href="{{ route('contact.index') }}" style="margin:0px 15px;">
            Contact
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @else
                    <a class="navbar-brand" href="{{ route('admin.index') }}" style="margin:0px 15px;">
                        Admin
                    </a>
                @endguest
            </ul>
        </div>
    </div>
</nav>