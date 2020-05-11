@extends('layouts.app')

@section('content')
<?php  


switch ($bolge) {
  case "akdeniz":
    $bol = 'Akdeniz';
    break;
  case "dogu":
    $bol = 'Doğu Anadolu';
    break;
  case "ege":
    $bol = 'Ege';
    break;
    case "guneydogu":
        $bol = 'Güneydoğu Anadolu';
        break;
        case "anadolu":
            $bol = 'İç Anadolu';
            break;
            case "karadeniz":
                $bol = 'Karadeniz';
                break;
                case "marmara":
                    $bol = 'Marmara';
                    break;
  default:
    $bol = '';
}

switch ($tree_type) {
    case "akzeytin":
      $tree = 'Akzeytin';
      break;
    case "ayvalik":
      $tree = 'Ayvalık';
      break;
    case "cakir":
      $tree = 'Çakır';
      break;
      case "cekiste":
        $tree = 'Çekişte';
        break;
        case "erkence":
        $tree = 'Erkence';
        break;
        case "hurmakara":
            $tree = 'Hurmakara';
            break;
            case "memecik":
            $tree = 'Memecik';
        break;
            case "memeli":
            $tree = 'Memeli';
            break;
                    case "emiralem":
                $tree = 'Emiralem';
            break;
    default:
      $tree = '';
  }



?>
<div class="container">
    <div class="col-lg-12">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th colspan="4" class="text-center"> 
                     {{$bol}} Bölgesi</th>
                </tr>
                <tr>
                    <th colspan="2" class="text-center">{{$tree}}</th>
                    <th> </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Besin maddesi</td>
                    <td>1 ağaç için</td>
                    <td>Uygulama Dönemi</td>
                    <td>Uygulama</td>
                </tr>
                @foreach($plans as $plan)
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
</div>
@endsection
