<!DOCTYPE html>
<html>
<head>
    <title> {{page_title($title ?? '')}} </title>
    <meta charset="utf-8">
    {{-- css --}}
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     {{-- pour licone --}}
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     {{-- Google font pour la police --}}
     <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  {{--   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}

    <style type="text/css">

        body{
            font-family: 'Open Sans', Helvetico, Arial, sans serif;
        }
        /*footer{
            margin-top: 4em; 
            margin-bottom: 4em;
        }*/
        .error
        {
            color: red;
            font-weight: bold;
            font-style: italic;
        }
    </style>

</head>
<body>

	@include('layouts/partials/_nav')

    @yield('container')


    @include('layouts/partials/_footer')

    {{-- jquery --}}
    <script src="//code.jquery.com/jquery.min.js"></script>
     @include('flashy::message')

     {{-- js --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

   

</body>
</html>