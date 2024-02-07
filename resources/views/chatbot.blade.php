<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data-Vault bot </title>
    <link rel="stylesheet" href="/asset/style.css">
    <link rel='stylesheet' href='/asset/suggestion.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="/asset/script.js" defer></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  </head>
  <body>
    <ul>
      <li><a href="#details">Profile</a></li>
      <li><a href="/insert_form">Add</a></li>
      <li><a href="/show">Show</a></li>
      <li><a href="/logout">Logout</a></li>
      <li style="float:right"><a>{{auth()->user()->name}}</a></li>
    </ul>
    <!-- Chats container -->
    <div class="chat-container"></div>
    
    <!-- Typing container -->
    <form action="{{asset('script.js')}}" method="post" autocomplete="off">
      @csrf
    <div class="typing-container">
      <div class="typing-content">
        <div class="typing-textarea">
        
            <div class="mycard" style="width: 10rem; ">

            </div>
        
          <textarea id="chat-input" name="promt" spellcheck="false" placeholder="Enter a Text here" required></textarea>
          <span id="send-btn" type="submit"  class="material-symbols-rounded">send</span>
        </div>
        <div class="typing-controls">
          <span id="theme-btn" class="material-symbols-rounded">light_mode</span>
          <span id="delete-btn" class="material-symbols-rounded">delete</span>
      </div>
    </div>
    </form>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>


<script>

$(document).ready(function () {
    $('#chat-input').on('keyup', function(){
        var value = $(this).val();
        $.ajax({
            type: "get",
            url: "/search",
            data: {'search':value},
            success: function (data) {
              $('.mycard').html(data);
              const pElement = document.createElement("p");
              pElement.textContent = userText+title;
             

            }
        });

    });
});

</script>




    
  </body>
</html>