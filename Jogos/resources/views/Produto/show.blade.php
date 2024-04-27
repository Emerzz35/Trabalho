<ul>
<li>{{$produto->name}}</li>
<li>{{$produto->description}}</li>
<li>{{$produto->category}}</li>
<li>{{$produto->price}}</li>
<a href="{{route('produto.edit',$produto->id)}}"><button>Editar Produto</button></a>
<form action="{{route('produto.destroy',$produto->id)}}" method="post">
    @csrf
    @method('delete')
    <button>Deletar</button></form>
</ul>