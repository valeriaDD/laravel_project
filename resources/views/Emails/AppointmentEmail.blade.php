<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Noutate</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='CSSfile.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1>User made an appointment</h1>

        <p>Client information:</p>
        <ul>
            <li>Id: {{ $client_id }}</li>
            <li>Name: {{ $name }}</li>
            <li>Surname: {{ $surname }}</li>
            <li>Email: {{ $email }}</li>
            <li>Phone: {{ $phone }}</li>
        </ul>

        <p>Service Information</p>
        <ul>
            <li>Name: {{ $service_name }}</li>
            <li>Kinetotherapeut id: {{ $kinetotherapist_id }}</li>
            <li>Date: {{ $date }}</li>
            <li>Start time: {{ $start_time }}</li>
            <li>End time: {{ $service_end_time }}</li>
          </ul>
    </div>

</body>

</html>
