<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use App\Repositories\Interfaces\SlideRepositoryInterface as SlideRepository;
use App\Repositories\Interfaces\SystemRepositoryInterface as SystemRepository;
use App\Services\Interfaces\WidgetServiceInterface as WidgetService;
use App\Services\Interfaces\SlideServiceInterface as SlideService;
use App\Enums\SlideEnum;
use Illuminate\Http\Request;
use App\Services\Interfaces\PostServiceInterface as PostService;
use App\Models\Post;

class HomeController extends FrontendController
{
    protected $language;
    protected $slideRepository;
    protected $systemRepository;
    protected $widgetService;
    protected $slideService;
    protected $system;
    protected $postService;

    public function __construct(
        SlideRepository $slideRepository,
        WidgetService $widgetService,
        SlideService $slideService,
        SystemRepository $systemRepository,
        PostService $postService,
    ) {
        $this->slideRepository = $slideRepository;
        $this->widgetService = $widgetService;
        $this->slideService = $slideService;
        $this->systemRepository = $systemRepository;
        $this->postService = $postService;

        parent::__construct(
            $systemRepository,
        );
    }


    public function index()
    {
        $config = $this->config();

        $widgets = $this->widgetService->getWidget([
            ['keyword' => 'product-catalogue', 'object' => true],
            ['keyword' => 'best-selling-course', 'children' => true, 'object' => true, 'promotion' => true],
            ['keyword' => 'new-course-launch', 'object' => true, 'promotion' => true],
            ['keyword' => 'news', 'object' => true],
            ['keyword' => 'videos', 'object' => true],
        ], $this->language);


        $slides = $this->slideService->getSlide(
            [SlideEnum::MAIN, SlideEnum::TECHSTAFF, SlideEnum::PARTNER],
            $this->language
        );

        $system = $this->system;

        $seo = [
            'meta_title' => $this->system['seo_meta_title'],
            'meta_keyword' => $this->system['seo_meta_keyword'],
            'meta_description' => $this->system['seo_meta_description'],
            'meta_image' => $this->system['seo_meta_images'],
            'canonical' => config('app.url'),
        ];

        $language = $this->language;

        $schema = $this->schema($seo);

        $ishome = true;

        $template = 'frontend.homepage.home.index';

        return view($template, compact(
            'config',
            'slides',
            'widgets',
            'seo',
            'system',
            'language',
            'ishome',
            'schema',
        ));
    }

    public function ckfinder()
    {
        return view('frontend.homepage.home.ckfinder');
    }


    private function schema($seo)
    {
        $schema = "<script type='application/ld+json'>
            {
                \"@context\": \"https://schema.org\",
                \"@type\": \"WebSite\",
                \"name\": \"" . $seo['meta_title'] . "\",
                \"url\": \"" . $seo['canonical'] . "\",
                \"description\": \"" . $seo['meta_description'] . "\",
                \"publisher\": {
                    \"@type\": \"Organization\",
                    \"name\": \"" . $seo['meta_title'] . "\"
                },
                \"potentialAction\": {
                    \"@type\": \"SearchAction\",
                    \"target\": {
                        \"@type\": \"EntryPoint\",
                        \"urlTemplate\": \"" . $seo['canonical'] . "search?q={search_term_string}\"
                    },
                    \"query-input\": \"required name=search_term_string\"
                }
            }
            </script>";

        return $schema;
    }

    private function config()
    {
        return [
            'language' => $this->language,
            'css' => [
                'frontend/resources/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css',
                'frontend/resources/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css',
                'frontend/resources/css/custom.css'
            ],
            'js' => [
                'frontend/resources/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js',
                'frontend/resources/library/js/carousel.js',
                'https://getuikit.com/v2/src/js/components/sticky.js'
            ]
        ];
    }

    public function ajaxProject(Request $request){
        $id = $request->id;
        $posts = Post::where('publish', 2)->with(['languages'])->where('post_catalogue_id', $id)->orderBy('order', 'desc')->get();
        $html = '';
        if($posts && count($posts)){
            $html .= '<div class="uk-grid uk-grid-medium">';

            foreach ($posts as $post) {
                $name = $post->languages->first()->pivot->name ?? '';
                $canonical = write_url($post->languages->first()->pivot->canonical ?? '');
                $image = thumb(image($post->image), 600, 400);

                $html .= '
                    <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3 mb20">
                        <div class="post-item">
                            <a href="' . $canonical . '" title="' . e($name) . '" class="image img-cover">
                                <img  src="' . $image . '" alt="' . e($name) . '">
                            </a>
                            <div class="info">
                                <h3 class="title"><a href="' . $canonical . '" title="' . e($name) . '">' . e($name) . '</a></h3>
                            </div>
                        </div>
                    </div>';
            }

            $html .= '</div>';
        }
        return response()->json(['html' => $html]);
    }

}