<x-layout>
    
    <header class="container-fluid bgimg d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 justify-content-center mb-5">
                <h1 class="title-shadow paragrafo2 text-center text-white display-1">Presto.it</h1>
                <form class="search-form" action="{{route('announcements.search')}}" method="GET">
                    <input type="search" name="searched" class="text-center search-input" placeholder="Cerca prodotti...">
                    <br>
                    <div class="text-center my-4">
                        <button type="submit" class="btn1 paragrafo2 btn search-button btn-dark ">Cerca</button>
                    </div>
                </form>
                @if (session('access.denied'))
                    <div class="alert alert-danger">
                        {{ session('access.denied') }}
                    </div>
                @endif
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </header>
    <hr class="border border-dark border-3 opacity-80 m-0">

    <div class="container-fluid paragraph-container my-3">
        <div class="row justify-content-center">
            <h3 class="text-center paragrafo display-3 my-3">Benvenuti nel nostro elegante negozio di moda!</h3>
            <div class="col-12">
                <p class="text-center" > Scopri uno straordinario mondo di stile e tendenze con il nostro esclusivo sito e-commerce.</p>
                <video loop autoplay muted width="100%" height="360">
                    <source src="/media/Vecchietta.mp4" type="video/mp4">
                </video>

            
            </div>
        </div>
    </div>
    
    {{-- Cards Annunci --}}
    <div class="container">
        <h3 class="text-center paragrafo display-3">I nostri Annunci più recenti</h3>
        <div class="row">
            
            @foreach($announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-5">
                <div data-aos="zoom-in-down" data-aos-duration="2000">
                    <div class="containerx d-flex justify-content-center">
                        <div class="card">
                            <div class="content">
                                <h2 class="mb-3">{{$announcement->title}}</h2>
                                <img class="imgSection img-fluid" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : "https://picsum.photos/250/200"}}" style="width: 250px; height: 200px">
                                <h3 class="paragrafo my-3">{{$announcement->category->name}}</h3>
                                <p class="text-truncate">{{$announcement->body}}</p>
                                <a class="welcomebtn" href="{{route('announcement_detail', compact('announcement'))}}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    {{-- Fine Cards Annunci --}}
    <hr class="border border-dark border-3 opacity-80 m-0">

    <h1 class="paragrafo mt-5 text-center">Il Sito</h1>

    <section class="container-fluid marginSection">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-5 fade-items" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <p class="paragrafo text-center lh-lg "><strong class="text-dark lh-lg fs-3">Offerte Irresistibili:</strong> Cerchiamo costantemente offerte vantaggiose per farti risparmiare sui tuoi acquisti preferiti. Dai saldi stagionali alle promozioni esclusive, ti garantiamo capi di alta moda e accessori da collezione . Siamo la destinazione di tutto ciò che è introvabile , unisciti a noi per scoprire prodotti unici e rari che non troverai altrove.</p>
            </div>
            <div class="col-12 col-lg-4">
                <img class="imgSection mx-auto d-flex" src="https://picsum.photos/350" alt="">
            </div>
        </div>
    
        <div class="row justify-content-center align-items-center my-5">
            <div class="col-12 col-lg-4">
                <img class="imgSection mx-auto d-flex" src="https://picsum.photos/351" alt="">
            </div>
            <div class="col-12 col-lg-5 fade-items" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <p class="paragrafo text-center lh-lg "><strong class="text-dark lh-lg fs-3">Registrati:</strong>per i clienti registarti , vantaggi esclusivi , promozioni e l'opportunità di vendere i propri prodotti creando annunci. Clicca su (Ciao Utente) per registrarti e completa il breve modulo con le tue informazioni di base.Accedi al tuo nuovo account e inizia a esplorare il mondo di prodotti di alta qualità , occasioni straordinarie e inizia a caricare i tuoi prodotti.</p>
            </div>
    
        </div>


        <div class="row justify-content-center align-items-center my-5">
            <div class="col-12 col-lg-5 fade-items" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <p class="paragrafo text-center lh-lg "><strong class="text-dark lh-lg fs-3">Unisciti alla nostra squadra:</strong>Consulta la nostra sezione lavora con noi.Unisciti alla nostra squadra come revisor e aiutaci a plasmare l'esperienza dei nostri clienti. Entra nel mondo dietro le quinte dell'e-commerce, metti alla prova i tuoi occhi attenti ai dettagli e contribuisci a garantire la qualità dei nostri prodotti. </p>
            </div>
            <div class="col-12 col-lg-4">
                <img class="imgSection mx-auto d-flex" src="https://picsum.photos/352" alt="">
            </div>
        </div>

    </section>


<hr class="border border-dark border-3 opacity-80">

<!-- Inizio section1 numeri Casuali -->
<div class="container-fluid spazio mt-5">
    <div class="row text-center">
        <div class="col-12 col-md-6">
            <h2 class="my-5">Vendite giornaliere</h2>
            <p class="fs-1 text-bold ff-title" id="primoNumero" >0</p>
            <img class="rounded-circle immaginitonde my-5  border border-4 p-2 border-dark" src="https://picsum.photos/352" alt="">
        </div>
        <div class="col-12 col-md-6 ff-title">
            <img class="rounded-circle immaginitonde my-5 border border-4 p-2 border-dark" src="https://picsum.photos/352" alt="">
            <h2 class="my-5">Visite odierne</h2>
            <p class="fs-1 text-bold" id="secondoNumero">0</p>
            
        </div>
    </div>
</div>
<!-- Fine section1 numeri Casuali -->

<hr class="border border-dark border-3 opacity-80 m-0">
</x-layout>