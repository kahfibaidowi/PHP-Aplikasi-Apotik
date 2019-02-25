</div>
        </div>
    <!-- /. WRAPPER  -->
    <footer >
        &copy; <?=date("Y")?> Apotik Sifa. All Right Reserved | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?=base_url()?>assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?=base_url()?>assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?=base_url()?>assets/js/jquery.metisMenu.js"></script>
    <!-- AUTOCOMPLETE SCRIPTS -->
    <script src="<?=base_url()?>/assets/js/jquery.easy-autocomplete.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?=base_url()?>assets/js/custom.js"></script>

    <!-- INCLUDE SCRIPT -->
    <?php foreach($js_module as $js) : ?>
            <script src="<?=$js?>"></script>
    <?php endforeach ?>

</body>
</html>
