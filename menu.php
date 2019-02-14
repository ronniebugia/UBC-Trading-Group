<!-- Sidebar -->
<nav class="w3-sidebar w3-animate-top w3-xxlarge text-black" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-xxlarge w3-padding w3-display-topleft hover" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block">
    <a href="#top" class="w3-bar-item" onclick="closeNav()"><h1 class="hover">Home</h1></a>
    <a href="#about" class="w3-bar-item" onclick="closeNav()"><h1 class="hover">About</h1></a>
    <a href="#reports" class="w3-bar-item" onclick="closeNav()"><h1 class="hover">Analyst Reports</h1></a>
    <a href="#events" class="w3-bar-item" onclick="closeNav()"><h1 class="hover">Events</h1></a>
  </div>
</nav>

<!-- Top -->
<div id="main" class="w3-top navbar">
  <span id="navToggle" class="w3-padding w3-display-topleft hover" onclick="openNav()" style="font-size:1.25em"><i class="fa fa-bars"></i> Menu</span>
</div>  



<!-- Open and close sidebar -->
<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("main").style.display = "none";
}

function closeNav() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("main").style.display = "block";
}
    
$(document).ready(function() {
 
    setTimeout(function(){
        $('body').addClass('loaded');
    }, 3000);
 
});
</script>