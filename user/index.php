<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <style>
        body {
            background-color: #010812;
        }

        .navbar-brand {
            margin-left: 3%;
            margin-bottom: 5px;
        }

        @media (min-width: 992px) {
            .dropdown:hover .dropdown-menu {
                display: block;
            }

            .dropdown-item:hover {
                background-color: #f9f9f9;
                /* box-shadow: 0 0 15px 100px #323C39 inset; */
            }
        }

        .nav-item a img {
            transition: transform 0.2s ease-in-out;
        }

        .nav-item a:hover img {
            transform: scale(1.25);
        }

        /* .navbar-nav li.active {
            border: 1px solid #ccc;
        }

        .navbar-nav li:hover {
            background-color: #323C39;
            
        } */

        .navbar-nav {
            margin-right: 5%;
        }


        .navbar-nav li.active:hover, .navbar-nav li.dropdown:hover {
            background-color: #323C39;
        }


        .nav-link:hover {
            color: whitesmoke !important;
        }

        .nav-item {
            padding: 9px 10px;
            /* display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 4px;
            flex: 1; */
        }

        .navbar {
            padding: 0 0;
        }
    </style>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="..">
            <img src="../assets/images/logo.png" alt="logo" width="250px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="..">Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        New
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="student_add.php">Add Student</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="user_add.php">Add User</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/eshrks" target="_blank">
                        <img src="../assets/images/github-logo.png" alt="github logo" height="27px">
                    </a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>