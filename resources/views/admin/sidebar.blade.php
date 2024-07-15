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
    <aside id="sidebar" class="sidebar" style="background-color: #C0E6BA;">
        <ul class="py-4 flex-1">
            <li class="mb-2">
                <a href="{{url('dashboard')}}" class="sidebar-link d-flex align-items-center p-4 text-black hover:bg-green-200 hover:text-green-500">
                    <i class="lni lni-grid-alt mr-3"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sidebar-header d-flex align-items-center p-4 text-black">
                <span>Menu</span>
                <hr class="sidebar-divider flex-grow h-px bg-white ml-4">
            </li>
            <li class="mb-2">
                <a href="#" class="sidebar-link d-flex align-items-center p-4 text-black hover:bg-green-200 hover:text-green-500" onclick="toggleDropdown(event, 'borrower-dropdown')">
                    <i class="lni lni-users mr-3"></i>
                    <span>Borrower <i class="lni lni-chevron-down ml-auto"></i></span>
                </a>
                <ul id="borrower-dropdown" class="d-none pl-4">
                    <li class="mb-2">
                    <a href="{{url('add_borrower')}}" class="block p-2 text-black hover:bg-green-200 rounded">Add Borrower</a>
                    </li>
                    <li class="mb-2">
                    <a href="#" class="block p-2 text-black hover:bg-green-200 rounded">View Borrower</a>
                    </li>
                </ul>
            </li>
            <li class="mb-2">
                <a href="{{url('view_employee')}}" class="sidebar-link d-flex align-items-center p-4 text-black  hover:bg-green-200 hover:text-green-500">
                    <i class="lni lni-users mr-3"></i>
                    <span>Employee</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="#" class="sidebar-link d-flex align-items-center p-4 text-black hover:bg-green-200 hover:text-green-500">
                    <i class="lni lni-add-files mr-3"></i>
                    <span>Reports</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="#" class="sidebar-link d-flex align-items-center p-4 text-black hover:bg-green-200 hover:text-green-500">
                    <i class="lni lni-popup mr-3"></i>
                    <span>Online Application</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="#" class="sidebar-link d-flex align-items-center p-4 text-black hover:bg-green-200 hover:text-green-500">
                    <i class="lni lni-layout mr-3"></i>
                    <span>Payment Records</span>
                </a>
            </li>
            <li class="mb-2">
                <a href="{{url('view_user')}}" class="sidebar-link d-flex align-items-center p-4 text-black hover:bg-green-200 hover:text-green-500">
                <i class="lni lni-user mr-3"></i>
                    <span>Users</span>
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