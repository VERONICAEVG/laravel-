<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

      <script src="{{asset('js/app.js')}}" defer></script>
      <link href="{{asset('css/app.js')}}" rel="stylesheet">

</head>
    <body>
      <form role="form" method="post" action="{{url('/productos')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="Producto">{{'Producto'}}</label>
                <input class="form-control" type="text" name="Producto" id="Producto">
            </div>
            <div class="form-group">
            <label for="Descripcion">{{'Descripcion'}}</label>
            <input class="form-control" type="text" name="Descripcion" id="Descripcion">
            </div>
            <div class="form-group">
            <label for="Precio">{{'precio'}}</label>
            <input class="form-control" type="intered" name="precio" id="precio">
            </div>
            <div class="form-group">
            <label for="Imagen">{{'imagen'}}</label>
            <input class="form-control" type="file" name="imagen" id="imagen">
            </div>
            <button type="submit">ACEPTAR</button>
        </form>
    </body>
</html>
