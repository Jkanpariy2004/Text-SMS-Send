<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Text MSG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Send OTP</h2>
        <form action="/SendOtp" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleMobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="exampleMobile" name="mobile" placeholder="Enter your mobile number">
            </div>
            <button type="submit" class="btn btn-primary">Send OTP</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
