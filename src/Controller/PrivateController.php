<?php
/**
 * @author Alexey Pavlov <mail@pavalx.ru>
 *
 * This global setting
 */
declare(strict_types=1);

namespace App\Controller;

use App\core\Application\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrivateController extends BaseController
{
    #[Route('/private', name: 'app_private')]
    public function index(): Response
    {
        return $this->render('private/index.html.twig', [
            'controller_name' => 'PrivateController',
        ]);
    }
}
