<?php
namespace Controller;

//use Model\Marshmallow;
//use Model\MarshmallowManager;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * Class MarshmallowController
 *
 */
class HackathonController extends AbstractController
{

    private $positionDepart;
    /**
     * Display item listing
     *
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function index()
    {
//        $itemManager = new MarshmallowManager($this->getPdo());
//        $items = $itemManager->selectAll();
        if(!empty($_POST)){
            $this->positionDepart = $_POST['name'];
        }
        $client = new Client([
                'base_uri' => 'https://fr.openfoodfacts.org/categorie/',
            ]
        );
        $response = $client->request('GET', 'marshmallows.json');
        $body = $response->getBody()->getContents();
        $candies = json_decode($body, true);

        return $this->twig->render('Hackathon/index.html.twig', ['candies' => $candies['products']]);
    }

    public function address()
    {
        //var_dump($_POST['name']);

        //return $this->twig->render('Hackathon/content.html.twig', ['toto' => $_POST]);
    }
}


