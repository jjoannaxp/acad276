<html>
<?php
// Define variables
$fullname = "Joanna Poon";
$email = "jhpoon@usc.edu";
$classyear = "c/o 2026  - C9! ";
?>
<head>
    <title>Class Page</title>
</head>
<style>
    body {
        width: 90%;
        margin: auto;
        margin-top: 5%;
        font-family: Helvetica;

        background-color: #FAF2E8;
        color: #4F1C10;
    }

    #header {
        border: #4F1C10 1px dashed;
        width: auto;
        text-align: center;
    }

    h1 {
        font-size: 50pt;
        margin: 0;
        margin-top: 20px;
    }

    h3 {
        font-weight: 10;
    }

    #deliverables {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: center;
        gap: 5%;
    }

    .section {
        display: flex;
        flex-direction: column;
        width: 40%;
        background-color: white;
        border: #4F1C10 1px solid;
        padding: 1%;
    }

    .titlesection {
        font-weight: 600;
        font-size: 18px;
        padding-bottom: 1%;
        width: 90%;
        text-align: center;
        margin: auto;
        border-bottom: #4F1C10 1px dashed;
    }

    .items {
        width: 90%;
        margin: auto;
        margin-top: 5px;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .item {
        display: flex;
        flex-direction: row;
        width: 100%;
        justify-content: space-between;
    }

    .multiple {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 10px;
    }

    a {
        color: #4F1C10;
    }
</style>
<body>
<div id="header">
    <h1><?php echo $fullname; ?> (｡•̀ᴗ-)✧</h1>
    <h3><b>⋆☁<?php echo $classyear; ?> ☁⋆˖</b><br>
        <em><?php echo $email; ?></em>
    </h3>
</div>
<p>It is <?php echo date("l, F j, Y \a\\t h:i A"); ?></p>
<p>You are using <?php echo $_SERVER["HTTP_USER_AGENT"]; ?></p>
<p>Your browser is located at <?php echo $_SERVER["REMOTE_ADDR"]; ?></p>
<div id="deliverables">
    <div class="section">
        <div class="titlesection">Labs</div>
        <div class="items">
            <div class="item"><a class="itemtitle" href="http://jhpoon.webdev.iyaserver.com/acad276/classpage.php">Class
                    Page</a>
                <div class="itemdate">9.6.23</div>
            </div>
            <div class="item"><a class="itemtitle"
                                 href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/jhpoon_schedule.sql">Export</a>
                <div class="itemdate">9.15.23</div>
            </div>
            <div class="item"><a class="itemtitle"
                                 href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/search-result-details/search.php">Search-Results-Details</a>
                <div class="itemdate">9.20.23</div>
            </div>
            <div class="item"><a class="itemtitle"
                                 href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/email/class_search.php">Email</a>
                <div class="itemdate">10.14.23</div>
            </div>

        </div>
    </div>
    <div class="section">
        <div class="titlesection">Assignments</div>
        <div class="items">
            <div class="item">
                <div class="multiple" items>
                    <a class="itemtitle"
                       href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/search/search.php">Contact Form</a>
                    <a class="itemtitle"
                       href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/search/movie_search.php">Movie
                        Search</a>
                    <a class="itemtitle"
                       href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/search/class_search.php">Class
                        Search 1.0</a>
                </div>
                <div class="itemdate">9.11.23</div>
            </div>
            <div class="item">
                <a class="itemtitle"
                   href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/search-p2/class_search.php">Class
                    Search 2.0</a>
                <div class="itemdate">9.13.23</div>
            </div>
            <div class="item">
                <a class="itemtitle"
                   href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/add%20and%20insert/classadd.php">Add
                    and
                    Insert</a>
                <div class="itemdate">9.16.23</div>
            </div>
            <div class="item">
                <a class="itemtitle"
                   href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/proposal/proposal.php">Proposal</a>
                <div class="itemdate">9.25.23</div>
            </div>
            <div class="item">
                <a class="itemtitle"
                   href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/edit-update/search.php">Edit-Update</a>
                <div class="itemdate">9.27.23</div>
            </div>
            <div class="item">
                <a class="itemtitle"
                   href="http://jhpoon.webdev.iyaserver.com/acad276/deliverables/img-add/search.php">Image Add</a>
                <div class="itemdate">10.31.23</div>
            </div>
            <div class="item">
                <a class="itemtitle"
                   href="https://jhpoon.webdev.iyaserver.com/acad276/fusebox/src/pages/dashboard.php">Fusebox</a>
                <div class="itemdate">10.31.23</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>