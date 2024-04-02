<?php

namespace App\Http\Controllers\Frontend;

use GeoIP;
use App\Models\Industry;
use App\Models\ClientType;
use App\Models\EntityType;
use App\Models\ProfileType;
use Illuminate\Http\Request;
use App\Models\IndustryWatch;
use App\Models\IndustrySector;
use App\Models\TransactionType;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\IndustryWatchSidebar;

class HomeController extends Controller
{
    public function home()
    {
        $data['plans'] = DB::table('subscription_plans')->orderBy('price','asc')->get();
        return view('frontend.pages.home',$data);
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
        $data['active_id'] = $id;
        $data['selected_profile_type'] = ProfileType::where('slug', $id)->first(['id', 'slug', 'name']);
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
    public function profileDetails($id)
    {
        $data['industry_watch'] = IndustryWatch::where('slug', $id)->first();

        if (!empty($data['industry_watch'])) {
            $data['industry_watch_sidebars'] = IndustryWatchSidebar::where('industry_watch_id', $data['industry_watch']->id)->get();
            $previousWatch = IndustryWatch::where('id', '<', $data['industry_watch']->id)->orderBy('id', 'desc')->first(['title','slug']);
            $nextWatch = IndustryWatch::where('id', '>', $data['industry_watch']->id)->orderBy('id', 'asc')->first(['title','slug']);

            $data['previous_watch'] = $previousWatch;
            $data['next_watch'] = $nextWatch;
            return view('frontend.pages.profile_details');
        } else {
            return view('frontend.pages.static.profile_details');
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
    // public function profileDetails()
    // {
    //     return view('frontend.pages.profile_details');
    // }
    public function privacy()
    {
        return view('frontend.pages.privacy');
    }
    public function termsCondition()
    {
        return view('frontend.pages.terms_condition');
    }
}
