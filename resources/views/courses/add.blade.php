<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <form method="POST" action="/cursos/gravar">
    @csrf
    
    <input type="hidden" name="id" value="{{$curso->id}}">

    <label for="name">Nome do Curso</label>
    <input id="name"type="text" name="name" placeholder="Nome do Curso" value="{{$curso->name}}">

    <input type="submit" value="Gravar">
  </form>

</body>
</html>