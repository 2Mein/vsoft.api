<?php

/**
 * @apiGroup           Thread
 * @apiName            findThreadById
 *
 * @api                {GET} /v1/threads/:id Endpoint title here..
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
$router->get('threads/{id}', [
    'as' => 'api_thread_find_thread_by_id',
    'uses'  => 'Controller@findThreadById',
    'middleware' => [
      'auth:api',
    ],
]);
