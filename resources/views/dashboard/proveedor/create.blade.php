<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Crear proveedor</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-main')
        
    </header>
    
    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h1>Ingreso de proveedores</h1>
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <form action="{{route('proveedores.store')}}" method="post">
    
                        @csrf
            
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif
            
                        
                            <label for="" >Nombre</label>
                            <input type="text" name="nombre" class="form-control" >
                            @error('nombre')
                                <small class="text-dark">{{ $message }}</small>
                            @enderror
                             
                            
                            <label for="" >Correo</label>
                            <input type="text" name="correo" class="form-control">
                            @error('correo')
                                <small class="text-dark">{{ $message }}</small>
                            @enderror
                            
                            
                            <label for="" >Telefono</label>
                            <input type="text" name="telefono" class="form-control">
                            @error('telefono')
                                <small class="text-dark">{{ $message }}</small>
                            @enderror
                            
        
                            <label for="" >Estado</label>
                            <input type="text" name="estado" class="form-control">
                            @error('estado')
                                <small class="text-dark">{{ $message }}</small>
                            @enderror
                            <br>
                            
                            <a href="{{route('proveedores.index')}}" class="btn btn-info">Regresar</a>
                            <button class="btn btn-primary">Enviar</button>
                        
                    </form>
                  </div>
                    
                  
                </div>
              </div>

            
            </div>
    </main>
    
    <footer>

    </footer>
</body>
</html>