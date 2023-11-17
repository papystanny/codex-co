<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Taille;
use App\Models\Couleur;
use App\Models\Campagne;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
            return view('articles.index', compact('campagneActuels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create(ArticleRequest $request)
    {
        //
        try{
            //$article = new Article($request->all());
            $article-> nom = $request->input('nom');
            $article-> image = $request->input('image');
            // $requestData=$request->all();
            $fileName = time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$fileName,'public');
            $requestData["image"]='/storage'.$path;
            Article::create($article);
            // $article->save();
             }
             
            catch (\Throwable $e) {
          
             Log::debug($e);
            }
             //return redirect()->route('admin.creationsondage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        try {
            $campagnes = Campagne::latest()->get();
            $latestCampagneId =Campagne::latest()->value('id');
            $article =Article::where ('id',  $request->input('native-select'))
            ->update(['campagneActive'=>1]);
            $article =Article::find( $request->input('native-select'));
            $campagnes =Campagne::find($latestCampagneId);
            $article->campagnes()->attach($campagnes->id);
            $article->save();
            Log::debug($request->input('native-select') );
            $dataArray = explode(',', $request->input('native_select1'));
            for( $i = 0; $i <count($dataArray) ; $i++){
                $couleur =Couleur::where ('id',  $dataArray[$i])
                ->update(['campagneActive'=>1]);
              //  $article_couleur->couleur_id= $dataArrayArticle[$i];
              //$couleur1=Couleur::find($request->native_select1);
              $couleur =Couleur::find($dataArray[$i]);
              $article =Article::find( $request->input('native-select'));
              
             // Log::debug($couleur );
             
              $article->couleurs()->attach($couleur->id );
              $article->save();
                Log::debug($article );
            }

            Log::debug($dataArray );

            $dataArrayTaille = explode(',', $request->input('native-select2'));
            for( $i = 0; $i <count($dataArrayTaille) ; $i++){
                $taille =Taille::where ('id',  $dataArrayTaille[$i])
                ->update(['campagneActive'=>1]);
                $taille =Taille::find($dataArrayTaille[$i]);
                $article =Article::find( $request->input('native-select'));
                $article->tailles()->attach($taille->id );
                $article->save();
            }
    
          Log::debug($dataArrayTaille );
          return redirect()->route('admin.creationsondage');
             }
             
            catch (\Throwable $e) {
          
             Log::debug($e);
          //   return redirect()->route('campagne')->withErrors(['L\'ajout de campagne n\'a pas fonctionné']);
          return redirect()->route('admin.creationsondage');
            }
      
    }
    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $tailles = Taille::all();
        $couleurs = Couleur::all();
        return view('articles.show', compact('article', 'couleurs', 'tailles'));
    }
    public function AjoutElementsCampagne(Request $request)
    {
        $campagnes = Campagne::latest()->get();
        $articles = Article::all();
        $couleurs = Couleur::all();
        $tailles = Taille::all();
        return view('');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}