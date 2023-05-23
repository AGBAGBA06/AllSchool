<?php

namespace App\Http\Controllers;
use Mail;
// use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use App\Models\ecole;
use Dompdf\Dompdf;
use Illuminate\Http\Response;
use DB;


class FrontendController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    function home(){
        $ecolese=DB::table('ecoles')
            ->orderBy('created_at', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $ecoles= DB::table('ecoles');
        return view('frontend.home',compact('ecoles','ecolese'));
    }

                            public function sendEmail()
                        {
                            Mail::raw('Test email content', function (Message $message) {
                                $message->to('agbagbaameyo@gmail.com');
                                $message->subject('Test Email');
                            });

                            return "Email sent successfully.";
                        }


    function about(){
        return view ('frontend.about');
    }

    function pdf(){
        
        return view ('frontend.pdf');
    }

        function search(){
            return view ('frontend.search');
        }

        function blog_detail(){
            return view ('frontend.blog-detail');
        }
        function blog(){
            return view ('frontend.blog');
        }
        function comment(){
            return view ('frontend.comment');
        }
        function condition(){
            return view ('frontend.condition');
        }

        function contact(){
            $data= [
                'subject' =>'mon mail envoyre',
                'body' =>'mon eeee mail envoyrje'
            ];

            Mail::to('agbagbaameyo@gmail.com')->send(new DemoMail($data));
            dd("Email is sent successfully.");
            // try {
            //     return response()->json(['great me aelllns hshdsjdh']);
            // }
            // catch (exception $th){
            //     return response()->json(['soory great me wrong hshdsjdh']);

            // }

            // return view ('frontend.contact');
        }

        function faq(){
            return view ('frontend.faq');
        }


        function ecoles_details($id){
            
            $ecoles=ecole::find($id);
            return view('frontend.ecoles-details')->with('ecoles', $ecoles);
        }


        public function searchecole(Request $request){
            $type = $request->input('type');
            $ville = $request->input('ville');
            $domaine = $request->input('domaine');

            $searchecole = DB::table('ecoles')
                    ->where('type', 'LIKE', '%'.$type.'%')
                    ->where('ville','LIKE', '%'.$ville.'%')
                    ->where('domaine', 'LIKE', '%'.$domaine.'%')
                
                    ->paginate(6);
            
                return view('frontend.search',compact('searchecole'));
        
            }


        function login(){
            return view ('auth.login');
        }
        function register(){
            return view ('auth.register');
        }
        function politique_securite(){
            return view ('frontend.politique_securite');
        }
        function politique(){
            return view ('frontend.politique');
        }
        function pourquoi(){
            return view ('frontend.pourquoi');
        }
        function preference(){
            return view ('frontend.preference');
        }
}
