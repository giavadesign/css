<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #delay{
      font-size: 20px;
      /* 
      forma dettagliata
      transition-property: font-size;
      transition-duration: 4s;
      transition-delay: 1s;
      transition-timing-function: ease-in-out;
      */

      /* froma contratta */
      transition: font-size 4s 1s ease-in-out;
    }
    #delay:hover{
      font-size: 36px;
    }

    .multiple_props{
      border-style: solid;
      border-width: 1px;
      display: block;
      width: 100px;
      height: 100px;
      background-color: #900;
      transition: width 1s, height 1s, background-color 1s, transform 1s;
    }
    .multiple_props:hover{
      background-color: #CCC;
      width: 200px;
      height: 200px;
      transform: rotate(180deg);
    }
  </style>
</head>
<body>
  <div id="delay">
    ciaoo
  </div>

  <div class="multiple_props">wee</div>
</body>
</html>