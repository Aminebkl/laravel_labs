<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src={{ asset("img/$header->logo") }} alt="" style="object-fit: cover;height: 33px; width: 102%;"><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="active"><a href="/">{{ $header->item1 }}</a></li>
            <li><a href="services">{{ $header->item2 }}</a></li>
            <li><a href="blog">{{ $header->item3 }}</a></li>
            <li><a href="contact">{{ $header->item4 }}</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->