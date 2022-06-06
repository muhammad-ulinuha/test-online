<div class="d-flex bd-highlight">

    <div class="d-flex flex-column p-2 bd-highlight flex-shrink-0 text-white bg-dark fixed-top" style="width: 17%; height: 100vh;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Dashboard <b><i><?= $role; ?></i></b></span>
        
        </a>
        <span class="text-center mt-3">Selamat Datang <b><?= $username ?></b></span>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="authorberanda" class="nav-link text-white" aria-current="page">
            <svg class="bi me-2" width="16" height="16"></svg>
            Beranda
            </a>
        </li>
        <li>
            <a href="authorpost" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"></svg>
            Post
            </a>
        </li>
        </ul>

            
        <hr>

        <a href="<?= base_url('LoginAdmin/logout') ?>"class="text-decoration-none text-center text-white" onclick="javascript:return confirm('Apakah ingin keluar ?')">Sign out</a>
    </div>

    <!-- content -->
        <div class="p-2" style="width: 20%;"></div>
