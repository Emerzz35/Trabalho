<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
</head>
<body>
    <form action="{{route('produto.store')}}" method="post">
        @csrf
        <label for="">Nome: </label>
        <input type="text" name="name" id="">

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