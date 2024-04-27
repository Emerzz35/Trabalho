<ul>
@foreach($produtos as $item)
<a href="{{route('produto.show',$item->id)}}">
<li>{{$item->name}} - R${{$item->price}}</li>
</a>
@endforeach
</ul>