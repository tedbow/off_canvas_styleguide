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
    $attributes_options['off_canvas'] = [
      'data-dialog-type' => 'dialog',
      'data-dialog-renderer' => 'off_canvas',
    ];
    $attributes_options['modal'] = [
      'data-dialog-type' => 'modal',
    ];
    $attributes_options['dialog'] = [
      'data-dialog-type' => 'dialog',
    ];
    $links = [];
    foreach ($attributes_options as $key => $attributes_option) {
      $links += [
        "{$key}_link_1" => [
          'title' => "$key styles",

          'url' => Url::fromRoute('styleguide.page'),
          'attributes' => [
            'class' => ['use-ajax'],
          ] + $attributes_option,

        ],

        "{$key}_link_shortcuts" => [
          'title' => "$key shortcut form(has dropbutton)",
          'type' => 'link',
          'url' => Url::fromRoute('entity.shortcut_set.customize_form', ['shortcut_set' => 'default']),
          'attributes' => [
              'class' => ['use-ajax'],
            ] + $attributes_option,
          'attached' => [
            'library' => [
              'outside_in/drupal.outside_in',
            ],
          ],
        ],
        "{$key}_link_menu" => [
          'title' => "$key  menu form(has dropbutton)",
          'type' => 'link',
          'url' => Url::fromRoute('entity.menu.collection'),
          'attributes' => [
              'class' => ['use-ajax'],
            ] + $attributes_option,
          'attached' => [
            'library' => [
              'outside_in/drupal.outside_in',
            ],
          ],
        ],
      ];
    }

    return [
     '#theme' => 'links',
      '#links' => $links,
      '#attached' => [
        'library' => [
          'outside_in/drupal.outside_in',
        ],
      ],


    ];
  }
}
