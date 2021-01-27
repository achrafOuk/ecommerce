   <nav id="main">
       <?php
        $userAuthontefication = empty($_SESSION['user']);
        ?>
       <div id="siteName">
           <a href="/">Store</a>
       </div>
       <form id="search" action="/item/search/" method="GET">
           <input type="text" name="searchText" id="textsearc" />
           <select name="categoriesSearch">
               <option value="All">All</option>
               <?php

                use  app\Models\CategoriesModel;

                $categorie = new CategoriesModel();
                $categories = $categorie->fetchAll();
                for ($i = 0; $i < count($categories); $i++) {
                    echo "<option value='{$categories[$i][1]}''>{$categories[$i][1]}</option>";
                }
                ?>
           </select>
           <button type="submit" id="btnseach" name="seachbtn">c</button>
       </form>
       <div id="shart">
           <a href="/panier">b</a>
       </div>
       <?php
        if ($userAuthontefication) {
            echo '<div id="login">';
            echo '<a href ="/user/login"> Login</a>';
            echo '</div>';
            echo '<div id="signin">';
            echo '<a href ="/user/singin"> Signin</a>';
            echo '</div>';
        } else {
            echo "<form name='logout' method='Post' action='/User/logout/'>";
            echo "<input type='submit' id='user' value='Logout'>";
            echo "</form>";
        }
        ?>
   </nav>

   <nav id="second">
       <div id="home"><a href="/">home</a></div>
       <div id="slide-menu">categories</div>
       <?php
        if (!$userAuthontefication && $_SESSION["level"] == "Admin") {
            echo "<div id='manage'><a href='#'>stock management</a></div>";
            echo "<div id='stats'><a href='#'>statistics</a></div>";
        }
        ?>
   </nav>

   <div id="macarte">
       <div id="mesachetes">
           <?php
            for ($i = 0; $i < count($categories); $i++) {
                echo "<a href='#'>{$categories[$i][1]}</a></br>";
            }
            ?>

       </div>
   </div>
   </section>