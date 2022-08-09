 <section data-bs-version="5.1" class="menu menu3 cid-tdeMbZEdEy" once="menu" id="menu3-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/kingdomdesign-icon-dark.png" alt="Kingdom Design" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="/">KingdomDesign</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/about">
                            How it works</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/contact">Find a developer</a></li>
                    <li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4" href="/" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Other things we offer</a><div class="dropdown-menu" aria-labelledby="dropdown-undefined"><a class="text-black dropdown-item text-primary display-4" href="/graphic">Graphics</a><a class="text-black dropdown-item text-primary display-4" href="web">Web development</a><a class="text-black dropdown-item text-primary display-4" href="print">Print</a><a class="text-black dropdown-item text-primary display-4" href="/sms">Bulk SMS</a><a class="text-black dropdown-item text-primary display-4" href="/mail">Bulk Mail</a><a class="text-black dropdown-item text-primary display-4" href="attendance">E-Attendance</a><a class="text-black dropdown-item text-primary display-4" href="/mediatips">Media Advice/Tips</a></div>
                    </li>


            @if (Route::has('login'))

                @if (Auth::guard('admin')->check())
                    <x-authuser type="Dashboard" :link="'/admin/dashboard'">
                    </x-authuser>

                @elseif(Auth::guard('contributor')->check())
                    <x-authuser type="Dashboard" :link="'/contributor/dashboard'">
                    </x-authuser>
                @elseif(Auth::guard('')->check())
                @else
                    <x-authnav></x-authnav>
                @endif


            @endif







                    </ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="http://www.facebook.com/kingdomdesignz" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://instagram.com/god_sown_designs" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont mbri-sun"></span>
                    </a>

                </div>

            </div>
        </div>
    </nav>
</section>



