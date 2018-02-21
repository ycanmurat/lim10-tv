@extends('layouts.theme.master')
@section('content')
<style>
section.contact form .group.kvkk {
    box-shadow: none!important;
    display: flex;
    align-items: center;
}

section.contact form .group.kvkk label {}

section.contact form .group.kvkk input {
    border: none!important;
    box-shadow: none;
    width: 17px;
}

section.contact form .group.kvkk label b {
    cursor: pointer;
}
</style>
<section class="contact">
    <img src="images/contactBanner.png" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="adress">
                    <h3>Nanjing</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla maiores nisi assumenda,
                        corrupti excepturi, atque magnam eius hic vel aliquid error voluptas repellendus ex
                    laudantium soluta suscipit, explicabo harum, cumque!</p>
                    <p>Tel : 123456789</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adress">
                    <h3>İstanbul</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla maiores nisi assumenda,
                        corrupti excepturi, atque magnam eius hic vel aliquid error voluptas repellendus ex
                    laudantium soluta suscipit, explicabo harum, cumque!</p>
                    <p>Tel : 123456789</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adress">
                    <h3>Nanjing</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla maiores nisi assumenda,
                        corrupti excepturi, atque magnam eius hic vel aliquid error voluptas repellendus ex
                    laudantium soluta suscipit, explicabo harum, cumque!</p>
                    <p>Tel : 123456789</p>
                </div>
            </div>
        </div>
    </div>
    <img src="images/contactBanner2.png" alt="" style="margin: 50px 0px;">
    <div class="container">
        <form action="{{route('iletisim.gonder')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="group">
                        <label for="">Ad & soyad</label>
                        <input type="text" name="name" placeholder="Ad Soyad">
                    </div>
                    <div class="group">
                        <label for="">E-Posta</label>
                        <input type="text" name="eposta" placeholder="E-posta">
                    </div>
                    <div class="group">
                        <label for="">Telefon</label>
                        <input type="text" name="tel" placeholder="Telefon numarası">
                    </div>
                    <div class="group">
                        <label for="">Ülke</label>
                        <input type="text" name="ulke" placeholder="Ülke">
                    </div>
                    <div class="group">
                        <label for="">Şirket</label>
                        <input type="text" name="sirket" placeholder="Şirket adı">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group">
                        <label for="">Bizden nasıl haberiniz oldu ?</label>
                        <input type="text" name="ulasim" placeholder="Clickia'yı nereden duydunuz ?">
                    </div>
                    <div class="group">
                        <select name="talep" id="">
                            <option value="Talep Türü Seçiniz">Talep Türü Seçiniz</option>
                            <option value="Film işbirliği">Film işbirliği</option>
                            <option value="Oyun üretimi">Oyun üretimi</option>
                            <option value="Pazarlama ortaklığı">Pazarlama ortaklığı</option>
                            <option value="Mesleki planlama">Mesleki planlama</option>
                            <option value="Diğer">Diğer</option>
                        </select>
                    </div>
                    <div class="group">
                        <label for="">Mesaj</label>
                        <textarea name="mesaj" id="" cols="30" rows="10"
                        placeholder="Bize mesaj bırakın"></textarea>
                    </div>
                    <div class="group">
                        @if(!empty(env('GOOGLE_RECAPTCHA_KEY')))
                        <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                        </div>
                        @endif
                    </div>
                    <div class="group kvkk">
                        <input id="kvkk" type="checkbox">
                        <label for="kvkk"><b id="kvkkModalTrigger">KVKK Aydınlatma metnini</b> okudum kabul ediyorum.</label>
                    </div>
                    <div class="group">
                        <button style="margin-left: unset;margin-right: auto!important;" type="submit">Gönder</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<div class="kvkk-modal">
    <span>Close</span>
    <p>{!! trans('site.kvkk') !!}</p>
</div>

<style>
.kvkk-modal {
    position: fixed;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
    overflow: auto;
    background: #ffffffe6;
    z-index: 999;
    padding: 50px;
    transition: all ease  .4s;
    opacity: 0;
    visibility: hidden;
}
.kvkk-modal.active{
    opacity: 1;
    visibility: visible;
}
.kvkk-modal span {
    position: absolute;
    right: 25px;
    top: 25px;
    font-size: 19px;
    cursor: pointer;
}
</style>

<script>
    $('#kvkkModalTrigger').click(function(event) {
        $('.kvkk-modal').addClass('active');
    });
    $('.kvkk-modal span').click(function(event) {
        $('.kvkk-modal').removeClass('active');
    });
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

@endsection