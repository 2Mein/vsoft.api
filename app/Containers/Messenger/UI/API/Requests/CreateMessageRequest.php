<?php

namespace App\Containers\Messenger\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateMessageRequest.
 */
class CreateMessageRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles' => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        'id',
        'thread_id'
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        'thread_id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            // 'id' => 'required',
            'text' => 'required_without:immage|string',
            'image' => 'sometimes|image',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
