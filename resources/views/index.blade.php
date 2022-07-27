<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Todo List</title>
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="list">
  <div class="card">
 <h3>Todo List</h3>
 <p class="todo">
 <form action="/todos" method="POST" class="flex between mb-30">
   @csrf
   <input name="text" placeholder="" class="input-add">
   <button class="button-add">追加</button>
 </form>


  <table>   
    <tbody>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach ($todos as $todo)
    <tr>
        
      <td>
         
        {{ $todo->created_at }}
      </td>
      
       <td>
         <form action="/edit/{{ $todo->id }}" style="display: inline;" method="POST">    
         <input type="text" class="input-update" name="text" value="{{$todo->text}}">
              @csrf
       </td>
       <td>
         <button class="button-update">更新</button>
         </form>   
　　　　</td>
         
        
          <td>
            
             <form action="/todos/{{ $todo->id }}"style="display: inline;" method="POST">
             @csrf
             @method('DELETE')
            <button class="button-delete">削除</button>
            </form>
            @endforeach
          </td>
      </tr>
   </table>
     
 </tbody>
 </div>
 </div>
</body>
</html>