<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function send(Request $request){
        // validate form
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);

        if($this->isOnline()){
            $mail_data = [
                'recipient'=>$request->correo,
                'fromEmail'=>'libardorivera@gmail.com',
                'fromName'=>'Soporte Interno IntelligentMarket',
                'subject'=>'Contacto de nuevo cliente',
                'body'=>$request->mensaje
            ];

            Mail::send('principal.email-template', $mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                ->from($mail_data['fromEmail'],$mail_data['fromName'])
                ->subject($mail_data['subject']);
            });
            // return redirect()->back()-with('succsess','email sent successfully');
            echo 'Email sent successfully';
        }else{
            return redirect()->back()->withInput()-with('error','Check your internet connection');
        }
    }
    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site, "r")){
            return true;
        }else {
            return false;
        }

    }
}

