# CMB2 Field Paragraph
Just some text

## Installation

#### Composer
`composer require anewholm/cmb2-field-paragraph`

#### Manual
1. [Download](https://github.com/anewholm/cmb2-field-paragraph/archive/master.zip) the plugin
2. Place the plugin folder in your `/wp-content/plugins/` directory
3. Activate the plugin in the plugins dashboard

# Usage
```php
array(
  'id' => $prefix . 'location_metabox_paragraph',
  'title' => __( 'Paragraph', $plugin_slug ),
  'object_types' => array( $post_type, ), // Post type
  'context' => 'side',
  'priority' => 'high',
  'show_names' => false,
  'fields' => array(
    array(
      'name' => __( 'Paragraph', $plugin_slug ),
      'id' => $plugin_slug . '_location_calendar',
      'title' => 'This is the title',
      'desc' => 'This is a paragraph.',
      'type' => 'paragraph',
    ),
  ),
),
```
