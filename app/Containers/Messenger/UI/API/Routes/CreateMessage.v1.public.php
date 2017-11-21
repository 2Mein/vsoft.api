<?php

/**
 * @apiGroup           Message
 * @apiName            createMessage
 *
 * @api                {POST} /v1/thread/:thread_id/messages Endpoint title here..
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
$router->post('thread/{thread_id}/messages', [
    'as' => 'api_message_create_message',
    'uses'  => 'Controller@createMessage',
    'middleware' => [
      'auth:api',
    ],
]);