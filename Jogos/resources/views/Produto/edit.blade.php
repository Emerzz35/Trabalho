<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
</head>
<body>
    <form action="{{route('produto.update', $produto->id)}}" method="post">
        @csrf
        @method('put')
        <label for="">Nome: </label>
        <input type="text" name="name" id="" value='{{$produto->name}}'>

        <label for="">Descrição: </label>
        <input type="text" name="description" id="" value='{{$produto->description}}'>
        
        <label for="">Categoria</label>
        <input type="text" name="category" id="" value='{{$produto->category}}'>

        <label for="">Preço</label>
        <input type="number" name="price" id="" value='{{$produto->price}}'>

        <input type="submit" value="Editar Produto">
    </form>
    
</body>
</html>