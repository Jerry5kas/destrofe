<!-- Custom Toggle Styles -->
<style>
    input[type="checkbox"].toggle {
        appearance: none;
        width: 2.5rem;
        height: 1.25rem;
        background-color: #e5e7eb;
        border-radius: 9999px;
        position: relative;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    input[type="checkbox"].toggle:checked {
        background-color: #2563eb;
    }

    input[type="checkbox"].toggle::after {
        content: '';
        position: absolute;
        top: 0.125rem;
        left: 0.125rem;
        width: 1rem;
        height: 1rem;
        background: white;
        border-radius: 50%;
        transition: transform 0.3s ease;
    }

    input[type="checkbox"].toggle:checked::after {
        transform: translateX(1.25rem);
    }
</style>
<div class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Popup -->
    <div x-data="{ open: true }" x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
        <div class="bg-white max-w-lg w-full mx-4 rounded-lg shadow-lg overflow-hidden">

            <!-- Header -->
            <div class="flex justify-between items-center border-b px-4 py-3">
                <div class="flex items-center space-x-2">
                    <img src="https://www.mhp.com/favicon.ico" alt="MHP Logo" class="w-6 h-6">
                    <h2 class="text-lg font-semibold">Privacy settings</h2>
                </div>
                <button @click="open=false" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>

            <!-- Content -->
            <div class="p-4 space-y-3 max-h-[60vh] overflow-y-auto text-sm text-gray-700">
                <p>
                    This website uses website tracking technologies (Matomo, Google Analytics 4, LinkedIn Insight Tag,
                    Facebook Pixel)
                    and integrates third-party services for convenience functions (Google services such as Google Maps,
                    YouTube videos)
                    in order to continuously improve the website and offer you an optimal user experience.
                </p>
                <p>
                    To use these services, we require your consent in accordance with Art. 6 (1) (a) GDPR and Section 25
                    (1) TDDDG...
                </p>

                <!-- Switches -->
                <div class="space-y-2">
                    <label class="flex items-center justify-between bg-gray-50 px-3 py-2 rounded-md border">
                        <span>Marketing</span>
                        <input type="checkbox" class="toggle" x-model="marketing">
                    </label>
                    <label class="flex items-center justify-between bg-gray-50 px-3 py-2 rounded-md border">
                        <span>Functional</span>
                        <input type="checkbox" x-model="functional">
                    </label>
                    <label class="flex items-center justify-between bg-gray-50 px-3 py-2 rounded-md border">
                        <span>Essential</span>
                        <input type="checkbox" x-model="essential" disabled checked>
                    </label>
                    <label class="flex items-center justify-between bg-gray-50 px-3 py-2 rounded-md border">
                        <span>Legitimate Interest</span>
                        <input type="checkbox" x-model="legitimate" checked>
                    </label>
                    <label class="flex items-center justify-between bg-gray-50 px-3 py-2 rounded-md border">
                        <span>Statistics</span>
                        <input type="checkbox" x-model="statistics">
                    </label>
                </div>
            </div>

            <!-- Footer -->
            <div class="border-t flex flex-col sm:flex-row gap-2 p-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-md w-full sm:w-auto hover:bg-blue-700">
                    Accept all
                </button>
                <button class="bg-gray-200 px-4 py-2 rounded-md w-full sm:w-auto hover:bg-gray-300">
                    Reject unnecessary services
                </button>
                <button class="bg-gray-100 px-4 py-2 rounded-md w-full sm:w-auto hover:bg-gray-200">
                    Save services
                </button>
            </div>
        </div>
    </div>

</div>
