<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Accounts | Banking System</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
    />
    <link rel="stylesheet" href="assets/css/customer.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!--Navbar Starts Here-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.html"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav navbar-right ml-auto">
            <li>
              <a class="nav-link active" aria-current="page" href="./index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./transfer.html">Transfer Money</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar ends here  -->

    <div class="my-info text-center">
      <h2>Name: Snehal</h2>
      <h4>Net Bank Balance: $<span id="myAccountBalance">15000</span></h4>

      <button
        class="btn btn-primary btn-info btn-lg"
        data-toggle="modal"
        data-target="#sendMoney"
      >
        Send Money
      </button>
      <a
        class="btn btn-primary btn-info btn-lg"
        href=""
        data-toggle="modal"
        data-target="#transactionHistory"
        >Customers History</a
      >
    </div>

    <!-- Modal send money -->
    <div
      class="modal fade"
      id="sendMoney"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="input-group mb-3">
                <input
                  type="text"
                  id="enterName"
                  class="form-control"
                  placeholder="Recipient's username"
                  aria-label="Recipient's username"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2"
                    >@email.com</span
                  >
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>
                <input
                  type="text"
                  id="enterAmount"
                  class="form-control"
                  placeholder=" Enter Amount"
                  aria-label="Amount (to the nearest dollar)"
                />
                <div class="input-group-append">
                  <span class="input-group-text">.00</span>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button
              type="button"
              onclick="sendMoney()"
              class="btn btn-success"
              data-dismiss="modal"
            >
              Send Money
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal send money ends here-->

    <!-- Modal transaction History-->
    <div
      class="modal fade"
      id="transactionHistory"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Transaction History
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ol id="transaction-history-body"></ol>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- table  -->
    <div class="container">
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead>
            <tr class="table-danger">
              <th scope="col">Sl. No.</th>
              <th scope="col">Name</th>
              <th scope="col">E-mail</th>
              <th scope="col">Bank Balance(in Rs)</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-light">
              <td scope="row">1</td>
              <td>Snehal v ghadage</td>
              <td>Snehal@email.com</td>
              <td>
                <p id="snehalBankBalance">100000</p>
              </td>
            </tr>
            <tr class="table-info">
              <td scope="row">2</td>
              <td>amey jadhav</td>
              <td>amu@email.com</td>
              <td>
                <p id="amuBankBalance">25000</p>
              </td>
            </tr>
            <tr class="table-light">
              <td scope="row">3</td>
              <td>piyu pawar</td>
              <td>piya@email.com</td>
              <td>
                <p id="piyaBankBalance">15000</p>
              </td>
            </tr>
            <tr class="table-info">
              <td scope="row">4</td>
              <td>RD</td>
              <td>rd@email.com</td>
              <td>
                <p id="rdBankBalance">12000</p>
              </td>
            </tr>


            <tr class="table-light">
              <td scope="row">5</td>
              <td>vedant desai</td>
              <td>ved@email.com</td>
              <td>
                <p id="vedBankBalance">12000</p>
              </td>
            </tr>

            <tr class="table-info">
              <td scope="row">6</td>
              <td>Astha Sarve</td>
              <td>astha@email.com</td>
              <td>
                <p id="asthaBankBalance">5000</p>
              </td>
            </tr>
            
            <tr class="table-light">
              <td>7</td>
              <td>pooja</td>
              <td>pooja@email.com</td>
              <td>
                <p id="poojaBankBalance">5600</p>
              </td>
            </tr>
            <tr class="table-info">
              <td scope="row">8</td>
              <td></td>
              <td>chandu@email.com</td>
              <td>
                <p id="chanuBankBalance">30000</p>
              </td>
            </tr>
            <tr class="table-info">
              <td scope="row">10</td>
              <td>jiya kapoor</td>
              <td>jiya@email.com</td>
              <td>
                <p id="jiyaBankBalance">1300</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Footer -->

    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

    <footer class="bg-light text-center text-lg-start">
      <!-- Grid container -->

      <!-- Copyright -->
      <div
        class="text-center p-3"
        style="background-color: rgb(159, 194, 250)"
      >
        © 2021 Copyright:
        <p class="heart" style="color: black">
          Made <i class="fa fa-heart pulse"></i> by Snehal
        </p>
      </div>
      <!-- Copyright -->
    </footer>
  </body>
</html>
