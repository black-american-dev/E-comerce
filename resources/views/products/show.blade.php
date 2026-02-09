<x-layout>
    @push('styles')
        @vite("resources/css/product-detail.css")
    @endpush
    <x-button-back/>
    <div class="product-details">
        <div class="product-container">
            <div class="product__glow"></div>
            <div class="product__shine"></div>
            
            <div class="product__content">
                <!-- Left Column - Image Section -->
                <div class="product__image-section">
                    <div class="product__badge">{{ $product->slug }}</div>
                    <div class="product__image">
                        <!-- If you have an actual image, you can use: -->
                        <!-- <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"> -->
                    </div>
                </div>

                <!-- Right Column - Details Section -->
                <div class="product__details-section">
                    <div class="product__header">
                        <h1 class="product__title">{{ $product->name }}</h1>
                        <div class="product__price">${{ number_format($product->price, 2) }}</div>
                    </div>

                    <div class="product__description-section">
                        <h2 class="product__section-title">Description</h2>
                        <p class="product__description">{{ $product->description }}</p>
                    </div>

                    <div class="product__info-grid">
                        <div class="product__info-item">
                            <div class="product__info-label">Product ID</div>
                            <div class="product__info-value">{{ $product->slug }}</div>
                        </div>

                        <div class="product__info-item">
                            <div class="product__info-label">Availability</div>
                            <div class="product__info-value">
                                @if($product->stock > 10)
                                    <span class="product__stock-badge">In Stock ({{ $product->stock }})</span>
                                @elseif($product->stock > 0)
                                    <span class="product__stock-badge product__stock-badge--low">Low Stock ({{ $product->stock }})</span>
                                @else
                                    <span class="product__stock-badge product__stock-badge--out">Out of Stock</span>
                                @endif
                            </div>
                        </div>

                        <div class="product__info-item">
                            <div class="product__info-label">Category</div>
                            <div class="product__info-value">Electronics</div>
                        </div>

                        <div class="product__info-item">
                            <div class="product__info-label">Added</div>
                            <div class="product__info-value">{{ $product->created_at->format('M d, Y') }}</div>
                        </div>
                    </div>

                    <div class="product__actions">
                        <button class="product__button">
                            <svg class="product__button-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add to Cart
                        </button>
                        <button class="product__button product__button--secondary">
                            <svg class="product__button-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            Wishlist
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>