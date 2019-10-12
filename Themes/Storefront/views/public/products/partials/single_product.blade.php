<a href="{{ route('products.show', $product->slug) }}" class="single-product">
    @if (! $product->base_image->exists)
        <div class="image-placeholder">
            <i class="fa fa-picture-o" aria-hidden="true"></i>
        </div>
    @else
        <div class="image-holder">
            <img src="{{ $product->base_image->path }}">
        </div>
    @endif

    <div class="single-product-details">
        <span class="product-name">{{ $product->name }}</span>
    
        <span class="product-price">
            {{ product_price($product) }}
        </span>
        
        <span class="recent_viewed_home" ><i class="fa fa-check-circle" aria-hidden="true"></i> Morgen in huis</span>

    </div>
</a>
