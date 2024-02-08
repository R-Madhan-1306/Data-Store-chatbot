
<head>
<link rel="stylesheet" href="/asset/blog-home.css">
<link rel="stylesheet" href="/asset/bootstrap.min.css">
<link rel="shortcut icon" type="x-icon" href="/asset/logo.png">
</head>



<div class="container mt-5">
    <table class="table table-hover">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        </tr>
    </thead>
    <tbody>

    @foreach($data as $item)
        <tr>
        <th scope="row"><?php echo $item['title']; ?></th>
        <td><?php echo $item['content']; ?></td>
        </tr>
    @endforeach
    </tbody>
    </table></div>