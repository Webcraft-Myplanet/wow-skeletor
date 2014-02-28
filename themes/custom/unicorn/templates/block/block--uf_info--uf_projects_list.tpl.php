<?php
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see bootstrap_preprocess_block()
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see bootstrap_process_block()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<?php if ($logged_in): ?>
  <section ng-controller="ProjectsCtrl" id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="row filters-wrapper">
      <div class="col-md-3">
        <select ng-model="sort" class="form-control" value="">
          <option value="">Sort by:</option>
          <option value="title">Alpha</option>
          <option value="startDate">Start</option>
          <option value="endDate">End</option>
        </select>
    </div>
    <div class="col-md-3">
      <select ng-model="filter" class="form-control" value="">
        <option value="">Status:</option>
        <option value="Active">Active</option>
        <option value="Potential">Potential</option>
      </select>
    </div>
    <div class="col-md-3">
      <div><input type="text" ng-model="skills.skill" placeholder="Skills"></div>
    </div>
    <div class="row list-wrapper">
      <br>
      <div class="col-md-6" ng-repeat="project in page.projects | orderBy:sort | filter:filter | filter:skills ">        
      <accordion>
        <accordion-group is-open="isopen">
            <accordion-heading>
              {{project.title}}<i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
            </accordion-heading>
            <div class="pull-left" ng-bind-html="project.logo"></div>
            <p>{{project.status}}</p>
            <p>{{project.startDate}} - {{project.endDate}}</p>
            <p>{{project.skills}}</p>
            <p ng-bind-html="project.description"></p>
            <a ng-href="/node/{{project.nid}}" class="pull-right"> View Project</a>            
        </accordion-group>
      </accordion>
      </div>
    </div>
  </div>
</div>
</div>
</section> <!-- /.block -->
<?php endif;?>
