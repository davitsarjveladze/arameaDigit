@auth()
    @include('admin.views.layouts.navbars.navs.auth')
@endauth

@guest()
    @include('admin.views.layouts.navbars.navs.guest')
@endguest
