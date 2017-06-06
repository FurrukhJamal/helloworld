<?php
    $quote = ["You can do anything, but not everything.—David Allen",
              "You miss 100 percent of the shots you never take.—Wayne Gretzky",
              "You must be the change you wish to see in the world.—Gandhi"];

    shuffle($quote);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>A1</title>
    <style media="screen">
      body
      {
        font-family: "Comic Sans MS", cursive;
        font-size: 24px;
      }
      .header,.info, .quote
      {
        text-align: center;
        margin: 10px auto 0px auto;
      }
      img
      {
        width: 300px;
        height: 300px;
      }
      .info
      {
        width: 600px;
      }
      h1
      {
        color: #5f9ea0;
        text-shadow: -4px -5px 5px #afcecf;
      }
      p
      {
        font-size: 18px;
        color: #8b008b;
      }
      .quote
      {
        width:750px;
        text-transform: capitalize;
        color: #f4a460;
        font-size: 22px;
        text-shadow: 5px 4px 4px  #f7bc88;

      }
    </style>
  </head>
  <body>
    <div class="header">
        <img src="images/2582.jpg" alt="Me">
        <h1>Thats Me!!!</h1>
    </div>
    <div class="info">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus, mauris eget molestie feugiat, metus lorem cursus turpis, sit amet euismod elit purus quis dui. Curabitur et venenatis sem. Nulla quis ornare augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum interdum maximus lorem quis pharetra. Maecenas enim leo, maximus vitae gravida quis, facilisis sollicitudin tortor. Etiam imperdiet, magna vel dignissim suscipit, erat nulla malesuada enim, sollicitudin dignissim enim urna sed sapien. Mauris vulputate purus tellus, eget porta diam vehicula eleifend. Quisque luctus, augue ut placerat tempor, tellus nulla imperdiet elit, quis venenatis ligula lorem a purus. Proin ut porta metus, vitae malesuada erat. Suspendisse potenti. Nullam et velit dictum, tristique libero ut, mattis sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin et lectus erat. Fusce tortor eros, hendrerit in condimentum id, tincidunt a orci. Etiam sit amet suscipit libero.
        </p>
    </div>
    <div class="quote">
      <q><?= $quote[0] ?></q>
    </div>

  </body>
</html>
