<?php
/****************************************************************************************\
**   JoomGallery 3                                                                      **
**   By: JoomGallery::ProjectTeam                                                       **
**   Copyright (C) 2008 - 2021  JoomGallery::ProjectTeam                                **
**   Based on: JoomGallery 1.0.0 by JoomGallery::ProjectTeam                            **
**   Released under GNU GPL Public License                                              **
**   License: http://www.gnu.org/copyleft/gpl.html or have a look                       **
**   at administrator/components/com_joomgallery/LICENSE.TXT                            **
\****************************************************************************************/

defined('_JEXEC') or die('Direct Access to this location is not allowed.'); ?>

<form action="index.php" name="adminFormVotes" method="post" onsubmit="return confirm(Joomla.JText._('COM_JOOMGALLERY_MAIMAN_ALERT_RESET_VOTES_CONFIRM'))">
  <div class="well">
    <div class="row-fluid">
      <div class="span2 center">
        <button type="submit" class="btn" onclick="document.adminFormVotes.task.value = 'synchronize';"><?php echo JText::_('COM_JOOMGALLERY_MAIMAN_SYNCHRONIZE_VOTES'); ?></button>
      </div>
      <div class="span10">
        <?php echo JText::_('COM_JOOMGALLERY_MAIMAN_SYNCHRONIZE_VOTES_LONG'); ?>
      </div>
    </div>
  </div>
  <div class="well">
    <div class="row-fluid">
      <div class="span2 center">
        <button type="submit" class="btn" onclick="document.adminFormVotes.task.value = 'deleteip';"><?php echo JText::_('COM_JOOMGALLERY_MAIMAN_VT_DELETE_VOTES_IP'); ?></button>
      </div>
      <div class="span10">
        <?php echo JText::_('COM_JOOMGALLERY_MAIMAN_VT_DELETE_VOTES_IP_LONG'); ?>
      </div>
    </div>
  </div>
  <div class="well">
    <div class="row-fluid">
      <div class="span2 center">
        <button type="submit" class="btn" onclick="document.adminFormVotes.task.value = 'reset';"><?php echo JText::_('COM_JOOMGALLERY_MAIMAN_RESET_VOTES'); ?></button>
      </div>
      <div class="span10">
        <?php echo JText::_('COM_JOOMGALLERY_MAIMAN_RESET_VOTES_LONG'); ?>
      </div>
    </div>
    <input type="hidden" name="option" value="<?php echo _JOOM_OPTION; ?>" />
    <input type="hidden" name="controller" value="votes" />
    <input type="hidden" name="task" value="" />
  </div>
</form>