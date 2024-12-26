<!DOCTYPE html>
<html>
    <head>
        <title>CRUD LARAVEL 10</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.card {
    background-color: #ffffff;
    border: 1px solid #dee2e6;
    border-radius: 0.5rem;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    max-width: 400px;
    width: 50%;
}

.card-body {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

.form-control {
    width: 100%;
    /* padding: 0.75rem; */
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    font-size: 1rem;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    padding: 0.75rem;
    font-size: 1rem;
    border-radius: 0.25rem;
    cursor: pointer;
    color: white;
    text-align: center;
    display: inline-block;
    width: 100%;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

h1 {
    text-align: center;
    margin-bottom: 1.5rem;
}


    </style>
    <body>
        @yield('content')
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>