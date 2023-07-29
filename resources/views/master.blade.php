@include('frontend.includes.head')
  <body>
   
  @include('frontend.includes.header')  
  @include('frontend.includes.branding')  
  @include('frontend.includes.mainmenu')  
  @include('frontend.includes.slider')  
  @include('frontend.includes.promo')  
    
    
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        @yield('main')
    </div> <!-- End main content area -->
    
    @include('frontend.includes.brands') 
    
    @include('frontend.includes.product')
    

    @include('frontend.includes.footer')
    