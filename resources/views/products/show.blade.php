<x-layout>
    <div style="display:flex; align-items:center; justify-content:center;">
        <h1>{{$product->name}}</h1><br>
        <p>{{$product->slug}}</p><br>
        <h4>{{$product->description}}</h4><br>
        <p>{{$product->price}}</p><br>
        <h6>{{$product->created_at}}</h6><br>
    </div>
</x-layout>