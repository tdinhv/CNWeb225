<footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2018 &copy; <a href='#'>HD Lands</a>
            </div>
            
         </div>
      </footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
     <script type="text/javascript" charset="utf-8"> 
            $('#select_all').change(function(){  //"select all" change 
            var status = this.checked; // "select all" checked status
            $('.checkbox').each(function(){ //iterate all listed checkbox items
                this.checked = status; //change ".checkbox" checked status
            });
        });

        $('.checkbox').change(function(){ //".checkbox" change 
            //uncheck "select all", if one of the listed checkbox item is unchecked
            if(this.checked == false){ //if this item is unchecked
                $("#select_all")[0].checked = false; //change "select all" checked status to false
            }
            //check "select all" if all checkbox items are checked
            if ($('.checkbox:checked').length == $('.checkbox').length ){ 
                $("#select_all")[0].checked = true; //change "select all" checked status to true
            }
        });
      </script>
      <script>
        jQuery(document).ready(function() {
        jQuery("#target-content").load("pagination.php?page=1");
            jQuery("#pagination li").live('click',function(e){
          e.preventDefault();
            jQuery("#target-content").html('loading...');
            jQuery("#pagination li").removeClass('active');
            jQuery(this).addClass('active');
                var pageNum = this.id;
                jQuery("#target-content").load("pagination.php?page=" + pageNum);
            });
            });
        </script>
  </body>
</html>