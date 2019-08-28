<?php
    interface iFiguraGeometrica
    {
        public function area();
        public function perimetro();


    }


    class Quadrado implements iFiguraGeometrica
    {   
        private $lado;
        public function __construct($lado)
        {
            $this->lado = $lado;

        }

        public function area()
        {
            return $this->lado * $this->lado;
            $this->lado;
        }

        public function perimetro()
        {
           return 4*$this->lado;
        }

    }

    class Circulo implements iFiguraGeometrica
    {
        private $raio;
        public function __construct($raio)
        {
            $this->raio = $raio;
        }

        public function area()
        {
            return pi() * $this->raio**2;;
        }

        public function perimetro()
        {
            return 2*pi()*$this->raio;
        }


    }

    $a = new Quadrado(5);
    $b = new Circulo(3);
   echo $a->area(). '<br>';
   echo $a->perimetro(). '<br>';


   function somaDasAreas(iFiguraGeometrica $q, iFiguraGeometrica $w){
       return $q->area() + $w->area();
   }

   echo somaDasAreas($a,$b);
?>