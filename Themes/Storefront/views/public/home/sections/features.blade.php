@if ($features->isNotEmpty())
    <section class="features-wrapper clearfix">
<div class="container">
        @each('public.home.sections.partials.feature', $features, 'feature')
        </div>
    </section>
@endif
