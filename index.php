<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>LoreIpsum</title>
</head>
<body>
    <?php
    require_once 'models/AssociativeArrayObject.php';
    $arr=["key"=>"Lore Ipsum","value"=>["key"=>'One',"value"=>1,'data'=>["key"=>'One',"value"=>1]]];
    $arrObject=new AssociativeArrayObject($arr);
    ?>
<h1>Array $arr</h1>
<pre>
    <?php print_r($arr)?>
</pre>

<h1>Object $arrObject</h1>
<pre>
    <?php
        function exploreObject($object,string $name)
        {
            foreach ($object as $key => $value) {
                # code...
                echo "\${$name}->{$key} = ";
                print_r($value);
                echo PHP_EOL;
                if (is_object($value))
                {
                    exploreObject($value,$name.'->'.$key);
                }
            }
        }
        exploreObject($arrObject,'arrObject');
    ?>
</pre>

<h1>Object $arrObject->getToArray()</h1>
<pre>
    <?php
        foreach ($arrObject as $key => $value) {
            # code...
            echo "\$arrObject->{$key}->getToArray()";
            echo PHP_EOL;
            if (is_object($value))
            {
                print_r($arrObject->$key->getToArray());
            }
            echo PHP_EOL;
        }
    ?>
</pre>


</body>
</html>