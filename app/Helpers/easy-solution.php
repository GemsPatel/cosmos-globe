<?php

use App\Models\Admin\Blogs;
use App\Models\Admin\Categories;
use App\Models\Admin\Configuration;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Request as FacadesRequest;
use App\Models\Admin\AdminMenu;
use App\Models\Admin\BlogComments;
use App\Models\Admin\Permission;
use App\Models\Admin\Sliders;
use App\Models\Admin\SliderTypes;
use App\Models\GoogleAdvertisement;
use App\Models\SiteConfig;
use App\Models\Website;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Undocumented function
 *
 * @param [type] $key
 * @return void
 */
function getConfigurationfield($key) {
     $client = Configuration::where('config_key', $key)->first();
     if($client) {
         return $client['config_value'];
     } else {
         return false;
     }
}

/**
 *
 */
function getFrontEndMenu( $website_id = 1){

    $menuArr = [];
    $parentArr = Categories::where( [
        'website_id' => $website_id,
        'parent_id' => 0, 
        'status' => 1 
    ] )
    ->get();

    foreach( $parentArr as $k=>$ar ){
        $menuArr[$k] = $ar;
        $menuArr[$k]['child'] = Categories::where( [
            'website_id' => $website_id,
            'parent_id' =>$ar->id, 
            'status' => 1 
        ] )->get();
    }

    return $menuArr;
}

function getFrontEndFooterMenu( $website_id = 1, $slug='' ){

    $menuArr = [];
    $parentArr = Categories::where( [
        'website_id' => $website_id,
        'slug' => $slug, 
        'status' => 1 
    ] )
    ->get();

    foreach( $parentArr as $k=>$ar ){
        $menuArr[$k] = $ar;
        $menuArr[$k]['child'] = Categories::where( [
            'website_id' => $website_id,
            'parent_id' =>$ar->id, 
            'status' => 1 
        ] )->get();
    }

    return $menuArr;
}

/**
 *
 */
function es_GenerateBladeFile( $fileName="test")
{
    $file = "../resources/views/blog-html/".$fileName.".blade.php";
    $content = '<div class="post-contents">
    <div class="single-post-content_text_media fl-wrap">
        <div class="row">
            <div class="col-md-12">
                <p class="has-drop-cap">In this tutorial, .</p>
            </div>
        </div>
    </div>
    <p>You.</p>
    <p><strong class="step">Create Component File</strong></p>
    <p></p>
    <p>In:</p>

    <h4 class="mb_head">resources/views/components/card.blade.php</h4>
    <blockquote class="w-100">
            <div class="row">
                <div class="col-md-12">
                        <div class="line">
                            <span style="">&lt;div class=&quot;card </span>
                        </div>
                </div>
            </div>
    </blockquote>

    <p></p>
    <p><strong class="step">Reuse Component</strong></p>
    <p></p>

    <p>Now we will create one route with blade file. on that blade file we will reuse our created component on that file with different classes as like bellow:</p>';
    $fp = fopen($file, 'w');
    fwrite($fp, $content);
    fclose($fp);
    chmod($file, 0777);  //changed to add the zero
}

/**
 *
 */
function getHostStories( $website_id=1 ){
    return Blogs::select( "slug", "title" )->where( [ 
        'website_id' => $website_id,
        'status' => 1 
    ] )
    ->inRandomOrder()
    ->limit(12)
    ->get();
}

/**
 *
 */
function getCurrentLocationDetails( $res='cityName' ){
    $ip = FacadesRequest::ip();
    if( $ip == "127.0.0.1" || strlen( $ip ) < 7 ){
        $ip = "163.53.179.67";
    }
    
    $locationPosition = Location::get( $ip );
	// Storage::append( "liveIPs-".date( 'd-m-Y' ).".txt", json_encode( $locationPosition ) );
	return $locationPosition->$res ?? '';
}

