xquery version "1.0";
declare option exist:serialize "method=xhtml media-type=text/html";

let $my-doc := doc('hw8.xml')
return
<html>
<head><title></title></head>
 <body>
   <div>
    <ul>
    {
     for $x in doc("hw8.xml")/bookstore/book
     where $x/price>30
     order by $x/title
     return $x/title
    }
    </ul>
   </div>
 </body>
</html>