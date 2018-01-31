<div class="container">
    <div class="row">
        <div class="col-md-12 section-heading text-center">
            <h3 class="single-animate animate-pricing-1">Тарифи</h3>
            <h2 class="to-animate fadeInUp animated"></h2>
            {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2 subtext single-animate animate-pricing-2">--}}
            {{--<h3>Багатоквартирні будинки,Приватний сектор,Бізнес</h3>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="row">
        @foreach($tarif as $item)

            <div class="col-md-3 col-sm-6">
                <div class="price-box to-animate myprice-box">
                    <h2 class="pricing-plan">{!! $item->plan !!}</h2>
                    <div class="price"><sup class="currency">грн</sup>{!! $item->price !!}
                        <small></small>
                    </div>
                    {{--<p>Basic customer support for small business</p>--}}
                    <hr>
                    <ul class="pricing-info">
                        <li>{!! $item->priceinfo !!}</li>
                    </ul>
                </div>
            </div>

        @endforeach
    </div>
</div>