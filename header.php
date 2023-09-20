<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block" id="top">
    <div class="row gx-0">
        <div class="col-lg-12 text-end text-lg-end mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px">
                <small class="me-3 text-light">
                    <a href="tel:+91 8618180342"><i class="fa fa-phone-alt me-2"></i>+91 8618180342</a>
                </small>
                <small class="text-light">
                    <a href="mailto:info@eiondigitalsolution.com">
                        <i class="fa fa-envelope-open me-2"></i>
                        info@eiondigitalsolution.com
                    </a>
                </small>
            </div>
        </div>
        <!-- <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                        class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div> -->
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="/" class="site-logo navbar-brand p-0">Eion Digital Solution</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link <?php echo $active_link === 'Home' ? 'active' : '' ?>">Home</a>
                <a href="about"
                    class="nav-item nav-link <?php echo $active_link === 'About' ? 'active' : '' ?>">About</a>
                <div class="nav-item dropdown">
                    <a href="javascript:void(0)"
                        class="nav-link dropdown-toggle  <?php echo $active_link === 'Services' ? 'active' : '' ?>"
                        data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu m-0">
                        <a href="intershop" class="dropdown-item">Intershop Development</a>
                        <a href="web" class="dropdown-item">Website Development</a>
                        <a href="app" class="dropdown-item">Mobile Application Development</a>
                        <a href="seo" class="dropdown-item">Digital Marketing</a>
                        <a href="quality-assurance" class="dropdown-item">QA and Automation</a>
                    </div>
                </div>
                <a href="projects"
                    class="nav-item nav-link <?php echo $active_link === 'Projects' ? 'active' : '' ?>">Projects</a>
                <a href="contact"
                    class="nav-item nav-link <?php echo $active_link === 'Contact' ? 'active' : '' ?>">Contact</a>
            </div>
        </div>
    </nav>
</div>