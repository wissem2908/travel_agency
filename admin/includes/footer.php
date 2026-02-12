
 
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
<script>
$(document).on('click', '.sidebar-nav .nav-item', function () {
    $('.sidebar-nav .nav-item').removeClass('active');
    $(this).addClass('active');
});


</script>

<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>