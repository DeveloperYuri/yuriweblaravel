 <!-- Start Footer -->
 {{-- <div id="footerindex" class="card-footer text-body-secondary bg-dark"
     style="margin-top: auto; background-color: #212529; color: white;">
     <div class="container">
         <div class="row" style="padding-top: 0px;">
             <div class="col-md-8">
                 <p style="font-size: 12px; color: white; padding-top: 5px;">
                     Copyright © {{ date('Y') }} PT Joenoes Ikamulya.
                 </p>
             </div>
             <div class="col-md-4" style="text-align: right;">
                 <a class="petanyaan-privasi" href="#" style="display: inline; color: white; font-size: 14px;">
                     @lang('message.PERTANYAANPRIVASI')
                 </a>
                 <a class="footerfaq" href="{{ route('faqupdate') }}"
                     style="font-size: 14px; color: white; margin-left: 10px;">
                     FAQ
                 </a>
             </div>
         </div>
     </div>
 </div> --}}
 <!-- End Footer -->

 <!-- Start Footer -->
 <div id="footerindex" class="card-footer text-body-secondary bg-dark" style="margin-top: auto;">
     <div class="container">
         <div class="row" style="padding-top: 0px;">
             <div id="footercopyright" class="col-md-8">
                 <p style="font-size: 12px; color: white; padding-top: 5px;">Copyright © {{ date('Y') }} PT Joenoes
                     Ikamulya.</p>
             </div>
             <div id="footercopyright2" class="col-md-4">
                 <a class="petanyaan-privasi" href="#"
                     style="display: inline; color: white; font-size: 14px; ">@lang('message.PERTANYAANPRIVASI')</a>
                 <a class="footerfaq" href="{{ route('faqupdate') }}" class=""
                     style="font-size: 14px; color: white; ">FAQ</a>
             </div>
         </div>
     </div>
 </div>
 <!-- End Footer -->

 <script>
     function myFunction() {
         location.replace("locale/en")
     }
 </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
 </script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
     AOS.init({
         duration: 1000,
         once: true,
     });
 </script>
