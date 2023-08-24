<x-layout>
    

    <h1 class="text-center" style="margin-top: 8%">Presto.it : Dettagli</h1>
    
    <section class="section container my-5">
        <div class="row justify-content-center">
            <div class="col col-md-8 my-5">
                <div class="">
                    <div class="card">
                        <div class="content">
                            
                        
                            
                            
                            <!-- Inizio section Carousel -->
                            
                            
                            <!-- Slider main container -->
                            <div class="container-fluid backcont">
                                <h1  style="color:white" class="text-center text-uppercase title-shadow">{{ $announcement->title }}</h1>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="swiper mySwiper">
                                            @if(count($announcement->images)>0)
                                                <div class="swiper-wrapper">
                                                    @foreach($announcement->images as $image)
                                                        <div class="swiper-slide @if($loop->first)active @endif">
                                                            <img class="imgSection immaginiCarousel" src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="..."/>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img class="title-shadow imgSection immaginiCarousel" src="{{!$announcement->images()->get()->isEmpty() ? $anouncement->images()->first()->getUrl(400,300) : 'https://picsum.photos/250/200'}}" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="title-shadow imgSection immaginiCarousel" src="{{!$announcement->images()->get()->isEmpty() ? $anouncement->images()->first()->getUrl(400,300) : 'https://picsum.photos/250/200'}}" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="title-shadow imgSection immaginiCarousel" src="{{!$announcement->images()->get()->isEmpty() ? $anouncement->images()->first()->getUrl(400,300) : 'https://picsum.photos/250/200'}}" />
                                                    </div>
                                                </div>
                                            @endif
                                        <div class="swiper-pagination"></div>
                                    </div>
                                        
                                </div>
                                    
                            </div>
                                {{-- Fine Carosello --}}
                                
                                
                                <h2 style="color:white" class="text-center title-shadow text-uppercase">{{ $announcement->title }}</h2>
                                <h3  style="color:white" class="text-center title-shadow text-uppercase">{{ $announcement->category->name }}</h3>
                                <p  style="color:white"  class="lead text-center title-shadow text-uppercase">{{ $announcement->price }}€</p>
                                <p  style="color:white" class="text-truncate text-center title-shadow text-uppercase"> {{ $announcement->body }}</p>
                                <p class="text-center text-uppercase title-shadow"><span style="color:black">Pubblicato da:</span> <span style="color:white">{{$announcement->user->name}}</span></p>
                                <a  style="color:white" class="button text-center  btn1 btn btn-outline-dark" href="{{ route('announcement_index') }}">Torna Indietro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    </x-layout>
    