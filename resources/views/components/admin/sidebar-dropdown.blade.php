<li class="nav-item {{ $menu }}">
    <a href="#" class="nav-link {{ $status }}">
        <i class="nav-icon fas {{ $icon }}"></i>
        <p>
            {{ $topic }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        {{ $slot }}

    </ul>
</li>
