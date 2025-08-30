<div id="header" class="pc-header uk-visible-large">
    
</div>

<div class="mobile-header uk-hidden-large">
    <div class="mobile-upper">
        <div class="uk-container uk-container-center">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <div class="mobile-logo">
                    <a href="." title="{{ $system['seo_meta_title'] }}">
                        <img src="{{ $system['homepage_logo'] }}" alt="Mobile Logo">
                    </a>
                    <form action="tim-kiem" class="search">
                            <input type="text" name="keyword" placeholder="Tìm kiếm">
                    </form>
                </div>
                <div class="tool">
                    <div class="cart-link">
                        <a href="{{ write_url('gio-hang') }}" title="" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 576 512" class="w-5 h-5 cursor-pointer fill-bottom-nav-mb  box-content"><path d="M0 24C0 10.7 10.7 0 24 0h45.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5l-51.6-271c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24m128 440a48 48 0 1 1 96 0 48 48 0 1 1-96 0m336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96"></path></svg>
                        </a>
                    </div>
                    <div class="menu-link">
                        <a href="#mobileCanvas" class="mobile-menu-button" data-uk-offcanvas="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 448 512" class="w-6 h-6 cursor-pointer  pl-3 box-content"><path d="M0 88c0-13.3 10.7-24 24-24h400c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24m0 160c0-13.3 10.7-24 24-24h400c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24m448 160c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24h400c13.3 0 24 10.7 24 24"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation-mobile" data-uk-sticky>
        <ul class="uk-flex uk-flex-middle uk-list uk-clearfix uk-navbar-nav main-menu">
            <li>
                <a href="">
                    <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.1695 5.04384L4.16732 11.6345V18.7478C4.16732 18.932 4.24048 19.1086 4.37072 19.2389C4.50095 19.3691 4.67758 19.4423 4.86176 19.4423L9.72548 19.4297C9.90905 19.4288 10.0848 19.3552 10.2143 19.2251C10.3438 19.0949 10.4165 18.9188 10.4164 18.7352V14.5812C10.4164 14.397 10.4896 14.2204 10.6198 14.0901C10.7501 13.9599 10.9267 13.8867 11.1109 13.8867H13.8887C14.0728 13.8867 14.2495 13.9599 14.3797 14.0901C14.51 14.2204 14.5831 14.397 14.5831 14.5812V18.7322C14.5828 18.8236 14.6006 18.9141 14.6354 18.9986C14.6701 19.0831 14.7212 19.1599 14.7857 19.2247C14.8503 19.2894 14.9269 19.3407 15.0113 19.3758C15.0957 19.4108 15.1862 19.4288 15.2776 19.4288L20.1395 19.4423C20.3237 19.4423 20.5004 19.3691 20.6306 19.2389C20.7608 19.1086 20.834 18.932 20.834 18.7478V11.6298L12.8335 5.04384C12.7395 4.96802 12.6223 4.92668 12.5015 4.92668C12.3807 4.92668 12.2635 4.96802 12.1695 5.04384ZM24.8097 9.52344L21.1812 6.53255V0.520833C21.1812 0.3827 21.1263 0.250224 21.0287 0.152549C20.931 0.0548735 20.7985 0 20.6604 0H18.2298C18.0917 0 17.9592 0.0548735 17.8615 0.152549C17.7639 0.250224 17.709 0.3827 17.709 0.520833V3.67231L13.8231 0.47526C13.4502 0.168394 12.9823 0.000613431 12.4993 0.000613431C12.0164 0.000613431 11.5485 0.168394 11.1756 0.47526L0.189019 9.52344C0.136279 9.56703 0.0926449 9.62058 0.0606102 9.68104C0.0285755 9.7415 0.00876769 9.80768 0.00231864 9.8758C-0.0041304 9.94392 0.00290567 10.0126 0.0230248 10.078C0.043144 10.1434 0.0759519 10.2042 0.119574 10.2569L1.22634 11.6024C1.26985 11.6553 1.32336 11.6991 1.38381 11.7313C1.44426 11.7635 1.51047 11.7835 1.57864 11.79C1.64681 11.7966 1.71561 11.7897 1.7811 11.7696C1.84659 11.7496 1.90748 11.7168 1.96029 11.6732L12.1695 3.26432C12.2635 3.18851 12.3807 3.14717 12.5015 3.14717C12.6223 3.14717 12.7395 3.18851 12.8335 3.26432L23.0432 11.6732C23.0959 11.7168 23.1567 11.7496 23.2221 11.7697C23.2875 11.7898 23.3562 11.7969 23.4243 11.7904C23.4924 11.784 23.5586 11.7642 23.6191 11.7321C23.6795 11.7001 23.7331 11.6565 23.7767 11.6037L24.8835 10.2582C24.927 10.2052 24.9597 10.1441 24.9796 10.0784C24.9995 10.0128 25.0062 9.94379 24.9993 9.8755C24.9925 9.80722 24.9722 9.74096 24.9396 9.68054C24.9071 9.62012 24.8629 9.56673 24.8097 9.52344Z" fill="#FEE9B5"/>
                    </svg>
                </a>
            </li>
            @if(isset($menu['mobile-menu']))
                @foreach($menu['mobile-menu'] as $key => $val)
                    @php
                        $name = $val['item']->languages->first()->pivot->name;
                        $canonical = ($name == 'Trang chủ') ?  '' : write_url($val['item']->languages->first()->pivot->canonical, true, true);
                    @endphp
                    <li>
                        <a href="{{ $canonical }}" title="{{ $name }}">{{ $name }}</a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
<div id="mobileCanvas" class="uk-offcanvas offcanvas" >
    <div class="uk-offcanvas-bar" >
        @if(isset($menu['mobile']))
		<ul class="l1 uk-nav uk-nav-offcanvas uk-nav uk-nav-parent-icon" data-uk-nav>
			@foreach ($menu['mobile'] as $key => $val)
            @php
                $name = $val['item']->languages->first()->pivot->name;
                $canonical = write_url($val['item']->languages->first()->pivot->canonical, true, true);
            @endphp
			<li class="l1 {{ (count($val['children']))?'uk-parent uk-position-relative':'' }}">
                <?php echo (isset($val['children']) && is_array($val['children']) && count($val['children']))?'<a href="#" title="" class="dropicon"></a>':''; ?>
				<a href="{{ $canonical }}" title="{{ $name }}" class="l1">{{ $name }}</a>
				@if(count($val['children']))
				<ul class="l2 uk-nav-sub">
					@foreach ($val['children'] as $keyItem => $valItem)
                    @php
                        $name_2 = $valItem['item']->languages->first()->pivot->name;
                        $canonical_2 = write_url($valItem['item']->languages->first()->pivot->canonical, true, true);
                    @endphp
					<li class="l2">
                        <a href="{{ $canonical_2 }}" title="{{ $name_2 }}" class="l2">{{ $name_2 }}</a>
                    </li>
					@endforeach
				</ul>
				@endif
			</li>
			@endforeach
		</ul>
		@endif
	</div>
</div>
