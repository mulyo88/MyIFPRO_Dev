<!--  BEGIN NAVBAR  -->
<div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header">

        <ul class="navbar-item theme-brand flex-row  text-center">
            @include('layouts/components/navbar-logo')
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> {{ config('app.name', 'Laravel') }} </a>
            </li>
        </ul>

        {{-- @include('layouts/components/navbar-search') --}}
        <ul class="navbar-item flex-row ms-lg-auto ms-0 action-area">
            @include('layouts/components/lang')
            @include('layouts/components/theme')
            @include('layouts/components/notification')
            @include('layouts/components/user-profile')
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->