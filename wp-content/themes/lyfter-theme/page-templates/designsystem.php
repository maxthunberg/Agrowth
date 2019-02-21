<?php
/* Template Name: Design system Template */
get_header();
?>

<!-- HERO -->
<h1>Agrowth - Design system</h1>
<?php  //include( get_template_directory() . '/phtml/components/button/button.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/copy-button/copy-button.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/file-uploader/file-uploader.phtml');?>
<?php include( get_template_directory() . '/phtml/components/checkbox/checkbox.phtml');?>
<?php  include( get_template_directory() . '/phtml/components/combo-box/combo-box.phtml');?>
<?php  include( get_template_directory() . '/phtml/components/radio-button/radio-button.phtml');?>
<?php  include( get_template_directory() . '/phtml/components/toggle/toggle.phtml');?>
<button class="ly--btn ly--btn__primary" type="button">Primary button</button>
<button class="ly--btn ly--btn__primary" type="button" disabled>Primary button</button>
<button class="ly--btn ly--btn__primary" type="button">
  Primary with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>
<button class="ly--btn ly--btn__primary ly--btn--sm" type="button">Small Primary button</button>
<button class="ly--btn ly--btn__primary ly--btn--sm" type="button">
  Small Primary button
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>


<button class="ly--btn ly--btn__secondary" type="button">Primary button</button>
<button class="ly--btn ly--btn__secondary" type="button" disabled>Primary button</button>
<button class="ly--btn ly--btn__secondary" type="button">
  Primary with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>
<button class="ly--btn ly--btn__secondary ly--btn--sm" type="button">Small Primary button</button>
<button class="ly--btn ly--btn__secondary ly--btn--sm" type="button">
  Small Primary button
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>



<button class="ly--btn ly--btn__white" type="button">Primary button</button>
<button class="ly--btn ly--btn__white" type="button" disabled>Primary button</button>
<button class="ly--btn ly--btn__white" type="button">
  Primary with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>
<button class="ly--btn ly--btn__white ly--btn--sm" type="button">Small Primary button</button>
<button class="ly--btn ly--btn__white ly--btn--sm" type="button">
  Small Primary button
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>



<div class="secondary">

  <button class="ly--btn ly--btn__white" type="button">Primary button</button>
  <button class="ly--btn ly--btn__white" type="button" disabled>Primary button</button>
  <button class="ly--btn ly--btn__white" type="button">
    Primary with icon
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
  <button class="ly--btn ly--btn__white ly--btn--sm" type="button">Small Primary button</button>
  <button class="ly--btn ly--btn__white ly--btn--sm" type="button">
    Small Primary button
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>

</div>

<div class="primary">

  <button class="ly--btn ly--btn__white" type="button">Primary button</button>
  <button class="ly--btn ly--btn__white" type="button" disabled>Primary button</button>
  <button class="ly--btn ly--btn__white" type="button">
    Primary with icon
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
  <button class="ly--btn ly--btn__white ly--btn--sm" type="button">Small Primary button</button>
  <button class="ly--btn ly--btn__white ly--btn--sm" type="button">
    Small Primary button
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>

</div>



<button class="ly--btn ly--btn__dark" type="button">Primary button</button>
<button class="ly--btn ly--btn__dark" type="button" disabled>Primary button</button>
<button class="ly--btn ly--btn__dark" type="button">
  Primary with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>
<button class="ly--btn ly--btn__dark ly--btn--sm" type="button">Small Primary button</button>
<button class="ly--btn ly--btn__dark ly--btn--sm" type="button">
  Small Primary button
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>

<div class="primary">
  <button class="ly--btn ly--btn__dark" type="button">Primary button</button>
  <button class="ly--btn ly--btn__dark" type="button" disabled>Primary button</button>
  <button class="ly--btn ly--btn__dark" type="button">
    Primary with icon
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
  <button class="ly--btn ly--btn__dark ly--btn--sm" type="button">Small Primary button</button>
  <button class="ly--btn ly--btn__dark ly--btn--sm" type="button">
    Small Primary button
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
</div>

<div class="secondary">
  <button class="ly--btn ly--btn__dark" type="button">Primary button</button>
  <button class="ly--btn ly--btn__dark" type="button" disabled>Primary button</button>
  <button class="ly--btn ly--btn__dark" type="button">
    Primary with icon
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
  <button class="ly--btn ly--btn__dark ly--btn--sm" type="button">Small Primary button</button>
  <button class="ly--btn ly--btn__dark ly--btn--sm" type="button">
    Small Primary button
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
</div>



<button class="ly--btn ly--btn--outline" type="button">outline button</button>
<button class="ly--btn ly--btn--outline" type="button" disabled>outline button</button>
<button class="ly--btn ly--btn--outline" type="button">
  outline with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>
<button class="ly--btn ly--btn--outline ly--btn--sm" type="button">Small outline button</button>
<button class="ly--btn ly--btn--outline ly--btn--sm" type="button">
  Small outline with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>

