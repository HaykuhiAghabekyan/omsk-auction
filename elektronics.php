<?php
include_once 'include_file/header.php';
include_once 'include_file/elektronika.php';
include_once 'include_file/footer.php';
?>
<script type="text/javascript">
    $('title').html('elektronika');
    var title=$('title').html();
    $('.menu ul li.'+title).addClass('active')
</script>
