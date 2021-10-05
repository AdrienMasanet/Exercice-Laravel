<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Artisan;

class InsertArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Commande permettant de créer des articles depuis le fichier JSON';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(Faker $faker)
    {
        // Récupère le contenu du json dans "ressources/json/articles.json"
        // puis le parse en tableau d'objets PHP
        $articlesJson = json_decode(file_get_contents(resource_path('json/articles.json')));

        // On exécute la commande créée séparément permettant de supprimer les utilisateurs et les articles
        Artisan::call('delete:usersarticles');

        // Itère à travers le tableau d'objets PHP récupéré
        foreach ($articlesJson->articles as $articleJson) {

            // Si aucune catégorie qui a le même nom que la catégorie de l'objet récupéré n'est trouvée
            // alors on la créé en lui assignant le slug et le nom en question
            $newCategory = Category::firstOrCreate([
                'slug' => Str::slug($articleJson->source->name)
            ], [
                'name' => $articleJson->source->name
            ]);

            // Créé le nouvel objet article en base de données en fonction de l'objet récupéré
            $newArticle = Article::create([
                'title' => $articleJson->title,
                'slug' => Str::slug($articleJson->title),
                'description' => $articleJson->description,
                'content' => $articleJson->content,
                'image_url' => $articleJson->urlToImage,
                'anchor_url' => $articleJson->url
            ]);

            // Assigne la catégorie de l'article à la première catégorie trouvée dans
            // la base de données qui a le même nom que le nom de la catégorie du JSON
            $newArticle->categories()->attach(Category::where('name', $articleJson->source->name)->first());

            // Si l'objet récupéré contient un auteur
            if (!is_null($articleJson->author)) {
                // Créé l'auteur si son email n'existe pas déjà dans la base de données
                $newAuthorUser = User::firstOrCreate([
                    'name' => $articleJson->author
                ], [
                    'email' => $articleJson->author . $faker->safeEmailDomain(),
                    'password' => bcrypt('passwd'),
                    'slug' => Str::slug($articleJson->author)
                ]);

                // Assigne la foreign key de l'article créé à celle de l'auteur créé
                $newArticle->user_id = $newAuthorUser->id;
            }

            // Sauvegarde les modifications apportées à l'objet article créé dans cette itération
            $newArticle->save();
        }
    }
}
