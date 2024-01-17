
<head>
<link rel="stylesheet" href="/asset/blog-home.css">
<link rel="stylesheet" href="/asset/bootstrap.min.css">
</head>
<!-- body area started form here -->

<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-dark">
            <h5 class="text-white">Login to your account</h5>
        </div>
        <div class="card-body">

            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="text" name="email" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" value="submit" class="btn btn-sm btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>