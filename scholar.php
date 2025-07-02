<?php
    $name = "Scholarship"; 
    include_once "quick/header.php";
    ?>

<style>
        body {
          
            background-color: #f4f4f9;

        }
        .container {
            font-family: Arial, sans-serif;
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            width: 100%;
        }
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
        .indent{
            margin-left: 30px;
        }
    </style>


    <div class="container">
        <h1>Scholarship Application</h1>
        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
            <p><br>
            Several $1000 live-in scholarships are being offered to male freshmen or transfer students coming to Ohio State's Columbus campus! 
            If accepted, applicants will get to live in our house and receive a $1000 deduction off of their housing bill.
            Delta Theta Sigma is a professional agricultural fraternity dedicated to the promotion of the following principals as set forth by the founders of Delta Theta Sigma:
            <i> <div class="indent"> <br><br>
            
            The promotion of agriculture   <br><br>

            Securing a high degree of scholarship <br><br>

            Fostering the spirit of brotherhood <br><br>

            Assisting in social, behavioral, and cultural development of our members. <br><br>
            </i> </div>

            <center> The scholarship application will be due Monday, April 1st. </center>
            </p>
            
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="parents">Mother's Name</label>
                <input type="text" id="mom" name="mom" required>
            </div>

            <div class="form-group">
                <label for="parents">Father's Name</label>
                <input type="text" id="dad" name="dad" required>
            </div>

            <div class="form-group">
                <label for="transcript">High School Transcript (PDF)</label>
                <input type="file" id="transcript" name="transcript" accept=".pdf" required>
            </div>

            <div class="form-group">
                <label for="resume">Resume (PDF)</label>
                <input type="file" id="resume" name="resume" accept=".pdf" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit">
            </div>

        </form>
    </div>

    <?php    
include_once "quick/footer.php";
?>