<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile-Friendly CSS Grid</title>
    <style>
        /* Basic Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Body Styling */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        /* Grid Container */
        .grid-container {
            display: grid;
            gap: 10px;
            padding: 10px;
            width: 100%;
            max-width: 600px; /* Limits the container size for larger screens */
            grid-template-columns: repeat(auto-fill, minmax(100%, 1fr));
        }

        /* Grid Item Styling */
        .grid-item {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1.2em;
            border-radius: 5px;
        }

        /* Responsive Behavior */
        @media (min-width: 600px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr); /* Two columns for tablets and up */
            }
        }

        @media (min-width: 900px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr); /* Three columns for larger screens */
            }
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <div class="grid-item">Item 1</div>
        <div class="grid-item">Item 2</div>
        <div class="grid-item">Item 3</div>
        <div class="grid-item">Item 4</div>
        <div class="grid-item">Item 5</div>
        <div class="grid-item">Item 6</div>
    </div>
</body>
</html>
