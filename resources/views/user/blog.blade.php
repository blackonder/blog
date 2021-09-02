@extends('user/app')

@section('title','TeknoMetot Blog')
@section('sub-heading','Teknolojiye dair her şey')

@section('main-content')

   <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="{{ route('post') }}">
                        <h2 class="post-title">
                            Linux üzerinden Project Sandcastle ile iPhone’a Android 10 yükleme kılavuzu!
                        </h2>
                        <h3 class="post-subtitle">
                            Sandcastle Projesi, büyük bir çabanın sonucunda Corellium adlı bir ekip tarafından gerçekleştirildi.
                        </h3>
                    </a>
                    <p class="post-meta">Yazan: <a href="#">Önder</a> 25 Ağustos 2021</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            iOS 15 ile iPhone'unuza gelecek olan en büyük özellikler!
                        </h2>
                    </a>
                    <p class="post-meta">Yazan: <a href="#">Önder</a> 24 Ağustos 2021</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Samsung Galaxy Note 20 Ultra ile Galaxy S21 Ultra arasındaki farklar!
                        </h2>
                        <h3 class="post-subtitle">
                            Her ikisi de büyük telefonlar olan Galaxy S21 Ultra ile Note 20 Ultra arasındaki temel farklardan biri tasarımdır. Note, diğer telefonlardan farklı olarak keskin köşelere sahip dikdörtgen şeklinde geliyor ve tipik bir telefondan biraz daha geniştir.
                        </h3>
                    </a>
                    <p class="post-meta">Yazan: <a href="#">Önder</a> 23 Ağustos 2021</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            watchOS 8 destekleyen Apple Watch modelleri
                        </h2>
                        <h3 class="post-subtitle">
                            Apple, watchOS 8'i WWDC 2021'de duyurdu. watchOS'un gelecek sürümü, daha da iyi bir deneyim sunmak için daha fazla sağlık odaklı özellikler ve iyileştirilmiş sağlık takibi sunuyor.
                        </h3>
                    </a>
                    <p class="post-meta">Yazan: <a href="#">Önder</a> 22 Ağustos 2021</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Daha önceki makaleler &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

@endsection