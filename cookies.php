<?php

    // based on the session, the server can understand who the browser is and what it has done in the past
    // cookies are used to store data on the client side, while sessions are used to store

    // data on the server side
    //         key      value   expiration time  path (/ is a root path of the domain)
    setcookie('name', 'Hershey', time() + 3600,  '/'); // set a cookie named 'name' with value 'Hershey' that expires in 1 hour, accessible from the root path of the domain

    echo var_dump($_COOKIE); // display all cookies that are currently set in the browser
?>