<footer class="footer">
  <div class="container">
    <div class="footer__row">
      <div class="footer__copyright text text--white">
        {{ get_option_field("copyright") }}
      </div>
      <div class="footer__logo">
        <a href="http://iqconnect.pl">
          <img src="{{ get_option_field('iqlogo')['url'] }}" alt="{{ get_option_field('iqlogo')['alt'] }}">
        </a>
      </div>
    </div>
  </div>
</footer>
{{-- <script>
  $(function() {
      $('.form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          type: 'post',
          url: 'https://centrumzdrowiarehroz.pl/mail.php',
          data: $(this).serialize(),
          success: function () {
            alert('Wiadomość została wysłana!');
          }
        });
      });
  });
</script> --}}