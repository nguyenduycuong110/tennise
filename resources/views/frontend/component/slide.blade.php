@php
    $slideKeyword = App\Enums\SlideEnum::MAIN;
@endphp
@if(isset($slides[$slideKeyword]['item']) && count($slides[$slideKeyword]['item']))
    <div class="panel-slide page-setup" data-setting="{{ json_encode($slides[$slideKeyword]['setting']) }}">
        <div class="uk-container uk-container-center">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($slides[$slideKeyword]['item'] as $key => $val )
                        <div class="swiper-slide">
                            <div class="slide-item">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-medium-1-2">
                                        <div class="text">
                                            <h3 class="heading-2 wow fadeInDown" data-wow-duration="1s"><span>{{ $val['description'] }}</span></h3>
                                            <h2 class="heading-1 wow fadeInLeft" data-wow-delay="0.3s"><span>{!! $val['name'] !!}</span></h2>
                                            <div class="alt wow fadeInRight" data-wow-delay="0.6s">
                                                <p>{{ $val['alt'] }}</p>
                                            </div>
                                            <div class="group-btn">
                                                <div class="uk-flex uk-flex-middle">
                                                    <a href="" title="" class="btn btn-view wow pulse" data-wow-iteration="3">
                                                        <span>Xem khóa học</span>
                                                    </a>
                                                    <a href="" title="" class="btn btn-register wow tada" data-wow-delay="1s">
                                                        <span>Đăng ký ngay</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <a href="{{ $val['canonical'] }}" title="" class="image img-scaledown wow fadeInRight" data-wow-delay="0.8s">
                                            <img src="{{ $val['image'] }}" alt="{{ $val['name'] }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif