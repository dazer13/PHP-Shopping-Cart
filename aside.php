<div id="left-sidebar1">
<!--Search by price range section-->
<div class="news-letter">
            <form action="search.php" method="post">
                <select name="search_price" size="1" id="PRICERANGE">
                <option value="1">NZ$0-NZ$99</option>
                <option value="2">NZ$100-NZ$499</option>
                <option value="3">NZ$500-NZ$1500</option>
                <option value="4"> More than NZ$1500</option>
               </select><br><br>
              <input type="submit" value="Filter" class="form-submit" name="search-price" />
            </form>
            
          </div><br><br><br>
            <!--Search by category section-->
			Search by Category<br>
			<div class="search" id="search1">
          <form action="search2.php" method="post" id="search_form" name="search_form">
            <input type="text" name="search_text2" placeholder="Search by Category" id="s2" /><br><br>
            <input type="submit" class="form-submit" name="search1" value="search Category" /><br><br>
            <input type="hidden" value="post" name="post_type" />
		
          </form>
		  </div><br><br>
		  
		  <!--aside below section-->
             <ul>
			    <li><a href="category.php">Paragliding</a>
				<ul class="sub-menu">
				<li><a href="product.php?id=1">Wings</a></li>
				<li><a href="product.php?id=1">Helmets</a></li>
				</ul>	
				</li>
			    <li><a href="category.php">Parachuting</a>
				<ul class="sub-menu">
				<li><a href="product.php?id=2">Harnesses</a></li>
				<li><a href="product.php?id=2">Parachute Gear</a></li>
				</ul>
				</li>
			   <li><a href="category.php">Mountain Biking</a>
				<ul class="sub-menu">
				<li><a href="product.php?id=3">Bikes</a></li>
				<li><a href="product.php?id=3">Accessories</a></li>
				</ul>
				</li>	   
			 </ul>
        </div>	