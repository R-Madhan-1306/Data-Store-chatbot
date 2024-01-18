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
      <li><a href="#details">Profile</a></li>
      <li><a href="/insert_form">Add</a></li>
      <li><a href="#Show">Show</a></li>
      <li><a href="/logout">Logout</a></li>
      <li style="float:right"><a>{{auth()->user()->username}}</a></li>
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
    
  </body>
</html>