<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="animation.css" type="text/css">
  <style>
    @keyframes examples{
      /*
      semplice
      from {background-color: red ; }
      to { background-color: yellow; }
      /*

      /* con piu tdettagli di key frame */
      0%   {background-color:red; left:0px; top:0px;}
      25%  {background-color:yellow; left:200px; top:0px;}
      50%  {background-color:blue; left:200px; top:200px;}
      75%  {background-color:green; left:0px; top:200px;}
      100% {background-color:red; left:0px; top:0px;}
    }

    div{
      width: 100px;
      height: 100px;
      background-color: red;
      position: relative;

      animation-name: examples;
      animation-duration: 4s;
      /*animation-iteration-count: 3;*/
      animation-iteration-count: infinite;
      /*animation-direction: reverse;*/
      animation-direction: alternate;
    }
  </style>
</head>
<body>
  <div>pippo</div>

</body>
</html>