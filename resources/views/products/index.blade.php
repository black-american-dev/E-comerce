<x-layout>
    <div>
        @foreach ($products as $product)
            <div>
                <a href="/product/{{$product->id}}">
                    <h1>{{$product->name}}</h1><br>
                </a>
                <p>{{$product->slug}}</p><br>
                <h4>{{$product->description}}</h4><br>
                <p>{{$product->price}}</p><br>
                <h6>{{$product->created_at}}</h6><br>
            </div>
        @endforeach
    </div>
</x-layout>