function add_back_to_home_button($content) {
    if (is_singular('post'))
        $back_to_home = '
        <div id="qodef-single-post-navigation" class="qodef-m">
            <div class="qodef-m-inner">
                <a itemprop="url" class="qodef-m-nav qodef--home" href="' . home_url() . '">
                    <svg class="qodef-svg--home-icon qodef-m-pagination-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.55 15.414">
                        <path fill="none" stroke="currentColor" stroke-width="2" d="M9.775 1L1 8h3v6h4v-4h4v4h4V8h3L9.775 1z"></path>
                    </svg>
                    <span class="qodef-m-nav-label">Back to Home</span>
                </a>
            </div>
        </div>';
        $content .= $back_to_home; // Append to post content
    }
    return $content;
}
add_filter('the_content', 'add_back_to_home_button');
