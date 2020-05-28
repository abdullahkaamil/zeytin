@extends('layouts.app')

@section('content')
<?php  

$bolge_custom = [
  "akdeniz" => 'Akdeniz Bölgesi',
  "dogu" =>'Doğu Anadolu Bölgesi',
  "ege" =>'Ege Bölgesi',
  "guneydogu" =>'Güneydoğu Anadolu Bölgesi',
  "anadolu" =>'İç Anadolu Bölgesi',
  "karadeniz" =>'Karadeniz Bölgesi',
  "marmara" =>'Marmara Bölgesi'
];

$tree_custom = [
"akzeytin" => "Akzeytin",
"ayvalik" => "Ayvalık",
"cakir" => "Çakır",
"cekiste" => "Çekişte",
"emiralem" => "Emiralem",
"erkence" => "Erkence",
"hurmakara" => "Hurmakara",
"memecik" => "Memecik",
"memeli" => "Memeli",
];

?>
<div class="container">
@if(\Session::has('danger'))
  <div class="alert alert-danger">
    <p> {{\Session::get('danger')}}</p>
  </div>
@endif

@if(\Session::has('success'))
  <div class="alert alert-success">
    <p> {{\Session::get('success')}}</p>
  </div>
@endif
@if(!empty($plans))
  @foreach($plans as $key => $plan1)
    <div class="col-lg-12">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th colspan="4" class="text-center"> 
                    <?php 
                    if( isset( $bolge_custom[$bolges[$key] ]) ) {
                      $value = $bolge_custom[$bolges[$key] ];
                    }
                   ?>
                    {{$value}}
                    </th>
                </tr>
                <tr>
                    <th colspan="2" class="text-center">
                    <?php 
                    if( isset( $tree_custom[$tree_types[$key] ]) ) {
                      $value_tree = $tree_custom[$tree_types[$key] ];
                    }
                   ?>
                    {{$value_tree}}
                    
                    </th>
                    <th> </th>
                    <th>
                    <form action="{{ route('sil', $id[$key])}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm
                    ('Emin Misniz ? ')" >Sil</button>
                    </form>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Besin maddesi</td>
                    <td>1 ağaç için</td>
                    <td>Uygulama Dönemi</td>
                    <td>Uygulama</td>
                </tr>
                
                  @foreach($plan1 as $plan)
                    <tr>
                        <td>{{$plan->nutrient}}</td>
                        <td>{{$plan->tree}}</td>
                        <td>{{$plan->period}}</td>
                        <td>{{$plan->application}}</td>
                    </tr>
                  @endforeach
            </tbody>
        </table>
    </div>
  @endforeach

@else 
    <div class="col-lg-12">
    <p>
     Her hangi bir planiniz bulunmamaktadir
    </p>
    </div>
@endif
</div>
@endsection
