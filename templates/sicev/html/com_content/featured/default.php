<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

JHtml::_('behavior.caption');

// If the page class is defined, add to class as suffix.
// It will be a separate class if the user starts it with a space
?>
<div class="blog-featured<?php echo $this->pageclass_sfx;?>" itemscope itemtype="http://schema.org/Blog">
<?php if ($this->params->get('show_page_heading') != 0) : ?>

	<h1 class="h1">
	<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>

<?php endif; ?>

<?php $leadingcount = 0; ?>
<?php if (!empty($this->lead_items)) : ?>

	<?php foreach ($this->lead_items as &$item) : 
    $images  = json_decode($item->images);?>
		<div class=" intro row  " >
        <div class=" logo2 col-lg-4 col-md-4 col-sm-4 col-xs-12"><!--LOGO2-->
        <img
	<?php if ($images->image_intro_caption):
		echo 'class="caption "' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
	endif; ?>
	src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
        </div><!--FINE LOGO2-->
        <div class=" text col-lg-8 col-md-8 col-sm-8 col-xs-12"><!--TEXT-->
            <h1 class="h1"><?php echo $this->escape($item->title); ?></h1>
            <?php echo $item->introtext; ?>
        
        </div><!--FINE TEXT-->
    
    </div>
    <hr class="divider1">    
		<?php
			$leadingcount++;
		?>
	<?php endforeach; ?>

<?php endif; ?>
<?php
	$introcount = (count($this->intro_items));
	$counter = 0;
?>
<?php if (!empty($this->intro_items)) : ?>
<div class=" dividercentrato"></div>
    <div class=" box_h row ">
	<?php foreach ($this->intro_items as $key => &$item) : ?>

		<?php
		$images  = json_decode($item->images);
		$key = ($key - $leadingcount) + 1;
		$rowcount = (((int) $key - 1) % (int) $this->columns) + 1;
		$row = $counter / $this->columns;?>

		<div class=" box  col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
          <div class=" col-lg-12">
            <div class="thumbnail">
              <img
	<?php if ($images->image_intro_caption):
		echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
	endif; ?>
	src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
              <div class="caption">
                <h2><?php echo $this->escape($item->title); ?></h2>
                <?php echo $item->introtext; ?>
                
              </div>
            </div>
          </div>
        </div>

	<?php endforeach; ?>
</div>    
<?php endif; ?>

<?php if (!empty($this->link_items)) : ?>
	<div class="items-more">
	<?php echo $this->loadTemplate('links'); ?>
	</div>
<?php endif; ?>

<?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->pagesTotal > 1)) : ?>
	<div class="pagination">

		<?php if ($this->params->def('show_pagination_results', 1)) : ?>
			<p class="counter pull-right">
				<?php echo $this->pagination->getPagesCounter(); ?>
			</p>
		<?php  endif; ?>
				<?php echo $this->pagination->getPagesLinks(); ?>
	</div>
<?php endif; ?>

</div>
