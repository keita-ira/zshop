<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZShop - <?php echo isset($page_title) ? $page_title : 'Home'; ?></title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Tailwind Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        zbrown: '#6B4F3B',
                        zbrownDark: '#5a3f30'
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif']
                    }
                }
            }
        };
    </script>

    <style>
        /* Animation */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        /* Sticky sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 250px;
            background-color: #6B4F3B;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            padding: 12px 16px;
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
        }

        .sidebar a:hover {
            background-color: #5a3f30;
        }

        body {
            font-family: 'Poppins', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }
    </style>
</head>

