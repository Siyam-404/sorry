<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>দুঃখিত</title>
    <style>
        body {
            background-color: black; /* Set background color to black */
            color: yellow; /* Set text color to yellow */
            font-family: 'Noto Serif Bengali', serif; /* Use Noto Serif Bengali for Bangla text */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height */
            margin: 0;
            text-align: center; /* Center align text */
            overflow: hidden; /* Prevent overflow */
            animation: backgroundAnimation 10s infinite; /* Background animation */
        }

        @keyframes backgroundAnimation {
            0% {
                background-color: black;
            }
            50% {
                background-color: #111; /* Darker shade */
            }
            100% {
                background-color: black;
            }
        }

        .message {
            font-size: 2em; /* Increase font size */
        }

        .alert {
            font-size: 3em; /* Larger alert symbol */
            margin-bottom: 20px; /* Space below the alert symbol */
            animation: shake 0.5s infinite; /* Alert animation */
        }

        @keyframes shake {
            0% { transform: translate(0); }
            25% { transform: translate(-5px, 5px); }
            50% { transform: translate(5px, 5px); }
            75% { transform: translate(-5px, -5px); }
            100% { transform: translate(0); }
        }
    </style>
</head>
<body>
    <div class="message">
        <div class="alert">⚠️</div>
        <p>সাইটে কাজ চলছে। <br>
        সাময়িক অসুবিধার জন্য দুঃখিত।
        <br>
        <a href="https://siyam-404.github.io/Profile/">এই</a> সাইটের কাজ হলে জানিয়ে দিবো আবার আগের মতো ব্যবহার করতে পারবেন ধন্যবাদ।</p>
    </div>

    <script>
        // Trigger vibration when the page loads
        if (navigator.vibrate) {
            // Vibration pattern: vibrate for 500ms, pause for 200ms, then vibrate for 500ms
            navigator.vibrate([500, 200, 500]);

            // Continue vibrating with intervals
            setInterval(() => {
                navigator.vibrate([500, 200, 500]);
            }, 3000); // Repeat every 3 seconds
        }
    </script>
</body>
</html>