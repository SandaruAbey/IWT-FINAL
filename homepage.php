<!-- source=https://fontawesome.com/search?m=free&o=r
source=Google fonts -->
<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "homepag.css">
    <script src="https://kit.fontawesome.com/b3ca95fff7.js" crossorigin="anonymous"></script>
    <title>Bizen.com/Home</title>
</head>
<body>
    <header class = "header" >
 <a href = "homepage.php" class = "logo">
    <img src = "Untitled-1.png" class = "logoimg">
</a>
    <nav>
    <ul class = "navi">
        <li><a href = "homepage.php" >HOME</a></li>
        <li><a href = "service.php" >SERVICE</a></li>
        <li><a href = "package.php" >PACKAGE</a></li>
        <li><a href = "aboutus.php" >ABOUT US</a></li>
        <li><a href = "Login_SK.php" class = "contact">LOG IN</a></li>

    </ul>

</nav>
    </header>
<br><br>
<article class = "art1">
<div class = "divtheam">
<p class="theam"> Elevate your <span class="highlight1">brand's</span><br> online presence with <br>our expert marketing<br> solutions</p>

<img src = "websiteSLiit.png" class =  "imglap">

</div>
</article>

<div class = "divbrands">
<p class = "pbrand">Meet Our Clients</p>
<marquee loop>
<ul class = "ulbrands">
 <li class = "librands"><img src = "https://1000logos.net/wp-content/uploads/2021/05/Mango-logo.png" class = "bimg1"></li>
 <li class = "librands"><img src = "https://www.freepnglogos.com/uploads/company-logo-png/hyundai-motor-company-logo-png-transparent-0.png" class = "bimg2"></li>
 <li class = "librands"><img src = "https://cdn.freebiesupply.com/logos/thumbs/1x/vans-3-logo.png" class = "bimg3"></li>
 <li class = "librands"><img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/American_Broadcasting_Company_Logo.svg/2044px-American_Broadcasting_Company_Logo.svg.png" class = "bimg4"></li>
 <li class = "librands"><img src = "https://www.freeiconspng.com/uploads/gucci-germany-brands-logo-png-3.png" class = "bimg5"></li>
</ul>

</div> 
</marquee>
<div class = "divtheam">
<img class = "mobi" src = "project me mobi.png">
<p class = "why"> 1.	Expertise <br><br>Our team consists of experienced professionals who are well-versed in social media marketing strategies and trends. We have the knowledge and skills to create effective campaigns that deliver results.<br><br>
2.	Customized Approach<br><br> We understand that every business is unique. We take the time to understand your specific goals, target audience, and brand voice, and tailor our strategies accordingly. Our personalized approach ensures that your social media marketing efforts align with your business objectives. <br><br>
3.	Creativity and Innovation<br><br> We pride ourselves on our ability to think outside the box and develop innovative social media marketing campaigns. We strive to create engaging and shareable content that captivates your audience and sets you apart from competitors. <br><br>
4.	Data-Driven Strategies<br><br> We base our decisions and optimizations on data and analytics. By tracking key metrics and monitoring campaign performance, we continuously refine our strategies to maximize your return on investment. <br><br>
5.	Transparent Communication<br><br> We believe in open and transparent communication with our clients. We keep you informed about the progress of your social media campaigns, provide regular reports, and are always available to address any questions or concerns you may have. <br><br>
6.	Results-Oriented<br><br> Our ultimate goal is to help you achieve tangible results through social media marketing. Whether it's increasing brand awareness, driving website traffic, or generating leads, we focus on delivering measurable outcomes that contribute to your business growth. <br><br>

</p>
</div>

<footer>
    <div class = "footerdiv">
        <div class = "h1div">
            <h1 class = "h1div">Connect with us </h1>
                <div class = "socialMedia">
            <a class = "classsocial" href = "#"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
            <a class = "classsocial" href = "#"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a> 
            <a class = "classsocial" href = "#"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a> 
            <a class = "classsocial" href = "#"><i class="fa-brands fa-square-whatsapp" style="color: #ffffff;"></i></a> 
                </div> 
            
        </div>

        <div class = "h1div">
            <h1 class = "h1div">Useful links </h1>
                <div class = "links">
                <ul class = "footerullink">
                <li class = "ad"><a href = "adminlogg.php">Admin loging</a></li>
                <li class = "user"><a href = "clientproposal.php">user proposal</a></li>
                </ul>

                </div>
                
        </div>

        <div class = "h1div">
            <h1 class = "h1div">Contact </h1>
                <div class = "address">
                    <i class="fa-solid fa-house" style="color: #ffffff;"></i>
                    <p>No.03,Nugegoda,Colombo</p>
                </div>

                <div class = "email">
                <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                    <p>info@bizen.com</p>
                </div>
        </div>

    </div>
    <div class = "footerclose">
        <h1 class = "h1footerclose">2023 copywrite@Bizen.com</h1>
    </div>

</footer>




<?php 
   /* if (isset($_POST['Submit'])){
        $Eil = $_POST['clientmail'];
       
        if(!empty($Eil)){
            $sql = "INSERT INTO email (email) VALUES ('$Eil')";
        $result = mysqli_query($con, $sql);

        }

        
    
    }*/
    ?>


</body>
</html>