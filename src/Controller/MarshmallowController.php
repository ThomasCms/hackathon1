<?php
namespace Controller;

use Model\Marshmallow;
use Model\MarshmallowManager;

/**
 * Class MarshmallowController
 *
 */
class MarshmallowController extends AbstractController
{


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

        return $this->twig->render('Marshmallow/index.html.twig', ['items' => '']);
    }
