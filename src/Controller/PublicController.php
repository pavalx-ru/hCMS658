<?php
/**
 * @author Alexey Pavlov <mail@pavalx.ru>
 *
 * Public part site
 */
declare(strict_types=1);

namespace App\Controller;

use App\core\Application\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends BaseController
{
    #[Route('/public', name: 'app_public')]
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }
}
