<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>mestud</title>
  <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-header">
        <a href="#" class="navbar-brand btn"><strong>WeNote</strong></a>
    </div>
  </nav>
  <div class="left">
    <ul class="side">
      <li>text1</li>
      <li>text2</li>
      <li>text3</li>
      <li>text4</li>
      <li>text5</li>
    </ul>
  </div>

  <div class="content">
      <div class="cont1 cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sunt dicta doloribus, aliquam iusto. Voluptatem odit architecto suscipit esse, sunt porro recusandae dignissimos sapiente ea? Ipsum fugiat eos eaque est.</div>

<!---FORM--->


    <div class="cont2 cont">
          <form  action="noteprocessing.php" method="post">
                <textarea name="name" rows="8" cols="80" id="notes">enter your text here</textarea>
                  <button type="submit" name="button">save</button>
          </form>
    </div>
    <input type="file" name="file" value="file">
<!---END OF FORM--->
      <div class="cont3 cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sunt dicta doloribus, aliquam iusto. Voluptatem odit architecto suscipit esse, sunt porro recusandae dignissimos sapiente ea? Ipsum fugiat eos eaque est.</div>
      <div class="cont4 cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sunt dicta doloribus, aliquam iusto. Voluptatem odit architecto suscipit esse, sunt porro recusandae dignissimos sapiente ea? Ipsum fugiat eos eaque est.</div>
      <div class="cont5 cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sunt dicta doloribus, aliquam iusto. Voluptatem odit architecto suscipit esse, sunt porro recusandae dignissimos sapiente ea? Ipsum fugiat eos eaque est.</div>
  </div>

</body>
<script src="web.js">
</script>
</html>
