<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <x-admin.sidebar-link :name="__('Dashboard')" :icon="__('fa-th')" :status="__('')" :link="route('dashboard')" />


                <x-admin.sidebar-dropdown :topic="__('Company')" :icon="__('fa-building')" :status="__('')" :menu="__('menu-open')">

                    <x-admin.sidebar-link :name="__('Companies')" :icon="__('fa-building')" :status="__('')" :link="route('dashboard')" />

                    <x-admin.sidebar-link :name="__('Subscription')" :icon="__('fa-gifts')" :status="__('')" :link="route('dashboard')" />

                </x-admin.sidebar-dropdown>

                <x-admin.sidebar-link :name="__('Users')" :icon="__('fa-users')" :status="__('')" :link="route('users.index')" />

            </ul>
        </nav>
    </div>
</aside>
