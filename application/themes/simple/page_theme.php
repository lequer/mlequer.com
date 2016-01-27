<?php
namespace Application\Theme\Simple;

use \Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {
	protected $pThemeGridFrameworkHandle = 'bootstrap3';
 public function getThemeName()
    {
        return t('Simple');
    }

    public function getThemeDescription()
    {
        return t('Elegant, spacious theme with support for blogs, portfolios, layouts and more.');
    }
   public function registerAssets() {
      $this->requireAsset('javascript', 'jquery');
   }
    public function getThemeBlockClasses()
    {
        return array(
           
            'page_list' => array(
                'recent-blog-entry',
                'blog-entry-list',
                'page-list-with-buttons',
                'block-sidebar-wrapped',
            ),
          
        );
    }
}
