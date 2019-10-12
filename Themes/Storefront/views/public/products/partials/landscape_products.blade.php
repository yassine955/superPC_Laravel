@if ($products->isNotEmpty())
    <section class="landscape-products-wrapper">
        <div class="section-header">
            <h3>{{ $title }}</h3>
            
            
        </div>

        <div class="row">
            
                @foreach ($products as $product)
                    <div class="col-md-3">
                        @include('public.products.partials.single_product')
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
