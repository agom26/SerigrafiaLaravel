<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Eliminar rol</title>
</head>
<body>
    <header>
        @include('dashboard.partials.nav-header-main')
    </header>

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                  <h1>Eliminar un rol</h1>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    <div class="alert alert-danger" role="alert">
                        ¿Está seguro de eliminar este registro?

                        <table class="table" style="background-color: white">
                            <thead>
                                <th>Id</th>
                                <th>Nombre</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$roles->id}}</td>
                                    <td>{{$roles->nombre}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        
                        <form action="{{ route('roles.destroy',$roles->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('roles.index')}}" class="btn btn-info">Regresar</a>
                            <button class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                            
                       
                      </div>
                  </p>
                </div>
              </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>