<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\{
    AnnotationVideo,
    AwsVideo,
    Banner,
    Benefit,
    Blog,
    CommonQuestion,
    ContactUs,
    ExplorePrime,
    HealthRecord,
    Legend,
    LikedCourses,
    OtherVideoFormats,
    Podcast,
    PodcastsAggregators,
    PodcastsStreaming,
    Policy,
    PolicyTopic,
    ProfessionalComment,
    Segment,
    StudentClasses,
    SubtitleVideo,
    SupportMaterial,
    SupportMaterialCourseClasse,
    User,
    VideoNote,
    WsCountry,
    WsEadClasse,
    WsEadCourse,
    WsEadCoursesMaterial,
    WsEadEnrollments,
    WsEadModule,
    WsEadMyListCourse,
    WsEadProfessional,
    WsEadSignature,
    WsEadStudentClasse,
    WsEadUsersSignature,
    WsOrdersItem,
    WsPages,
    WsPagesImages,
    WsPost,
    WsPostsImages,
    WsProducts,
    WsProductsBrands,
    WsProductsCategories,
    WsProductsCoupons,
    WsProductsGallery,
    WsProductsImages,
    WsProductsStock,
    WsProperties,
    WsPropertiesGallery,
    WsSearch,
    WsSiteViewsOnline,
    WsSlides,
    WsUsers,
    WsUsersAddress,
    WsUsersNotes,
};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            // WsUsersNotes::class,
            // WsUsersAddress::class,
            // WsUsers::class,
            // WsSlides::class,
            // WsSiteViewsOnline::class,
            // WsSearch::class,
            // WsPropertiesGallery::class,
            // WsProperties::class,
            // WsProductsStock::class,
            // WsProductsImages::class,
            // WsProductsGallery::class,
            // WsProductsCoupons::class,
            // WsProductsCategories::class,
            // WsProductsBrands::class,            
            // WsProducts::class,
            // WsPostsImages::class,
            // WsPost::class,
            // WsPagesImages::class,
            // WsPages::class,
            // WsOrdersItem::class,
            // WsEadUsersSignature::class,
            // WsEadStudentClasse::class,
            // WsEadSignature::class,
            // WsEadProfessional::class,
            // WsEadMyListCourse::class,
            // WsEadModule::class,
            // WsEadEnrollments::class,
            // WsEadCoursesMaterial::class,
            // WsEadCourse::class,
            // WsEadClasse::class,
            // WsCountry::class,
            // VideoNote::class,
            // User::class,
            // SupportMaterialCourseClasse::class,
            // SupportMaterial::class,
            // SubtitleVideo::class,
            // StudentClasses::class,
            // Segment::class,
            // ProfessionalComment::class,
            // PolicyTopic::class,
            // Policy::class,
            // PodcastsStreaming::class,
            // PodcastsAggregators::class,
            // Podcast::class,
            // OtherVideoFormats::class,
            // LikedCourses::class,
            // Legend::class,
            // HealthRecord::class,
            // ExplorePrime::class,
            // ContactUs::class,
            // CommonQuestion::class,
            // Blog::class,
            Benefit::class,
            // Banner::class,
            AwsVideo::class,
            // AnnotationVideo::class,
        ];

        foreach ($array as $class) {
            $class::factory(15)->create();
        }
    }
}
