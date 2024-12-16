<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Story - Adolf Hitler</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Importing Poppins font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        /* Global styles */
        body {
            background-image: url('hitler.jpg'); /* Set image as background */
            background-size: cover; /* Make the background image cover the entire page */
            background-position: center center; /* Center the image */
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Gradient background for story pages */
        .gradient-bg {
            background: linear-gradient(135deg,rgb(124, 255, 240),rgb(33, 118, 175));
            color: white;
            min-height: 100vh;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Headings */
        h1 {
            text-align: center;
            font-size: 2.5em;
            margin: 20px 0;
            animation: fadeIn 1s ease-in-out;
        }

        /* Text content with horizontal margins */
        p, body > div {
            max-width: 900px;
            margin: 0 auto;
            text-align: justify;
            font-size: 1.2em;
            line-height: 1.8;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect for text boxes */
        p:hover, body > div:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        /* Navigation buttons */
        .nav-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }

       /* Navigation buttons */
       .nav-button, .slide-button {
            text-decoration: none;
            font-size: 1.1em;
            color: white;
            padding: 10px 25px;
            background: linear-gradient(135deg,rgb(132, 231, 211),rgb(82, 202, 30)); /* Teal gradient */
            border-radius: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect for navigation buttons */
        .nav-button:hover, .slide-button:hover {
            transform: translateY(-5px);
            background: linear-gradient(135deg,rgba(0, 107, 97, 0.69), #0abde3); /* Cyan gradient on hover */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        /* Keyframes for animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }
            p {
                font-size: 1em;
            }
            .nav-button, .slide-button {
                font-size: 0.9em;
                padding: 8px 20px;
            }
        }
    </style>
</head>
<body class="gradient-bg">
    <a href="index.html" class="nav-button">Home</a>
    <h1>First Story - Adolf Hitler</h1>

    <?php
    echo '<p>Adolf Hitler (1889–1945) was the leader of Nazi Germany from 1933 to 1945, infamous for his role in initiating World War II and orchestrating the Holocaust, which led to the deaths of millions.</p>';
    echo '<p>Born in Austria, he rose to power as the head of the National Socialist German Workers\' Party (Nazi Party), promoting a totalitarian regime rooted in anti-Semitism, militarism, and the ideology of Aryan supremacy.</p>';
    echo '<p>Hitler\'s expansionist policies led to the invasion of Poland in 1939, triggering the war.</p> ';
    echo '<p> His reign ended with Germany\'s defeat and his suicide in 1945.</p>';
    ?>
<center>
    <div class="nav-container">
        <a href="Index.html" class="nav-button">Back to Home</a>
    </div>
    </center>
    <center>
        <a href="Story-2.php" class="slide-button">Next Story</a>
    </center>
</body>
</html>
