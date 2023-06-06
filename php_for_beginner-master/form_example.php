<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div>

    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 mt-4 pt-5">
        <h1 class="mb-4">User registration from</h1>

                    <form action="./form_example_submit.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                
            </div>
            <div class="mb-3">
                <label for="fullName" class="form-label">Name</label>
                <input type="text" class="form-control" id="fullName" aria-describedby="nameHelp" name="fullName" required>
                
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">Date of birth</label>
                <input type="date" class="form-control" id="dob" aria-describedby="nameHelp" name="dob" required>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">

        </div>

    </div>
    </div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>