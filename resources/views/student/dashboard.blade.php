@section('title', 'Dashboard')
<x-student-layout>
    <!-- Main Content -->
    <main class="ml-[335px] max-lg:ml-auto p-4">
        <h2 class="max-lg:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            DASHBOARD
        </h2>
        <br>
        <div class="p-6 space-y-10">
            <!-- Announcement/Reminders -->
            <div class="rounded-md shadow-md overflow-hidden bg-white">
                <!-- Header bar -->
                <div class="bg-primary text-white font-semibold px-4 py-2">
                    Reminder
                </div>

                <!-- Body -->
                <div class="p-6 text-sm leading-relaxed">
                    <p class="mb-4">
                        sample text
                    </p>
                </div>
            </div>

            <!-- Cards -->
            <div>
                <div class="grid max-md:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h2 class="text-2xl font-medium text-center">UNDER REVIEW</h2>
                        <p class="mt-2 text-center">STATUS OF REVIEW</p>
                    </div>
                    <div class="card bg-lightgray p-4 rounded-lg border border-gray shadow">
                        <h2 class="text-2xl font-medium text-center">2025/08/05</h2>
                        <p class="mt-2 text-center">DEADLINE OF SUBMISSION</p>
                    </div>
                    <div data-modal="modal1"
                        class="card cursor-pointer bg-lightgray hover:bg-gray duration-200 p-4 rounded-lg border border-gray shadow">
                        <h3 class="text-2xl font-medium text-center">Submitted Documents</h3>
                        <p class="mt-2 text-center">Click here to view</p>
                    </div>
                    <div data-modal="modal2"
                        class="card cursor-pointer bg-lightgray hover:bg-gray duration-200 p-4 rounded-lg border border-gray shadow">
                        <h2 class="text-2xl font-medium text-center">Pending Documents</h2>
                        <p class="mt-2 text-center">Click here to view</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification Tab -->
        <main class="flex-1 p-2">
            <div class="w-full mx-auto px-4 py-4 flex items-center justify-between">
                <h1 class="text-2xl font-semibold text-gray-800">Notifications</h1>
                <button class="text-sm text-blue hover:text-darkblue duration-200">Mark all as read</button>
            </div>
            <div class="w-full mx-auto px-4 py-2">
                <div class="bg-white shadow-sm border-2 border-gray">

                    <!-- Scroll area (32 rem tall ≈ ~512 px) -->
                    <ul class="h-[32rem] overflow-y-auto scrollbar divide-y divide-gray">

                        <!-- Notification item -->
                        <li class="p-4 flex gap-4 hover:bg-gray duration-200">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                <!-- Any icons -->
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4h2v2H9v-2zm0-8h2v6H9V6z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">
                                    <span class="font-medium">Your name</span> commented on your post
                                </p>
                                <p class="text-xs text-gray-500 mt-1">5 minutes ago</p>
                            </div>
                            <span class="inline-flex w-3 h-3 rounded-full bg-blue self-center"></span>
                        </li>

                        <!-- Duplicate <li> blocks to simulate many notifications -->
                        <template id="notification-template">
                            <!-- Same markup as above -->
                        </template>

                    </ul>
                </div>
            </div>
        </main>
    </main>

    <!-- Modal -->
    <!-- Submitted Documents -->
    <div id="modal1" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-[9999]">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
            <h2 class="text-2xl font-bold mb-4">Submitted Documents</h2>
            <div id="scrollbar" class="overflow-y-auto h-64 px-2 border-2 border-gray">
                <x-submitted-document label="Form 2(A) - STUDY PROTOCOL REVIEW CHECKLIST" />
                <x-submitted-document label="Form 2(B) - APPLICATION FOR INITIAL REVIEW" />
                <x-submitted-document label="Form 2(C) - INFORMED CONSENT FORM" />
                <x-submitted-document label="Form 2(D) - INFORMED CONSENT FORM FOR P.I." />
                <x-submitted-document label="Form 5(E) - DOCUMENT HISTORY" />
                <x-submitted-document label="Form 2(I) - CERTIFICATE OF EXEMPTION FROM REVIEW" />
                <x-submitted-document label="Form 2(E) - PROTOCOL EVALUATION CHECKLIST" />
                <x-submitted-document label="Form 2(J) - INFORMED CONSENT EVALUATION CHECKLIST" />
                <x-submitted-document label="Form 3(A) - RESUBMISSION" />
                <x-submitted-document label="Form 3(B) - REVIEW OF SUBMITTED STUDY PROTOCOL" />
                <x-submitted-document label="Form 3(D) - APPLICATION FOR REVIEW OF AMENDMENT" />
                <x-submitted-document label="Form 3(E) - AMENDMENTS" />
                <x-submitted-document label="Form 3(J) - APPROVAL LETTER" />
                <x-submitted-document label="Form 3(O) - ETHICAL CLEARANCE FORM" />
                <x-submitted-document label="Form 3(C) - PROGRESS REPORTS" />
                <x-submitted-document label="Form 3(L) - FINAL REPORTS" />
            </div>
            <button type="button"
                class="closeModal mt-6 px-4 py-2 rounded text-primary bg-secondary border border-primary text-primary hover:bg-primary hover:text-secondary hover:border-secondary duration-200">
                CLOSE
            </button>
        </div>
    </div>
    <!-- Pending Documents -->
    <div id="modal2" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-[9999]">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
            <h2 class="text-2xl font-bold mb-4">Pending Requirements</h2>
            <div id="scrollbar" class="overflow-y-auto h-64 px-2 border-2 border-gray">
                <p>All requirements has been passed</p>
            </div>
            <button type="button"
                class="closeModal mt-6 px-4 py-2 rounded text-primary bg-secondary border border-primary text-primary hover:bg-primary hover:text-secondary hover:border-secondary duration-200">
                CLOSE
            </button>
        </div>
    </div>
</x-student-layout>
<script>
    // Attach click event to all cards
    document.querySelectorAll('[data-modal]').forEach(card => {
        card.addEventListener('click', () => {
            const modalId = card.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    });

    // Attach click event to all close buttons
    document.querySelectorAll('.closeModal').forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.fixed');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    });

    // Optional: close modal by clicking outside
    document.querySelectorAll('.fixed').forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
    });
</script>