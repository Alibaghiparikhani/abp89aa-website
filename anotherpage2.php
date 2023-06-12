<!DOCTYPE html>
<html>
<head>
    <title>Another Page</title>
    <style>
        /* CSS styles */
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .photos-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #002244;
        }

        .photo {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .photo:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
            z-index: 1;
        }

        .photo:not(:hover) {
            filter: brightness(0.7);
        }

        .photo-text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            cursor: pointer;
        }

        .photo:hover .photo-text {
            opacity: 1;
        }

        /* Media queries */
        @media (max-width: 768px) {
            .photos-container {
                flex-direction: column;
            }
            .photo {
                width: 100%;
                height: auto;
                margin: 10px 0;
            }
        }

        /* Add more media queries if needed for other screen sizes or orientations */
    </style>
</head>
<body>
<div class="photos-container">
    <div class="photo">
        <a href="academic.php">
            <img src="1.jpg" alt="Academic Journey">
            <div class="photo-text">Academic and Professional Journey</div>
        </a>
    </div>
    <div class="photo">
        <a href="hobbies.php">
            <img src="2.jpg" alt="Hobbies">
            <div class="photo-text">Hobbies</div>
        </a>
    </div>
    <div class="photo">
        <a href="ideology.php">
            <img src="3.jpeg" alt="Ideology">
            <div class="photo-text">Ideology</div>
        </a>
    </div>
</div>

</body>
</html> //        }