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
         #php ile class oluşturma - constructor oluşturma - oop giriş
    class Araba{

        private $id;
        private $brand;
        private $color;
        private $modelYear;
        
      
        function __construct($id,$brand,$modelName,$color,$modelYear)
        {
            $this->id =$id;
            $this->brand =$brand;
            $this->modelName=$modelName;
            $this->color =$color;
            $this->modelYear=$modelYear;
        }

        public function getId()
        {
            return $this->id;
        }
        public function getBrand()
        {
            return $this->brand;
        }
        public function getModelName()
        {
            return $this->modelName;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function getModelYear()
        {
            return $this->modelYear;
        }

    }

    $Araç = new Araba(1,"Mercedes","S400d","White",2021);
    echo "Araç id : {$Araç->getId()} <br> ";
    echo "Araç markası : {$Araç->getBrand()} <br> ";
    echo "Araç modeli : {$Araç->getModelName()} <br> ";
    echo "Araç model yılı : {$Araç->getModelYear()} <br> ";
    echo "Araç rengi : {$Araç->getColor()} <br> ";
   
    ?>
</body>
</html>
