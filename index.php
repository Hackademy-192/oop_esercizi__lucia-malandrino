
<?php
class Character{
    // pokemon
    public $name;
    public $alignment;
    public $hp;

    public function __construct($new_name ,$new_alignment,$new_hp){
        // this= pokeball
        $this->name=$new_name;
        $this->alignment=$new_alignment;
        $this->hp=$new_hp;
    }
}

class Warrior extends Character{
    // pokemon
    public $weapon;

    public function __construct($new_name ,$new_alignment,$new_hp,$new_weapon){
        // pokedex
        parent::__construct($new_name ,$new_alignment,$new_hp);
        // $this=pokeball
        $this->weapon=$new_weapon;
    }
    public function attack($weapon_dice){
        $damage=rand(1,$weapon_dice);
        echo "il mio attacco ha fatto $damage danni\n";
    }

    public function round_attack($n,$weapon_dice){
        for($i=1; $i<=$n ; $i++ ){
            $this->attack($weapon_dice);
        }
    }
}


class Wizard extends Character{
    // pokemon
    public $magic;

    public function __construct($new_name ,$new_alignment,$new_hp,$new_magic){
        // pokedex
        parent::__construct($new_name ,$new_alignment,$new_hp);
        // $this=pokeball
        $this->magic=$new_magic;
    }
    public function cast($magic_dice){
        $damage=rand(1,$magic_dice);
        if($damage==$magic_dice){
            $damage=$damage*2;
            echo"No!!! Sia maledetto chi osa infiltrarsi! Le armate del Re dei Lich vi daranno la caccia. Non sfuggirete al vostro destino";
        }else{echo "congelerò il sangue nelle vostre vene $damage \n";}
            
    }

    public function round_cast($n,$magic_dice){
        for($i=1; $i<=$n ; $i++ ){
            $this->cast($magic_dice);
        }
    }
}


class Paladin extends warrior{
    public $holy_sword;

    public function __construct($new_name ,$new_alignment,$new_hp,$new_weapon,$new_holy_sword){
        parent::__construct($new_name ,$new_alignment,$new_hp,$new_weapon);
        $this->holy_sword=$new_holy_sword;
    }

    public function holy_attack($weapon_dice){
        $damage=rand(1,$weapon_dice) + $this->holy_sword;
        echo "la mia spada magica ha fatto $damage danni\n";
    }
}
// ho richiamato il chierico nei warrior non perchè sono pazza ma se lo mettevo nei wizard la battuta di kt non era divertente sul chieric almeno il warrior è generico
class Cleric extends Warrior{
    public $oki_power;

    public function __construct($new_name ,$new_alignment,$new_hp,$new_weapon,$new_oki_power){
        parent::__construct($new_name ,$new_alignment,$new_hp,$new_weapon);
        $this->oki_power=$new_oki_power;
    }

    public function heal($weapondice){
        $healing=rand(1,$weapondice) + $this->oki_power;
        echo "la vostra bustina dell'oki personale ha curato $healing punti ferita\n";
    }
}



$edward = new Warrior("Edward","good",100,"spada");
$edward->round_attack(5,20);


$kelthuzad = new Wizard("Keltispaccozad","evil",100,"maledizione");
$kelthuzad->round_cast(7,20);

$uther = new Paladin("Uther","good",100,"ashbringer",10); 
$uther->holy_attack(3,20);

$claire = new Cleric("Claire","caotico neutrale",100,"poteri dell'oki",30);

$claire->heal(7,20);
