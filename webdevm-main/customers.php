<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/customers.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-2 bg-primary">
                <div>
                    <img src="styles/assets/profile1.jpg" alt="" class="profile-picture rounded-circle">
                </div>

                <div class="row gap-2">
                    <button onclick="toModels()" class="btn btn-light" type="button">Models</button>
                    <button onclick="toBranches()" class="btn btn-light" type="button">Branches</button>
                    <button onclick="toCustomers()" class="btn btn-light" type="button">Customers</button>
                </div>
                <button onclick="logout()" class="btn btn-warning">Logout</button>
            </div>
            <div class="col-7">
                <div class="col d-flex justify-content-between">
                    <h2>Customers</h2>
                    <button class="btn btn-outline-warning">Add</button>
                </div>
                <div>
                    <table class="table table-bordered table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>#</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ramel</td>
                                <td>1</td>
                                <td>Barugo, Leyte</td>
                                <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger ms-2">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-3 bg-warning text-centerO">
                <h2>Description</h2>
            </div>
        </div>
    </div>
</body>

</html>