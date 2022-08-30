<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('biodata-pegawai.index') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Biodata Pegawai
                </a>
            </li>
            <?php if (auth()->user()->type === "user") : ?>
                <?php if (auth()->user()->status === "mutasi") : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mutasi-berkas.index') }}">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Berkas Mutasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="send" class="align-text-bottom"></span>
                            Status Mutasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="folder" class="align-text-bottom"></span>
                            Rekap Mutasi
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (auth()->user()->status === "identitas") : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Berkas Identitas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="send" class="align-text-bottom"></span>
                            Status Identitas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="folder" class="align-text-bottom"></span>
                            Rekap Identitas
                        </a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Costume Website</span>
            <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="key" class="align-text-bottom"></span>
                    Tambah/Hapus User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="settings" class="align-text-bottom"></span>
                    Ubah Role User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="play-circle" class="align-text-bottom"></span>
                    Gambar Slide
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="film" class="align-text-bottom"></span>
                    Foto Koordinator
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="copy" class="align-text-bottom"></span>
                    Gambar Informasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="image" class="align-text-bottom"></span>
                    Gambar Poster
                </a>
            </li>
        </ul>
    </div>
</nav>