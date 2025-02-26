 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link @if (Request::segment(1) != 'dashboardupdate') collapsed @endif" href="{{ url('/dashboardupdate')}}">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

         <li class="nav-item">
             <a class="nav-link @if (Request::segment(1) != 'artikel') collapsed @endif" href="{{ url('/artikel')}}">
                 <i class="bi bi-person"></i>
                 <span>Artikel</span>
             </a>
         </li><!-- End Profile Page Nav -->

         <li class="nav-item">
             <a class="nav-link @if (Request::segment(1) != 'category') collapsed @endif" href="{{ url('/category')}}">
                 <i class="bi bi-question-circle"></i>
                 <span>Category</span>
             </a>
         </li><!-- End F.A.Q Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="pages-contact.html">
                 <i class="bi bi-envelope"></i>
                 <span>Media</span>
             </a>
         </li><!-- End Contact Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="pages-register.html">
                 <i class="bi bi-card-list"></i>
                 <span>Produk Baru</span>
             </a>
         </li><!-- End Register Page Nav -->

         <li class="nav-item">
             <a class="nav-link @if (Request::segment(1) != 'myprofile') collapsed @endif" href="{{ url('/myprofile') }}">
                     <i class="bi bi-box-arrow-in-right"></i>
                     <span>Profile</span>
                 </a>
         </li><!-- End Login Page Nav -->
     </ul>

 </aside><!-- End Sidebar-->
