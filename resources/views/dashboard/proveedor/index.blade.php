<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Proveedores</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-main')
        
    </header>

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h1>Proveedores</h1>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Listado de proveedores</h5>
                  <a href="{{route('proveedores.create')}}" class="btn btn-primary">Agregar nuevo proveedor </a>

                  <p class="card-text">

                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif

                    <div class="container">
                        <table class="table table-striped">
                            <Thead>
                                <body>
                                    <tr>
                                        <td>
                                            Id
                                        </td>
                                    
                                        <td>
                                            Nombre
                                        </td>
                                    
                                        <td>
                                            Correo
                                        </td>

                                        <td>
                                            Teléfono
                                        </td>

                                        <td>
                                            Estado
                                        </td>
                                    
                                        <td>
                                            Creacion
                                        </td>
                                    
                                        <td>
                                            Actualización
                                        </td>
            
                                        <td>
                                            Acciones
                                        </td>

                                    </tr>
                                    
                                </body>
            
                                {{-- recorrer arreglo --}}
                                {{-- la variable posts que se manda aqui se va a llamar post --}}
                                @foreach ($proveedores as $proveedor)
                                    <tr>
                                        <td>
                                            {{$proveedor->id}}
                                        </td>
                                    
                                        <td>
                                            {{$proveedor->nombre}}
                                        </td>
                                    
                                        <td>
                                            {{$proveedor->correo}}
                                        </td>

                                        <td>
                                            {{$proveedor->telefono}}
                                        </td>

                                        <td>
                                            {{$proveedor->estado}}
                                        </td>
                                    
                                        <td>
                                            {{$proveedor->created_at->format('d-m-Y')}}
                                        </td>
                                    
                                        <td>
                                            {{$proveedor->updated_at-> format('d-m-Y')}}
                                        </td>

                                        <td>
                                            <form action="{{ route("proveedores.edit",$proveedor->id) }}" method="GET">
                                            <button class="btn btn-warning">Editar</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route("proveedores.show",$proveedor->id) }}" method="GET">
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                    
            
                            </Thead>
                            {{$proveedores->links()}}
                        </table>
            
                        
            
                    </div>
              </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>