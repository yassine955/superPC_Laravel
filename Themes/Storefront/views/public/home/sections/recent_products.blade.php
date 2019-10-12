@if ($recentProducts->isNotEmpty())
    <section class="section-wrapper clearfix">
        <div class="section-header">
            <h3>{{ setting('storefront_recent_products_section_title') }}</h3>
            <p>De ultieme Gaming Accessoires speciaal voor jou!</p>
        </div>

        <div class="recent-products">

            <div class="row">
            
                
                    @each('public.products.partials.product_card', $recentProducts, 'product')
            
            </div>

        </div>
    </section>
@endif
