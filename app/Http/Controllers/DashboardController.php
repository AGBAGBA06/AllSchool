<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\Storage;
use App\Models\ecole;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\Profile;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
     {
        $this->middleware('auth');
     }
     
    function dashboad(){
        $user = auth()->user();
        $ecoles = DB::table('ecoles')->where('user_id', $user->id)->get();
        return view('dashboard.index',compact('ecoles'));
    } 

    function creer_ecole(){
        return view ('dashboard.creer-ecole');
    }
//Pour afficher la liste de tous de tous les ecoles publiee par l'user
    function ecoles(){
        $user = auth()->user();
        $ecoles = DB::table('ecoles')->where('user_id', $user->id)->get();
        return view('dashboard.ecoles',['user' => $user, 'ecoles' => $ecoles]);
    }

    //pour l'ajout
     public function sauverecole(Request $request){
        $this->validate($request, ['nom'=>'required|unique:ecoles',
                                   'type'=>'required',
                                   //'user_id'=>'required',
                                   'address'=>'required',
                                   'niveau_scolaire'=>'required',
                                   'ville'=>'required',
                                   'domaine'=>'required',
                                   'directeur'=>'required',
                                   'resultatbac'=>'required',
                                   'resultatbepc'=>'required',
                                   'resultatcep'=>'required',
                                   'description'=>'required',
                                   'tel'=>'required',
                                   'fichier'=>'required',
                                   'image_couverture'=>'image|nullable']);

                                   if($request->hasFile('image_couverture')){
                                      //1-select image with extension
                                      $fileNameWithExt=$request->file('image_couverture')->getClientOriginalName();
                                      //2-get just file name
                                      $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                                      //3-get just extension
                                       $extension = $request->file('image_couverture')->getClientOriginalExtension();
                                      //4-file name store
                                      $fileNametostore=$fileName.'_'.time().'.'.$extension;
                                      //uplaoder l'image
                                      $path=$request->file('image_couverture')->move('upload/ecoles', 
                                      $fileNametostore);


                                      if($request->hasFile('fichier')){
                                        //1-select image with extension
                                        $fileNameWithExt=$request->file('fichier')->getClientOriginalName();
                                        //2-get just file name
                                        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                                        //3-get just extension
                                         $extension = $request->file('fichier')->getClientOriginalExtension();
                                        //4-file name store
                                        $fileNametostor=$fileName.'_'.time().'.'.$extension;
                                        //uplaoder l'image
                                        $path=$request->file('fichier')->move('pdf/pdf', 
                                        $fileNametostor);
                                     }
                                   }

                                   else{
                                       $fileNametostor='noimage.jpg';
                                   }

                                   $ecole=new ecole();
                                   $ecole->user_id = auth()->id();
                                   $ecole->nom=$request->input('nom');
                                   $ecole->type=$request->input('type');
                                   $ecole->address=$request->input('address');
                                   $ecole->niveau_scolaire=$request->input('niveau_scolaire');
                                   $ecole->ville=$request->input('ville');
                                   $ecole->domaine=$request->input('domaine');
                                   $ecole->resultatcep=$request->input('resultatcep');
                                   $ecole->resultatbepc=$request->input('resultatbepc');
                                   $ecole->resultatbac=$request->input('resultatbac');
                                   $ecole->tel=$request->input('tel');
                                   $ecole->directeur=$request->input('directeur');
                                   $ecole->description=$request->input('description');
                                //    $ecole->fichier=$request->input('fichier');
                                   $ecole->image_couverture=$fileNametostore;
                                   $ecole->fichier=$fileNametostor;
                                   $ecole->status=1;
                                   $ecole->save();
                                   return redirect('/creer_ecole')->with('status','L ecole   ' .$ecole->nom.'  a ete bien publiee');
                               }
                               
   
    //pour editer
    public function editecole($id){
       $ecole= ecole::find($id);
       return view ('dashboard.editecole')->with('ecole',$ecole);
    }

        // fonction de la modification
        public function modifierecole(Request $request){
           $this->validate($request, ['nom'=>'required|unique:ecoles',
                                        'type'=>'required',
                                        'address'=>'required',
                                        'niveau_scolaire'=>'required',
                                        'ville'=>'required',
                                        'domaine'=>'required',
                                        'directeur'=>'required',
                                        'fichier'=>'required',
                                        'resultatbac'=>'required',
                                        'resultatbepc'=>'required',
                                        'resultatcep'=>'required',
                                        'description'=>'required',
                                        'tel'=>'required',
                                        'image_couverture'=>'image|nullable']);

           $ecole= ecole::find($request->input('id'));
          $ecole->user_id = auth()->id();
                                   $ecole->nom=$request->input('nom');
                                   $ecole->type=$request->input('type');
                                   $ecole->address=$request->input('address');
                                   $ecole->niveau_scolaire=$request->input('niveau_scolaire');
                                   $ecole->ville=$request->input('ville');
                                   $ecole->fichier=$request->input('fichier');
                                   $ecole->domaine=$request->input('domaine');
                                   $ecole->resultatcep=$request->input('resultatcep');
                                   $ecole->resultatbepc=$request->input('resultatbepc');
                                   $ecole->resultatbac=$request->input('resultatbac');
                                   $ecole->tel=$request->input('tel');
                                   $ecole->directeur=$request->input('directeur');
                                   $ecole->description=$request->input('description');
                                   $ecole->image_couverture=$fileNametostore;
                                   $ecole->status=1;
           if($request->hasFile('image_couverture')){
               //1-select image with extension
               $fileNameWithExt=$request->file('image_couverture')->getClientOriginalName();
               //2-get just file name
               $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
               //3-get just extension
                $extension = $request->file('image_couverture')->getClientOriginalExtension();
               //4-file name store
               $fileNametostore=$fileName.'_'.time().'.'.$extension;
               //uplaoder l'image
               $path=$request->file('image_couverture')->move('upload/ecoles', 
               $fileNametostore);

                          if ($product->image_couverture!='noimage.jpg') {
                           Storage::delete('public/image_couvertures/'.$ecole->image);
                          
                          }
                          $ecole->image_couverture=$fileNametostore;
            }

            
           $ecole->update();
           return redirect('/ecoles')->with('status','le ecole '.$ecole->nom.' a ete bien modifier');
        }
   //pour supprimer une ecole
        public function deleteecole($id){
        $ecole = ecole::find($id);
        $ecole->delete();
       return redirect('/ecoles')->with(
           'status',
           'la ecole' . $ecole->nom. 'a ete bien supprimer'
       );
   }


   
    //pour activer un ecole
    public function activer_ecole($id){
        $ecoless= ecole::find($id);
        $ecoless->status=1;
        $ecoless->update();
        return redirect('/ecoles')->with('status',
        'le ecoless  a ete bien desactiver');
        
        //pour desactiver un ecole
    }
     public function desactiver_ecole($id){
        $ecoless= ecole::find($id);
        $ecoless->status=0;
        $ecoless->update();
        return redirect('/ecoles')->with('status',
        'la ecoless  a ete bien active');
}

    function users_profile(){
        $profile= Auth::user();
        return view ('dashboard.users-profile');
    }

//permettant a unuser de modifier son profile 
public function sauverprofile(Request $request){
    $this->validate($request, ['description'=>'required',
                                   'adresse'=>'required',
                                   'logo'=>'image|nullable|max:1999',
                               ]);

                              
                                if($request->hasFile('logo')){
                                    //1-select image with extension
                                    $fileNameWithExt=$request->file('logo')->getClientOriginalName();
                                    //2-get just file name
                                    $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                                    //3-get just extension
                                    $extension = $request->file('logo')->getClientOriginalExtension();
                                    //4-file name store
                                    $fileNametostore=$fileName.'_'.time().'.'.$extension;
                                    //uplaoder l'image
                                    $path=$request->file('logo')->move('logos/logos',
                                            $fileNametostore);
                                }
                               else{
                  
                                   $fileNametostore='avatar.png';
          
                               }
                                    auth()->user()->update([
                                    'description' => $request->description,
                                    'adresse' => $request->adresse,
                                    'profile_image' => $profile_image ?? auth()->user()->profile_image 
                                    ]);
                                    return redirect('/users_profile')->with('status','Le profile  a ete bien mis a jour');
                                   
                           }



}
