        </div>
        <div class="push"></div>
    </div>

    <div class='footer-wide'>
        <footer class="site-footer">
            <p>
                This subdomain datatablebase contains public datatables. To access a datatable please refer to the Choose Your Database dropdown menu. If you have a correction for a datatable or have a recommendation please refer                   to the Report tab.
            </p>
            <p>
                Copyright &copy; 2013 Conner Bernhard
            </p>
        </footer>
    </div>

    <script>
        var sc_project=9690005; 
        var sc_invisible=1; 
        var sc_security="c51c8be1"; 
        var scJsHost = (("https:" == document.location.protocol) ?
        "https://secure." : "http://www.");

        document.write("<sc"+"ript type='text/javascript' src='" +
        scJsHost+
        "statcounter.com/counter/counter.js'></"+"script>");
    </script>
    <noscript>
        <div class="statcounter">
            <a title="web stats" href="http://statcounter.com/" target="_blank">
                <img class="statcounter" src="http://c.statcounter.com/9690005/0/c51c8be1/1/" alt="web stats">
            </a>
        </div>
    </noscript>

    <?php if ($isHome): ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo $dir; ?>assets/js/modernizr.custom.63321.js"></script>
        <script src="<?php echo $dir; ?>assets/js/main-script.js"></script>
    <?php elseif($fileName !== 'contact') : ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo $dir; ?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo $dir; ?>assets/js/resizeable.js"></script>
        <script src="<?php echo $dir; ?>assets/js/datatables/TableTools.min.js"></script>
        <script src="<?php echo $dir; ?>assets/js/dataTables.bootstrap.js"></script>
        <script src="<?php echo $dir; ?>assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
        <script src="<?php echo $dir; ?>assets/js/datatables/responsive/js/datatables.responsive.js"></script>
        <script src="<?php echo $dir; ?>assets/js/select2/select2.min.js"></script>
        <script src="<?php echo $dir; ?>assets/js/jquery.fileDownload.js"></script>
        <script src="<?php echo $dir; ?>assets/js/script.js"></script>
    <?php endif; ?>
</body>
</html>