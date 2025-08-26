@extends('frontend.homepage.layout')
@section('content')
 @php
    $breadcrumbImage = !empty($productCatalogue->album) ? json_decode($productCatalogue->album, true)[0] : asset('userfiles/image/system/breadcrumb.png');
    @endphp
<div class="product-container">
    <div class="cources-info">
        <div class="uk-container uk-container-center uk-container-1260">
            <div class="panel-body">
                @include('frontend.product.product.component.detail', ['product' => $product, 'productCatalogue' => $productCatalogue])
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-medium-3-4">
                    <div class="tabs-content">
                        
                    </div>
                </div>
                <div class="uk-width-medium-1-4">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
