
<head>
<link rel="stylesheet" href="/asset/blog-home.css">
<link rel="stylesheet" href="/asset/bootstrap.min.css">
<style>
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover:not(.active) {
    background-color: #111;
  }
</style>
</head>
<!-- body area started form here -->
    <ul>
      <li><a href="/profile">Back</a></li>
    </ul>
<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-dark">
            <h5 class="text-white">Data Insertion Form</h5>
        </div>
        <div class="card-body">

            <form action="/insert" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" rows="10" cols="30" class="form-control" id="content"></textarea>
                </div>
                <button type="submit" value="submit" class="btn btn-sm btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>