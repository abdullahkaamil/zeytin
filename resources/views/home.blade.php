@extends('layouts.app')

@section('content')
<div class="container">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-oil-tab" data-toggle="tab" href="#nav-oil" role="tab" aria-controls="nav-oil" aria-selected="true">Yağlık Zeytin</a>
            <a class="nav-item nav-link" id="nav-no-oil-tab" data-toggle="tab" href="#nav-no-oil" role="tab" aria-controls="nav-no-oil" aria-selected="false">Sofralık Zeytin</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-oil" role="tabpanel" aria-labelledby="nav-oil">
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">Yağlık Zeytin</div>
                    <img class="card-img-top" src="images/zeytinyagi.jpg" alt="zeytinyagi">
                    <div class="card-body">
                        <form action="{{ route('save') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}"> 
                            <input type="hidden" name="type" value="yaglik">
                            <div class="form-group">
                                <label for="place">Ağaç Türü</label>
                                <select class="custom-select" name="tree_type" id="" required>
                                    <option value="null" selected>Lütfen Ağaç Türünüzü Seçiniz</option>
									<option value="akzeytin">Akzeytin</option>
                                    <option value="ayvalik">Ayvalık</option>
                                    <option value="cakir">Çakır</option>
                                    <option value="cekiste">Çekişte</option>
									<option value="emiralem">Emiralem</option>
                                    <option value="erkence">Erkence</option>
									<option value="hurmakara">Hurmakara</option>
                                    <option value="memecik">Memecik</option>
                                    <option value="memeli">Memeli</option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label for="place">Ağaç Yaşı</label>
                                <select class="custom-select" name="age" id="" required>
                                    <option value="null" selected>Lütfen Ağacınızın Yaşını Seçiniz</option>
                                    <option value="0">Yeni Başlayan</option>
                                    <option value="1-3">1-3</option>
                                    <option value="4-6">4-6</option>
                                    <option value="25">25 kg Ve Altı  Ürün Veren</option>
                                    <option value="25-50">25-50 kg Arasında Ürün Veren</option>
                                    <option value="50">50 kg Ve Üstü Ürün Veren</option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label for="place">Bölge</label>
                                <select class="custom-select" name="place" id="" required>
                                    <option value="null" selected>Lütfen Bölge Seçiniz</option>
                                    <option value="akdeniz">Akdeniz Bölgesi</option>
                                    <option value="dogu">Doğu Anadolu Bölgesi</option>
                                    <option value="ege">Ege Bölgesi</option>
                                    <option value="guneydogu">Güneydoğu Anadolu Bölgesi</option>
                                    <option value="anadolu">İç Anadolu Bölgesi</option>
									<option value="karadeniz">Karadeniz Bölgesi</option>
                                    <option value="marmara">Marmara Bölgesi</option>
                                </select>
                            </div>
                        
                            <!-- <div class="form-group">
                                <label for="city">İl</label>
                                <select class="custom-select" name="city" id="" required>
                                    <option value="null" selected>Lütfen İlinizi Seçiniz</option>
                                    <option value="adana">Adana</option>
                                    <option value="adiyaman">Adıyaman</option>
                                    <option value="afyon">Afyonkarahisar</option>
                                    <option value="agri">Ağrı</option>
                                    <option value="aksaray">Aksaray</option>
                                    <option value="amasya">Amasya</option>
                                    <option value="ankara">Ankara</option>
                                    <option value="antalya">Antalya</option>
                                    <option value="ardahan">Ardahan</option>
                                    <option value="artvin">Artvin</option>
                                    <option value="aydin">Aydın</option>
                                    <option value="balikesir">Balıkesir</option>
                                    <option value="bartin">Bartın</option>
                                    <option value="batman">Batman</option>
                                    <option value="bayburt">Bayburt</option>
                                    <option value="bilecik">Bilecik</option>
                                    <option value="bingol">Bingöl</option>
                                    <option value="bitlis">Bitlis</option>
                                    <option value="bolu">Bolu</option>
                                    <option value="burdur">Burdur</option>
                                    <option value="bursa">Bursa</option>
                                    <option value="canakkale">Çanakkale</option>
                                    <option value="cankiri">Çankırı</option>
                                    <option value="corum">Çorum</option>
                                    <option value="denizli">Denizli</option>
                                    <option value="diyarbakir">Diyarbakır</option>
                                    <option value="duzce">Düzce</option>
                                    <option value="edirne">Edirne</option>
                                    <option value="elazig">Elazığ</option>
                                    <option value="erzincan">Erzincan</option>
                                    <option value="erzurum">Erzurum</option>
                                    <option value="eskisehir">Eskişehir</option>
                                    <option value="gaziantep">Gaziantep</option>
                                    <option value="giresun">Giresun</option>
                                    <option value="gumushane">Gümüşhane</option>
                                    <option value="hakkari">Hakkari</option>
                                    <option value="hatay">Hatay (Antakya)</option>
                                    <option value="igdir">Iğdır</option>
                                    <option value="isparta">Isparta</option>
                                    <option value="istanbul">İstanbul</option>
                                    <option value="istanbul-anadolu">İstanbul (Anadolu)</option>
                                    <option value="izmir">İzmir</option>
                                    <option value="kocaeli">Kocaeli (İzmit)</option>
                                    <option value="kahramanmaras">Kahramanmaraş</option>
                                    <option value="karabuk">Karabük</option>
                                    <option value="karaman">Karaman</option>
                                    <option value="kars">Kars</option>
                                    <option value="kastamonu">Kastamonu</option>
                                    <option value="kayseri">Kayseri</option>
                                    <option value="kirikkale">Kırıkkale</option>
                                    <option value="kirklareli">Kırklareli</option>
                                    <option value="kirsehir">Kırşehir</option>
                                    <option value="kilis">Kilis</option>
                                    <option value="konya">Konya</option>
                                    <option value="kutahya">Kütahya</option>
                                    <option value="malatya">Malatya</option>
                                    <option value="manisa">Manisa</option>
                                    <option value="mardin">Mardin</option>
                                    <option value="mersin">Mersin</option>
                                    <option value="mugla">Muğla</option>
                                    <option value="mus">Muş</option>
                                    <option value="nevsehir">Nevşehir</option>
                                    <option value="nigde">Niğde</option>
                                    <option value="ordu">Ordu</option>
                                    <option value="osmaniye">Osmaniye</option>
                                    <option value="rize">Rize</option>
                                    <option value="sakarya">Sakarya (Adapazarı)</option>
                                    <option value="samsun">Samsun</option>
                                    <option value="siirt">Siirt</option>
                                    <option value="sinop">Sinop</option>
                                    <option value="sivas">Sivas</option>
                                    <option value="sanliurfa">Şanlıurfa</option>
                                    <option value="sirnak">Şırnak</option>
                                    <option value="tekirdag">Tekirdağ</option>
                                    <option value="tokat">Tokat</option>
                                    <option value="trabzon">Trabzon</option>
                                    <option value="tunceli">Tunceli</option>
                                    <option value="usak">Uşak</option>
                                    <option value="van">Van</option>
                                    <option value="yalova">Yalova</option>
                                    <option value="yozgat">Yozgat</option>
                                    <option value="zonguldak">Zonguldak</option>
                                </select>
                            </div>
                         -->
                            <div class="form-group">
                                <label for="type">Dikilen Rakım</label>
                                <input type="text" class="form-control" name="altitude" placeholder="Dikilen Rakım" required>
                            </div>
							<div align="center">
                            <button type="submit" class="btn btn-primary" >Yıllık Plan Oluştur</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-no-oil" role="tabpanel" aria-labelledby="nav-no-oil">
            <div class="col-md-6 justify-content-center">
                <div class="card">
                    <div class="card-header">Sofralık Zeytin</div>
                    <img class="card-img-top" src="images/sofralik.jpg" alt="sofralik">
                    <div class="card-body">
                        <form action="{{ route('save') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                            <input type="hidden" name="type" value="sofralik">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}"> 
                            <div class="form-group">
                                <label for="place">Ağaç Türü</label>
                                <select class="custom-select" name="tree_type" id="" required>
                                    <option value="null" selected>Lütfen Ağaç Türünüzü Seçiniz</option>
									<option value="akzeytin">Akzeytin</option>
                                    <option value="ayvalik">Ayvalık</option>
                                    <option value="cakir">Çakır</option>
                                    <option value="cekiste">Çekişte</option>
									<option value="emiralem">Emiralem</option>
                                    <option value="erkence">Erkence</option>
									<option value="hurmakara">Hurmakara</option>
                                    <option value="memecik">Memecik</option>
                                    <option value="memeli">Memeli</option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label for="place">Ağaç Yaşı</label>
                                <select class="custom-select" name="age" id="" required>
                                    <option value="null" selected>Lütfen Ağacınızın Yaşını Seçiniz</option>
                                    <option value="0">Yeni Başlayan</option>
                                    <option value="1-3">1-3</option>
                                    <option value="4-6">4-6</option>
                                    <option value="25">25 kg Ve Altı  Ürün Veren</option>
                                    <option value="25-50">25-50 kg Arasında Ürün Veren</option>
                                    <option value="50">50 kg Ve Üstü Ürün Veren</option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label for="place">Bölge</label>
                                <select class="custom-select" name="place" id="" required>
                                    <option value="null" selected>Lütfen Bölge Seçiniz</option>
                                    <option value="akdeniz">Akdeniz Bölgesi</option>
                                    <option value="dogu">Doğu Anadolu Bölgesi</option>
                                    <option value="ege">Ege Bölgesi</option>
                                    <option value="guneydogu">Güneydoğu Anadolu Bölgesi</option>
                                    <option value="anadolu">İç Anadolu Bölgesi</option>
									<option value="karadeniz">Karadeniz Bölgesi</option>
                                    <option value="marmara">Marmara Bölgesi</option>
                                </select>
                            </div>
                        
                            <!-- <div class="form-group">
                                <label for="city">İl</label>
                                <select class="custom-select" name="city" id="" required>
                                    <option value="null" selected>Lütfen İlinizi Seçiniz</option>
                                    <option value="adana">Adana</option>
                                    <option value="adiyaman">Adıyaman</option>
                                    <option value="afyon">Afyonkarahisar</option>
                                    <option value="agri">Ağrı</option>
                                    <option value="aksaray">Aksaray</option>
                                    <option value="amasya">Amasya</option>
                                    <option value="ankara">Ankara</option>
                                    <option value="antalya">Antalya</option>
                                    <option value="ardahan">Ardahan</option>
                                    <option value="artvin">Artvin</option>
                                    <option value="aydin">Aydın</option>
                                    <option value="balikesir">Balıkesir</option>
                                    <option value="bartin">Bartın</option>
                                    <option value="batman">Batman</option>
                                    <option value="bayburt">Bayburt</option>
                                    <option value="bilecik">Bilecik</option>
                                    <option value="bingol">Bingöl</option>
                                    <option value="bitlis">Bitlis</option>
                                    <option value="bolu">Bolu</option>
                                    <option value="burdur">Burdur</option>
                                    <option value="bursa">Bursa</option>
                                    <option value="canakkale">Çanakkale</option>
                                    <option value="cankiri">Çankırı</option>
                                    <option value="corum">Çorum</option>
                                    <option value="denizli">Denizli</option>
                                    <option value="diyarbakir">Diyarbakır</option>
                                    <option value="duzce">Düzce</option>
                                    <option value="edirne">Edirne</option>
                                    <option value="elazig">Elazığ</option>
                                    <option value="erzincan">Erzincan</option>
                                    <option value="erzurum">Erzurum</option>
                                    <option value="eskisehir">Eskişehir</option>
                                    <option value="gaziantep">Gaziantep</option>
                                    <option value="giresun">Giresun</option>
                                    <option value="gumushane">Gümüşhane</option>
                                    <option value="hakkari">Hakkari</option>
                                    <option value="hatay">Hatay (Antakya)</option>
                                    <option value="igdir">Iğdır</option>
                                    <option value="isparta">Isparta</option>
                                    <option value="istanbul">İstanbul</option>
                                    <option value="istanbul-anadolu">İstanbul (Anadolu)</option>
                                    <option value="izmir">İzmir</option>
                                    <option value="kocaeli">Kocaeli (İzmit)</option>
                                    <option value="kahramanmaras">Kahramanmaraş</option>
                                    <option value="karabuk">Karabük</option>
                                    <option value="karaman">Karaman</option>
                                    <option value="kars">Kars</option>
                                    <option value="kastamonu">Kastamonu</option>
                                    <option value="kayseri">Kayseri</option>
                                    <option value="kirikkale">Kırıkkale</option>
                                    <option value="kirklareli">Kırklareli</option>
                                    <option value="kirsehir">Kırşehir</option>
                                    <option value="kilis">Kilis</option>
                                    <option value="konya">Konya</option>
                                    <option value="kutahya">Kütahya</option>
                                    <option value="malatya">Malatya</option>
                                    <option value="manisa">Manisa</option>
                                    <option value="mardin">Mardin</option>
                                    <option value="mersin">Mersin</option>
                                    <option value="mugla">Muğla</option>
                                    <option value="mus">Muş</option>
                                    <option value="nevsehir">Nevşehir</option>
                                    <option value="nigde">Niğde</option>
                                    <option value="ordu">Ordu</option>
                                    <option value="osmaniye">Osmaniye</option>
                                    <option value="rize">Rize</option>
                                    <option value="sakarya">Sakarya (Adapazarı)</option>
                                    <option value="samsun">Samsun</option>
                                    <option value="siirt">Siirt</option>
                                    <option value="sinop">Sinop</option>
                                    <option value="sivas">Sivas</option>
                                    <option value="sanliurfa">Şanlıurfa</option>
                                    <option value="sirnak">Şırnak</option>
                                    <option value="tekirdag">Tekirdağ</option>
                                    <option value="tokat">Tokat</option>
                                    <option value="trabzon">Trabzon</option>
                                    <option value="tunceli">Tunceli</option>
                                    <option value="usak">Uşak</option>
                                    <option value="van">Van</option>
                                    <option value="yalova">Yalova</option>
                                    <option value="yozgat">Yozgat</option>
                                    <option value="zonguldak">Zonguldak</option>
                                </select>
                            </div>
                         -->
                            <div class="form-group">
                                <label for="type">Dikilen Rakım</label>
                                <input type="text" class="form-control" name="altitude" placeholder="Dikilen Rakım" required>
                            </div>
							<div align="center">
                            <button type="submit" class="btn btn-primary" >Yıllık Plan Oluştur</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}