{{View::make('Templates.header')}}

<form class="container" style="width: 20rem;margin-top:5rem;">
    <h1 class="text-center" style="margin-bottom: 2rem;">Registrarse</h1>
    <!-- Rut input -->
    <div class="form-outline">
        <input type="text" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">Rut</label>
    </div>

    <!-- Nombre input -->
    <div class="form-outline">
        <input type="text" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Nombre</label>
    </div>

    <!-- Apellidos input -->
    <div class="form-outline">
        <input type="text" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Apellidos</label>
    </div>
    
    <!-- Correo input -->
    <div class="form-outline">
        <input type="email" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Correo</label>
    </div>
    
    <!-- Telefono input -->
    <div class="form-outline">
        <input type="text" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Teléfono</label>
    </div>

    <!-- Dirección input -->
    <div class="form-outline mb-3">
        <input type="text" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Dirección</label>
    </div>

    <!-- Submit button -->
    <button type="button" class="btn btn-primary btn-block mb-4" style="margin-left: 6rem;">Registrarse</button>

</form>


{{View::make('Templates.footer')}}