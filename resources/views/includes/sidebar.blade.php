<div id="layoutSidenav_nav">
    <nav
        class="sb-sidenav accordion sb-sidenav-dark"
        id="sidenavAccordion"
    >
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseLayou"
                    aria-expanded="false"
                    aria-controls="collapseLayouts"
                >
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-file"></i>
                    </div>
                    Drafting
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div
                    class="collapse"
                    id="collapseLayou"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion"
                >
                    <nav class="sb-sidenav-menu-nested nav">
                        <a
                            class="nav-link"
                            href="layout-static.html"
                            >Customer</a
                        >
                        <a
                            class="nav-link"
                            href="layout-sidenav-light.html"
                            >Vendor & Supplier</a
                        >
                        <a
                            class="nav-link"
                            href="layout-sidenav-light.html"
                            >Lease</a
                        >
                    </nav>
                </div>
                <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseLayouts"
                    aria-expanded="false"
                    aria-controls="collapseLayouts"
                >
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-file"></i>
                    </div>
                    Litigation
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div
                    class="collapse"
                    id="collapseLayouts"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion"
                >
                    <nav class="sb-sidenav-menu-nested nav">
                        <a
                            class="nav-link"
                            href="layout-static.html"
                            >Legal Litigasi 1</a
                        >
                        <a
                            class="nav-link"
                            href="layout-sidenav-light.html"
                            >Legal Litigasi 2</a
                        >
                        <a
                            class="nav-link"
                            href="layout-sidenav-light.html"
                            >Tim CS</a
                        >
                        <a
                            class="nav-link"
                            href="layout-sidenav-light.html"
                            >Legal Manager</a
                        >
                    </nav>
                </div>
                <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseLayout"
                    aria-expanded="false"
                    aria-controls="collapseLayouts"
                >
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-file"></i>
                    </div>
                    Permit
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div
                    class="collapse"
                    id="collapseLayout"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion"
                >
                    <nav class="sb-sidenav-menu-nested nav">
                        <a
                            class="nav-link"
                            href="{{ route('permit-index') }}"
                            >Reklame Baru</a
                        >
                        <a
                            class="nav-link"
                            href="{{ route('headDept-index') }}"
                            >Kepala Departemen User</a
                        >
                        <a
                            class="nav-link"
                            href="{{ route('inpg-index') }}"
                            >INPG</a
                        >
                        <a
                            class="nav-link"
                            href="{{ route('close-index') }}"
                            >Close</a
                        >
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>
