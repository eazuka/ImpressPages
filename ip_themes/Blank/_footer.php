<?php if (!defined('CMS')) exit; ?>
<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>
<footer class="clearfix">
    <div class="col_12">
        <?php echo $this->generateManagedString('themeName', 'p', 'Theme "Blank"', 'left'); ?>
        <?php echo $this->generateManagedText('slogan', 'div', 'Drag &amp; drop with <a href="http://www.impresspages.org">ImpressPages CMS</a>', 'right'); ?>
    </div>
</footer>
</div>
<?php
    $site->addJavascript(\Ip\Config::libraryUrl('js/jquery/jquery.js'));
    $site->addJavascript(\Ip\Config::libraryUrl('js/colorbox/jquery.colorbox.js'));
    $site->addJavascript(\Ip\Config::themeUrl('site.js'));
    echo $site->generateJavascript();
?>
</body>
</html>