@extends('layouts.master')

@section('content')


<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main">
          <div class="page-title">
            <h2>HOW TO PAY</h2>
          </div>
          <div id="hideShow">
            <div id="step1">
              <div class="search-section">
                <div class="container">
                  <div class="row">
                    <div class="search-box">
                      <form action="#catalogsearch/result/" method="get">
                        <input autocomplete="off" name="q" value="Search entire store here..." class="searchbox" maxlength="128" type="text">
                        <button type="submit" title="Search" class="button-common search-btn-bg">
                          <span class="searchIconNew"></span>
                        </button>
                        <div id="search_autocomplete" class="search-autocomplete"></div>
                      </form>
                      <div class="cross-icon"><a href="javascript:void(0)" id="hideDiv"><img src="images/cross-icon.png" alt="close"></a></div>
                    </div>
                    <!--search-box--> 
                  </div>
                </div>
              </div>
            </div>
            <!--#step1--> 
          </div>
          <div class="main container">
            <div class="col-main">
              <div class="cart">
                <div class="panel-group accordion-faq" id="faq-accordion">
                  <div class="panel">
                    <p>Sembapur provides convenience in every transaction. We provide a variety of payment methods that ensure the comfort and safety when you’re shopping. You can choose your preferred payment method, such as:</p>
                    <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question1"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span> <b>BCA Manual Bank Transfer </b></a> </div>
                    <div id="question1" class="panel-collapse collapse in">
                      <div class="panel-body">
                      1. Input the account number 372-372-1799 on behalf of PT Global Jaring Indonesia.<br>
                      2. Check back account number, full name, and amount of payment.<br>
                      3. Save slip transfer.<br>
                      4. Your payment methods Bank Transfer BCA completed.<br>
                      The minimum purchase for Manual Bank Transfer payment is Rp 10,000. Manual Bank Transfer payment method doesn’t valid during Weekend (Friday until 05.00pm, Saturday and Sunday) and Public Holidays. </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question3" class="collapsed"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span><b> Mandiri Manual Bank Transfer</b></a> </div>
                    <div id="question3" class="panel-collapse collapse">
                      <div class="panel-body">  </div>
                      1. Input the account number 372-372-1799 on behalf of PT Global Jaring Indonesia.<br>
                      2. Check back account number, full name, and amount of payment.<br>
                      3. Save slip transfer.<br>
                      4. Your payment methods Bank Transfer BCA completed.<br>
                      The minimum purchase for Manual Bank Transfer payment is Rp 10,000. Manual Bank Transfer payment method doesn’t valid during Weekend (Friday until 05.00pm, Saturday and Sunday) and Public Holidays.
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question2" class="collapsed"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span> <b> Mandiri Virtual Account</b></a> </div>
                    <div id="question2" class="panel-collapse collapse">
                      <div class="panel-body"> 
                      1. Select payment method using Mandiri Virtual Account.<br>
                      2. You will receive an email contains your Virtual Account numbers.<br>
                      3. Find nearest Mandiri ATM counter to complete the payment.<br>
                      4. Insert your ATM Card and PIN.<br>
                      5. Select the "Transfer to Mandiri Virtual Account".<br>
                      6. Input the Virtual Account number you received in email.<br>
                      7. Ensure the appeared payment details all correct.<br>
                      8. Input the amount of payment as stated.<br>
                      9. Your payment with Mandiri Virtual Account is completed.<br>
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question5" class="collapsed"> <span class="arrow-down">+</span> <span class="arrow-up">&#8211;</span> <b> BCA Virtual Account</b></a> </div>
                    <div id="question5" class="panel-collapse collapse">
                      <div class="panel-body"> 
                      1. Select payment method using BCA Virtual Account.<br>
                      2. You will receive an email contains your Virtual Account numbers.<br>
                      3. Find nearest BCA ATM counter to complete the payment.<br>
                      4. Insert your ATM Card and PIN.<br>
                      5. Select the "Transfer to BCA Virtual Account".<br>
                      6. Input the Virtual Account number you received in email.<br>
                      7. Ensure the appeared payment details all correct.<br>
                      8. Input the amount of payment as stated.<br>
                      9. Your payment with BCA Virtual Account is completed.<br></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
</div>

@endsection