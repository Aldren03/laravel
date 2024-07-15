<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
    }

    .sidebar-link:hover {
        background-color: rgba(34, 197, 94, 0.075);
        border-left: 3px solid #4ca771;
    }

    .sidebar-collapsed {
        width: 50px;
    }
    .sidebar-footer p {
        margin-bottom: 0;
    }
</style>
<div class="d-flex">
    <aside id="sidebar" class="sidebar">
        <ul class="py-4 flex-1">
            <li class="mb-2">
                <a href="#" class="sidebar-link d-flex align-items-center p-4 text-black hover:bg-green-200 hover:text-green-500">
                    <i class="lni lni-grid-alt mr-4"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-header d-flex align-items-center p-4 text-black">
                <span>Menu</span>
                <hr class="sidebar-divider flex-grow h-px bg-white ml-4">
            </li>
            <li class="mb-2">
                <a href="#" class="sidebar-link d-flex align-items-center p-4 text-black hover:bg-green-200 hover:text-green-500">
                    <i class="lni lni-users mr-4"></i>
                    <span>Loan Payment</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer p-4">
            <hr class="sidebar-divider">
            <p class="text-center text-green-500 italic text-xs">
                TD3 SMART FUND CREDIT CORPORATION
            </p>
            <p class="text-center text-green-500 italic text-xs">
                est. 2015
            </p>
        </div>
        </aside>