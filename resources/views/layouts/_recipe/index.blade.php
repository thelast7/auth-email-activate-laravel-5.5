@extends('layouts.master')

@section('content')

 <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9">
          <div class="page-title">
            <h2>PILIH RESEP YANG KAMU INGINKAN!</h2>
          </div>
          <div class="blog-wrapper" id="main">
            <div class="site-content" id="primary">
              <div role="main" id="content">
                <article class="blog_entry clearfix wow">
                  <header class="blog_entry-header clearfix">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title">Resep Omurice</a> </h2>
                    </div>
                    <!--blog_entry-header-inner--> 
                  </header>
                  <div class="entry-content">
                    <div class="featured-thumb"><a href="#"><img alt="blog-img4" src="{{ asset('frontend/images/omurice.jpg') }}"></a></div>
                    <br>
                    <div class="entry-content">
                      <p><strong>Omurice (オムライス omurais)</strong> adalah makanan Jepang dan makanan Korea berupa nasi putih yang digoreng bersama saus tomat dan dibungkus oleh telur goreng omelet. Namanya berasal dari kata omelet dan rice, sebuah contoh wasei-eigo. Di atas omurice biasanya disiram sedikit saus tomat.
                    </div>
                    <button type="button" title="Tambahkan ke Keranjang" class="button btn-cart">
                        <a href="#"><span>Selengkapnya</span></a>
                      </button>
                  </div>
                  
                </article>
                <article class="blog_entry clearfix wow">
                  <header class="blog_entry-header clearfix">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title">Resep Gulai Cumi Isi Tahu Telur </a> </h2>
                    </div>
                    <!--blog_entry-header-inner--> 
                  </header>
                  <div class="entry-content">
                    <div class="featured-thumb"><a href="#"><img alt="blog-img3" src="{{ asset('frontend/images/cumisitahutelur.jpg') }}"></a></div>
                    <br>
                    <div class="entry-content">
                      <p><strong>Gulai Cumi Isi Tahu Telur</strong> adalah masakan berbahan baku cumi, tahu, dan telur yang diolah dalam kuah bumbu rempah yang bercitarasa gurih. Ciri khas gulai isi tahu telur adalah bumbunya yang kaya rempah antara lain kunyit, ketumbar, lada, lengkuas, jahe, cabai merah, bawang merah, bawang putih, adas, pala, serai, kayu manis dan jintan yang dihaluskan, dicampur, kemudian dimasak dalam santan</p>
                    
                    </div>
                    <button type="button" title="Tambahkan ke Keranjang" class="button btn-cart">
                        <a href="#"><span>Selengkapnya</span></a>
                      </button>
                  </div>
                  
                </article>
                <article class="blog_entry clearfix wow ">
                  <header class="blog_entry-header clearfix">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title"> Resep Teh Telur</a> </h2>
                    </div>
                    <!--blog_entry-header-inner--> 
                  </header>
                  <div class="entry-content">
                    <div class="featured-thumb"><a href="#"><img alt="blog-img2" src="{{ asset('frontend/images/tehtelur.jpg') }}"></a></div>
                    <br>
                    <div class="entry-content">
                      <p><strong>Teh Talua atau teh telur</strong> adalah minuman khas Sumatera Barat yang merupakan menu wajib di warung tradisional maupun restoran Padang. Minuman ini terdiri dari campuran teh, gula dan telur dan sedikit perasan jeruk nipis. Telur yang digunakan biasanya adalah telur ayam kampung. Teh talua biasanya diminum oleh para petani yang hendak meladang, sebagai penambah stamina kerja.</p>
                    </div>
                    <button type="button" title="Tambahkan ke Keranjang" class="button btn-cart">
                        <a href="#"><span>Selengkapnya</span></a>
                      </button>
                  </div>
                  
                </article>
                <article class="blog_entry clearfix wow ">
                  <header class="blog_entry-header clearfix">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title"> Resep Pepes Telur Tahu</h2>
                    </div>
                    <!--blog_entry-header-inner--> 
                  </header>
                  <div class="entry-content">
                    <div class="featured-thumb"><a href="#"><img alt="blog-img1" src="{{ asset('frontend/images/pepes.jpg') }}"></a></div>
                    <br>
                    <div class="entry-content">
                      <p>Woku adalah bumbu makanan ala Manado, provinsi Sulawesi Utara, Indonesia, yang terbuat dari berbagai macam bumbu dan biasa digunakan untuk memasak ayam. Di Minahasa, Sulawesi Utara, terdapat dua jenis woku, yaitu woku balanga (dimasak dengan belangga), dan woku daun (dimasak dalam daun).</p>
                    </div>
                    <button type="button" title="Tambahkan ke Keranjang" class="button btn-cart">
                        <a href="#"><span>Selengkapnya</span></a>
                      </button>
                  </div>
                  
                </article>
              </div>
            </div>
          </div>
        </div>
        <div class="col-right sidebar col-sm-3">
          <div role="complementary" class="widget_wrapper13" id="secondary">
            <div class="popular-posts widget widget__sidebar " id="recent-posts-4">
              <h3 class="widget-title">Resep Popular</h3>
              <div class="widget-content">
                <ul class="posts-list unstyled clearfix">
                  <li>
                    <figure class="featured-thumb"> <a href="#"> <img width="80" height="53" alt="blog image" src="{{ asset('frontend/images/pepes.jpg') }}"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title="Pellentesque posuere" href="http://demo.magikthemes.com/index.php/Poloblue/pellentesque-posuere">Pepes Tahu Telur</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time datetime="2018-07-10T07:09:31+00:00" class="entry-date">Jul 10, 2018</time>
                      .</p>
                  </li>
                  <li>
                    <figure class="featured-thumb"> <a href="#"> <img width="80" height="53" alt="blog image" src="{{ asset('frontend/images/omurice.jpg') }}"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title="Dolor lorem ipsum" href="#">Omurice</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time datetime="2018-07-10T07:01:18+00:00" class="entry-date">Jul 10, 2018</time>
                      .</p>
                  </li>
                  <li>
                    <figure class="featured-thumb"> <a href="#"> <img width="80" height="53" alt="blog image" src="{{ asset('frontend/images/cumisitahutelur.jpg') }}"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title="Aliquam eget sapien placerat" href="#">Cumi Isi Tahu Telur</a></h4>
                    <p class="post-meta"><i class="icon-calendar"></i>
                      <time datetime="2014-07-10T06:59:14+00:00" class="entry-date">Jul 10, 2018</time>
                      .</p>
                  </li>
                </ul>
              </div>
              <!--widget-content--> 
            </div>
            
            <!-- Banner Ad Block -->
            <div class="ad-spots widget widget__sidebar">
              <h3 class="widget-title">Ads Spots</h3>
              <div class="widget-content"><a target="_self" href="#" title=""><img alt="offer banner" src="{{ asset('frontend/images/rhs-banner.jp') }}g"></a></div>
            </div>
            <!-- Banner Text Block -->
          </div>
        </div>
      </div>
    </div>
  </div>
 

@endsection