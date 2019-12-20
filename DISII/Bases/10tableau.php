<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
      <h2>les Tableaux</h2>
        
      <br />
      <div>
              <?php
            //  declaration d'un tableau
 $prenoms = array('Hasna', 'Delphine', 'Romuald', 'Amaury');
 // ou 
            $ages = [20, 30, 40, 10];


            // avec clef associatif
            $ages = ['Hasna' => 20, 'Delphine' => 30, 'Romuald' => 40, 'Amaury'=> 10];
            
            $mails['Hasna'] = 'Hasna@gmail.com';
            $mails['Delphine'] = 'Delphine@gmail.com';
            $mails['Romuald'] = 'Romuald@gmail.com';
            $mails['Amaury'] = 'Ammaury@gmail.com';
            
            
            
            /*Tableau multidimensionnel numéroté stockant
             *des tableaux numérotés*/
            $suite = [
                [1, 2, 4, 8, 16],
                [1, 3, 9, 27, 81]
            ];
            
            /*Tableau multidimensionnel numéroté stockant
             *des tableaux associatifs et une valeur simple*/
            $utilisateurs = [
                ['nom' => 'Delphine', 'mail' => 'Delphine@gmail.com'],
                ['nom' => 'Romuald', 'mail' => 'Romuald@gmail.com'],
                ['nom' => 'Amandine', 'mail' => 'Ammaury@gmail.com'] 
            ];
            
            /*Tableau multidimensionnel associatif stockant
             *des tableaux associatifs*/
            $produits = [
                'C3' => ['poids' => 2000, 'quantite' => 10, 'prix' => 15000],
                'C4' => ['poids' => 3000, 'quantite' => 8, 'prix' => 18000]
            ]

            
      ?>
    </body>
</html>
