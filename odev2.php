<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class DortIslem
    {
        private $sayi1;
        private $sayi2;

        function __construct($sayi1,$sayi2)
        {
            $this->sayi1=$sayi1;
            $this-> sayi2=$sayi2;
            
        }
        function cikarmaIslemi($sayi3,$sayi4)
        {
            $sonuc=$sayi3-$sayi4;
            return $sonuc;

        }
        function carpmaIslemi($sayi3,$sayi4)
        {
            $sonuc=$sayi3*$sayi4;
            return $sonuc;

        }
        function toplamaIslemi($sayi3,$sayi4)
        {
            $sonuc=$sayi3+$sayi4;
            return $sonuc;

        }
        function bolmeIslemi($sayi3,$sayi4)
        {
            $sonuc=$sayi3/$sayi4;
            return $sonuc;

        }
    }
    $DortIslem =new DortIslem(1,2);

    echo "$DortIslem->{toplamaIslemi(3,4)}<br>";
    echo "$DortIslem->{cikarmaIslemi(3,4)}<br>";
    echo "$DortIslem->{carpmaIslemi(3,4)}<br";
    echo "$DortIslem->{bolmeIslemi(3,4)}<br>";




    ?>
    
</body>
</html>