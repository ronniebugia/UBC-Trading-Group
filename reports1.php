<div>
    
<div class="w3-display-container" style="padding:32px">
        
        <?php
            $files = glob('articles/*.{txt}', GLOB_BRACE);
            
            foreach($files as $file){    
                echo'<div class="w3-content shadow-hover" style="background-color:white; color:black; padding:32px">';
                $fh = fopen($file,'r');
                $title = rtrim(fgets($fh));
                echo "<h1 style='font-size:1.5em;'><b>$title</b></h1>";
                while ($line = fgets($fh)) {
                   echo "<p>$line<p>";
                }
                fclose($fh);
                echo "</div>";
            }
        ?>    

</div>
    
<!-- START Worden Top Gainers Ticker Widget 
<script src="http://widgets.freestockcharts.com/js/jquery-1.3.1.min.js" type="text/javascript"></script> <script src="http://widgets.freestockcharts.com/script/WBIHorizontalTicker2.js?ver=12334" type="text/javascript"></script> <link rel="stylesheet" type="text/css" href="css/style.css">
<script>
    var gainTicker = new WBIHorizontalTicker("gainers");
    gainTicker.start();
</script> 
<!-- End Scrolling Ticker Widget -->
    
</div>
    

