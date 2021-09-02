@extends('user/app')

@section('title','TeknoMetot Makaleleri')
@section('sub-heading','Teknolojiye dair her şey')

@section('main-content')

<!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>Sandcastle Projesi, büyük bir çabanın sonucunda Corellium adlı bir ekip tarafından gerçekleştirildi. Ekip, Android işletim sistemini ilk çıkan iPhone’a getirmeyi içeren önceki çalışmaları ile tanınıyor. Şu an için Android 10 sadece iPhone 7,iPhone 7 Plus ve iPod Touch 7 cihazlarına yüklenebiliyor. İlerleyen zamanlarda Checkra1n Jailbreak destekleyen bütün cihazlara geleceği belirtiliyor.</p>

                    <p>Şu anda desteklenen cihazlarda Android, işlemciyi, USB bağlantı noktasını, NAND belleği, ekranı, ekranın çoklu dokunma özellikleri, Wi-Fi ve diğer birçok bileşeni çalıştırabiliyor. Ancak şebeke, bluetooth, hoparlör ve grafik yongası şu anda çalışmıyor. Project Sandcastle ayrıca GMS (Google Mobile Services) dahil edilmiş bir Android yapısını şu an için desteklemiyor. Bu nedenle Play Store gibi herhangi bir Google uygulamasına erişemezsiniz.</p>

                    <p>Şu anda iPhone’da Android ile pek bir şey yapamasanız bile, Android’in iPhone’da çalışıyor olması geleceğe umut veriyor. Project Sandcastle’ın arkasındaki ekip hızlı bir şekilde büyümeye devam ederse ve telefonların tüm işlevlerini etkinleştirmeyi başarırsa, iOS cihazlar alternatif olarak Android kullanabilir.</p>

                    <h2 class="section-heading">Apple Cihazınıza Android 10 Yükleme Adımları</h2>

                    <p>Bilgisayarınızdan Terminal’i açın ve ardından aşağıda yazanları sırasıyla girin.</p>

                    <blockquote>git clone https://github.com/corellium/projectsandcastle</blockquote>

                    <blockquote>cd projectsandcastle/loader</blockquote>

                    <p>PC’nize Project Sandcastle Android Sürümünü indirin ve içeriği ProjectSandcastle Loader klasörüne çıkarın.</p>


                    <p>Son olarak Android 10 cihazınızda başlamalıdır.</p>

                    <a href="#">
                        <img class="img-responsive" src="user/img/android.png" alt="">
                    </a>
                    <span class="caption text-muted">iPhone üzerinde Sandcastle projesi ile Android 10</span>

                    <p>Asıl metnin bulunduğu yer; <a href="https://teknometot.com/linux-uzerinden-project-sandcastle-ile-iphonea-android-10-yukleme-kilavuzu/">TeknoMetot</a>. Fotoğrafın bulunduğu yer; <a href="https://teknometot.com/linux-uzerinden-project-sandcastle-ile-iphonea-android-10-yukleme-kilavuzu/">TeknoMetot</a>.</p>
                </div>
            </div>
        </div>
    </article>

    <hr>

@endsection