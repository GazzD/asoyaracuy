@extends('layouts.frontend')

@section('content')
	<div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img alt="Asoyaracuy" src="{!! asset('frontend/img/carousel/h4-slide.png') !!}">
					</li>
					<li>
						<img alt="Asoyaracuy" src="{!! asset('frontend/img/carousel/h4-slide2.png') !!}">
					</li>
					<li>
						<img alt="Asoyaracuy" src="{!! asset('frontend/img/carousel/h4-slide3.png') !!}">
					</li>
					<li>
						<img alt="Asoyaracuy" src="{!! asset('frontend/img/carousel/h4-slide4.png') !!}">
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Documentos</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Estado de cuenta</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Solicitudes</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Contacto</p>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Clasificados</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Eventos</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Estadisticas</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Directiva</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
@endsection