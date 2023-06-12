<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <style>
        /* CSS styles */
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .intro {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        .intro-content {
            text-align: center;
            color: #fff;
            transition: opacity 0.3s ease-in-out;
            opacity: 0;
        }

        .intro:hover .intro-content,
        .intro.touch .intro-content {
            opacity: 1;
        }

        .intro-content h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .intro-content p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .intro-content .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .profile-pic-container {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .profile-pic {
            max-width: 100%;
            max-height: 100%;
            transition: filter 0.3s ease-in-out;
        }

        .intro .profile-pic-container::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.4);
            transition: opacity 0.3s ease-in-out;
            opacity: 0;
        }

        .intro:hover .profile-pic-container::before,
        .intro.touch .profile-pic-container::before {
            opacity: 1;
        }

        .intro-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
    <script>
        // JavaScript code
        document.addEventListener('DOMContentLoaded', function() {
            var introElement = document.querySelector('.intro');
            introElement.addEventListener('touchstart', function() {
                introElement.classList.add('touch');
            });
            introElement.addEventListener('touchend', function() {
                introElement.classList.remove('touch');
            });
        });
    </script>
</head>
<body>
<div class="intro">
    <div class="profile-pic-container">
        <img src="me.jpg" alt="Profile Picture" class="profile-pic">
        <div class="intro-overlay">
            <div class="intro-content">
                <h1>Welcome</h1>
                <p>This is my favorite photo of mine.</p>
                <a href="anotherpage2.php" class="btn">Let's Go</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>

