<footer class="footer">
                    © 2019 <b>Fábrica de Bolos</b> <span class="d-none d-sm-inline-block"> - Design with <i class="mdi mdi-heart text-danger"></i> by Matheus.</span>
                </footer>
            </div>
        </div>
        <?php foreach ($js as $key => $cada1): ?>
            <script src="<?= base_url() . $cada1; ?>"></script>
        <?php endforeach; ?>
    </body>
</html>