@extends('layouts.app')

@section('content')
<div class="container">
<center> <h3>   HAKKIMIZDA </h3> </center>
<br>&emsp;	Şirket olarak üretim yapan bütün çiftçilerimize destek olmak amacı ile hareket etmekteyiz. Verdiğimiz destek ve verecek olduğumuz desteklerde değerli üreticilerimizin işlerini kolaylaştırmak ve sizlerin daha etkin ve kaliteli ürünler yetiştirmenizi sağlamak için web platform hizmeti  vermekteyiz. Bu hizmetler ile siz değerli kullanıcılarımız ve üreticilerimizi destek olmayı ve kaliteli ürün almalarını sağlamak için burada bulunmaktayız. 

<p><br>&emsp;	Şuan bu web platform üzerinden zeytin üreticileri ve potansiyel üreticiler için zeytin bakımı kılavuzu oluşturma hizmeti vermekteyiz. Bu hizmet ile zeytin üreticilerimizin ağaçlarını daha iyi koşullarda ve oranlarla gübreleme imkanı, budama zamanları, bordo bulamacı atma zamanı vb. zamanlar kullanıcılara sunulmaktadır. Ayrıca ağaç başına ne kadar gübreleme yapacakları da bu kılavuz da yer almaktadır. </p>

<p><br>&emsp;	Web sayfası genel bakış olarak sadece zeytin üzerine hizmet vermektedir. Zeytin yetiştiriciliğini daha iyi ve yüksek koşullara çıkarmak için böğle bir web hizmet platformu geliştirilmeye  karar verilmiştir. Siz değerli üyelerimiz ve site ziyaretçilerimizin  üretmekte oldukları zeytinleri daha iyi koşullara çıkartmak için  bu yolda  ilerlemekteyiz. </p>

<p><br>&emsp;	Ayrıca üreticileri  teşvik ederek onların da nihai tüketici için daha kaliteli ürün sağlamalarını desteklenmektedir. Üreticilerimiz organik doğal yöntemler ile zeytin üretimi yapmaları konusunda bilgilendirmeler yapılmaktadır. Bu anlamda da yönlendirilmektedirler.</p>

