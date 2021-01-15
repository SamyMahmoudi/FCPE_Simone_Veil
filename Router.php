<?php 
    use App\Controller\ConnexionController;
    use App\Controller\AccueilController;
    use App\Controller\TemplateArticleController;
    use App\Controller\AllArticleController;
    use App\Controller\ContactController;
    use App\Controller\FaqController;
    use App\Controller\DashArticleController;
    use App\Controller\UnArticleController;
    use App\Controller\DashFaqController;
    use App\Controller\UneQuestionController;
    use App\Controller\DashContactController;
    use App\Controller\UneDemandeController;
    use App\Controller\DashConnexionController;
    use App\Controller\MentionsController;



    if(array_key_exists("page",$_GET))
    {
        switch ($_GET["page"]) :

            case 'connexion'  :
                $controller = new ConnexionController();
                $controller->ConnexionRender();
            break; 
            case 'accueil' :
                $controller = new AccueilController();
                $controller->AccueilRender();
            break;
            case 'article':
                $controller = new TemplateArticleController();
                $controller->ArticleRender();
            break;
            case 'tousLesArticles':
                $controller = new AllArticleController();
                $controller->AllArticleRender();
            break;
            case 'contact' :
                $controller = new ContactController();
                $controller->ContactRender();
            break;
            case 'faq' :
                $controller = new FaqController();
                $controller->FaqRender();
            break;
            case 'mentions' :
                $controller = new MentionsController();
                $controller->MentionsRender();
            break;
            default:
                $controller = new ConnexionController();
                $controller->ConnexionRender();
            endswitch;
    } 
    else if (array_key_exists("ad",$_GET))
    {
        switch ($_GET["ad"]) :
            case 'gestionArticle' :
                $controller = new DashArticleController();
                $controller->DashArticleRender();
            break;
            case 'actionArticle':
                $controller = new UnArticleController();
                $controller->UnArticleRender();
            break;
            case 'gestionFaq' :
                $controller = new DashFaqController();
                $controller->DashFaqRender();
            break;
            case 'actionFaq' :
                $controller = new UneQuestionController();
                $controller->actionfaqRender();
            break;
            case 'gestionContact' :
                $controller = new DashContactController();
                $controller->DashContactRender();
            break;   
            case 'gestionConnexion' :
                $controller = new DashConnexionController();
                $controller->DashConnexionRender();
            break;  
            case 'demande' :
                $controller = new UneDemandeController();
                $controller->demandeRender();
            break;
            endswitch;
    }
    else 
    {
            $controller = new  ConnexionController();
            $controller->ConnexionRender();
    }