<button class="ly--btn ly--btn--outline__secondary" type="button">outline button</button>
<button class="ly--btn ly--btn--outline__secondary" type="button" disabled>outline button</button>
<button class="ly--btn ly--btn--outline__secondary" type="button">
  outline with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>
<button class="ly--btn ly--btn--outline__secondary ly--btn--sm" type="button">Small outline button</button>
<button class="ly--btn ly--btn--outline__secondary ly--btn--sm" type="button">
  Small outline with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>

<button class="ly--btn ly--btn--outline__white" type="button">outline button</button>
<button class="ly--btn ly--btn--outline__white" type="button" disabled>outline button</button>
<button class="ly--btn ly--btn--outline__white" type="button">
  outline with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>
<button class="ly--btn ly--btn--outline__white ly--btn--sm" type="button">Small outline button</button>
<button class="ly--btn ly--btn--outline__white ly--btn--sm" type="button">
  Small outline with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>

<div class="primary">

    <button class="ly--btn ly--btn--outline__white" type="button">outline button</button>
    <button class="ly--btn ly--btn--outline__white" type="button" disabled>outline button</button>
    <button class="ly--btn ly--btn--outline__white" type="button">
      outline with icon
      <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
      </svg>
    </button>
    <button class="ly--btn ly--btn--outline__white ly--btn--sm" type="button">Small outline button</button>
    <button class="ly--btn ly--btn--outline__white ly--btn--sm" type="button">
      Small outline with icon
      <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
      </svg>
    </button>

</div>

<div class="secondary">

    <button class="ly--btn ly--btn--outline__white" type="button">outline button</button>
    <button class="ly--btn ly--btn--outline__white" type="button" disabled>outline button</button>
    <button class="ly--btn ly--btn--outline__white" type="button">
      outline with icon
      <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
      </svg>
    </button>
    <button class="ly--btn ly--btn--outline__white ly--btn--sm" type="button">Small outline button</button>
    <button class="ly--btn ly--btn--outline__white ly--btn--sm" type="button">
      Small outline with icon
      <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
      </svg>
    </button>

</div>

<button class="ly--btn ly--btn--outline__dark" type="button">outline button</button>
<button class="ly--btn ly--btn--outline__dark" type="button" disabled>outline button</button>
<button class="ly--btn ly--btn--outline__dark" type="button">
  outline with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>
<button class="ly--btn ly--btn--outline__dark ly--btn--sm" type="button">Small outline button</button>
<button class="ly--btn ly--btn--outline__dark ly--btn--sm" type="button">
  Small outline with icon
  <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
  </svg>
</button>


<div class="primary">
  <button class="ly--btn ly--btn--outline__dark" type="button">outline button</button>
  <button class="ly--btn ly--btn--outline__dark" type="button" disabled>outline button</button>
  <button class="ly--btn ly--btn--outline__dark" type="button">
    outline with icon
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
  <button class="ly--btn ly--btn--outline__dark ly--btn--sm" type="button">Small outline button</button>
  <button class="ly--btn ly--btn--outline__dark ly--btn--sm" type="button">
    Small outline with icon
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
</div>

<div class="secondary">
  <button class="ly--btn ly--btn--outline__dark" type="button">outline button</button>
  <button class="ly--btn ly--btn--outline__dark" type="button" disabled>outline button</button>
  <button class="ly--btn ly--btn--outline__dark" type="button">
    outline with icon
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
  <button class="ly--btn ly--btn--outline__dark ly--btn--sm" type="button">Small outline button</button>
  <button class="ly--btn ly--btn--outline__dark ly--btn--sm" type="button">
    Small outline with icon
    <svg class="ly--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
    </svg>
  </button>
</div>

<?php  //include( get_template_directory() . '/phtml/components/list-box/list-box.phtml');?>
<?php  include( get_template_directory() . '/phtml/components/list/list.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/data-table/data-table.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/data-table-v2/data-table-v2.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/structured-list/structured-list.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/code-snippet/code-snippet.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/overflow-menu/overflow-menu.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/card/card.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/content-switcher/content-switcher.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/date-picker/date-picker.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/detail-page-header/detail-page-header.phtml');?>
<?php  include( get_template_directory() . '/phtml/components/dropdown/dropdown.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/loading/loading.phtml');?>
<?php  include( get_template_directory() . '/phtml/components/modal/modal.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/module/module.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/multi-select/multi-select.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/notification/inline-notification.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/notification/toast-notification.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/tooltip/tooltip.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/tabs/tabs.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/tag/tag.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/unified-header/unified-header.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/interior-left-nav/interior-left-nav.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/pagination/pagination.phtml');?>
<?php  include( get_template_directory() . '/phtml/components/accordion/accordion.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/progress-indicator/progress-indicator.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/breadcrumb/breadcrumb.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/toolbar/toolbar.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/time-picker/time-picker.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/slider/slider.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/order-summary/order-summary.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/tile/tile.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/lightbox/lightbox.phtml');?>
<?php  //include( get_template_directory() . '/phtml/components/carousel/carousel.phtml');?>

<?php get_footer(); ?>
