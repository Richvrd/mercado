{{View::make('Templates.header')}}

<form class="container" action="/registrarse" method="POST" style="width: 20rem;margin-top:5rem;">
    @csrf
    <h1 class="text-center" style="margin-bottom: 2rem;">Registrarse</h1>
    @include('mensajes')
    <!-- Rut input -->
    <div class="form-floating mb-2">
        <input type="text" placeholder="Rut" name="rut" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">Rut</label>
    </div>

    <!-- Nombre input -->
    <div class="form-floating mb-2">
        <input type="text" placeholder="Nombre" name="name" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Nombre</label>
    </div>

    <!-- Apellidos input -->
    <div class="form-floating mb-2">
        <input type="text" placeholder="Apellido" name="last-name" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Apellido</label>
    </div>
    
    <!-- Correo input -->
    <div class="form-floating mb-2">
        <input type="email" placeholder="Correo" name="email" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Correo</label>
    </div>
    
    <!-- Telefono input -->
    <div class="form-floating mb-2">
        <input type="text" placeholder="Telefono" name="phone" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Teléfono</label>
    </div>

    <!-- Dirección input -->
    <div class="form-floating mb-3">
        <input type="text" placeholder="Dirección" name="address" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Dirección</label>
    </div>

    <!-- Dirección input -->
    <div class="form-floating mb-3">
        <input type="password" placeholder="Contraseña" name="password" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Contraseña</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4" style="margin-left: 6rem;">Registrarse</button>

</form>


{{View::make('Templates.footer')}}