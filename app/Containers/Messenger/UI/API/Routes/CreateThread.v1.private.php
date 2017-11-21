<?php

/**
 * @apiGroup           Thread
 * @apiName            createThread
 *
 * @api                {POST} /v1/threads Endpoint title here..
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
$router->post('threads', [
    'as' => 'api_thread_create_thread',
    'uses'  => 'Controller@createThread',
    'middleware' => [
      'auth:api',
    ],
]);
