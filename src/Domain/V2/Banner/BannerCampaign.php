<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 30.11.18
 * Time: 11:19
 */

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Banner\Textblock;

class BannerCampaign
{
    /**
     * @var array
     * @Field (name="url", type="dict")
     */
    private $url;
    /**
     * @var Textblock[]
     * @Field (name="textblocks", type="dict<Koma136\MyTarget\Domain\V2\Banner\Textblock>")
     */
    private $textblocks;
    /**
     * @var array
     * @Field (name="image", type="dict")
     */
    private $image;
    /**
     * @var array
     * @Field (name="urls", type="dict")
     */
    private $urls;
    /**
     * @var array
     * @Field (name="promo_image", type="dict")
     */
    private $promoImage;
    /**
     * @var array
     * @Field (name="telephone", type="dict")
     */
    private $telephone;
    /**
     * @var array
     * @Field (name="company_name", type="dict")
     */
    private $companyName;
    /**
     * @var array
     * @Field (name="category", type="dict")
     */
    private $category;
    /**
     * @var array
     * @Field (name="call_to_action", type="dict")
     */
    private $callToAction;
    /**
     * @var array
     * @Field (name="content", type="dict")
     */
    private $content;
    /**
     * @var array
     * @Field (name="background_image", type="dict")
     */
    private $backgroundImage;
    /**
     * @var array
     * @Field (name="video_offset", type="dict")
     */
    private $videoOffset;
    /**
     * @var array
     * @Field (name="video_params", type="dict")
     */
    private $videoParams;
    /**
     * @var array
     * @Field (name="video", type="dict")
     */
    private $video;
    /**
     * @var array
     * @Field (name="video_size", type="dict")
     */
    private $videoSize;
    /**
     * @var array
     * @Field (name="promo_image16x9", type="dict")
     */
    private $promo_image16x9;
    /**
     * @var array
     * @Field (name="promo_image5x3", type="dict")
     */
    private $promo_image5x3;
    /**
     * @var array
     * @Field (name="promo_image9x16", type="dict")
     */
    private $promo_image9x16;
    /**
     * @var array
     * @Field (name="promo_image2x3", type="dict")
     */
    private $promo_image2x3;
    /**
     * @var array
     * @Field (name="promo_image3x2", type="dict")
     */
    private $promo_image3x2;
    /**
     * @var array
     * @Field (name="promo_image3x4", type="dict")
     */
    private $promo_image3x4;
    /**
     * @var array
     * @Field (name="promo_image3x5", type="dict")
     */
    private $promo_image3x5;
    /**
     * @var array
     * @Field (name="promo_image4x3", type="dict")
     */
    private $promo_image4x3;
    /**
     * @var array
     * @Field (name="advert_width", type="dict")
     */
    private $advert_width;
    /**
     * @var array
     * @Field (name="logo_link", type="dict")
     */
    private $logo_link;
    /**
     * @var array
     * @Field (name="appearance", type="dict")
     */
    private $appearance;
    /**
     * @var array
     * @Field (name="logo_image", type="dict")
     */
    private $logo_image;
    /**
     * @var array
     * @Field (name="product_name", type="dict")
     */
    private $product_name;
    /**
     * @var array
     * @Field (name="template_type", type="dict")
     */
    private $template_type;
    /**
     * @var array
     * @Field (name="button_title", type="dict")
     */
    private $button_title;
    /**
     * @var array
     * @Field (name="product_zoom", type="dict")
     */
    private $product_zoom;
    /**
     * @var array
     * @Field (name="about_company", type="dict")
     */
    private $about_company;
    /**
     * @var array
     * @Field (name="tpl_background_image", type="dict")
     */
    private $tpl_background_image;
    /**
     * @var array
     * @Field (name="html5", type="dict")
     */
    private $html5;
    /**
     * @var array
     * @Field (name="link_3", type="dict")
     */
    private $link_3;
    /**
     * @var array
     * @Field (name="link_2", type="dict")
     */
    private $link_2;
    /**
     * @var array
     * @Field (name="link_1", type="dict")
     */
    private $link_1;
    /**
     * @var array
     * @Field (name="link_5", type="dict")
     */
    private $link_5;
    /**
     * @var array
     * @Field (name="link_4", type="dict")
     */
    private $link_4;
    /**
     * @var array
     * @Field (name="deeplink", type="dict")
     */
    private $deeplink;
    /**
     * @var array
     * @Field (name="carousel_description", type="dict")
     */
    private $carousel_description;
    /**
     * @var array
     * @Field (name="carousel_headline", type="dict")
     */
    private $carousel_headline;
    /**
     * @var array
     * @Field (name="content_settings", type="dict")
     */
    private $content_settings;

