<!-- Breadcrumb Area Start -->
<section class="page-title" style="background-image:url({{Voyager::image(setting('site.breadcrumbs_Image'))}})">
    <div class="auto-container">
        <div class="content">
            <h1>{{ $title  }}</h1>
            <ul class="page-breadcrumb">
                {{ $slot }}
            </ul>
        </div>
    </div>
</section>

<!-- Breadcrumb Area End -->
