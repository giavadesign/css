<!DOCTYPE html>
<html>
  <head>
    <style>
    .item1 { grid-area: header; }
    .item2 { grid-area: menu; }
    .item3 { grid-area: main; }
    .item4 { grid-area: right; }
    .item5 { grid-area: footer; }
    .item6 { grid-area: credits; display: grid; }
    .item7 { grid-area: logo; }
    .item8 { grid-area: copy; }

    .grid-container {
      display: grid;
      grid-template-areas:
        'header header header header header header'
        'menu main main main main right'
        'menu footer footer footer footer footer'
        'credits credits credits credits credits credits';
      gap: 10px;
      background-color: #2196F3;
      padding: 10px;
    }

    .grid-container > div {
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 20px 0;
      font-size: 30px;
    }

    .item6{
      display:grid;
        grid-template-areas: 'logo copy copy copy copy copy';
        gap: 10px;
        background-color: #CCC;
        padding: 10px;
    }
    </style>
  </head>

  <body>

    <h1>Grid Layout</h1>

    <p>This grid layout contains six columns and three rows:</p>

    <div class="grid-container">
      <div class="item1">Header</div>
      <div class="item2">Menu</div>
      <div class="item3">Main</div>  
      <div class="item4">Right</div>
      <div class="item5">Footer</div>
      <div class="item6">
        <div class="item7">marchio</div>
        <div class="item8">copy</div>
      </div>
    </div>

  </body>
</html>