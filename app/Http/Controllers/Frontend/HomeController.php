<?php

namespace App\Http\Controllers\Frontend;

use GeoIP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClientType;
use App\Models\EntityType;
use App\Models\Industry;
use App\Models\IndustrySector;
use App\Models\IndustryWatch;
use App\Models\IndustryWatchSidebar;
use App\Models\ProfileType;
use App\Models\TransactionType;

class HomeController extends Controller
{
    public function home()
    {

        return view('frontend.pages.home');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function customFilter($id)
    {
        $data['profile_types'] = ProfileType::orderBy('id', 'desc')->get(['id', 'slug', 'name']);
        $data['client_types'] = ClientType::orderBy('id', 'desc')->get(['id', 'slug', 'name']);
        $data['transaction_types'] = TransactionType::orderBy('id', 'desc')->get(['id', 'slug', 'name']);
        $data['entity_types'] = EntityType::orderBy('id', 'desc')->get(['id', 'slug', 'name']);
        $data['sectors'] = IndustrySector::with('industries')->orderBy('id', 'desc')->get(['id', 'slug', 'name']);
        $data['industries'] = Industry::orderBy('id', 'desc')->get(['id', 'slug', 'name']);
        return view('frontend.pages.custom_filter', $data);
    }
    public function allBlog()
    {
        return view('frontend.pages.all_blog');
    }
    public function blogDetails()
    {
        return view('frontend.pages.blog_details');
    }
    public function allIndustryWatch()
    {
        $data['sectors'] = IndustrySector::with('industries')->orderBy('id', 'desc')->get(['id', 'slug', 'name']);
        $data['industries'] = Industry::orderBy('id', 'desc')->limit(8)->get(['id', 'slug', 'name', 'sector_id']);
        $data['industry_watches'] = IndustryWatch::orderBy('id', 'desc')->limit(8)->get();
        return view('frontend.pages.all_industrywatch', $data);
    }

    public function industrywatchDetails($id)
    {
        $data['industry_watch'] = IndustryWatch::where('slug', $id)->first();

        if (!empty($data['industry_watch'])) {
            $data['industry_watch_sidebars'] = IndustryWatchSidebar::where('industry_watch_id', $data['industry_watch']->id)->get();
            $previousWatch = IndustryWatch::where('id', '<', $data['industry_watch']->id)->orderBy('id', 'desc')->first(['title','slug']);
            $nextWatch = IndustryWatch::where('id', '>', $data['industry_watch']->id)->orderBy('id', 'asc')->first(['title','slug']);

            $data['previous_watch'] = $previousWatch;
            $data['next_watch'] = $nextWatch;
            return view('frontend.pages.industry_watch_details', $data);
        } else {
            return view('frontend.pages.static.industry_watch_details');
        }
    }

    public function payment()
    {
        return view('frontend.pages.payment');
    }
    public function aboutUs()
    {
        return view('frontend.pages.about_us');
    }

    public function franchise()
    {
        return view('frontend.pages.franchise');
    }
    public function investor()
    {
        return view('frontend.pages.investor');
    }
    public function pricing()
    {
        return view('frontend.pages.pricing');
    }
    public function profileDetails()
    {
        return view('frontend.pages.profile_details');
    }
}
