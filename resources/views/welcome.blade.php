@extends('layouts.app')

@section('content')
<body>
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="images\thumbs.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="images/ze4.jpg" alt="Second slide">
    </div>
   
    <div class="carousel-item">
      <img class="d-block w-100 " src="images/ze2.jpg" alt="forth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</body>

<footer>
<div class="d-block w-100"> 
       <!--HavaDurumuTahmin.com HTML kodu baslangici-->
        <br> &nbsp&nbsp&nbsp <script language="JavaScript" type="text/javascript" src="https://www.havadurumutahmin.com/widget.php?il=izmir&ilce=bornova&t=1"></script><a href="https://www.havadurumutahmin.com/turkiye-sehirleri-hava-durumu-tahminleri.php" title="15 Günlük Hava Durumu Tahminleri" style="text-align:center; font-size: 10px;color:#0000FF">Türkiye Hava Durumu Tahminleri</a>
       <!--HavaDurumuTahmin.com HTML kodu sonu-->
        </div>
        </footer>
@endsection
