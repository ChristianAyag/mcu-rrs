<nav class="shadow-md bg-primary max-lg:hidden h-screen w-[335px] p-2 flex flex-col text-white fixed top-0 left-0">
    <div class="px-3 py-2 h-20 flex justify-between items-center">
        <img src="" alt="LOGO">
    </div>

    <ul class="mt-12 flex-1 text-[18px]">
        <!-- Dashboard -->
        <li>
            <a href="{{ url('/admin/dashboard') }}"
                class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary {{ request()->is('admin/dashboard') ? 'text-secondary' : '' }}">
                <i class="bi bi-file-earmark-bar-graph-fill"></i>
                <span class="w-full flex justify-between items-center px-3">Dashboard</span>
            </a>
        </li>
        <!-- Dropdown -->
        <li class="px-3 py-4">
            <button class="dropdownToggle w-full flex justify-between items-center hover:text-secondary transition-all">
                <i class="bi bi-file-earmark-fill"></i>
                <span class="mr-auto px-3">View Documents</span>
                <svg class="dropdownArrow w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul class="dropdownMenu ml-1 mt-4 space-y-1 hidden">
                <!-- Reviewer Checklist -->
                <li>
                    <a href="{{ url('/admin/reviewers-checklist') }}"
                        class="block hover:text-secondary duration-200 px-2 py-2 flex {{ request()->is('admin/reviewers-checklist') ? 'text-secondary' : '' }}">
                        <i class="bi bi-check-circle mt-1"></i>
                        <span class="w-full flex justify-between items-center px-3">
                            Reviewer Checklist
                        </span>
                    </a>
                </li>
                <!-- Research Approval -->
                <li>
                    <a href="{{ url('admin/research-approval') }}"
                        class="block hover:text-secondary duration-200 px-2 py-2 flex {{ request()->is('admin/research-approval') ? 'text-secondary' : '' }}">
                        <i class="bi bi-file-earmark-check-fill mt-1"></i>
                        <span class="w-full flex justify-between items-center px-3">
                            Research Approval
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Pending Accounts -->
        <li>
            <a href="{{ url('/admin/pending-accounts') }}"
                class="px-3 py-4 transition-all flex duration-200 hover:text-secondary {{ request()->is('admin/pending-accounts') ? 'text-secondary' : '' }}">
                <i class="bi bi-person-fill mt-1"></i>
                <span class="w-full flex justify-between items-center px-3">
                    Pending Accounts
                </span>
            </a>
        </li>
        <!-- Research Records -->
        <li>
            <a href="{{ url('/admin/research-records') }}"
                class="px-3 py-4 transition-all flex duration-200 hover:text-secondary {{ request()->is('admin/research-records') ? 'text-secondary' : '' }}">
                <i class="bi bi-database mt-1"></i>
                <span class="w-full flex justify-between items-center px-3">
                    Research Records
                </span>
            </a>
        </li>
        <!-- Approved Accounts -->
        <li>
            <a href="{{ url('/admin/approved-accounts') }}"
                class="px-3 py-4 transition-all flex duration-200 hover:text-secondary {{ request()->is('admin/approved-accounts') ? 'text-secondary' : '' }}">
                <i class="bi bi-person-check-fill mt-1"></i>
                <span class="w-full flex justify-between items-center px-3">
                    Approved Accounts
                </span>
            </a>
        </li>
        <!-- Pending Reviews -->
        <li>
            <a href="{{ url('/admin/pending-reviews') }}"
                class="px-3 py-4 transition-all flex duration-200 hover:text-secondary {{ request()->is('admin/pending-reviews') ? 'text-secondary' : '' }}">
                <i class="bi bi-clock-fill mt-1"></i>
                <span class="w-full flex justify-between items-center px-3">
                    Pending Reviews
                </span>
            </a>
        </li>
        <!-- Settings -->
        <li>
            <a href="{{ url('admin/settings') }}" class="px-3 py-4 flex duration-200 hover:text-secondary {{ request()->is('admin/settings') ? 'text-secondary' : '' }}">
                <i class="bi bi-gear-wide-connected mt-1"></i>
                <span class="w-full flex justify-between items-center px-3">
                    Settings
                </span>
            </a>
        </li>
        <!-- Profile Information -->
        <li class="fixed h-[60px] w-[300px] left-0 bottom-0 py-2.5 px-3.5 overflow-hidden ease-in-out duration-200">
            <div class="flex items-center flex-nowrap">
                <img src="" alt="" class="h-[45px] w-[45px] object-cover rounded-[50%] mr-[10px] border-2 border-white">
                <div class="">
                    <div class="text-[16px] whitespace-nowrap">Iyong Pangalan</div>
                    <div class="text-[14px] whitespace-nowrap">Admin</div>
                </div>
            </div>
            <a href="{{ url('/') }}" class="duration-200 hover:text-secondary">
                <i class="bi bi-box-arrow-left text-2xl absolute right-0 top-[50%] -translate-y-1/2"></i>
            </a>
        </li>
    </ul>
</nav>

<!-- Mobile Sidebar -->
<div id="sidebar"
    class="fixed top-0 left-0 h-full w-64 bg-white lg:hidden shadow transform -translate-x-full transition-transform duration-300 z-50">
    <div class="p-4 border-b">
        <h2 class="text-xl font-semibold">Menu</h2>
    </div>
    <nav class="flex flex-col p-4 space-y-4">
        <a href="#" class="text-gray-700 hover:text-blue-500">Home</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">About</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">Services</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">Contact</a>
    </nav>
</div>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 hidden z-40" onclick="toggleSidebar()"></div>

<!-- Header -->
<header class="p-4 bg-white shadow flex sticky z-1 justify-between items-center lg:hidden">
    <button onclick="toggleSidebar()" class="text-gray-700 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
    <img src="" alt="LOGO">
</header>