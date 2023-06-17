<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/booked.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1 class="text text-large">Login In</h1>
        </div>
        <form name="signin" class="form">
            <div class="input-control">
                <label for="email" class="input-label" hidden>Email Address</label>
                <input type="email" name="email" id="email" class="input-field" placeholder="Email Address">
            </div>
            <div class="input-control">
                <label for="password" class="input-label" hidden>Password</label>
                <input type="password" name="password" id="password" class="input-field" placeholder="Password">
            </div>
            <div class="input-control">
                <a href="#" class="text text-links">Forgot Password</a>
                <a href="#" class="text text-links">Create an account</a>
                <input type="submit" name="submit" class="input-submit" value="Sign In" disabled>
            </div>
        </form>
    </div>
</body>

</html>