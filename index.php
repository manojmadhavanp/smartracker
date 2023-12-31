<?php const base_url = "http://localhost/tracker/"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracker Application</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo (base_url); ?>assets/css/style.css">

</head>

<body>
    <div class="header">
        <div class="boxcontainer">
            <div class="box small">
                <img src="<?php echo (base_url); ?>assets/img/trackerlogo.png" />
            </div>
            <div class="box small"></div>
            <div class="box large">
                <ul class="boxcontainer jc_right">
                    <li>About</li>
                    <li>Pricing</li>
                    <li>Feedback</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="tablecontainer">
            <div class="heading boxcontainer spaceout">
                <h1 class="box large">Trakers</h1>
                <div class="box">
                    <a herf="#" class=" btn primary jc_right">Add New Tracker</a>
                </div>
            </div>
            <div id="trackerbody" class="boxbody boxcontainer">
                <div class="boxcard">
                    <div class="title">Title 1</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem temporibus earum eum neque similique vel consectetur deleniti animi atque esse vitae, at ab sapiente accusantium, repellat ducimus, odio tempore.</div>
                </div>
                <div class="boxcard">
                    <div class="title">Title 2</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem temporibus earum eum neque similique vel consectetur deleniti animi atque esse vitae, at ab sapiente accusantium, repellat ducimus, odio tempore.</div>
                </div>
                <div class="boxcard">
                    <div class="title">Title 2</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem temporibus earum eum neque similique vel consectetur deleniti animi atque esse vitae, at ab sapiente accusantium, repellat ducimus, odio tempore.</div>
                </div>
                <div class="boxcard">
                    <div class="title">Title 2</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem temporibus earum eum neque similique vel consectetur deleniti animi atque esse vitae, at ab sapiente accusantium, repellat ducimus, odio tempore.</div>
                </div>
                <div class="boxcard">
                    <div class="title">Title 2</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem temporibus earum eum neque similique vel consectetur deleniti animi atque esse vitae, at ab sapiente accusantium, repellat ducimus, odio tempore.</div>
                </div>
                <div class="boxcard">
                    <div class="title">Title 2</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem temporibus earum eum neque similique vel consectetur deleniti animi atque esse vitae, at ab sapiente accusantium, repellat ducimus, odio tempore.</div>
                </div>
                <div class="boxcard">
                    <div class="title">Title 2</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem temporibus earum eum neque similique vel consectetur deleniti animi atque esse vitae, at ab sapiente accusantium, repellat ducimus, odio tempore.</div>
                </div>
                <div class="boxcard">
                    <div class="title">Title 2</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem temporibus earum eum neque similique vel consectetur deleniti animi atque esse vitae, at ab sapiente accusantium, repellat ducimus, odio tempore.</div>
                </div>
                <div class="boxcard">
                    <div class="title">Title 2</div>
                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem temporibus earum eum neque similique vel consectetur deleniti animi atque esse vitae, at ab sapiente accusantium, repellat ducimus, odio tempore.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p style="text-align: center; opacity: 0.5;">Made By: Manoj Madhavan</p>
    </div>
    <script src="<?php echo (base_url); ?>assets/js/TrackerManager.js" type="text/javascript"></script>

    <script>
        const pathArray = window.location.pathname.split("/");
        const trackerID = pathArray['2'];
        var context = {};
        var TrackerManager = new Tracker_Manager(context);
        TrackerManager.fetch(trackerID);
    </script>
</body>

</html>