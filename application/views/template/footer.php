            <!-- footer @s -->
            <div class="nk-footer nk-footer-fluid bg-lighter">
                <div class="container-xl">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; 2021 Pusat Data dan Sistem Informasi. <a href="https://www.kemendag.go.id">Kementerian Perdagangan Republik Indonesia</a>
                        </div>
                        <div class="nk-footer-links">
                            <p>Version 1.0 ALPHA</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?= base_url() ?>resources/assets/js/bundle.js?ver=2.2.0"></script>
    <script src="<?= base_url() ?>resources/assets/js/scripts.js?ver=2.2.0"></script>
    <script src="<?= base_url() ?>resources/assets/js/charts/gd-invest.js?ver=2.2.0"></script>

    
    <!-- Selectize -->
    <script src="https://cdn.jsdelivr.net/npm/selectize@0.12.2/dist/js/standalone/selectize.min.js"></script>

    <?php if ($topping) {
        $this->load->view($topping);
    }
    ?>
</body>