xquery version "1.0" encoding "UTF-8";
let $x := doc("hw8.xml")
return
    transform:transform($x, ())