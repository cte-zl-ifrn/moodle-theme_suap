<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace theme_suap\output;

defined('MOODLE_INTERNAL') || die;

use theme_suap\api\api;

/**
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package    theme_boost
 * @copyright  2024 DEAD IFRN, https://ead.ifrn.edu.br/portal/
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class core_renderer extends \theme_boost\output\core_renderer {
    /**
     * The standard tags (meta tags, links to stylesheets and JavaScript, etc.)
     * that should be included in the <head> tag. Designed to be called in theme
     * layout.php files.
     *
     * @return string HTML fragment.
     */
    public function standard_head_html() {

        $output = parent::standard_head_html();

        $output .= '<link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">';
        
        return $output;
    }
    /**
     * Renders the "breadcrumb" for all pages in boost.
     *
     * @return string the HTML for the navbar.
     */
    public function navbar(): string {
        $newnav = new \theme_suap\boostnavbar($this->page);
        return $this->render_from_template('core/navbar', $newnav);
    }

    /**
     * Gera o menu de seleção de idiomas com bandeiras.
     *
     * Esta função obtém a lista de idiomas disponíveis no Moodle, 
     * identifica o idioma atual e constrói um menu de seleção de idioma 
     * com as respectivas bandeiras.
     *
     * @return string HTML renderizado do menu de idiomas.
     */
    public function get_lang_menu_data() {
        $langs = \get_string_manager()->get_list_of_translations();
        $currentlang = \current_language();

        $flags = [
            'en' => '🇺🇸',
            'pt_br' => '🇧🇷',
            'es' => '🇪🇸',
        ];

        $nodes = [];
        foreach ($langs as $langtype => $langname) {
            $isactive = $langtype == $currentlang;
            $attributes = [];

            $flag = isset($flags[$langtype]) ? $flags[$langtype] : '🌐';

            if (!$isactive) {
                $attributes[] = [
                    'key' => 'lang',
                    'value' => get_html_lang_attribute_value($langtype),
                ];
            };

            $node = [
                'title' => $langname,
                'text' => $langname,
                'flag' => $flag,
                'link' => true,
                'isactive' => $isactive,
                'url' => $isactive ? new \moodle_url('#') : new \moodle_url($this->page->url, ['lang' => $langtype]),
            ];
            if (!empty($attributes)) {
                $node['attributes'] = $attributes;
            }

            $nodes[] = $node;

            if ($isactive) {
                $activelanguage = $flag;
                $activelanguagename = $langname;
            }
        }

        return [
            'langactive' => $activelanguage, // Língua atualmente selecionada
            'langactivename' => $activelanguagename, // Nome da língua atualmente selecionada
            'langnodes' => $nodes,          // Lista de idiomas disponíveis
        ];
    
        return $this->render_from_template('theme_suap/lang_menu_flags', $data);
    }

    /**
     * Renderiza o menu de seleção de idiomas com bandeiras.
     *
     * @return string HTML renderizado do menu.
     */
    public function lang_menu_flags() {
        $data = $this->get_lang_menu_data();
        return $this->render_from_template('theme_suap/lang_menu_flags', $data);
    }
}