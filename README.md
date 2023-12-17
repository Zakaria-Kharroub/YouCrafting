# -- resume PROGRAMATION ORIENTE OBJET --



## les avantages de la POO : structure, securite, reutilisation, maintenance, evolutivite
### objet : est un ensemble de donnees et de methode qui permet de manipuler ces donnees
### class : est une template qui permet de creer des objets(un plan de construction)
### instanciation : est operation qui permet de creer un objet a partir d'une class

</br>
</br>

## class Voiture {
   #### [public] -> les donnees et les methode acces par tous ----  ma3amrek tkhdem biha 
   #### [private] -> les donnees et les methode acces qu'aux objet de la class | nekhdem biha dima ila fheritage nkhdem bprotected </br>
   #### [protected] -> les donnees et les methode acces qu'aux objet de la class et les class heritiers </br>
   #### variable inside class = [propriete] </br>
   #### vraiable outside class =[variable] </br>

```
 private $marque;
 public $couleur;
 private $prix;
```
#### la valeur par default de cest variable est null

# constructor 
#### constructor : howa li kaykhalna ncreew les objet
#### descructor : howa li kaydamar l'objet
#### le constructor par defaut kayn
#### le constructor d'initualisation = je veux inserer les valeurs
> [$this ]-> cest un mot clé qui permet d'acceder aux propriete de la class


```
 public function __construct($marque,$couleur,$prix){
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->prix = $prix;
    }
```

### la methode de tosrting
```
 public function __toString(){
        return 'la marque est : '.$this->marque.' la couleur est : '.$this->couleur.' le prix est : '.$this->prix;
    }
```
## lse accesseurs (la lecture)
```
public function getMarque(){
        return $this->marque;
    }
    public function getCouleur(){
        return $this->couleur;
    }
    public function getPrix(){
        return $this->prix;
    }
```

## lse modificateurs (la lecture)
```
  public function setMarque($marque){
        $this -> marque = $marque;
    }
    public function setCouleur($couleur){
        $this -> couleur = $couleur;
    }
    public function setPrix($prix){
        $this -> prix = $prix;
    }
```

## instanciation
```
$voiture1 = new Voiture('BMW','Noir',1000000);
$voiture2 = new Voiture('Mercedes','Blanc',2000000);
```
> pour changer la valeur de maqrue prive darrouri les modificateurs
```
$voiture1->setMarque('Audi');
```

> lappel de methode to string -> pour affciher les valeurs de l'objet textuellement

```
var_dump($voiture1->couleur);

// l'appel de getr
var_dump($voiture1->getMarque());

var_dump($voiture1 -> __toString());
echo '<br>';

var_dump($voiture2 -> __toString());
```



