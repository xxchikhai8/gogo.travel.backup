<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- https remove when up host -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.3.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>@yield('title')</title>
</head>

<body class="h-100">
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <h3 class="logo"> GoGo Travel</h3>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="headertext"> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="headertext"> History</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- insert pHp -->
                        <li class="nav-item">
                            <a class="headertext-right" data-bs-toggle="modal" data-bs-target="#sign-in-modal"> Sign
                                in</b>
                        </li>
                        <li class="nav-item">
                            <a class="headertext-right" data-bs-toggle="modal" data-bs-target="#sign-in-modal"> Sign
                                up</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle headertext-right" data-bs-toggle="dropdown"> Hi,
                                xxchikhai8</a>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><a class="dropdown-item">Account</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item">Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="sign-in-modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel">Sign in</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- ... --}}
                        <div>
                            <h6>New to GoGo! <a role="button" data-bs-toggle="modal" data-bs-target="#sign-up-modal">
                                    Create an account.</a></h6>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="sign-up-modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel">Sign up</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- ... --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#sign-in-modal">Sign in</button>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid px-4">
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="row mt-3 text-center">
            <div class="col-md">
                <span>Copyright <i class="fa-regular fa-copyright"></i>&nbsp;2023 <b>Le Chi Khai</b>.</span>
            </div>
        </div>
    </footer>
</body>

</html>
