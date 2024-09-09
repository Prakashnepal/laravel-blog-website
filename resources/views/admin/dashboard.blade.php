<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.admin-css')
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  @include('admin.sidebar')
 <!-- ! Sidebar End-->
  <div class="main-wrapper">
    <!-- ! Main nav -->
@include('admin.navbar')
 <!-- ! Main nav End -->
    <!-- ! Main Content-->
    <main class="main users chart-page" id="skip-target">
        <div class="container">
          <h2 class="main-title">Dashboard</h2>
          @include('admin.main-content')
        </div>
      </main>

      <!-- ! Main Content End -->
    <!-- ! Footer -->
@include('admin.footer')
 <!-- ! Footer End-->
</div>
</div>
  <!-- ! Script -->
@include('admin.script')
 <!-- ! Script End -->
</body>

</html>
