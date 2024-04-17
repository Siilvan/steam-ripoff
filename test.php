=<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="checkout-stylesheet.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="checkout-js.js"></script>

        <nav class="d-flex navbar navbar-expand-md darkNav navbar-dark">
            
        <div class="mx-auto bg">
            <a href="../Home/home.html"><img
                class="logoBig" src="https://store.cloudflare.steamstatic.com/public/shared/images/header/logo_steam.svg?t=962016"></a>            
        </div>

        <button type="button" class="d-none d-md-block btn btn-success" data-target="#">
            <img width="15px" height="15px" src="https://img.icons8.com/material-sharp/256/download--v1.png">Install Steam</button>

          </nav>
    </head>

    <body id="transparentBG" style="background-color: #1b2838;">
      
        <img style="position: absolute; width: 800px; height:700px;visibility: hidden;" src="../../ImageData/games.jpg">
  
        
        <form id="checkoutForm" action="purchase.html" method="post" style="width: 40%; margin-top: 5%;" class="container fade-in">
          <div class="container" style="text-align: center;">
            <img src="https://store.cloudflare.steamstatic.com/public/shared/images/header/logo_steam.svg?t=962016">
          </div>
        
          <div class="container smallFont">
            <label ><b>Recipient Email</b></label>
            <input style="background-color: #e8f0fe;" type="text" placeholder="Enter Recipient Email" required>
        
            <label><b>Confirm Your Password</b></label>
            <input style="background-color:#e8f0fe;" type="password" placeholder="Enter Password" required>
            <br> <br>
            <label ><b>Credit Card info</b></label>
            <br>    <br>
            <label ><b>Name on card</b></label>
            <input style="background-color: #e8f0fe;" type="text" placeholder="Enter Card holder name" required>

            <label ><b>Card Number</b></label>
            <input style="background-color: #e8f0fe;" type="text" placeholder="1234-4567-8910-1234" required>

            <label ><b>Security number CCV:</b></label>
            <input style="background-color: #e8f0fe;" type="text" placeholder="CCV/CVV" required>

            <label ><b>Discount Code:</b></label>
            <input style="background-color: #e8f0fe;" type="text" placeholder="CCV/CVV">

            <h2 style="color: whitesmoke;">Product: Mortal Kombat 11</h2>
            <p style="color: whitesmoke;">Total: $89 USD</p>
            
            <button type="submit" class="smallFont" style="display: block;width: 25%; margin-left: 37%; margin-top:2%;height: 50px ;background-image: linear-gradient(to right, #3786c6 , #223e87);;">
              <span style="color: whitesmoke; font-weight: 600;">Checkout</span></button>
              <button style="width: 25%; margin-left: 37%; margin-top:2%;height: 50px; background-image: linear-gradient(to right, #df1b1b, #ba3030);" 
            type="button" class="cancelbtn smallFont" onclick=clearInput()><span style="color: whitesmoke; font-weight: 600;">Clear</span></button></button>
            <label>
                <br>
              <input type="checkbox" checked="checked" name="remember"> Remember info for next purchase
            </label>
          </div>
        
          <div class="container">
            
          </div>
        </form>

    </body>
</html>