<?php
/**
 * @author Alexey Pavlov <mail@pavalx.ru>
 *
 * CMS settings
 */
declare(strict_types=1);

namespace App\Controller;

use core\Application\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends BaseController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
