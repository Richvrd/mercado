{{View::make('Templates.header')}}

<section class="py-5 my-5" >
    <div class="container">
        <h1 class="mb-5">Perfil Comprador</h1>
        <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            <div class="profile-tab-nav border-right p-md-5">
                <div class="p-4">
                    <div class="img-circle text-center mb-3">
                        <img src="imagenes/user.png" alt="Image" class="shadow" style="width: 10rem;">
                    </div>
                    <h4 class="text-center">{{Auth::user()->name}}</h4>
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                        <i class="bi bi-person-circle"></i>
                        Cuenta
                    </a>
                    <a class="nav-link" id="password-tab" data-toggle="pill" href="#passwordd" role="tab" aria-controls="password" aria-selected="false">
                        <i class="bi bi-shield-lock"></i>
                        Password
                    </a>
                    
                </div>
            </div>
            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <h3 class="mb-4">Configuración de Cuenta</h3>
                    <form action="" method="POST">
                    @csrf 
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label>Rut</label>
                                <input type="text" class="form-control" value="{{Auth::user()->rut}}" disabled>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Apellido</label>
                                <input type="text"  class="form-control" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="text" id="email" class="form-control" value="{{Auth::user()->email}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Telefono</label>
                                <input type="text" id="phone" class="form-control" value="{{Auth::user()->phone}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Dirección Local</label>
                                <input type="text" id="address" class="form-control" value="{{Auth::user()->address}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Preferencia Productos</label>
                                <input type="text" class="form-control" value="Ropa de Vestir">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="4">Tengo una pequeña tienda de ropa</textarea>
                            </div>
                        </div>
                    </div>
                    </form>
                        
                    <div>
                
                        <a class="btn btn-primary" href="">Actualizar</a>
                        <a href=""> ACTUALIZAR OTRA FORMA</a>
                        <button class="btn btn-light mt-2">Cancelar</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="passwordd" role="tabpanel" aria-labelledby="password-tab">
                    <h3 class="mb-4">Password Settings</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Old password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>New password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm new password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>


{{View::make('Templates.footer')}}