
<head>
<link rel="stylesheet" href="/asset/blog-home.css">
<link rel="stylesheet" href="/asset/bootstrap.min.css">
</head>
<!-- body area started form here -->

<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-dark">
            <h5 class="text-white">Create a new account</h5>
        </div>
        <div class="card-body">

            <form action="{{route('signup')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="cpassword">
                </div>
                <div class="form-check">
                    <input type="checkbox" name="terms" class="form-check-input" id="terms">
                    <label class="form-check-label" for="terms">I agree with terms and conditions</label>
                </div>
                <button type="submit" value="submit" class="btn btn-sm btn-primary mt-4">Submit</button>
            </form>
            <div><a href="/login">login Now</a></div>
        </div>
    </div>
</div>