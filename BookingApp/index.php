<?php



    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $days = $_POST['days'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $hotel = $_POST['hotel'];

    }

  
  
    ?>

<html>
<head>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
 

    <header>
       <div class="bg-image"></div>
       <div class="bg-text">
           <h1>Welcome to Xpress Bookings</h1>
           <h3>Hotel Bookings made simple</h3>
       </div>
     
    </header>

    <p style="padding: 1rem;">Tell us a few details to get started</p>
    <form action="hotel.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" required>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" requred>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />

        <label for="days">Length of stay</label>
        <input type="number" id="days" name="days" required min="1"/> 

        <label for="checkin">Check in date</label>
        <input type="date" id="checkin" name="checkin" required>

        <label for="checkout">Check out date</label>
        <input type="date" id="checkout" name="checkout" required>
        
        <label for="hotel">Choose a hotel</label>
        <select type="radio" id="hotel" name="hotel">
            <option value="Radisson">Radisson Blue</option>
            <option value="Hippo">Hippo Pod</option>
        </select>

        <input type="submit" name="submit" value="COMPARE">
    </form>
</body>
</html>