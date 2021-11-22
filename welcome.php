<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="style.css" />
  </head>dd
  <body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome <h2>Expense Tracker</h2>.</h1>
    <div class="container">
      <h4>Your Balance</h4>
      <h1 id="balance">$0.00</h1>
      <div class="inc-exp-container">
        <div>
          <h4>Income</h4>
          <p id="money-plus" class="money-plus">
            +$0.00
          </p>
        </div>
        <div>
          <h4>Expense</h4>
          <p id="money-minus" class="money-minus">
            -$0.00
          </p>
        </div>
      </div>

      <h3>History</h3>
      <ul id="list" class="list">
        <!-- <li class="minus">
          Cash <span>-$400</span
          ><button class="delete-btn">x</button>
        </li> -->
      </ul>
      <h3>Add New Transition</h3>
      <form id="form">
          <div class="form-control">
              <label for="text">Text</label>
              <input type="text" id="text" placeholder="Enter Text...."/>
          </div>
          <div class="form-control">
              <label for="amount">Amount <br> (negative - expense ,positive - income )</label>
              <input type="number" id="amount" placeholder="Enter amount..."> 
          </div>
          <button style="color: #000;" class="btn">All transaction</button>
          <a style="text-align: center;text-decoration: none; color: #000;" href="logout.php" class="btn">Sign Out</a>
      </form>
    </div>
    <!-- JavaYscript Project  -->
    <script src="script.js"></script>
  </body>
</html>
