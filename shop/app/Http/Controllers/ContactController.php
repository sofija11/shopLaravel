<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertMessageRequest;

use App\Services\MailerService;
use App\Models\Message;
use Illuminate\Http\Request;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    private $model;
    private $mailer;

    function __construct()
    {
        $this->model = new Message();
        $this->mailer = new MailerService();
    }
    public function insertMessage(InsertMessageRequest $request){
        if($request->has('sendMessage')){
            //dd($request);
            $caption = $request->input('caption');
            $message= $request->input('message');

            try{
                $sendedMessage = $this->model->insertM($caption,$message);
                if($sendedMessage){
                return redirect("/contact")->with('message', 'Message sent');
                return response(null, 201);
                }
            } catch(\Exception $e){
                return response(["greska" => $e->getMessage()], 505);
                return redirect("/contact")->with('message', 'Message not sent');
            }
        } else{
            return redirect("/contact")->with('message','Something went wrong');
        }
    }
    public function send_email_to_admin(insertMessageRequest $request) {
        $name=session('user')->firstname;
        $email=session('user')->email;
        $subject = $request->input('caption');
        $message= $request->input('message');

        try {
            $mail = new PHPMailer(true);

            $this->mailer->mailerToAdministrator($name, $subject, $message, $email, $mail);

           return redirect()->back()->with('success', 'Your message has been sent.');
            
        }
        catch(\PDOException $ex) {
            return redirect()->back()->with('Error', 'Check your credentials and try again.');

          
        }
    }
}
