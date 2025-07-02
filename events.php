<?php
    $name = "Events"; 
    include_once "quick/header.php";
    ?>

<style>
        body {
            background-color: #f4f4f9;
            text-align: center;
        }
        .container {
            font-family: Arial, sans-serif;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1000px;
        }
        embed {
            width: 100%;
            height: 100vh;
        }

        @media (max-width: 600px) {
            embed {
                height: 80vh; /* Adjust the height on smaller screens */
            }
        }

        @media (max-width: 400px) {
            embed {
                height: 70vh; /* Further adjustment for very small screens */
            }
        }
    </style>
</head>
<body>
    

        <div class="container">
            <h1>Founder's Day 2025</h1>
            <p> Delta Theta Sigma's Founder's Day is a special occasion celebrated annually
                by the fraternity, honoring its origins and the enduring legacy of its founders. 
                This day serves as a reminder of the values and brotherhood that have shaped the
                organization throughout its history. Alumni from near and far come back to the 
                house to reconnect with old friends, celebrate their shared experiences, and 
                reflect on the lasting impact the fraternity has had on their lives. It's a day
                filled with nostalgia, as alumni remember the moments that defined their time in
                    Delta Theta Sigma and the bonds that continue to thrive long after graduation. </p>

            <a href="files/project1.pdf" type="pdf"> Download this year's Founder's Day information </a>
        </div>



<?php    
include_once "quick/footer.php";
?>