<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images LaravelApp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
   body {
            background: #f4f6f9;
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #2d3e50;
            color: white;
            padding: 10px 20px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: #cce5ff;
        }

        /* Container */
        .container {
            flex: 1;
            padding: 20px;
            max-width: 1300px;
            margin: 20px auto;
        }

        /* Card Styles */
        .card {
            background: white;
            border: none;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: rgb(20, 102, 82);
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            border-radius: 12px 12px 0 0;
            text-transform: uppercase;
        }


        .card-body {
            padding: 20px;
            color: #333;
            line-height: 1.8;
        }

        /* Button Styles */
        .btn {
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            color: white;
            padding: 12px 18px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: linear-gradient(135deg, #1cc88a, #4e73df);
            transform: translateY(-2px);
        }

        /* Footer Styles */
        footer {
            background-color: #2d3e50;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.9rem;
        }

        footer a {
            color: #cce5ff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('subir.index') }}">Upload Images LaravelApp</a>
    </nav>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Upload Your Files
            </div>
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>
    <footer>
        <p>© 2024 Upload File App | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>