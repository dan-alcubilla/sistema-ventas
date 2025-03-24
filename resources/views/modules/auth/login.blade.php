@extends('layouts.login')

@section('titulo', $titulo)
@section('contenido')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="#" class="logo d-flex align-items-center w-auto">
                        <img src="assets/img/logo.png" alt="">
                        <span class="d-none d-lg-block">Ventas y Almacén</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login de Usuarios</h5>
                            <p class="text-center small">Ingresa tu usuario y contraseña</p>
                        </div>

                        <form class="row g-3 needs-validation" novalidate>

                            <div class="col-12">
                            <label for="email" class="form-label">Correo</label>
                            <div class="input-group has-validation">
                                <input type="text" name="email" class="form-control" id="email" required>
                                <div class="invalid-feedback">Escribe tu correo electrónico.</div>
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                            <div class="invalid-feedback">Por favor ingresa tu contraseña!</div>
                            </div>

                            <div class="col-12">
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div> --}}
                            </div>
                            <div class="col-12">
                            <button target="_blank" class="btn btn-primary w-100" type="submit">Ingresar</button>
                            </div>
                        </form>

                        </div>
                    </div>

                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                        Designed by <a href="https://sensorama.systems/">Sensorama</a>
                    </div>

                    </div>
                </div>
                </div>

            </section>

        </div>
    </main>
@endsection