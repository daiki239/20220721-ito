<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Todo List</title>
</head>
<body>
 <h3>Todo List</h3>
 <form action="/todos" method="POST">
   @csrf
   <input name="text" placeholder="">
   <button type="submit">追加</button>
 </form>
<tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
 <ul>


  @foreach ($todos as $todo)
   <li>
     {{ $todo->text }}
    
     <form action="/edit/{{ $todo->id }}"
           style="display: inline;" 
           method="POST">
           
       @csrf
     
         <input name="text" placeholder="">
       <button type="submit">更新</button>
     </form>
   
   @endforeach




   @foreach ($todos as $todo)
   
     {{ $todo->text }}
     <form action="/todos/{{ $todo->id }}"
           style="display: inline;" 
           method="POST">
       @csrf
       @method('DELETE')
       <button type="submit">削除</button>
     </form>
   </li>
   @endforeach
 </ul>
</body>
</html>