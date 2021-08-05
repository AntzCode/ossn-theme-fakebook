<?php
/**
 * Fakebook Theme for Open Source Social Network
 *
 * @package   fakebook for ossn
 * @author    AntzCode Ltd <www.antzcode.com>
 * @copyright 2020 AntzCode Limited
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.github.com/antzcode/ossn-theme-fakebook
 */
 ?>
<footer>
    <div class="col-md-11">
        <div class="footer-contents">
            <div class="ossn-footer-menu">
                <?php echo ossn_view_menu('footer'); ?>
            </div>
            <?php echo ossn_fetch_extend_views('ossn/page/footer/contents'); ?>
        </div>
    </div>
</footer>
