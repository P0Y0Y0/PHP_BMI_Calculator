<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        
        .nav-link {
            color: white;
        }
    
        .form-control:hover {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); 
        }

        .form-check-input:hover + .form-check-label::before {
            border-color: #007bff;
        }

        .form-check-input:hover + .form-check-label::after {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #007bff;
            border-color: #007bff;
        }

    </style>
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body justify-content-center" data-bs-theme="dark">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link disabled" style="color: white;"><b>BMI Calculator</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Calculator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./history.php">History</a>
            </li>
        </ul>
    </nav>
    <div class="container" style="width:25%">
        <div class="row pt-4">
            <div class="col text-center">
                <h3>BMI Calculator</h3>
            </div>
            <?php
            if (isset($_GET['error'])) {
            ?>
                <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                    All fields are required. Please fill all the required fields and submit again.
                </div>
            <?php
            } elseif (isset($_GET['deleted'])) {
            ?>
                <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                    All data has been successfully deleted.
                </div>
            <?php
            }
            ?>
            <form action="./proses_bmi.php" method="post">
                <div class="col">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">

                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" min=1>
                    
                    <label for="gender" class="form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Male">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Female">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                    
                    <label for="height" class="form-label">Height</label>
                    <input type="number" name="height" class="form-control" min=1>
                    
                    <label for="weight" class="form-label">Weight</label>
                    <input type="number" name="weight" class="form-control" min=1>
                    
                    <div class="justify-content-center text-center">
                        <button type="submit" class="btn btn-primary mt-5">Calculate BMI</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>