    /**
     * @return BannerCampaign
     */

    public static  function create()
    {
        return new self();
    }

    /**
     * @return array
     */
    public function getUrl(): array
    {
        return $this->url;
    }

    /**
     * @param array $url
     * @return $this
     */
    public function setUrl(array $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return Textblock[]
     */
    public function getTextblocks(): array
    {
        return $this->textblocks;
    }

    /**
     * @param Textblock[] $textblocks
     * @return $this
     */
    public function setTextblocks(array $textblocks)
    {
        $this->textblocks = $textblocks;
        return $this;
    }



    /**
     * @return array
     */
    public function getImage(): array
    {
        return $this->image;
    }

    /**
     * @param array $image
     * @return $this
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return array
     */
    public function getUrls(): array
    {
        return $this->urls;
    }

    /**
     * @param array $urls
     * @return $this
     */
    public function setUrls(array $urls)
    {
        $this->urls = $urls;
        return $this;
    }

    /**
     * @return array
     */
    public function getPromoImage(): array
    {
        return $this->promoImage;
    }

    /**
     * @param array $promoImage
     * @return $this
     */
    public function setPromoImage(array $promoImage)
    {
        $this->promoImage = $promoImage;
        return $this;
    }

    /**
     * @return array
     */
    public function getTelephone(): array
    {
        return $this->telephone;
    }

    /**
     * @param array $telephone
     * @return $this
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return array
     */
    public function getCompanyName(): array
    {
        return $this->companyName;
    }

    /**
     * @param array $companyName
     * @return $this
     */
    public function setCompanyName(array $companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return array
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    /**
     * @param array $category
     * @return $this
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return array
     */
    public function getCallToAction(): array
    {
        return $this->callToAction;
    }

    /**
     * @param array $callToAction
     * @return $this
     */
    public function setCallToAction(array $callToAction)
    {
        $this->callToAction = $callToAction;
        return $this;
    }

    /**
     * @return array
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * @param array $content
     * @return $this
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return array
     */
    public function getBackgroundImage(): array
    {
        return $this->backgroundImage;
    }

    /**
     * @param array $backgroundImage
     * @return $this
     */
    public function setBackgroundImage(array $backgroundImage)
    {
        $this->backgroundImage = $backgroundImage;
        return $this;
    }

    /**
     * @return array
     */
    public function getVideoOffset(): array
    {
        return $this->videoOffset;
    }

    /**
     * @param array $videoOffset
     * @return $this
     */
    public function setVideoOffset(array $videoOffset)
    {
        $this->videoOffset = $videoOffset;
        return $this;
    }

    /**
     * @return array
     */
    public function getVideoParams(): array
    {
        return $this->videoParams;
    }

    /**
     * @param array $videoParams
     * @return $this
     */
    public function setVideoParams(array $videoParams)
    {
        $this->videoParams = $videoParams;
        return $this;
    }

    /**
     * @return array
     */
    public function getVideo(): array
    {
        return $this->video;
    }

    /**
     * @param array $video
     * @return $this
     */
    public function setVideo(array $video)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return array
     */
    public function getVideoSize(): array
    {
        return $this->videoSize;
    }

    /**
     * @param array $videoSize
     * @return $this
     */
    public function setVideoSize(array $videoSize)
    {
        $this->videoSize = $videoSize;
        return $this;
    }

    /**
     * @return array
     */
    public function getPromoImage16x9(): array
    {
        return $this->promo_image16x9;
    }

    /**
     * @param array $promo_image16x9
     * @return $this
     */
    public function setPromoImage16x9(array $promo_image16x9)
    {
        $this->promo_image16x9 = $promo_image16x9;
        return $this;
    }

    /**
     * @return array
     */
    public function getPromoImage5x3(): array
    {
        return $this->promo_image5x3;
    }

    /**
     * @param array $promo_image5x3
     * @return $this
     */
    public function setPromoImage5x3(array $promo_image5x3)
    {
        $this->promo_image5x3 = $promo_image5x3;
        return $this;
    }

    /**
     * @return array
     */
    public function getPromoImage9x16(): array
    {
        return $this->promo_image9x16;
    }

    /**
     * @param array $promo_image9x16
     * @return $this
     */
    public function setPromoImage9x16(array $promo_image9x16)
    {
        $this->promo_image9x16 = $promo_image9x16;
        return $this;
    }

    /**
     * @return array
     */
    public function getPromoImage2x3(): array
    {
        return $this->promo_image2x3;
    }

    /**
     * @param array $promo_image2x3
     * @return $this
     */
    public function setPromoImage2x3(array $promo_image2x3)
    {
        $this->promo_image2x3 = $promo_image2x3;
        return $this;
    }

    /**
     * @return array
     */
    public function getPromoImage3x2(): array
    {
        return $this->promo_image3x2;
    }

    /**
     * @param array $promo_image3x2
     * @return $this
     */
    public function setPromoImage3x2(array $promo_image3x2)
    {
        $this->promo_image3x2 = $promo_image3x2;
        return $this;
    }

    /**
     * @return array
     */
    public function getPromoImage3x4(): array
    {
        return $this->promo_image3x4;
    }

    /**
     * @param array $promo_image3x4
     * @return $this
     */
    public function setPromoImage3x4(array $promo_image3x4)
    {
        $this->promo_image3x4 = $promo_image3x4;
        return $this;
    }

    /**
     * @return array
     */
    public function getPromoImage3x5(): array
    {
        return $this->promo_image3x5;
    }

    /**
     * @param array $promo_image3x5
     * @return $this
     */
    public function setPromoImage3x5(array $promo_image3x5)
    {
        $this->promo_image3x5 = $promo_image3x5;
        return $this;
    }

    /**
     * @return array
     */
    public function getPromoImage4x3(): array
    {
        return $this->promo_image4x3;
    }

    /**
     * @param array $promo_image4x3
     * @return $this
     */
    public function setPromoImage4x3(array $promo_image4x3)
    {
        $this->promo_image4x3 = $promo_image4x3;
        return $this;
    }

    /**
     * @return array
     */
    public function getAdvertWidth(): array
    {
        return $this->advert_width;
    }

    /**
     * @param array $advert_width
     * @return $this
     */
    public function setAdvertWidth(array $advert_width)
    {
        $this->advert_width = $advert_width;
        return $this;
    }

    /**
     * @return array
     */
    public function getLogoLink(): array
    {
        return $this->logo_link;
    }

    /**
     * @param array $logo_link
     * @return $this
     */
    public function setLogoLink(array $logo_link)
    {
        $this->logo_link = $logo_link;
        return $this;
    }

    /**
     * @return array
     */
    public function getAppearance(): array
    {
        return $this->appearance;
    }

    /**
     * @param array $appearance
     * @return $this
     */
    public function setAppearance(array $appearance)
    {
        $this->appearance = $appearance;
        return $this;
    }

    /**
     * @return array
     */
    public function getLogoImage(): array
    {
        return $this->logo_image;
    }

    /**
     * @param array $logo_image
     * @return $this
     */
    public function setLogoImage(array $logo_image)
    {
        $this->logo_image = $logo_image;
        return $this;
    }

    /**
     * @return array
     */
    public function getProductName(): array
    {
        return $this->product_name;
    }

    /**
     * @param array $product_name
     * @return $this
     */
    public function setProductName(array $product_name)
    {
        $this->product_name = $product_name;
        return $this;
    }

    /**
     * @return array
     */
    public function getTemplateType(): array
    {
        return $this->template_type;
    }

    /**
     * @param array $template_type
     * @return $this
     */
    public function setTemplateType(array $template_type)
    {
        $this->template_type = $template_type;
        return $this;
    }

    /**
     * @return array
     */
    public function getButtonTitle(): array
    {
        return $this->button_title;
    }

    /**
     * @param array $button_title
     * @return $this
     */
    public function setButtonTitle(array $button_title)
    {
        $this->button_title = $button_title;
        return $this;
    }

    /**
     * @return array
     */
    public function getProductZoom(): array
    {
        return $this->product_zoom;
    }

    /**
     * @param array $product_zoom
     * @return $this
     */
    public function setProductZoom(array $product_zoom)
    {
        $this->product_zoom = $product_zoom;
        return $this;
    }

    /**
     * @return array
     */
    public function getAboutCompany(): array
    {
        return $this->about_company;
    }

    /**
     * @param array $about_company
     * @return $this
     */
    public function setAboutCompany(array $about_company)
    {
        $this->about_company = $about_company;
        return $this;
    }

    /**
     * @return array
     */
    public function getTplBackgroundImage(): array
    {
        return $this->tpl_background_image;
    }

    /**
     * @param array $tpl_background_image
     * @return $this
     */
    public function setTplBackgroundImage(array $tpl_background_image)
    {
        $this->tpl_background_image = $tpl_background_image;
        return $this;
    }

    /**
     * @return array
     */
    public function getHtml5(): array
    {
        return $this->html5;
    }

    /**
     * @param array $html5
     * @return $this
     */
    public function setHtml5(array $html5)
    {
        $this->html5 = $html5;
        return $this;
    }

    /**
     * @return array
     */
    public function getLink3(): array
    {
        return $this->link_3;
    }

    /**
     * @param array $link_3
     * @return $this
     */
    public function setLink3(array $link_3)
    {
        $this->link_3 = $link_3;
        return $this;
    }

    /**
     * @return array
     */
    public function getLink2(): array
    {
        return $this->link_2;
    }

    /**
     * @param array $link_2
     * @return $this
     */
    public function setLink2(array $link_2)
    {
        $this->link_2 = $link_2;
        return $this;
    }

    /**
     * @return array
     */
    public function getLink1(): array
    {
        return $this->link_1;
    }

    /**
     * @param array $link_1
     * @return $this
     */
    public function setLink1(array $link_1)
    {
        $this->link_1 = $link_1;
        return $this;
    }

    /**
     * @return array
     */
    public function getLink5(): array
    {
        return $this->link_5;
    }

    /**
     * @param array $link_5
     * @return $this
     */
    public function setLink5(array $link_5)
    {
        $this->link_5 = $link_5;
        return $this;
    }

    /**
     * @return array
     */
    public function getLink4(): array
    {
        return $this->link_4;
    }

    /**
     * @param array $link_4
     * @return $this
     */
    public function setLink4(array $link_4)
    {
        $this->link_4 = $link_4;
        return $this;
    }

    /**
     * @return array
     */
    public function getDeeplink(): array
    {
        return $this->deeplink;
    }

    /**
     * @param array $deeplink
     * @return $this
     */
    public function setDeeplink(array $deeplink)
    {
        $this->deeplink = $deeplink;
        return $this;
    }

    /**
     * @return array
     */
    public function getCarouselDescription(): array
    {
        return $this->carousel_description;
    }

    /**
     * @param array $carousel_description
     * @return $this
     */
    public function setCarouselDescription(array $carousel_description)
    {
        $this->carousel_description = $carousel_description;
        return $this;
    }

    /**
     * @return array
     */
    public function getCarouselHeadline(): array
    {
        return $this->carousel_headline;
    }

    /**
     * @param array $carousel_headline
     * @return $this
     */
    public function setCarouselHeadline(array $carousel_headline)
    {
        $this->carousel_headline = $carousel_headline;
        return $this;
    }

    /**
     * @return array
     */
    public function getContentSettings(): array
    {
        return $this->content_settings;
    }

    /**
     * @param array $content_settings
     * @return $this
     */
    public function setContentSettings(array $content_settings)
    {
        $this->content_settings = $content_settings;
        return $this;
    }

}