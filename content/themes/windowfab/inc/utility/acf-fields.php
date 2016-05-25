<?php
/**
 * acf-fields.php
 *
 * @package _s
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_57450f989c97a',
  'title' => 'Category Page Fields',
  'fields' => array (
    array (
      'key' => 'field_5745107893aa3',
      'label' => 'Category Gallery',
      'name' => 'category_gallery',
      'type' => 'gallery',
      'instructions' => 'Upload images to display in the category\'s gallery.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => 3,
      'max' => '',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => 'jpg,jpeg,webp',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/category-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_574500170290d',
  'title' => 'Home Page Fields',
  'fields' => array (
    array (
      'key' => 'field_5745002d2a79d',
      'label' => 'Home Sections',
      'name' => 'home_sections',
      'type' => 'flexible_content',
      'instructions' => 'Add home sections by clicking "Add Section" below.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'button_label' => 'Add Section',
      'min' => '',
      'max' => '',
      'layouts' => array (
        array (
          'key' => '5745007fc6ee6',
          'name' => 'headline_section',
          'label' => 'Headline Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_574500b52a79e',
              'label' => 'Section Headline',
              'name' => 'section_headline',
              'type' => 'text',
              'instructions' => 'Enter a headline for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_5745012e2a79f',
              'label' => 'Section Text',
              'name' => 'section_text',
              'type' => 'textarea',
              'instructions' => 'Enter some text to appear in the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'maxlength' => '',
              'rows' => 3,
              'new_lines' => 'wpautop',
              'readonly' => 0,
              'disabled' => 0,
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '574501dc784f2',
          'name' => 'product_category_section',
          'label' => 'Product Category Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_57450203784f3',
              'label' => 'Product Categories',
              'name' => 'product_categories',
              'type' => 'repeater',
              'instructions' => 'Add categories by clicking "Add Category" below.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 4,
              'max' => 4,
              'layout' => 'row',
              'button_label' => 'Add Category',
              'sub_fields' => array (
                array (
                  'key' => 'field_574502680527c',
                  'label' => 'Category Icon',
                  'name' => 'category_icon',
                  'type' => 'image',
                  'instructions' => 'Upload an icon for the category.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'array',
                  'preview_size' => 'thumbnail',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                ),
                array (
                  'key' => 'field_5745028c0527d',
                  'label' => 'Category Title',
                  'name' => 'category_title',
                  'type' => 'text',
                  'instructions' => 'Enter the category\'s title.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                  'readonly' => 0,
                  'disabled' => 0,
                ),
                array (
                  'key' => 'field_574502a80527e',
                  'label' => 'Category Text',
                  'name' => 'category_text',
                  'type' => 'textarea',
                  'instructions' => 'Enter some text describing the product category.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'maxlength' => '',
                  'rows' => 5,
                  'new_lines' => 'wpautop',
                  'readonly' => 0,
                  'disabled' => 0,
                ),
                array (
                  'key' => 'field_574502cf0527f',
                  'label' => 'Category Link',
                  'name' => 'category_link',
                  'type' => 'page_link',
                  'instructions' => 'Select a page or post for the category to link to.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'post_type' => array (
                    0 => 'post',
                    1 => 'page',
                  ),
                  'taxonomy' => array (
                  ),
                  'allow_null' => 0,
                  'multiple' => 0,
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '57450618ae087',
          'name' => 'testimonial_section',
          'label' => 'Testimonial Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_57450621ae088',
              'label' => 'Testimonials',
              'name' => 'testimonials',
              'type' => 'relationship',
              'instructions' => 'Select the testimonials you\'d like to display in the section.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'post_type' => array (
                0 => 'testimonial',
              ),
              'taxonomy' => array (
              ),
              'filters' => array (
                0 => 'search',
              ),
              'elements' => '',
              'min' => 3,
              'max' => 10,
              'return_format' => 'object',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '5745073e67fc0',
          'name' => 'image_cta_section',
          'label' => 'Image CTA Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_574507ad67fc1',
              'label' => 'CTA Items',
              'name' => 'cta_items',
              'type' => 'repeater',
              'instructions' => 'Add CTA items by clicking "Add CTA" below.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 2,
              'max' => 2,
              'layout' => 'table',
              'button_label' => 'Add CTA',
              'sub_fields' => array (
                array (
                  'key' => 'field_5745082767fc2',
                  'label' => 'CTA Headline',
                  'name' => 'cta_headline',
                  'type' => 'text',
                  'instructions' => 'Enter a headline for the CTA.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                  'readonly' => 0,
                  'disabled' => 0,
                ),
                array (
                  'key' => 'field_5745084467fc3',
                  'label' => 'CTA Text',
                  'name' => 'cta_text',
                  'type' => 'textarea',
                  'instructions' => 'Enter some text for the CTA.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'maxlength' => '',
                  'rows' => 6,
                  'new_lines' => 'wpautop',
                  'readonly' => 0,
                  'disabled' => 0,
                ),
                array (
                  'key' => 'field_574508a367fc4',
                  'label' => 'CTA Link',
                  'name' => 'cta_link',
                  'type' => 'page_link',
                  'instructions' => 'Select a page or post for the category to link to.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'post_type' => array (
                  ),
                  'taxonomy' => array (
                  ),
                  'allow_null' => 0,
                  'multiple' => 0,
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '5745098f5d631',
          'name' => 'text_cta_section',
          'label' => 'Text CTA Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_574509ab5d632',
              'label' => 'Section Headline',
              'name' => 'section_headline',
              'type' => 'text',
              'instructions' => 'Enter a headline for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_574509da5d633',
              'label' => 'Section Text',
              'name' => 'section_text',
              'type' => 'textarea',
              'instructions' => 'Enter some text to appear in the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'maxlength' => '',
              'rows' => 3,
              'new_lines' => 'wpautop',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_57450a815d634',
              'label' => 'CTA Link',
              'name' => 'cta_link',
              'type' => 'page_link',
              'instructions' => 'Select a page or post for the category to link to.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'post_type' => array (
                0 => 'post',
                1 => 'page',
              ),
              'taxonomy' => array (
              ),
              'allow_null' => 0,
              'multiple' => 0,
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '57450b13fa792',
          'name' => 'banner_section',
          'label' => 'Banner Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_57450b42fa793',
              'label' => 'Banner Icon',
              'name' => 'banner_icon',
              'type' => 'image',
              'instructions' => 'Upload an icon to use above the banner headline.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => '',
            ),
            array (
              'key' => 'field_57450bbefa794',
              'label' => 'Banner Headline',
              'name' => 'banner_headline',
              'type' => 'text',
              'instructions' => 'Enter the banner headline.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
          ),
          'min' => '',
          'max' => '',
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/home-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;