<?php

namespace App\Http\Controllers;

class OAuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @SWG\Post(
     *     path="/oauth/token",
     *     summary="Retrieve an API token for a valid user",
     *     description="Retrieve an API token for a valid user",
     *     operationId="getToken",
     *     produces={"application/json"},
     *     tags={"OAuth 2.0"},
     *     @SWG\Parameter(
     *         name="username",
     *         description="Username",
     *         required=true,
     *         type="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="password",
     *         description="Username password",
     *         required=true,
     *         type="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="grant_type",
     *         description="Grant Type",
     *         required=true,
     *         type="string",
     *         in="formData",
     *         default="password"
     *     ),
     *     @SWG\Parameter(
     *         name="client_id",
     *         description="Client identifier",
     *         required=true,
     *         type="integer",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="client_secret",
     *         description="Client secret related",
     *         required=true,
     *         type="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="scope",
     *         description="Scope",
     *         required=false,
     *         type="string",
     *         in="formData"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Successful operation",
     *     ),
     *     @SWG\Response(
     *         response="400",
     *         description="Invalid request",
     *     )
     * )
     */
    public function token()
    {
        //
    }
}
