<?php


namespace App\Http\Controllers;

use App\Citation;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class CitationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function add(Request $request){

        $parameters=$request->except(['_token']);
           //Citation::create($parameters);
           $citation = new Citation();
           $citation->lue=0;
           $citation->citation = $parameters['citation'];
           $citation->auteur = $parameters['auteur'];
           $citation->save();




       return redirect()->route('show');
           //var_dump($parameters);// die();
    }
    public function addfirst(){
        return view('ajouterVue');
    }

    public function show(){
        $citations = Citation::all();

        return view('afficherVue')->with('Citation',$citations);
    }
    public function lire($id){
        $citation = Citation::find($id);
        $citation->lue+=1;
        $citation->save();
        return view('lire')->with('citation',$citation);
    }

    public function supp($id){
        $citation = Citation::find($id);
        $citation->delete();
        return redirect()->route('show');
    }
    public function maj($id){
        $citation = Citation::find($id);
        return view('maj')->with('citation',$citation);
    }
    public function maj2(Request $request){
        $parameters=$request->all();
        $id=$parameters['id'];
        $oldCitation = Citation::find($id);
        $oldCitation->citation=$parameters['citation'];
        $oldCitation->auteur=$parameters['auteur'];
        $oldCitation->save();
        return redirect()->route('lire',['id'=>$id]);

    }
}