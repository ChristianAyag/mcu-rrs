<nav class="shadow-md bg-primary max-lg:hidden h-screen w-[335px] p-2 flex flex-col text-white fixed top-0 left-0 z-40">
    <div class="px-3 py-2 h-20 flex justify-between items-center">
        <img src="" alt="LOGO">
    </div>

    <ul class="mt-12 flex-1 text-[18px]">
        <!-- Dashboard -->
        <li>
            <a href="{{ url('student/dashboard') }}"
                class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary {{ request()->is('student/dashboard') ? 'text-secondary' : '' }}">
                <i class="bi bi-file-earmark-bar-graph-fill"></i>
                <span class="w-full flex justify-between items-center px-3">Dashboard</span>
            </a>
        </li>
        <!-- Track Reviews -->
        <li>
            <a href="{{ url('student/track-reviews') }}"
                class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary {{ request()->is('student/track-reviews') ? 'text-secondary' : '' }}">
                <i class="bi bi-search"></i>
                <span class="w-full flex justify-between items-center px-3">Track Reviews</span>
            </a>
        </li>
        <!-- Submit Forms -->
        <li>
            <a href="{{ url('student/submit-forms') }}"
                class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary {{ request()->is('student/submit-forms') ? 'text-secondary' : ''}}">
                <i class="bi bi-file-earmark-fill"></i>
                <span class="w-full flex justify-between items-center px-3">Submit Forms</span>
            </a>
        </li>
        <!-- Download Forms -->
        <li>
            <a href="{{ url('student/download-forms') }}"
                class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary {{ request()->is('student/download-forms') ? 'text-secondary' : ''}}">
                <i class="bi bi-file-earmark-fill"></i>
                <span class="w-full flex justify-between items-center px-3">Download Forms</span>
            </a>
        </li>
        <!-- Submit Tickets -->
        <li>
            <a href="{{ url('student/submit-tickets') }}"
                class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary {{ request()->is('student/submit-tickets') ? 'text-secondary' : ''}}">
                <i class="bi bi-file-earmark-fill"></i>
                <span class="w-full flex justify-between items-center px-3">Submit Tickets</span>
            </a>
        </li>
        <!-- Settings -->
        <li>
            <a href="{{ url('student/settings') }}"
                class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary {{  request()->is('student/settings') ? 'text-secondary' : '' }}">
                <i class="bi bi-gear-wide-connected"></i>
                <span class="w-full flex justify-between items-center px-3">Settings</span>
            </a>
        </li>
        <!-- Profile Information -->
        <li class="fixed h-[60px] w-[300px] left-0 bottom-0 py-2.5 px-3.5 overflow-hidden ease-in-out duration-200">
            <div class="flex items-center flex-nowrap">
                <img src="" alt="" class="h-[45px] w-[45px] object-cover rounded-[50%] mr-[10px] border-2 border-white">
                <div class="">
                    <div class="text-[16px] whitespace-nowrap" name="userName">Iyong Pangalan</div>
                    <div class="text-[14px] whitespace-nowrap" name="">Student</div>
                </div>
            </div>
            <a href="{{ url('/') }}" class="duration-200 hover:text-secondary">
                <i class="bi bi-box-arrow-left text-2xl absolute right-0 top-[50%] -translate-y-1/2"></i>
            </a>
        </li>
    </ul>
</nav>