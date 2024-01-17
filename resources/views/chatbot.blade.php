<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data-Vault bot </title>
    <link rel="stylesheet" href="/asset/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="/asset/script.js" defer></script>
  </head>
  <body>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="/logout">Logout</a></li>
      <li><a>{{auth()->user()->username}}</a></li>
    </ul>
    <!-- Chats container -->
    <div class="chat-container"></div>
    
    <!-- Typing container -->
    <form action="/data" method="post">
      @csrf
    <div class="typing-container">
      <div class="typing-content">
        <div class="typing-textarea">
          <textarea id="chat-input" name="promt" spellcheck="false" placeholder="Enter a Text here" required></textarea>
          <span id="send-btn" type="submit"  class="material-symbols-rounded">send</span>
        </div>
        <div class="typing-controls">
          <span id="theme-btn" class="material-symbols-rounded">light_mode</span>
          <span id="delete-btn" class="material-symbols-rounded">delete</span>
      </div>
    </div>
    </form>
    <div class="header_search d-flex padding-right: 30px;">
                <a href="#" class="btn-default search_btn"><i class="fa fa-search"></i></a>
                <div class="header_search_content">
                    <div class="header_search_content_inner">
                        <form id="searchbox" method="get" action="#">
                            <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Search..." value="">
                        </form>
                    </div>
                </div>
            </div>  

            <div class="btn-show-menu-mobile menubar menubar--squeeze">

                                                    


            <span class="menubar-box">
                <span class="menubar-inner"></span>
            </span>
            </div>

  <script>
  
  var availableTags = [];
  $.ajax({
      method:"GET",
      url:"/product-list",
      success:function(response){
          StartAutocomplete(response);

      }
  });
  function StartAutocomplete(availableTags)
  {
      $( "#search-product" ).autocomplete({
          source: availableTags
  });
  }

  

</script>



<!--=======================================
  All Jquery Script link
===========================================-->
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('assets/frontend/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/jquery/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- ==== Plugin JavaScript ==== -->
<script src="{{ asset('assets/frontend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>

<!-- Menu js -->
<script src="{{ asset('assets/frontend/js/menu.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('assets/frontend/js/frontend-custom.js') }}"></script>


<script src="{{asset('admin/sweetalert2/sweetalert2.all.js')}}"></script>
<input type="hidden" id="base_url" value="{{url('/')}}">
<!-- Start:: Navbar Search  -->
<input type="hidden" class="search_route" value="{{ route('search-list') }}">
<script src="{{ asset('assets/frontend/js/custom/search-course.js') }}"></script>
<!-- End:: Navbar Search  -->


<!-- DataTables  & Plugins -->
<script src="{{asset('assets/frontend/vendor/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/datatable/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
   

  </body>
</html>