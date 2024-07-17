<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Test app</title>
    <style>
        body {
            padding: 1%;
            color: black;
        }

        #form_id {
            padding: 1%;

        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <form id="form_id">
                    <label>Country</label><br>
                    <select id="country" name="countries" class="form-select">
                        <option value="">Select Country</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Eritrea">Eritrea</option>
                    </select>
                    <label>City</label><br>
                    <select id="city" name="city" class="form-select">
                        <option value="">Select City</option>
                        <option value="Addis Ababa">Addis Ababa</option>
                        <option value="Keren">Asmara</option>
                    </select>
                    <label>Alert Email</label><br>
                    <input type="email" name="alert-email" placeholder="test@gmail.com" class="form-control">
                    <label>When Temperature is:</label><br>
                    <input type="number" name="temperature" placeholder="40" class="form-control">
                    <label>When Humidity is:</label><br>
                    <input type="number" name="Humidity" placeholder="40" class="form-control">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="mx-auto d-block" src="/assets/images/weather.png" alt="weather image" width="300px"
                        height="300px">
                    <div class="card-img-overlay align-item-center">
                        <h1 class="text-center">50*c</h1>
                    </div>
                </div>
                <div class="card-footer">
                    <h3 class="card-title text-center">Temperature Live Data</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="mx-auto d-block" src="/assets/images/weather.png" alt="weather image" width="300px"
                        height="300px">
                    <div class="card-img-overlay">
                        <h1 class="text-center">50*c</h1>
                    </div>
                </div>
                <div class="card-footer">
                    <h3 class="card-title text-center">Humidity Live Data</h3>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
