@extends('layouts.master')

@section('content')

<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 wow bounceInUp animated">
          <div class="my-account">
            <div class="page-title">
              <h2>My Dashboard</h2>
            </div>
            <div class="dashboard">
              <div class="welcome-msg"> <strong>Hello, {{ Auth::user()->name }}!</strong>
                <p>Terima Kasih telah memesan dan membeli produk - produk dari kami, Berikut adalah history order kamu :</p>
              </div>
              <div class="recent-orders">
                <div class="title-buttons">
                <div class="table-responsive">
                  <table class="data-table" id="my-orders-table">
                    
                    <thead>
                      <strong>Recent Orders</strong>
                      <tr class="first last">
                        <th>Order #</th>
                        <th>Date</th>
                        <th>Ship to</th>
                        <th><span class="nobr">Order Total</span></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="first odd">
                        <td>500000002</td>
                        <td>9/9/10 </td>
                        <td>Iqbal Buchori</td>
                        <td><span class="price">Rp25.000</span></td>
                      </tr>
                      <tr class="last even">
                        <td>500000001</td>
                        <td>9/9/10 </td>
                        <td>Iqbal Buchori</td>
                        <td><span class="price">Rp1.397.99</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

@endsection