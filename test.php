<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<style>
.active { color: red; }
</style>
</head>
<body>
<div class="menu">

    <ul>
    <li><a href="~/link1/">LINK 1</a>
    <li><a href="~/link2/">LINK 2</a>
    <li><a href="~/link3/">LINK 3</a>
    </ul>

</div>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
$(function(){

    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.menu a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

});
</script>

</body>
</html>
