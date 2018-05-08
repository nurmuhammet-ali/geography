@extends('layouts.app')

@section('content')
    @include('components.carousel')

    <section class="cards">
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l3">
                    <a href="{{ url('quizes') }}">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/cards-1.jpg">
                                <span class="card-title">Geografiýa testler</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col s12 m6 l3">
                    <a href="{{ url('categories') }}">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/cards-2.jpg">
                                <span class="card-title">Geografiýa sapaklar</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col s12 m6 l3">
                    <a href="{{ url('facts') }}">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/cards-3.jpg">
                                <span class="card-title">Gyzykly maglumatlar</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col s12 m6 l3">
                    <a href="countries">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/cards-4.jpg">
                                <span class="card-title">Ýurtlar</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us z-depth-2">
        <div class="container">
            <h2 class="about-us-txt">Biz barada</h2>
            <div class="row">
                <div class="col s12 m6 l6">
                    <div class="user">
                        <img src="img/avatar.png" alt="">

                        <div class="info">
                            <h5 class="name">Ejegül Bekdurdyýewa</h5>
                            <p class="school">Aşgabat şäheriniň 86-njy ýöriteleşdirilen mekdebiniň 9-njy synp okuwçysy</p>
                        </div>
                    </div>      
                </div>
                <div class="col s12 m6 l6">
                    <div class="user">
                        <img src="img/avatar.png" alt="">

                        <div class="info">
                            <h5 class="name">Gülşat Myradowa</h5>
                            <p class="school">Aşgabat şäheriniň 86-njy ýöriteleşdirilen mekdebiniň 9-njy synp okuwçysy</p>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <img src="/img/buildings.png" alt="Buildings Image">
    </section>
@stop
