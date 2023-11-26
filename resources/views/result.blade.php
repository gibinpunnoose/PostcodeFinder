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
        <div class="container">
            <label for="information">
                <h3>Geographical Information </h3>
            </label>
            <br>
            <span>
                <label for="postcode">Postcode : </label> <?= $information['postcode'] ?> </span>
            <span>
                <label for="postcode">country : </label> <?= $information['country'] ?> </span>
            <span>
                <label for="postcode">Strategic Health Authority : </label> <?= $information['nhs_ha'] ?> </span>
            <span>
                <label for="postcode">Longitude : </label> <?= $information['longitude'] ?> </span>
            <span>
                <label for="postcode">Latitude : </label> <?= $information['latitude'] ?> </span>
            <span>
                <label for="postcode">European Electoral Region : </label>
                <?= $information['european_electoral_region'] ?>
            </span>
            <span>
                <label for="postcode">Primary Care Trust : </label> <?= $information['primary_care_trust'] ?> </span>
            <span>
                <label for="postcode">Parliamentary Constituency : </label>
                <?= $information['parliamentary_constituency'] ?> </span>
            <span>
                <label for="postcode">current administrative : </label> <?= $information['admin_ward'] ?> </span>
            <span>
                <label for="postcode">Police Force Area : </label> <?= $information['pfa'] ?> </span>
            <span>
                <label for="postcode">Clinical Commissioning Group : </label> <?= $information['ccg'] ?> </span>
            <input class="button" type="submit" onclick="location.href='/';" name="submit" value="Back">
            </form>
        </div>


    </div>

</body>

</html>
