<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
</head>

<body class="d-flex flex-column h-100">
    <header class="mb-4">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand d-flex align-items-center fw-bold" href="/"><img
                            src="/assets/img/GoGoLogo.svg" width="42px" height="42px" class="me-2"><span
                            class="h2 mb-0">GoGo Travel</span></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/history">History</a>
                        </li>
                    </ul>
                    @guest
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#sign-in-modal"
                                type="button">Sign
                                in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#sign-up-modal"
                                type="button">Sign
                                up</a>
                        </li>
                    </ul>
                    @endguest
                    @auth
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
                    @endauth
                </div>
            </div>
            <div class="modal fade" id="sign-in-modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalLabel">Sign in</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- ... --}}
                            <div>
                                <h6>New to GoGo Travel! <a role="button" data-bs-toggle="modal"
                                        data-bs-target="#sign-up-modal" class="text-underline">
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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
        </nav>
    </header>
    <main class="flex-shrink-0">
        <div class="container p-2 mb-4">
            @yield('content')
        </div>
    </main>
    <footer class="mt-auto p-4 text-bg-dark">
        <div class="row mb-2 text-center d-flex align-items-center">
            <span><img src="/assets/img/GoGoLogo.svg" width="48px" height="48px" class="me-2"><span class="mb-0 h4">GoGo Travel</span></span>
        </div>
        <div class="row text-center">
            <span>2023 &copy; GoGo Travel</span>
        </div>
    </footer>
    <script>
        $(function() {
            var path = window.location.href;
            $('a.nav-link').each(function() {
                if (this.href === path) {
                    $(this).addClass('active');
                }
            });
        });
    </script>
</body>

</html>