/**
 * @Function:        <getAdminSideMenu>
 * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
 * @Created On:      <24-11-2021>
 * @Last Modified By:Gautam Kakadiya
 * @Last Modified:   Gautam Kakadiya
 * @Description:     <This function work for get admin panel side bar menu.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
function getAdminSideMenu(){
    $parentArr = AdminMenu::where( ['parent_id' => 0, 'status' => 1 ] )->orderBy( 'sort_order', 'ASC' )->get();
    if( COUNT( $parentArr ) >0 ){
        foreach( $parentArr as $k=>$parent ){
            $parentArr[$k]['childArr'] = AdminMenu::where( [ 'parent_id' => $parent->id, 'status' => 1 ] )->orderBy( 'sort_order', 'ASC' )->get();
        }
    }

    return $parentArr;
}


/**
 * @Function:        <getAdminSideMenuPerimission>
 * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
 * @Created On:      <24-11-2021>
 * @Last Modified By:Gautam Kakadiya
 * @Last Modified:   Gautam Kakadiya
 * @Description:     <This function work for get admin panel side bar menu.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
function getAdminSideMenuPerimission(){
    $user = Auth::guard('admin')->user();
    $permissionArr = Permission::where( 'role_id', $user->role_id )->get()->pluck('menu_id');
    $result = [];
    if( !$permissionArr->isEmpty() ){
        foreach( $permissionArr as $id ){
            $result[] = $id;
        }
    }

    return $result;
}


/**
 *
 */
function getHeaderInformation(){
    return Website::where( 'status', 1 )->first();
}
// function getTestimonoals( $website_id = "", $slug=""){

//     $menuArr = [];
//     $parentArr = SliderTypes::where( [
//         'website_id' => $website_id,
//         'status' => 1 
//     ] )->get();

    
//     foreach( $parentArr as $k=>$ar ){
//         $menuArr[$k] = $ar;
//         $menuArr[$k]['testimonials'] = Sliders::where( [
//             'website_id' => $website_id,
//             'slider_type_id'=>$slug,
//             'status' => 1 
//         ] )->get();
//     }

//     return $menuArr;
// }
/**
 *
 */
function createTinyUrl(){
	if( isset( $_GET['create'] ) && $_GET['create'] == 1 ){
		$blogArr = Blogs::select('id')->get();
		foreach( $blogArr as $ar ){
			$short_url = _en( $ar->id );
			Blogs::where( [ "id" => $ar->id ] )->update( [ "short_url" => $short_url ] );
		}
	}
}

/**
 *
 */
if ( !function_exists('format_number_in_k_notation') ) {
    function format_number_in_k_notation(int $number): string
    {
        $suffixByNumber = function () use ($number) {
            if ($number < 1000) {
                return sprintf('%d', $number);
            }

            if ($number < 1000000) {
                return sprintf('%d%s', floor($number / 1000), 'K+');
            }

            if ($number >= 1000000 && $number < 1000000000) {
                return sprintf('%d%s', floor($number / 1000000), 'M+');
            }

            if ($number >= 1000000000 && $number < 1000000000000) {
                return sprintf('%d%s', floor($number / 1000000000), 'B+');
            }

            return sprintf('%d%s', floor($number / 1000000000000), 'T+');
        };

        return $suffixByNumber();
    }
}

/**
 * 
 */
function getBlogCommentReply( $blog_id ){
    $parentComment = BlogComments::where( [
        'blog_id' => $blog_id,
        'parent_id' => 0,
        'status' => 1 
    ])
    ->get();

    foreach( $parentComment as $k=>$child ){
        $childComment = BlogComments::where( [
            'blog_id' => $blog_id,
            'parent_id' => $child->id,
            'status' => 1 
        ])
        ->first();
        if( $childComment ){
            $parentComment[$k]['childArr'] = $childComment;
        }
    }

    return $parentComment;
}

/**
 * get random single google advertisement details
 */
function getGoogleSingleAdvertisementDetails( $website_id = 0, $ad_type_id = 1 ){
    return GoogleAdvertisement::where( [
        'website_id' => $website_id,
        'ad_type_id' => $ad_type_id,
        'status' => 1,
    ] )
    ->inRandomOrder()
    ->first();
}

/**
 * get Left side menus
 */
function getLeftSideMenus( $slug ){
    $parentCat = Categories::where( [
        'slug' => $slug,
    ] )
    ->select( 'id' )
    ->first();

    return Categories::where( [
        'parent_id' => $parentCat->id,
        'status' => 1
    ] )->get();
}

/**
 * get category bullet point
 */
function getCategoryBulletPoint( $sub_id, $slug ){
    $result = Blogs::where( [ 'sub_category_id' => $sub_id, 'slug' => $slug ] )->select('image', 'bullet_points')->first();
    if( isset( $result->image ) ){
        $image = $result->image;
        $point = json_decode( $result->bullet_points, 1 );
        return [ 'image' => $image, 'point' => $point[0]];
    } else {
        return false;
    }
}