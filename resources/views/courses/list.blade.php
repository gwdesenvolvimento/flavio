<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <a href="/cursos/adicionar"> Novo Curso </a>

  <form method="GET" action="/cursos">
    <label> Quantos por página</label>
    <select name="per_page">
      <option value="1">1</option>
      <option value="10">10</option>
      <option value="15">15</option>
      <option value="25">25</option>
    </select>
    <input type="submit" value="Filtrar">
  </form>

  <table border="1">
    <thead>
      <tr>
        <th width="100px">Id</th>
        <th width="100px">Nome</th>
        <th width="100px">Ações</th>
      </tr>
    </thead>
    <tbody>
      @forelse($courses as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>
            <a href="/cursos/adicionar/{{$item->id}}">
              Editar
            </a>
            <a href="/cursos/deletar/{{$item->id}}">
              Deletar
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3"> Não há registros</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  {{$courses->links()}}

</body>
</html>