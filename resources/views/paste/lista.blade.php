<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach($tarefas as $tarefa)
        <li>{{$tarefa}}</li>
      @endforeach
    </ul>
  </body>
</html>
