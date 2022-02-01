<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        var root = 'https://jsonplaceholder.typicode.com';
        $(function(){    // metendo la funzione anonima quando il dom sara pronto allora si eseguira la funzione
        $.ajax({
            url: root + '/posts',
            method: 'GET',
        }).then(function(data) {
            var ul = document.createElement('ul');
           for (let index = 0; index < data.length; index++) {
               var post = data[index];
               var li = document.createElement('li');
               li.innerHTML = post.title;
               ul.append(li);
               console.log(post.title);
           }
           document.body.appendChild(ul);
        });
    });
    </script>

</head>

<body style="background-color: red;">

</body>

</html>
<?php


?>