<?php

/**
 * @file
 * Customize the header information shown when editing or viewing submissions.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $mode: Either "form" or "display". May be other modes provided by other
 *          modules, such as "print" or "pdf".
 * - $submission: The contents of the webform submission.
 * - $account: The user that submitted the form.
 */
?>
<fieldset class="webform-submission-info clearfix">
  <legend><?php print t('Detalles'); ?></legend>
  <?php print theme('user_picture', array('account' => $account)); ?>
  <div class="webform-submission-info-text">
    <div><?php print t("<strong>".'Formulario: </strong> !form', array('!form' => l($node->title, 'node/' . $node->nid))); ?></div>
    <div><?php print t("<strong>".'Creado por: </strong> !name', array('!name' => theme('username', array('account' => $account)))); ?></div>
   
    <!-- Informacion de fecha e IP  
    
    <div><?php print check_plain(format_date($submission->submitted, webform_variable_get('webform_date_type'))); ?></div>
    <div><?php print check_plain($submission->remote_addr); ?></div> 
    -->
  </div>
</fieldset>
