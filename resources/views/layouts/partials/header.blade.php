<header class="bg-primary">
    <nav class="d-flex justify-content-between p-4">
        <a href={{ route('admin.index')}}>
            <img src="" alt="logo">
        </a>
        <ul class="d-flex">
            <li class="flex-fill d-flex align-items-center pe-5">
                <a href="/admin/projects" class="text-white text-decoration-none">I miei progetti</a>
            </li>
            <li class="flex-fill d-flex align-items-center pe-5">
                <a href={{ route('admin.projects.create')}} class="text-white text-decoration-none">Nuovo progetto</a>
            </li>
        </ul>
    </nav>
</header>