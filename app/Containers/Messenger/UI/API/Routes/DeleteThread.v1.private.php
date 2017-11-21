<?php

/**
 * @apiGroup           Thread
 * @apiName            deleteThread
 *
 * @api                {DELETE} /v1/threads/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('threads/{id}', [
    'as' => 'api_thread_delete_thread',
    'uses'  => 'Controller@deleteThread',
    'middleware' => [
      'auth:api',
    ],
]);
