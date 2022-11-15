<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src=" <?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>


<script>
    function getSelectValue() {
        const selectedValue = document.getElementById("desa").value;
        // const selectedValue2 = document.getElementById("desa2").value;
        var selectedValue3 = document.getElementById("select2").value;
        var selectedValue2;

        if (selectedValue3 === "1") {
            selectedValue2 = document.getElementById("desa2").value;
        } else if (selectedValue3 === "2") {
            selectedValue2 = document.getElementById("select22").value;
        }

        console.log(selectedValue);
        console.log(selectedValue2);

        if (selectedValue === '1' && selectedValue2 === '1') {
            console.log("radius 1");
            $('#radius-1').modal('show');
        } else if (selectedValue === '2' && selectedValue2 === '2') {
            $('#radius-2').modal('show');
        } else if (selectedValue === '3' && selectedValue2 === '3') {
            $('#radius-3').modal('show');
        } else if (selectedValue === '3' && selectedValue2 === '4') {
            $('#radius-4').modal('show');
        } else if ((selectedValue === '1' && selectedValue2 === '2') || (selectedValue === '2' && selectedValue2 === '1')) {
            console.log("radius 2");
            $('#radius-2').modal('show');
        } else if ((selectedValue === '1' && selectedValue2 === '3') || (selectedValue === '2' && selectedValue2 === '3') || (selectedValue === '3' && selectedValue2 === '1') || (selectedValue === '3' && selectedValue2 === '2')) {
            console.log("radius 3");
            $('#radius-3').modal('show');
        } else if ((selectedValue === '4' && selectedValue2 === '3') || (selectedValue === '4' && selectedValue2 === '2') || (selectedValue === '4' && selectedValue2 === '1') || (selectedValue === '1' && selectedValue2 === '4') || (selectedValue === '2' && selectedValue2 === '4') || (selectedValue === '3' && selectedValue2 === '4')) {
            console.log("radius 4");
            $('#radius-4').modal('show');
        } else {
            console.log("Error 404");
            $('#no-radius').modal('show');
        }

    }
</script>
<script>
    $(document).ready(function() {

        $('#kecamatan').change(function() {

            var country_id = $('#kecamatan').val();

            var action = 'get_state';

            if (country_id != '') {
                $.ajax({
                    url: "<?php echo base_url('/home/action'); ?>",
                    method: "POST",
                    data: {
                        country_id: country_id,
                        action: action
                    },
                    dataType: "JSON",
                    success: function(data) {
                        var html = '<option value="">--Pilih Desa--</option>';

                        for (var count = 0; count < data.length; count++) {

                            html += '<option value="' + data[count].radius + '">' + data[count].nama_desa + '</option>';

                        }

                        $('#desa').html(html);
                    }
                });
            } else {
                var html = '<option value="">--Pilih Desa--</option>';

                $('#desa').html(html);
                // $('#desa').val('');
            }
        });

        $('#kecamatan2').change(function() {

            var country_id = $('#kecamatan2').val();

            var action = 'get_state';

            if (country_id != '') {
                $.ajax({
                    url: "<?php echo base_url('/home/action'); ?>",
                    method: "POST",
                    data: {
                        country_id: country_id,
                        action: action
                    },
                    dataType: "JSON",
                    success: function(data) {
                        var html = '<option value="">--Pilih Desa--</option>';

                        for (var count = 0; count < data.length; count++) {

                            html += '<option value="' + data[count].radius + '">' + data[count].nama_desa + '</option>';

                        }

                        $('#desa2').html(html);
                    }
                });
            } else {
                var html = '<option value="">--Pilih Desa--</option>';

                $('#desa2').html(html);
                // $('#desa').val('');
            }
        });

        $('#form2').hide();
        $('#kec2').hide();
        $('#ds2').hide();

        $('#select2').change(function() {
            if ($(this).val() == '1') {
                $('#kec2').show();
                $('#ds2').show();
                $('#form2').hide();
            } else if ($(this).val() == '0') {
                $('#form2').hide();
                $('#kec2').hide();
                $('#ds2').hide();
            } else {
                $('#form2').show();
                $('#kec2').hide();
                $('#ds2').hide();
            }
        });

    });
</script>
</body>

</html>