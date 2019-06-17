<?php
/**
 * Created by PhpStorm.
 * User: sergiu
 * Date: 11/27/18
 * Time: 6:21 PM
 */

namespace Drupal\theme_routes\Theme;

use Drupal\Core\Theme\ThemeNegotiatorInterface;
use Drupal\Core\Routing\RouteMatchInterface;

class ThemeNegotiator implements ThemeNegotiatorInterface {
    /**
     * {@inheritdoc}
     */
    public function applies(RouteMatchInterface $route_match) {

        $possible_routes = array(
            'entity.user.edit_form',
            'entity.node.edit_form'
        );
        $current_path = \Drupal::service('path.current')->getPath();

        if($current_path == '/node/add/be_involved'){
            $possible_routes[] = 'node.add';
        }
        return (in_array($route_match->getRouteName(), $possible_routes));
    }

    /**
     * {@inheritdoc}
     */
    public function determineActiveTheme(RouteMatchInterface $route_match) {
        // Here you return the actual theme name.
        return 'cpr_bootstrap_barrio';
    }

}
