<x-layout>
    @push('styles')
        @vite("resources/css/products.css")
    @endpush

    <div class="products-container">
        <div class="products-grid">
            @foreach ($products as $product)
                <a href="/product/{{ $product->id }}" class="card-link">
                    <div class="card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <div class="card__content">
                            <div class="card__badge">{{ $product->slug }}</div>
                            <div style="--bg-color: #a78bfa" class="card__image"></div>
                            <div class="card__text">
                                <p class="card__title">{{ $product->name }}</p>
                                <p class="card__description">{{ $product->description }}</p>
                            </div>
                            <div class="card__footer">
                                <div class="card__price">${{ number_format($product->price, 2) }}</div>
                                <div class="card__button">
                                    <svg height="16" width="16" viewBox="0 0 24 24">
                                        <path
                                            stroke-width="2"
                                            stroke="currentColor"
                                            d="M4 12H20M12 4V20"
                                            fill="currentColor"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>