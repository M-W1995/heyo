<?php

if (!empty($_POST))
{
  if (empty($_POST['menu']))
  {
    $message = "T'as pas faim finalement ? Dégage de mon kebab le rigolo";
  } else {
    $commande = array('menu'=>$_POST['friteboisson'],'salade'=>$_POST['salade'],'tomate'=>$_POST['tomate'],'oignon'=>$_POST['oignon']);
    $options = json_encode($commande);
    $menu = $_POST['menu'];
    //INSERT INTO kebab(menu,options) VALUES(:menu,:options)

    //SELECT * FROM kebab 
    //$menu = $result['menu']
    //$options = $result['options']
    $message = "Ok chef, un ".$_POST['menu'].', ';
    $options = json_decode($options);

    foreach ($options as $option)
    {
      if ($option) $message .= ' '.$option.',';
    }
  }
}

?>


<html>
<body>
  <form method="post" style="display:flex;flex-direction:column;width:20%;margin:auto;margin-top:10%">
    <h1>Bienvenue chez le kebabier</h1>
    <select name="menu">
      <option value="">Choisissez votre sandwich</option>
        <option value="kebab">Kebab</option>
        <option value="durum">Durum</option>
        <option value="durum">Durum</option>
        <option value="kebab">Kebab</option>
    </select><br />
    <span><input type="checkbox" name="friteboisson" value="frites boisson"/> Menu frites+boisson ?</span>
    <span><input type="checkbox" name="salade" value="salade"/> salade</span>
    <span><input type="checkbox" name="tomate" value="tomate"/> tomate</span>
    <span><input type="checkbox" name="oignon" value="oignon"/> oignon</span>

    <br/><input type="submit" value="Commander!"/>
    <?php if (isset($message)) echo "<h2>$message !</h2>"; ?>
  </form>


</body>

</html>
