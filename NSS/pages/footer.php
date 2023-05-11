<?php
if($_GET['page']==3 || $_GET['page']==9 || $_GET['page']==13 )
{
  echo "";
}
else
{
?>

<footer class="footer footer-black  footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="admin/" target="_blank">Admin Login</a>
            </li>
            <li>
              <a href="#" target="_blank">Blog</a>
            </li>
            <li>
              <a href="#" target="_blank"></a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            
          
          </span>
        </div>
      </div>
    </div>
  </footer>

<?php
}
?>