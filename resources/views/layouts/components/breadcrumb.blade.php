<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            @include('layouts/components/hamburger')

            <div class="d-flex breadcrumb-content">
                <div class="page-header">
                    <div class="page-title">
                    </div>
    
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">@yield('breadcrumb')</a></li>
                            
                            {{-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Analytics</li> --}}
                        </ol>
                    </nav>
                </div>
            </div>

            {{-- @include('layouts/components/breadcrumb-setting') --}}
        </header>
    </div>
</div>
<!--  END BREADCRUMBS  -->