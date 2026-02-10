@if(request('search') && isset($searchResults))
<div class="border mt-2 p-2 bg-white">
    @if($searchResults->count() > 0)
        @foreach($searchResults as $product)
            <div class="p-1 border-b">
                <a href="/product/{{ $product->id }}">
                    {{ $product->name }}
                </a>
            </div>
        @endforeach
    @else
        <p>No results found.</p>
    @endif
</div>
@endif
