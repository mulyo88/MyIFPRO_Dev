<li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="avatar-container">
            <div class="avatar avatar-sm avatar-indicators avatar-online">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img alt="avatar" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-circle">
                @else
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                            {{ Auth::user()->name }}

                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>
                @endif         
            </div>
        </div>
    </a>

    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
        <div class="user-profile-section">
            <div class="media mx-auto">
                <div class="emoji me-2">
                    &#x1F44B;
                </div>
                <div class="media-body">
                    <h5>{{ Auth::user()->name }}</h5>
                    <p>{{ Auth::user()->roles }}</p>
                </div>
            </div>
        </div>
        {{-- <div class="dropdown-item">
            <a href="{{ route('profile.show') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
            </a>
        </div> --}}
        <div class="dropdown-item">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" id="form" x-data>
                @csrf

                <a href="{{ route('logout') }}" id="buttton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                </a>    
            </form>            
        </div>
    </div>
    
</li>

<script>
    document.getElementById("buttton").onclick = function(event) {
        event.preventDefault();
        document.getElementById("form").submit();
    }
</script>
