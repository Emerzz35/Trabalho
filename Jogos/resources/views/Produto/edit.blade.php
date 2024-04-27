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
        <input type="text" name="description" id="">
        
        <label for="">Categoria</label>
        <input type="text" name="category" id="">

        <label for="">Preço</label>
        <input type="number" name="price" id="">

        <input type="submit" value="Criar Produto">
    </form>
    
</body>
</html>