
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Owl Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="js/google_map.js"></script>
<!-- Main JS (Do not remove) -->
<script src="js/main.js?v=<?=time()?>"></script>

<script>
    function sendMessage(){
        $.post('send_message.php', {name:$('#m_name').val(), email:$('#m_email').val(), message:$('#m_message').val()}, function(data){
            alert(data);
        })
    }
</script>
	</body>
</html>

