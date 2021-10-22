<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic banking System</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />
    <link href="stylesheet3.css" rel="stylesheet" />
</head>
<body>
    <!--Navbar Starts Here-->
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html"></a>
     
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-right ml-auto">
          <li>
            <a class="nav-link" aria-current="page" href="./index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./customers.html">Customers</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends here  -->

    <div class="tm-container">
        <div>
            <br>
            <!--table-->
            <div class="container">
                    <button class="btn btn-primary btn-success" data-toggle="modal" data-target="#sendMoney">Transfer Amount</button>
                <div class="table-responsive">
                    <table id="myTable" class="table table-hover table-bordered">
                        <thead>
                            <tr class="table-danger">
                                <th scope="col">Transfer From</th>
                                <th scope="col">Transfer To</th>
                                <th scope="col">Amount Transfered(Rs)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-light">
                                <td>snehal ghadage</td>
                                <td>amey jadhav</td>
                                <td><p id="Balance">100000</p></td>
                            </tr>
                            <tr class="table-info">
                                <td>piyu pawar</td>
                                <td>vidya</td>
                                <td><p id="Balance">25000</p></td>
                            </tr>
                            <tr class="table-light">
                                <td>Rd</td>
                                <td>vedant </td>
                                <td><p id="Balance">15000</p></td>
                            </tr>
                            <tr class="table-info">
                                <td>sanaya j</td>
                                <td>kiyara</td>
                                <td><p id="Balance">12000</p></td>
                            </tr>
                            <tr class="table-light">
                                <td>jiya</td>
                                <td>sammy</td>
                                <td><p id="Balance">5000</p></td>
                            </tr>
                            </tbody>
                        </table>

                            <!-- Modal send money -->
                            <div class="modal fade" id="sendMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Transfer Amount</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" onsubmit="return sendMoney();">
                                            <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Transfer From</span>
                                                    </div>
                                                    <input type="text" id="TransferFrom" class="form-control text-dark" placeholder="Enter the First Name" aria-label="username1" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                    </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Transfer To</span>
                                                    </div>
                                                    <input type="text" id="TransferTo" class="form-control text-dark" placeholder="Enter the First Name" aria-label="username2" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs.</span>
                                                    </div>
                                                    <input type="text" id="enterAmount" class="form-control text-dark" placeholder="Amount" aria-label="Amount ">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-success" value="Send" data-dismiss="modal" onclick="sendMoney()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tm-row">
                                <div class="tm-col-left text-center">
                                    <ul class="tm-bg-controls-wrapper">
                                        <li class="tm-bg-control active" data-id="0"></li>
                                        <li class="tm-bg-control" data-id="1"></li>
                                        <li class="tm-bg-control" data-id="2"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tm-bg">
                                <div class="tm-bg-left"></div>
                                <div class="tm-bg-right"></div>
                            </div>
                </div>
    <!-- Footer -->
  <footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgb(139, 181, 248)">
      © 2021 Copyright:
      <p class="heart">Made with  <i class="fa fa-heart pulse"></i>  by Snehal</p>
    </div>
    <!-- Copyright -->
  </footer>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
</body>
</html>