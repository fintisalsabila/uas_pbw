<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
        <!-- Latest compiled JavaScript -->
        <script src="{{ asset('jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('popper.min.js') }}"></script>
        <script src="{{ asset('bootstrap.min.js') }}"></script>
        <style type="text/css">
            table.table-hover tbody tr:hover {                
                 background-color: lightgoldenrodyellow;
            }
        </style>   

</head>
    <body>
    @include("tema.header")       
    <div class="container-sm-fluid">
        <div class="row">
            <div class="col-sm-12">
            @yield("isi")
            </div>
        </div>
        @include("tema.footer")         
    </div>
    </body>
</html>