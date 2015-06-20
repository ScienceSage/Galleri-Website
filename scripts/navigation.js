$(document).ready(function(){
    var pages = "<p>Pages</p>";
    pages += "<ul>";
    pages += "<li> <a href='/index.html'>Home</a> </li>";
    pages += "<li> <a href='/imageViewer.html'>Viewer</a> </li>";
    pages += "<li> <a href='/scripts/test.php'>Test</a> </li>";
    pages += "</ul>";
    
    $( "#pages" ).html( pages );
});