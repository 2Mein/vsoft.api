<?php

namespace App\Containers\Messenger\UI\API\Controllers;

use App\Containers\Messenger\UI\API\Requests\CreateMessageRequest;
use App\Containers\Messenger\UI\API\Requests\CreateThreadRequest;
use App\Containers\Messenger\UI\API\Requests\DeleteMessageRequest;
use App\Containers\Messenger\UI\API\Requests\DeleteThreadRequest;
use App\Containers\Messenger\UI\API\Requests\FindMessageByIdRequest;
use App\Containers\Messenger\UI\API\Requests\FindThreadByIdRequest;
use App\Containers\Messenger\UI\API\Requests\GetAllMessagesRequest;
use App\Containers\Messenger\UI\API\Requests\GetAllThreadsRequest;
use App\Containers\Messenger\UI\API\Requests\UpdateMessageRequest;
use App\Containers\Messenger\UI\API\Requests\UpdateThreadRequest;
use App\Containers\Messenger\UI\API\Transformers\MessageTransformer;
use App\Containers\Messenger\UI\API\Transformers\ThreadTransformer;
use App\Ship\Parents\Controllers\ApiController;

/**
 * Class Controller
 *
 * @package App\Containers\Messenger\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateThreadRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createThread(CreateThreadRequest $request)
    {
        $thread = $this->call('Messenger@CreateThreadAction', [$request]);

        return $this->created($this->transform($thread, ThreadTransformer::class));
    }

    /**
     * @param FindThreadByIdRequest $request
     * @return array
     */
    public function findThreadById(FindThreadByIdRequest $request)
    {
        $thread = $this->call('Messenger@FindThreadByIdAction', [$request]);

        return $this->transform($thread, ThreadTransformer::class);
    }

    /**
     * @param GetAllThreadsRequest $request
     * @return array
     */
    public function getAllThreads(GetAllThreadsRequest $request)
    {
        $threads = $this->call('Messenger@GetAllThreadsAction', [$request]);

        return $this->transform($threads, ThreadTransformer::class);
    }

    /**
     * @param UpdateThreadRequest $request
     * @return array
     */
    public function updateThread(UpdateThreadRequest $request)
    {
        $thread = $this->call('Messenger@UpdateThreadAction', [$request]);

        return $this->transform($thread, ThreadTransformer::class);
    }

    /**
     * @param DeleteThreadRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteThread(DeleteThreadRequest $request)
    {
        $this->call('Messenger@DeleteThreadAction', [$request]);

        return $this->noContent();
    }

    /**
     * @param CreateMessageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMessage(CreateMessageRequest $request)
    {
        $message = $this->call('Messenger@CreateMessageAction', [$request]);

        return $this->created($this->transform($message, MessageTransformer::class));
    }

    /**
     * @param FindMessageByIdRequest $request
     * @return array
     */
    public function findMessageById(FindMessageByIdRequest $request)
    {
        $message = $this->call('Messenger@FindMessageByIdAction', [$request]);

        return $this->transform($message, MessageTransformer::class);
    }

    /**
     * @param GetAllMessagesRequest $request
     * @return array
     */
    public function getAllMessages(GetAllMessagesRequest $request)
    {
        $messages = $this->call('Messenger@GetAllMessagesAction', [$request]);

        return $this->transform($messages, MessageTransformer::class);
    }

    /**
     * @param UpdateMessageRequest $request
     * @return array
     */
    public function updateMessage(UpdateMessageRequest $request)
    {
        $message = $this->call('Messenger@UpdateMessageAction', [$request]);

        return $this->transform($message, MessageTransformer::class);
    }

    /**
     * @param DeleteMessageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMessage(DeleteMessageRequest $request)
    {
        $this->call('Messenger@DeleteMessageAction', [$request]);

        return $this->noContent();
    }
}
