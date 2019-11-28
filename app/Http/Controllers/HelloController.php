<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{


    public function index()
    {
        $data = ['one','two','three','four','five'];
        return view('hello2.index',compact('values'));
        
    }
    public function post(Request $request)
    {
        return view('hello.index',['msg'=>$request->msg]);
    }
}
     /*$html = <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:120pt; text-align:right; color:#fafafa;
    margin:-50px 0px -120px 0px; }
</style>
</head>
<body>
    <h1>Hello</h1>
    <h3>Request</h3>
    <pre>{$response}</pre>
    <h3>Response</h3>
    <pre>{$response}</pre>
</body>
</html>
EOF;

        $response->setContent($html);
        return $response;

    }
}*/