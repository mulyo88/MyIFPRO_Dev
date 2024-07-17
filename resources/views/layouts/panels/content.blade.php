<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            @include('layouts.components.breadcrumb')
            
            <div class="row layout-top-spacing">

                @yield('content')

            </div>
        </div>
    </div>
    {{-- @include('layouts/panels/footer') --}}
</div>
<!--  END CONTENT AREA  -->
