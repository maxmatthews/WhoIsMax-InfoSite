<!--Are you snooping in my source code? Don't bother, it's a public git repo here:
https://github.com/maxmatthews/WhoIsMax-InfoSite -->
<!DOCTYPE html>
<html>

<head>
    <?php include 'head.php'; ?>
</head>

<body>

<div class="container-fluid" id="home">
    <div id="particles-js"></div>
    <div id="content">
        <div class="text-center">
            <h1>Max Matthews</h1>
            <h2 class="animatedDeveloper">
                <span class="animateType"></span>
            </h2>

            <i class="fa fa-chevron-down"></i>
        </div>
    </div>
    <?php include 'links.php'; ?>
    <div class="belowFoldContent">
        <div class="text-center">
            <h1>Hi. I'm Max.</h1>

            <h3>
                I'm a full stack developer in Syracuse, NY. I enjoy connecting with aspiring developers and entrepreneurs.
                I'm also an active mentor, teacher, and blogger.
            </h3>
            <h3>I'm more than happy to chat with anyone and help them on their journey.
                For guidance <a href="mailto:website@maxmatthe.ws">reach out</a> and we'll talk soon.</h3>

            <h3>You can also view or subscribe to my <a href="https://medium.maxmatthe.ws">Medium</a> and <a href="https://twitter.com/teckno101">Twitter</a> feeds below.</h3>
        </div>
        <div class="mediumFeedContainer" id="mediumContainer">
            <div class="mediumFeed">
                <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
                <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
                <ul class="juicer-feed" data-feed-id="medium-912e1101-03e8-4a86-aeaa-ca7f0c08ad4b"></ul>
            </div>
        </div>
        <div class="mediumFeedContainer" id="twitterContainer">
            <div class="mediumFeed">
                <p>&nbsp;</p>
                <a class="twitter-timeline"  href="https://twitter.com/teckno101" data-widget-id="269094850744418304">Tweets by @teckno101</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
        <div class="clearFloat"></div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="typed.js"></script>
<script src="debounce.js"></script>
<script src="app.js"></script>
</body>

</html>