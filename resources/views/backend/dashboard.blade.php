    @include('backend.includes.header')
      <!-- End Header -->

      <!-- Main Wrapper -->
      <div class="main-wrapper">
         <!-- Sidebar -->
            @include('backend.includes.sidebar')
         <!-- End Sidebar -->

         <!-- Main Content -->
            @include('backend.includes.mainBody')
         <!-- End Main Content -->
      </div>
      <!-- End Main Wrapper -->

      <!-- Footer -->
        @include('backend.includes.footer')
      <!-- End Footer -->
   </div>
   <!-- End wrapper -->

  {{-- js link here  --}}

  @include('backend.includes.js')
