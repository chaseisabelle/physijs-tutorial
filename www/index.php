<html>
    <head>
        <title>physijs tutorial</title>
    </head>
    <body style="border: 0px; margin: 0px;">
        <div class="row">
            <div class="col-3">
                <form id="control-form">
                    <div class="row no-margin-row">
                        <strong>gravity</strong>
                    </div>
                    <div class="row no-margin-row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="x" name="gravity-x">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="y" name="gravity-y">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="z" name="gravity-z">
                        </div>
                    </div>
                    <div class="row no-margin-row">
                        <strong>camera</strong>
                    </div>
                    <div class="row no-margin-row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="x" name="camera-x">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="y" name="camera-y">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="z" name="camera-z">
                        </div>
                    </div>
                </form>
            </div>
            <div id="viewport" class="col-9"></div>
        </div>
    </body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="shit.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="three.js"></script>
    <script src="physi.js"></script>
    <script src="physijs_worker.js"></script>
    <script src="tutorial.js"></script>
</html>