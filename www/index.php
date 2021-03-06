<!DOCTYPE html>
<html>
    <head>
        <title>Cloudflare Check</title>

        <link rel="stylesheet" type="text/css" href="assets/css/main.css">

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
    </head>
    <body>
        <div id="header">
            <span>Does it use</span>
            <img src="assets/img/cloudflare-logo.png" alt="Cloudflare" id="cloudflare-logo">
            <span>?</span>
        </div>
        <div id="content">
            <div class="result result-yes"><b>Nice!</b> This site is on CloudFlare.</div>
            <div class="result result-no"><b>Hmmm...</b> This site is not using CloudFlare.</div>
            <div class="result result-error"><b>Uhh...</b> There was a problem connecting to the origin server..</div>

            <form id="urlform">
                <input type="text" id="urlbox" placeholder="">
            </form><br>

            <footer>
                <a href="https://github.com/mitchfizz05/cloudflare-check" title="mitchfizz05/cloudflare-checker">Cloudflare Checker</a> by <a href="http://mitchfizz05.net/" title="Mitchfizz05">Mitchfizz05</a> |
                Not affiliated with <a href="https://cloudflare.com/" title="CloudFlare.com">CloudFlare</a> (they are pretty cool though!)
            </footer>
        </div>
    </body>
</html>