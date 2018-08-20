@extends('layouts.master')

@section('content')
<!-- breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&mdash;›</span></li>
          <li class="category13"><strong>Contact Us</strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 wow bounceInUp animated">
          <div class="page-title">
            <h2>Contact Us</h2>
          </div>
          <div class="static-contain">
            <section class="section-wrap-mp contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>Get in Touch</h5>
            Mon-Fri: 8:00 – 20:00

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Pointer"></i>
              </div>
              <h6>Address</h6>
              DISTRICT 8, PROSPERITY TOWER, SCBD AREA <br>
              jl. Jend. Sudirman, RT.5/RW.3, Senayan, Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190
            </div> <!-- end address -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Phone"></i>
              </div>
              <h6>Call Us</h6>
              <span>021 526 0727</span>
            </div> <!-- end phone number -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Mail"></i>
              </div>
              <h6>E-mail</h6>
              <a href="mailto:kahmipreneur@gmail.com">cs@sembapur.com</a>
            </div> <!-- end email -->

          </div>

          @if(Session::has('status'))
            <div class="alert alert-success">{{ Session::get('status') }}</div>
          @endif


          <div class="col-md-8">
            <form action="" method="post">

                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <br>
                    <input class="form-control1" id="name" type="text" name="name" placeholder="Masukan Nama" />
                    <br>

                    <label for="email">Email</label>
                    <br>
                    <input class="form-control1" id="email" type="text" name="email" placeholder="Masukan Alamat e-mail" />
                    <br>
                    
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="Masukan Pesan" cols="30" rows="10"></textarea>

                    <br><br>

                    <button class="btn btn-success btn-block" <a href="mailto:cs@sembapur.com"></a>Send</button>
                    <br>
                <form>
          </div> <!-- end col -->
        </div>
      </div>
    </section>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!--End main-container -->

  @endsection