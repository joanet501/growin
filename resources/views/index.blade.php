<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="assets/Logo-icon.svg">
    <link href="{{ asset('assets/Logo-icon.svg') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GrowIn'</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-dark d-flex justify-content-center align-items-center vh-100">


    <div
      class="bg-white p-5 rounded-5 text-secondary shadow"
      style="width: 25rem"

    >
      <div class="d-flex justify-content-center">
        <img
          src="assets/Logo_Circulo.png"
          alt="login-icon"
          style="height: 7rem"
        />
      </div>
      <div class="text-center fs-1 fw-bold">Bienvenido!</div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="input-group mt-4">
        <div class="input-group-text bg-dark">
          <img
            src="assets/username-icon.svg"
            alt="username-icon"
            style="height: 1rem"
          />

        </div>


        <input
            name="email"
          class="form-control bg-light"
          type="text"
          placeholder="Usuario"
          id="email"
          value="{{ old('email') }}"
        />
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text bg-dark">
          <img
            src="assets/password-icon.svg"
            alt="password-icon"
            style="height: 1rem"
          />
        </div>
        <input
        name="password"

          class="form-control bg-light"
          type="password"
          placeholder="Contraseña"
          id="password"
          value="{{ old('password') }}"
        />
      </div>



      <div class="d-flex justify-content-around mt-1">
        <div class="d-flex align-items-center gap-1">
          <input class="form-check-input" type="checkbox" />
          <div class="pt-1" style="font-size: 0.9rem">Recordar datos</div>
        </div>
        <div class="pt-1">
          <a
            href="#"
            class="text-decoration-none text-info fw-semibold fst-italic"
            style="font-size: 0.9rem"
            >Olvidé la contraseña</a
          >
        </div>
      </div>
      <button class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm" type="submit">
        Login
    </button>
</form>
      <div class="d-flex gap-1 justify-content-center mt-1">
        <div>¿Aun no tienes cuenta?</div>
        <a onclick="window.location='{{ url('/register-web') }}'" class="text-decoration-none text-info fw-semibold">Registrar</a>

        </div>

    </div>

  </body>
</html>
