  <footer class="footer" role="contentinfo">
		<div class="container-fluid">
      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo $site->copyright()->kirbytext();
      ?></p>
    
   	</div>
  </footer>

</body>
</html>