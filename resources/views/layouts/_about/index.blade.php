@extends('layouts.master')

@section('content')

<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&mdash;›</span></li>
          <li class="category13"><strong>About Us</strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-14">
          <div class="page-title" id="myDIV">
            <h2>BACKGROUND STORIES</h2>
          </div>
          <style> 
#myDIV {
    animation: mymove 5s infinite;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {margin-left: 50px;}
}

/* Standard syntax */
@keyframes mymove {
    50% {margin-left: 50px;}
}
p { text-align: justify; }

#rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 200px;
    height: 200px;    
}

.th-38jn {
    font-weight: 700!important;
    }
.th-XYnL {
    margin-left: 16px;
    margin-right: 16px;
}
</style>
          <div class="static-contain">
            <p><b><img alt="#" src="{{ asset('frontend/images/logo.png') }}"> Hadir untuk menjawab permasalahan masyarakat urban yang
            memiliki tingkat mobilitas tinggi, sehingga tidak memiliki cukup waktu
            untuk memenuhi kebutuhan mereka dalam mendapatkan bahan makanan
            yang segar dan berkualitas serta peralatan dapur yang mendukung.
            Sembapur memiliki latar belakang spirit hidup sehat dan berkualitas, karena
            kami tidak hanya menyediakan bahan pangan dan peralatannya, namun kami
            juga memberikan resep-resep yang anda butuhkan, cara memasak yang baik
            bahkan sampai dengan saran penyajian yang menarik.
            Sembapur menawarkan pengalaman yang berbeda dalam memenuhi kebutuhan
            dapur , kami memberikan kemudahan dalam berbelanja, kami memilihkan bahanbahan
            pangan yang terjamin kualitasnya dan kami juga akan menghantarkan
            kepada pembeli di hari yang sama.</b></p>
          </div>                            
           <br><!-- Nav Tabs -->
          <div class="align-center mb-40 mb-xxs-30">
                    <ul class="nav nav-tabs tpl-minimal-tabs animate">
                        
                        <li class="active">
                            <a href="#mini-one" data-toggle="tab">Our Vision</a>
                        </li>
                        
                        <li>
                            <a href="#mini-two" data-toggle="tab">Mission</a>
                        </li>
                        
                        <li>
                            <a href="#mini-three" data-toggle="tab">Our Goals</a>
                        </li>
                        
                    </ul>
          </div>
                <!-- End Nav Tabs -->
                
                <!-- Tab panes -->
      <div class="tab-content tpl-minimal-tabs-cont section-text align-center">        
            <div class="tab-pane fade in active" id="mini-one">
             Menjadi Penyedia sarana transaksi online sektor pangan terbesar di
             Indonesia dan mengantarkan produk asli Indonesia ke pasar global 
             <br><br><br>
            </div>
          <div class="tab-pane fade" id="mini-two">
            <ul class="bullets">
                <li>Membangun mitra kerjasama dengan supermarket ternama untuk meningkatkan daya jual dari supermarket kepada pasar yang tidak terbatas</li>
                <li>Menggunakan dan mengembangkan teknologi informasi secara tepat</li>
                <li>Meningkatkan kemampuan karyawan untuk dapat bersaing secara internal maupun eksternal sehingga dapat meningkatkan nilai karyawan dan perusahaan</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="mini-three">
            Menciptakan tren baru dalam memenuhi kebutuhan pangan<br>
            Sebagai pelopor sosial marketplace pertama dalam dunia kuliner<br>
            Memberikan efisiensi waktu dalam berbelanja
          </div>     
      </div>
  <div class="offer-banner-section">
    <div class="promo-banner-section container">
    <div class="row">
      <div class="col-lg-12"> <img alt="promo-banner3" src="{{asset('frontend/images/thevalues2.png')}}"></div>
    </div>
   </div>
  </div>
                
            </div>
        </section>
      </div>
    </div>
  </div>
  <!--End main-container --> 
@endsection