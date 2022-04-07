<?php
declare(strict_types=1);

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\JsonResponse;

class HealthCheckController extends AbstractFOSRestController
{
    /**
     * A controller action function, defined with the
     * `http` method `GET` to retrieve the server
     * health status.
     *
     * @Get("/healthCheck", name="get_health_check")
     */
    public function getHealthCheck(): JsonResponse
    {
        return new JsonResponse([
            'status' => "I'm alive",
            'code' => 'ok'
        ]);
    }
}