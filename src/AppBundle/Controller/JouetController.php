<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Jouet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Jouet controller.
 *
 * @Route("jouet")
 */
class JouetController extends Controller
{
    /**
     * Lists all jouet entities.
     *
     * @Route("/", name="jouet_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jouet = $em->getRepository('AppBundle:Jouet')->findAll();
        $enfants = $em->getRepository('AppBundle:Enfants')->findAll();

        return $this->render('jouet/index.html.twig', array(
            'jouet' => $jouet,
            'enfants' => $enfants
        ));
    }

    /**
     * Finds and displays a jouet entity.
     *
     * @Route("/{id}", name="jouet_show")
     * @Method("GET")
     */
    public function showAction(Jouet $jouet)
    {

        return $this->render('jouet/show.html.twig', array(
            'jouet' => $jouet,
        ));
    }

    /**
    *@Route("/lutin/{id}", name="lutin")
    */

    public function listeJouetsAFabriquerAction() {
        echo "
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

        ";

        echo "
        <link href='http://fonts.googleapis.com/css?family=Mountains+of+Christmas' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
        <style>
        html {
            background-image: url(https://www.ludeek.com/wp-content/uploads/2014/11/lutin-de-noel.jpg);
            background-repeat: no-repeat;
            text-align: center;
            background-position: 50% 0%;
        }

        html {
            text-align: center;
        }

        td {
            width: 300px;
            border: 10px,#000;
            padding: 30px;
            color: #9c4141;
            background-color: #dec6c6;
            text-align: center;
            font-family: Mountains of Christmas;
            font-size: 30px;
        }

        th {
            background-color: #9c4141;
            padding: 40px;
            margin-left: 20px;
            color: #fff;
            text-align: center;
            font-family: Mountains of Christmas;
            font-size: 40px;
        }
        body {
            margin: 400px;
            font-family: Mountains of Christmas;
            font-size: 40px;
        }

    </style>";
        $em = $this->getDoctrine()->getManager();
        $jouet = $em->getRepository('AppBundle:Jouet')->findAll();
        // var_dump($jouet);
        echo "
        Chers lutins, voici la liste récapitulative des jouets.
        <div class='liste'>
        <table>
            <tr>
                <th>Nom du jouet</th>
                <th>Quantitées commandées</th>
                <th>Qantitées en stock</th>
                <th>Usine</th>
                <th>A construire</th>
            </tr>
            ";
        foreach ($jouet as $array) {
            // var_dump($jouet);
            $nom=$array->getNom();
            $stock = $array->getQuantiteStock();
            // var_dump($stock);
            $commande=$array->getquantiteCommandee();
            // var_dump($commande);
            $diff=$stock-$commande;
            // var_dump($diff);
                // var_dump($jouet->getQuantiteStock(['nom']));
                // $constuire=include ('JuliaWIP/boutonConstruction.php');
                // echo "</tr><tr>";
                // echo "<td>";
                // echo $categories;
                echo "<tr>";
                echo "<td>";
                echo $nom;
                echo "</td>";
                echo "<td>";
                echo $stock;
                echo "</td>";
                echo "<td>";
                echo $commande;
                echo "</td>";
                echo "<td>";
                if ($stock<$commande) {
                    echo "A constuire";
                    // include ('JuliaWIP/boutonConstruction.php');
                }
                else {
                    echo "Le stock est à jour";
                }
                echo "</td>";
                echo "<td>";
                if ($stock<$commande) {
                    // include ('JuliaWIP/boutonConstruction.php');
                    echo '
                    <!-- Button trigger modal -->
                    <a  href="?ajout=1" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Construire
                    </a>
                    <!-- <button type="button" <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  >
                    Construire</button> -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Le jouet est en construction</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Les petits lutins travaillent dur...
                                </div>
                                    <img class="img-responsive" src="http://a142.idata.over-blog.com/1/43/11/45/lutins-final-photoshop.jpg" />
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Le jouet est construit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }

                echo "<div>";
        }

        return $this->render('lutin/index.html.twig');

        // return $this->render('jouet/index.html.twig', array(
        //     'jouet' => $jouet,
        //     'enfants' => $enfants
        // ));
}
        // else {
        //
        // }


        // var_dump($quantite_stock);
        // if ($quantite_stock<$quantite_commandee) {

        // $quantite_a_produire--;


}


//
// $em = $this->getDoctrine()->getManager();
//         $personnage = new Personnage();
//
//         $personnage->setPrenom($prenom);
//         $personnage->setNom($nom);
//         $personnage->setSexe($sexe);
//         $personnage->setBio($bio);
//
//         $em->persist($personnage);
//
//         $em->flush();
