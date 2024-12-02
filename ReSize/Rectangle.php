    <?php
    include_once "Shape.php";

    class Rectangle extends shape{
        public $width;
        public $height;

        public function __construct($name, $width, $height) {
            parent::__construct($name);
            $this->width = $width;
            $this->height = $height;
        }

        public function calculateArea() {
            return $this->width * $this->height;
        }

        public function calculatePerimente(){
            return ($this->width + $this->height) * 2;
        }

        public function resize($percent){
            $this->width *= ( $percent / 100 + 1)  ;
            $this->height *= ( $percent / 100 + 1) ;
        }
    }
    ?>