<?php


namespace Drupal\off_canvas_styleguide\Controller;


use Drupal\Core\Url;

class LinksController {


  /**
   * Displays test links that will open in off-canvas dialog.
   *
   * @return array
   *   Render array with links.
   */
  public function linksDisplay() {
    return [
      'off_canvas_link_1' => [
        '#title' => 'Off-canvas styles',
        '#type' => 'link',
        '#url' => Url::fromRoute('styleguide.page'),
        '#attributes' => [
          'class' => ['use-ajax'],
          'data-dialog-type' => 'dialog',
          'data-dialog-renderer' => 'off_canvas',
        ],
        '#attached' => [
          'library' => [
            'outside_in/drupal.outside_in',
          ],
        ],
      ],

      'off_canvas_shortcuts' => [
        '#title' => 'Off-canvas shortcut form(has dropbutton)',
        '#type' => 'link',
        '#url' => Url::fromRoute('entity.shortcut_set.customize_form', ['shortcut_set' => 'default']),
        '#attributes' => [
          'class' => ['use-ajax'],
          'data-dialog-type' => 'dialog',
          'data-dialog-renderer' => 'off_canvas',
        ],
        '#attached' => [
          'library' => [
            'outside_in/drupal.outside_in',
          ],
        ],
      ],
      'off_canvas_menu' => [
        '#title' => 'Off-canvas menu form(has dropbutton)',
        '#type' => 'link',
        '#url' => Url::fromRoute('entity.menu.collection'),
        '#attributes' => [
          'class' => ['use-ajax'],
          'data-dialog-type' => 'dialog',
          'data-dialog-renderer' => 'off_canvas',
        ],
        '#attached' => [
          'library' => [
            'outside_in/drupal.outside_in',
          ],
        ],
      ],

    ];
  }
}