</div>
<?php 
use App\Plan;
$plan = array(
        array('nutrient' => 'Çiftlik Gübresi','tree' => '10 kg','period' => 'ŞUBAT – MART','application' => 'Toprağa karştırılarak','age' => '1-3'),
        array('nutrient' => 'Fosfatlı Gübre','tree' => '400-500 gr','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '1-3'),
        array('nutrient' => 'Potasyumlu Gübre','tree' => '500 gr','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '1-3'),
        array('nutrient' => 'Azotlu  Gübre','tree' => '400-500 gr','period' => 'NİSAN','application' => 'Toprak yüeyine Yağmurdan önce verilmelidi','age' => '1-3'),
        array('nutrient' => 'Ağaç budaması','tree' => NULL,'period' => 'Hasat döneminin hemen arkasından  ŞUBAT ayına kadar devam etmeli','application' => 'Budama türü ağaç ihtiyacına göre yapılmalıdır','age' => '1-3'),
        array('nutrient' => 'Bordo bulamacı %1,5 lik','tree' => NULL,'period' => 'ŞUBAT','application' => 'Ağaçlar süğgün vermeden  yapılmalıdı','age' => '1-3'),
        array('nutrient' => 'Bordo bulamacı %1 lik','tree' => NULL,'period' => 'NİSAN','application' => 'Ağaçlar içek açmadan önce yapılmalıdır','age' => '1-3'),
        array('nutrient' => 'Çiçek ilaçlaması','tree' => 'Ziraatçi gözetiminde uygulayınız','period' => 'Ağaçın çiçekleneme dönemin de yapılmalıdır','application' => 'Püskürtme yolu ile yapılmalıdır','age' => '1-3'),
        array('nutrient' => 'Sulama','tree' => NULL,'period' => 'HAZİRAN- TEMMUZ – AĞUSTOS-EYLÜL','application' => 'Istenilen herhangi bir yöntem ile  Ayda bir defa sulanmalıdır','age' => '1-3'),
        array('nutrient' => 'Çiftlik Gübresi','tree' => '15 kg','period' => 'ŞUBAT – MART','application' => 'Toprağa karştırılarak','age' => '4-6'),
        array('nutrient' => 'Fosfatlı Gübre','tree' => '200 gr','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '4-6'),
        array('nutrient' => 'Potasyumlu Gübre','tree' => '250 gr ','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '4-6'),
        array('nutrient' => 'Azotlu  Gübre','tree' => '100 gr','period' => 'NİSAN','application' => 'Toprak yüeyine Yağmurdan önce verilmelidi','age' => '4-6'),
        array('nutrient' => 'Ağaç budaması','tree' => NULL,'period' => 'Hasat döneminin hemen arkasından  ŞUBAT ayına kadar devam etmeli','application' => 'Budama türü ağaç ihtiyacına göre yapılmalıdır','age' => '4-6'),
        array('nutrient' => 'Bordo bulamacı %1,5 lik','tree' => NULL,'period' => 'ŞUBAT','application' => 'Ağaçlar süğgün vermeden  yapılmalıdı','age' => '4-6'),
        array('nutrient' => 'Bordo bulamacı %1 lik','tree' => NULL,'period' => 'NİSAN','application' => 'Ağaçlar içek açmadan önce yapılmalıdır','age' => '4-6'),
        array('nutrient' => 'Çiçek ilaçlaması','tree' => 'Ziraatçi gözetiminde uygulayınız','period' => 'Ağaçın çiçekleneme dönemin de yapılmalıdır','application' => 'Püskürtme yolu ile yapılmalıdır','age' => '4-6'),
        array('nutrient' => 'Sulama','tree' => NULL,'period' => 'HAZİRAN- TEMMUZ – AĞUSTOS-EYLÜL','application' => 'Istenilen herhangi bir yöntem ile  Ayda bir defa sulanmalıdır','age' => '4-6'),
        array('nutrient' => 'Çiftlik Gübresi','tree' => '20 kg','period' => 'ŞUBAT – MART','application' => 'Toprağa karştırılarak','age' => '0'),
        array('nutrient' => 'Fosfatlı Gübre','tree' => '400-500 gr','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '0'),
        array('nutrient' => 'Potasyumlu Gübre','tree' => '500 gr ','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '0'),
        array('nutrient' => 'Azotlu  Gübre','tree' => '400-500 gr','period' => 'NİSAN','application' => 'Toprak yüeyine Yağmurdan önce verilmelidi','age' => '0'),
        array('nutrient' => 'Ağaç budaması','tree' => NULL,'period' => 'Hasat döneminin hemen arkasından  ŞUBAT ayına kadar devam etmeli','application' => 'Budama türü ağaç ihtiyacına göre yapılmalıdır','age' => '0'),
        array('nutrient' => 'Bordo bulamacı %1,5 lik','tree' => NULL,'period' => 'ŞUBAT','application' => 'Ağaçlar süğgün vermeden  yapılmalıdı','age' => '0'),
        array('nutrient' => 'Bordo bulamacı %1 lik','tree' => NULL,'period' => 'NİSAN','application' => 'Ağaçlar içek açmadan önce yapılmalıdır','age' => '0'),
        array('nutrient' => 'Çiçek ilaçlaması','tree' => 'Ziraatçi gözetiminde uygulayınız','period' => 'Ağaçın çiçekleneme dönemin de yapılmalıdır','application' => 'Püskürtme yolu ile yapılmalıdır','age' => '0'),
        array('nutrient' => 'Sulama','tree' => NULL,'period' => 'HAZİRAN- TEMMUZ – AĞUSTOS-EYLÜL','application' => 'Istenilen herhangi bir yöntem ile  Ayda bir defa sulanmalıdır','age' => '0'),
        array('nutrient' => 'Çiftlik Gübresi','tree' => '25 kg','period' => 'ŞUBAT – MART','application' => 'Toprağa karştırılarak','age' => '25'),
        array('nutrient' => 'Fosfatlı Gübre','tree' => '600-700 gr','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '25'),
        array('nutrient' => 'Potasyumlu Gübre','tree' => '500-700 gr ','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '25'),
        array('nutrient' => 'Azotlu  Gübre','tree' => '600 gr','period' => 'NİSAN','application' => 'Toprak yüeyine Yağmurdan önce verilmelidi','age' => '25'),
        array('nutrient' => 'Ağaç budaması','tree' => NULL,'period' => 'Hasat döneminin hemen arkasından  ŞUBAT ayına kadar devam etmeli','application' => 'Budama türü ağaç ihtiyacına göre yapılmalıdır','age' => '25'),
        array('nutrient' => 'Bordo bulamacı %1,5 lik','tree' => NULL,'period' => 'ŞUBAT','application' => 'Ağaçlar süğgün vermeden  yapılmalıdı','age' => '25'),
        array('nutrient' => 'Bordo bulamacı %1 lik','tree' => NULL,'period' => 'NİSAN','application' => 'Ağaçlar içek açmadan önce yapılmalıdır','age' => '25'),
        array('nutrient' => 'Çiçek ilaçlaması','tree' => 'Ziraatçi gözetiminde uygulayınız','period' => 'Ağaçın çiçekleneme dönemin de yapılmalıdır','application' => 'Püskürtme yolu ile yapılmalıdır','age' => '25'),
        array('nutrient' => 'Sulama','tree' => NULL,'period' => 'HAZİRAN- TEMMUZ – AĞUSTOS-EYLÜL','application' => 'Istenilen herhangi bir yöntem ile  Ayda bir defa sulanmalıdır','age' => '25'),
        array('nutrient' => 'Çiftlik Gübresi','tree' => '30 kg','period' => 'ŞUBAT – MART','application' => 'Toprağa karştırılarak','age' => '25-50'),
        array('nutrient' => 'Fosfatlı Gübre','tree' => '700-800 gr','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '25-50'),
        array('nutrient' => 'Potasyumlu Gübre','tree' => '750-1050 gr ','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '25-50'),
        array('nutrient' => 'Azotlu  Gübre','tree' => '600 gr','period' => 'NİSAN','application' => 'Toprak yüeyine Yağmurdan önce verilmelidi','age' => '25-50'),
        array('nutrient' => 'Ağaç budaması','tree' => NULL,'period' => 'Hasat döneminin hemen arkasından  ŞUBAT ayına kadar devam etmeli','application' => 'Budama türü ağaç ihtiyacına göre yapılmalıdır','age' => '25-50'),
        array('nutrient' => 'Bordo bulamacı %1,5 lik','tree' => NULL,'period' => 'ŞUBAT','application' => 'Ağaçlar süğgün vermeden  yapılmalıdı','age' => '25-50'),
        array('nutrient' => 'Bordo bulamacı %1 lik','tree' => NULL,'period' => 'NİSAN','application' => 'Ağaçlar içek açmadan önce yapılmalıdır','age' => '25-50'),
        array('nutrient' => 'Çiçek ilaçlaması','tree' => 'Ziraatçi gözetiminde uygulayınız','period' => 'Ağaçın çiçekleneme dönemin de yapılmalıdır','application' => 'Püskürtme yolu ile yapılmalıdır','age' => '25-50'),
        array('nutrient' => 'Sulama','tree' => NULL,'period' => 'HAZİRAN- TEMMUZ – AĞUSTOS-EYLÜL','application' => 'Istenilen herhangi bir yöntem ile  Ayda bir defa sulanmalıdır','age' => '25-50'),
        array('nutrient' => 'Çiftlik Gübresi','tree' => '35 kg','period' => 'ŞUBAT – MART','application' => 'Toprağa karştırılarak','age' => '50'),
        array('nutrient' => 'Fosfatlı Gübre','tree' => '800-1000 gr','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '50'),
        array('nutrient' => 'Potasyumlu Gübre','tree' => '1000-1250 gr ','period' => 'OCAK - ŞUBAT','application' => 'Toprağa karıştırılarak','age' => '50'),
        array('nutrient' => 'Azotlu  Gübre','tree' => '600 gr','period' => 'NİSAN','application' => 'Toprak yüeyine Yağmurdan önce verilmelidi','age' => '50'),
        array('nutrient' => 'Ağaç budaması','tree' => NULL,'period' => 'Hasat döneminin hemen arkasından  ŞUBAT ayına kadar devam etmeli','application' => 'Budama türü ağaç ihtiyacına göre yapılmalıdır','age' => '50'),
        array('nutrient' => 'Bordo bulamacı %1,5 lik','tree' => NULL,'period' => 'ŞUBAT','application' => 'Ağaçlar süğgün vermeden  yapılmalıdı','age' => '50'),
        array('nutrient' => 'Bordo bulamacı %1 lik','tree' => NULL,'period' => 'NİSAN','application' => 'Ağaçlar içek açmadan önce yapılmalıdır','age' => '50'),
        array('nutrient' => 'Çiçek ilaçlaması','tree' => 'Ziraatçi gözetiminde uygulayınız','period' => 'Ağaçın çiçekleneme dönemin de yapılmalıdır','application' => 'Püskürtme yolu ile yapılmalıdır','age' => '50'),
        array('nutrient' => 'Sulama','tree' => NULL,'period' => 'HAZİRAN- TEMMUZ – AĞUSTOS-EYLÜL','application' => 'Istenilen herhangi bir yöntem ile  Ayda bir defa sulanmalıdır','age' => '50')
      );
      foreach ($plan as $key => $value) {
    //   dd($value);

          Plan::insert([
            "nutrient" => $value['nutrient'],
            "tree" => $value['tree'],
            "period" => $value['period'],
            "application" => $value['application'],
            "age" => $value['age'],
          ]);
      }
?>

@endsection