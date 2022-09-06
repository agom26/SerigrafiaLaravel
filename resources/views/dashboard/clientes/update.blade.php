<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Editar cliente</title>
</head>
<body>
    <header>

    </header>

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h1>Actualización de cliente</h1>
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <form action="{{route('clientes.update',$clientes->id)}}" method="POST">
    
                        @csrf
                        @method("PUT")
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif
            
                        
                            <label for="" >Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{$clientes->nombre}}" >
                            @error('nombre')
                                <small class="text-dark">{{ $message }}</small>
                            @enderror
                             
                            
                            <label for="" >Nit</label>
                            <input type="text" name="nit" class="form-control" value="{{$clientes->nit}}" >
                            @error('correo')
                                <small class="text-dark">{{ $message }}</small>
                            @enderror
                            
                            
                            <label for="" >Telefono</label>
                            <input type="text" name="telefono" class="form-control" value="{{$clientes->telefono}}" >
                            @error('telefono')
                                <small class="text-dark">{{ $message }}</small>
                            @enderror
                            
        
                            
                            <br>
                            
                            <a href="{{route('clientes.index')}}" class="btn btn-info">Regresar</a>
                            <button class="btn btn-primary">Actualizar</button>
                        
                    </form>
                  </div>
                    
                  
                </div>
              </div>

            
            </div>
    </main>
</body>
</html>