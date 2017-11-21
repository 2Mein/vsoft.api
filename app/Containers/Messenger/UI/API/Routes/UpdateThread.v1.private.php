<?php

/**
 * @apiGroup           Thread
 * @apiName            updateThread
 *
 * @api                {PATCH} /v1/threads/:id Endpoint title here..
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
$router->patch('threads/{id}', [
    'as' => 'api_thread_update_thread',
    'uses'  => 'Controller@updateThread',
    'middleware' => [
      'auth:api',
    ],
]);
