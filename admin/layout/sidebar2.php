</div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="/TruyenOnline/resources/js/jquery-3.4.1.min.js"></script>
        <script src="/TruyenOnline/resources/js/bootstrap.min.js"></script> <!-- Menu Toggle Script -->
        <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
           
        </script>
</body>
</html>