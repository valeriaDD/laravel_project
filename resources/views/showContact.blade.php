<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="/app.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>show Contact</title>
</head>

<body>
    <div class="p-5">

        <h1 class=" text-center text-success ">Here you are on ShowContact page!</h1>
        <p class="text-center">If you what to go back - just press the button bellow!</p>

        <div class="d-flex justify-content-center">
            <button type="button" onclick="window.location='{{ url('/') }}'" class="btn btn-outline-primary">Go Back</button>
        </div>

    </div>

</body>

</html>