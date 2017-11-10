<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Jouet;
use AppBundle\Repository\JouetRepository;
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
     * @Route("/{id}", name="jouet_show", requirements={"id": "\d+"})
     * @Method("GET")
     */
    public function showAction(Jouet $jouet)
    {

        return $this->render('jouet/show.html.twig', array(
            'jouet' => $jouet,
        ));
    }

    /**
    *@Route("/lutin/{id}/{quantity}", name="lutin", requirements={"id": "\d+"})
    */

    public function listeJouetsAFabriquerAction($id = null, $quantity = null) {
        if($id != null && $quantity != null){ //j'ai clique sur construire
            $em = $this->getDoctrine()->getManager();
            $jouet = $em->getRepository('AppBundle:Jouet')->find($id);
            $jouet->setQuantiteStock($quantity);
            $em->flush();

        }

        echo "
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

        ";

        echo "
        <link href='http://fonts.googleapis.com/css?family=Mountains+of+Christmas' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
        ";
        $em = $this->getDoctrine()->getManager();
        $jouets = $em->getRepository('AppBundle:Jouet')->findAll();
        // var_dump($jouet);
        echo "
        Chers lutins, voici la liste récapitulative des jouets.
        <div class='liste'>
        <table>
            <tr>
                <th>Nom du jouet</th>
                <th>Qantitées en stock</th>
                <th>Quantitées commandées</th>
                <th>Usine</th>
                <th>A construire</th>
            </tr>
            ";
        foreach ($jouets as $array) {
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
                    include ('JuliaWIP/boutonConstruction.php');


                    $cookie_id='ajout';
                    if (isset($_GET['ajout'])) {
                        var_dump($_GET['ajout']);
                        var_dump($stock);

                        $_COOKIE = $_GET['ajout'];
                        setcookie($cookie_id, $_COOKIE, time() + (86400 * 30), "/");
                        if ($_COOKIE=="1") {
                            $stock++;
                        var_dump($stock);
                        }
                    }
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
