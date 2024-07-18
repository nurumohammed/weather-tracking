<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Weather tracking app</title>
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
    @vite('resources/js/app.js')
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <form id="form_id">
                    <label>Country</label><br>
                    <select id="country" name="countries" class="form-select">
                        <option value="">Select Country</option>
                        <option value="Ethiopia">Ethiopia</option>
                    </select>
                    <label>City</label><br>
                    <select id="city" name="city" class="form-select">
                        <option value="">Select City</option>
                        <option value="Addis Ababa">Addis Ababa</option>
                        <option value="Keren">Hawassa</option>
                        <option value="Keren">Kombolcha</option>
                        <option value="Keren">Shashemane</option>
                    </select>
                    <label>Alert Email</label><br>
                    <input type="email" name="alert-email" placeholder="test@gmail.com" class="form-control">
                    <label>When Temperature is:</label><br>
                    <input type="number" name="temperature" placeholder="40" class="form-control">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="mx-auto d-block" src="/assets/images/weather.png" alt="weather image" width="300px"
                        height="300px">
                    <div class="card-img-overlay align-center">
                        <h1 id="temp" class="text-center">Loading...</h1>
                    </div>
                </div>
                <div class="card-footer">
                    <h6 id="temp-update" class="text-center">loading...</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="mx-auto d-block" src="/assets/images/weather.png" alt="weather image" width="300px"
                        height="300px">
                    <div class="card-img-overlay">
                        <h1 id="humid" class="text-center">Loading...</h1>
                    </div>
                </div>
                <div class="card-footer">
                    <h6 id="humid-update" class="card-title text-center">loading...</h6>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(() => {
            window.Echo.channel('weatherChannel')
            .listen('weatherEvent', (e)=>{

                var temp = document.getElementById('temp');

                temp.textContent = e['message']['temp_c'];

                var humid = document.getElementById('humid');

                humid.textContent = e['message']['humidity'];

                var humidUpdateAt = document.getElementById('humid-update');

                humidUpdateAt.textContent = e['message']['last_updated'];

                var tempUpdateAt = document.getElementById('temp-update');

                tempUpdateAt.textContent = e['message']['last_updated']
            })
        }, 100);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
