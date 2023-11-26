<!DOCTYPE html>
<html>

<head>
    <title>Postcode Finder</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>

    <div class="bgimg">
        <div class="topleft">
            <p>Postcode Finder</p>
        </div>
        <div class="middle">
            <h2>Enter Postcode</h2>

            <form action="/api/lookup" method="post">
                @csrf
                {{-- <label for="postcode">Postcode</label> --}}
                <input type="text" id="postcode" name="postcode" placeholder="Postcode..">

                <ul id="suggesstion-box"></ul>
                <input type="submit" name="submit" value="Search">
            </form>
        </div>

    </div>

</body>

</html>

@if (session('error'))
    <script>
        alert('Invalid Postcode');
        window.location.href = '/';
    </script>
@endif
