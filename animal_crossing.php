<?php

// animal -> vertebrati / invertebrati -> felidi/canidi || molluschi/anellidi-> gatto/cane || polpo /lombrico

class Animal {
    public $name;

    public static $counter = 0;
    
    public function __construct($new_name){
        $this->name = $new_name;

        self::$counter++;
    }

    public static function animal_counter(){
    echo "Ci sono " . self::$counter . " animali \n";
    }
    public function get_info(){
        echo "il mio nome è $this->name \n";
    }

}

class Vertebrato extends Animal {
    // pokemon
    public $skeleton;

    public function __construct($new_name , $newskeleton){
    // pokedex
    parent::__construct($new_name);
    // $this=pokeball
    $this->skeleton=$newskeleton;
    }
    public function get_info(){
        echo "il mio nome è $this->name sono un vertebrato in quanto ho e qui potete vedere la mia bellissima $this->skeleton \n";
    }

}

class Invertebrato extends Animal {
    // pokemon
    public $esoskeleton;
    public function __construct($new_name , $new_esoskeleton){
    // pokedex
    parent::__construct($new_name);
    // $this=pokeball
    $this ->esoskeleton=$new_esoskeleton;
    }

    public function get_info(){
        echo "il mio nome è $this->name sono un invertebrato infatti non ho lo scheletro bensì un esoscheletro ed eccolo qui  $this->esoskeleton \n";
    }
}


class Felide extends Vertebrato{
    // pokemon
    public $hiding;

    public function __construct($new_name ,$new_skeleton,$new_hiding){
        // pokedex
        parent::__construct($new_name ,$new_skeleton);
        // $this=pokeball
        $this->hiding=$new_hiding;
    }
    public function get_info(){
        echo "il mio nome è $this->name , sono un vertebrato come potete vedere dalla mia $this->skeleton Sono un felide infatti sono bravissimo a mimetizzarmi tramite $this->hiding \n";
        
    }
}


class Canide extends Vertebrato{ 
    // pokemon
    public $bite;

    public function __construct($new_name ,$new_skeleton,$new_bite){
        // pokedex
        parent::__construct($new_name ,$new_skeleton);
        // $this=pokeball
        $this->bite=$new_bite;
    }
    public function get_info(){
        echo "il mio nome è $this->name , sono unvertebrato come potete vedere dal mio $this-> skeleton Sono un canide e il mio morso ha una potenza pari a $this->bite \n";
}
}

class Mollusco extends Invertebrato{
    // pokemon
    public $habitat;

    public function __construct($new_name ,$new_esoskeleton,$new_habitat){
        // pokedex
        parent::__construct($new_name ,$new_esoskeleton);
        // $this=pokeball
        $this->habitat=$new_habitat;
    }
    public function get_info(){
        echo "il mio nome è $this->name , sono un invertebrato come potete vedere dal mio $this->esoskeleton Sono un mollusco e il mio habitat naturale è $this->habitat \n";
        
    }
}

class Anellide extends Invertebrato{
    // pokemon
    public $rings;

    public function __construct($new_name ,$new_esoskeleton,$new_rings){
        // pokedex
        parent::__construct($new_name ,$new_esoskeleton);
        // $this=pokeball
        $this->rings=$new_rings;
    }
    public function get_info(){
        
        echo "Sono un invertebrato ed ho un bel esoscheletro fatto di $this->esoskeleton Sono un anellide il cui corso è composto da $this->rings anelli \n";
        
    }
}

class Gatto extends Felide{
    // pokemon
    public $race;

    public function __construct($new_name ,$new_skeleton,$new_hiding,$new_race){
        // pokedex
        parent::__construct($new_name,$new_skeleton,$new_hiding);
        // $this=pokeball
        $this->race=$new_race;
    }
    public function get_info(){
        echo "Sono un gatto di razza $this->race\n";
        
    }

    public function get_owner($owner_name){
        if($owner_name){
            echo "Il mio padrone si chiama $owner_name \n";
    }else{
        echo "sono un gatto randagio e non ho un padrone \n";
    }
    }
}

class Cane extends Canide{
    // pokemon
    public $race;

    public function __construct($new_name ,$new_skeleton,$new_bite,$new_race){
        // pokedex
        parent::__construct($new_name ,$new_skeleton,$new_bite);
        // $this=pokeball
        $this->race=$new_race;
    }
    public function get_info(){
        echo "Sono un cane di razza $this->race\n";
        
    }

    
    }


    class Polpo extends Mollusco{
        // pokemon
        public $tentacles;
    
        public function __construct($new_name ,$new_esoskeleton,$new_habitat,$new_tentacles){
            // pokedex
            parent::__construct($new_name ,$new_esoskeleton,$new_habitat);
            // $this=pokeball
            $this->tentacles=$new_tentacles;
        }
        public function get_info(){
            echo "Sono un poplipo e beccati i miei tentacoli che sono $this->tentacles \n";
            
        }
    }


    class Lombrico extends Anellide{

        // pokemon
        public $viscosity;
    
        public function __construct($new_name ,$new_esoskeleton,$new_rings,$new_viscosity){
            // pokedex
            parent::__construct($new_name ,$new_esoskeleton,$new_rings);
            // $this=pokeball
            $this->viscosity=$new_viscosity;
        }
        public function get_info(){
            echo "Sono un lombrico e il mio muco epidermico equivale a  $this->viscosity \n";
            
        }
    }



$dodo = new Cane("Dodo","scheletro","20j","weimaraner");
$dodo->get_info();


$kappa = new Gatto("Kappa","femore","scatola di cartone","mix");
$kappa->get_info();

$kappa->get_owner("lucia");


$polpo = new Polpo("Poplipo","ovviamente non ho niente","mare","7 e tu sai perchè");
$polpo->get_info();


$lombrico = new Lombrico("Lomby","ovviamente non ho niente","1000","1.90pa-s");
$lombrico->get_info();


















Animal :: animal_counter();