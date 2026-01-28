<?php
declare(strict_types=1);

namespace App\Service\Seo;

class SeoOptimisation
{
    private ?string $canonical = null;




    // Meta title
    public function title(string $content = "Welcome To " . APP_NAME): string
    {
        return "<title>{$content}</title>";
    }




    // Meta description
    public function description(
        string $content = APP_NAME . " is a leading online trading platform where you can invest in crypto, forex, and shares. Copy professional traders, enjoy automated strategies, and access 24/7 global markets with ease."
    ): string {
        return "<meta name=\"description\" content=\"{$content}\">";
    }




    // Meta keywords
    public function keywords(array $content): string
    {
        return "<meta name=\"keywords\" content=\"" . implode(',', $content) . "\">";
    }


    //indexing
    public function robots(string $content="index, follow"): string
    {
    	return "<meta name=\"robots\" content=\"{$content}\">";
    }


    //author
    public function author(string $author=APP_NAME){
    	return "<meta name=\"author\" content=\"{$author}\">";
    }





    // Set canonical URL
    public function setCanonical(string $canonical): void
    {
        $this->canonical = $canonical;
    }




    // Get canonical link
    public function getCanonical(): ?string
    {
        if ($this->canonical === null) {
            return null;
        }

        return "<link rel=\"canonical\" href=\"{$this->canonical}\">";
    }





    // Facebook Open Graph tags
    public function facebook(
        string $title,
        string $description,
        string $image,
        string $type = "website",
        string $site_name = APP_NAME
    ): array {

        return [
            'type'        => "<meta property=\"og:type\" content=\"{$type}\">",
            'title'       => "<meta property=\"og:title\" content=\"{$title}\">",
            'description' => "<meta property=\"og:description\" content=\"{$description}\">",
            'image' => "<meta property=\"og:image\" content=\"{$image}\">",
            'site_name' => "<meta property=\"og:site_name\" content=\"{$site_name}\">",
            'canonical' => "<meta property=\"og:url\" content=\"{$this->canonical}\">",
        ];
    }



    public function twitter(string $title, string $description, string $image=""):array
    {

    	return [
    	    'card'        => "<meta name=\"twitter:card\" content=\"summary_large_image\">",
    	    'canonical'       => "<meta name=\"twitter:url\" content=\"{$this->canonical}\">",
    	    'title' => "<meta name=\"twitter:title\" content=\"{$title}\">",
    	    'description' => "<meta name=\"twitter:description\" content=\"{$description}\">",
    	    'image' => "<meta name=\"twitter:image\" content=\"{$image}\">",
    	];
    }
}
