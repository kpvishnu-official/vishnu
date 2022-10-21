<?php include 'header.php' ?>
<?php
    function geoLocate($address)
    {
        try {
            $lat = 0;
            $lng = 0;
    
            $data_location = "https://maps.google.com/maps/api/geocode/json?key=".$GOOGLE_API_KEY_HERE."&address=".str_replace(" ", "+", $address)."&sensor=false";
            $data = file_get_contents($data_location);
            usleep(200000);
            // turn this on to see if we are being blocked
            // echo $data;
            $data = json_decode($data);
            if ($data->status=="OK") {
                $lat = $data->results[0]->geometry->location->lat;
                $lng = $data->results[0]->geometry->location->lng;
    
                if($lat && $lng) {
                    return array(
                        'status' => true,
                        'lat' => $lat, 
                        'long' => $lng, 
                        'google_place_id' => $data->results[0]->place_id
                    );
                }
            }
            if($data->status == 'OVER_QUERY_LIMIT') {
                return array(
                    'status' => false, 
                    'message' => 'Google Amp API OVER_QUERY_LIMIT, Please update your google map api key or try tomorrow'
                );
            }
    
        } catch (Exception $e) {
    
        }
    
        return array('lat' => null, 'long' => null, 'status' => false);
    }
?>
<body>
    <div id="Header" class="header">
        <div class="sub-header">
            <div class="menu-left">
                <h1>Vishnu Kp</h1>
            </div>
            <div class="menu-right">
                <a href="#About">About Me</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="sub">
                <h1 class="f-left">My Projects.</h1>
                <div class="main-container">
                    <div class="container">
                        <img src="#" alt="Image Container">
                        <div class="text-container">
                            <h3>Heading</h3>
                            <p>this is a small header definition.</p>
                        </div>
                    </div>
                </div>
                <form action="/formSubmitPage.php" method="GET">
                    <label>Name: <input type="submit">ut type="text" required></label>
                    <label for="">
                        Date : 
                        <input type="datetime-local" name="date-time" id="date-time">
                    </label>
                    <input type="hidden" name="process" value='1'>
                    <input type="submit">
                </form>
                
            <!-- // Todo:: Content should be updated -->
            <div id="About">
                <h2>About Me</h2>
                <p>Iam a software Engineer....</p>
                <!-- <p>// Todo:: Content should be updated</p> -->
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
