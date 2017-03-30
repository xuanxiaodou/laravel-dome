<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends Controller
{
   	 public function deploy(Request $request)
    	{	
		$commands = ['cd /data/laravel-dome','git pull'];
		$signature = $request->header('X-hub-Signature');
		$payload = file_get_contents('php://input');
		if ($this->isFromGithub($payload,$signature)){
			foreach ($commands as $command) {
				shell_exec($command);
			}
			http_respanse_code(200);
		} else {
			abort(403);
		}
	}


	public function isFromGithub ($payload,$signature)
	{
		return 'sha1='.hash_hmac('sha1',$payload,env('GITHUB_DEPLOY_TOKEN'),false) === $signature;
	}
}
