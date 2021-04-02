# :sparkles: Custom Block Category

Package that will create a special categeory in your gutenberg blocks list named 'Custom'. Created for custom WordPress websites using sage and roots.io. 

## :electric_plug: Install
Add following snippet to your site:
```
  {
  "type": "vcs",
  "url": "git@github.com:MikaCaldera/gutenberg-category.git"
  }
```

In your site folder run the following command.

```
  composer require "mikacaldera/gutenberg-category"
```

## :triangular_ruler: Use

When you create a new custom gutenberg block use the category  `custom`  to have it listed under custom Gutenberg blocks. 

```registerBlockType( 'create-block/container', {
  // Basic Specs
  title: __( 'Container', 'create-block' ),
  description: __(
    'Adds options for a container and background color.',
    'create-block'
  ),
  keywords: [__('container'), __('full'), __('block')],
  category: 'custom',
  icon: 'editor-contract',
  ```
