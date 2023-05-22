<?php
include 'header.php';
?>

<?php
include 'dbconnect.php';
?>





   <main>
        <!-- main picture block, the picure is add as background image -->
        <div class="main-picture"> 
            <h1 class="main-picture-text1">Come Expirence</h1>
            <h1 class="main-picture-text2">Canada</h1>
        </div>
        <!-- min trip info for the two cities options -->
        <section class="adventures">
            <h1>Upcoming Adventures</h1>
            <div class="trip">
                <h2>Halifax</h2>
                <div class="specif">
                    <h4>Date: 2017-04-12</h4>
                    <h4>Duration: 4 days</h4>
                </div>
                <h3>Summary</h3>
                <p>Halifax is a charming maritime city on Canada's east coast, offering a range of activities and attractions that can easily fill a 4-day trip. One of the most popular attractions in the city is the Halifax Citadel National Historic Site, a star-shaped fort that played a crucial role in the city's history. Visitors can take a guided tour, watch the changing of the guard, and learn about the site's role in Canada's military history. Another must-see attraction in Halifax is the Halifax Waterfront, a lively boardwalk along the harbor that is home to many shops, restaurants, and galleries. The waterfront is a great place to enjoy a leisurely stroll or take a boat tour of the harbor.</p>
                <p>Foodies will enjoy Halifax's thriving culinary scene, which features fresh seafood and local specialties. The Five Fishermen is a popular seafood restaurant located in a historic building on Argyle Street, while The Bicycle Thief offers delicious Italian cuisine and an extensive wine list. For those looking for a more casual dining experience, the Halifax Seaport Farmers' Market is a great place to sample a variety of local foods and beverages.</p>
                <p>History buffs will appreciate the city's many museums and cultural attractions. The Canadian Museum of Immigration at Pier 21 is a must-see for anyone interested in Canadian immigration history. The museum features interactive exhibits, oral histories, and artifacts that bring to life the stories of the millions of immigrants who arrived in Canada through Pier 21. Another interesting museum is the Maritime Museum of the Atlantic, which highlights the history of Nova Scotia's seafaring culture and features exhibits on the Titanic and other shipwrecks.</p>


            </div>
            <div class="trip">
                <h2>Sydney</h2>
                <div class="specif">
                    <h4>Date: 2017-05-10</h4>
                    <h4>Duration: 2 days</h4>
                </div>
                <h3>Summary</h3>
                <p>Sydney, located on the eastern coast of Cape Breton Island in Nova Scotia, Canada, is a beautiful city that offers a wide range of attractions for visitors. A 4-day trip to Sydney could include a visit to the Fortress of Louisbourg National Historic Site, which is a reconstructed 18th-century French fortress that offers an immersive historical experience. Visitors can explore the site's streets, buildings, and costumes while interacting with costumed interpreters. Another must-visit attraction is the Cape Breton Miners Museum, which showcases the history of coal mining in the region, including a guided underground tour of the Ocean Deeps Colliery.</p>
                <p>Foodies will enjoy the dining options in Sydney, with many seafood restaurants serving fresh, locally sourced seafood. Some recommended restaurants include Governor's Pub & Eatery, which offers pub fare and live music, and the Flavor Downtown, which features a menu of locally sourced ingredients and craft cocktails. For those seeking a more upscale experience, The Black Spoon Bistro and The Old Triangle Irish Alehouse both offer high-end dining experiences.</p>
                <p>In addition to historical sites and restaurants, Sydney also has a number of museums worth visiting. The Cape Breton Centre for Heritage & Science offers exhibits on local history, science, and technology, while the Jost House Museum showcases the architecture and lifestyle of early 19th-century Cape Breton. Finally, the Joan Harriss Cruise Pavilion is a hub for entertainment and cultural events and offers stunning views of the harbor. With so much to see and do, a 4-day trip to Sydney is sure to be an enjoyable and memorable experience.</p>
            </div>
            <?php
            $sql = "SELECT * FROM tripdb";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="trip">
                        <h2><?php echo $row["heading"]; ?></h2>
                        <div class="specif">
                            <h4>Date: <?php echo $row["tripDate"]; ?></h4>
                            <h4>Duration: <?php echo $row["duration"]." days"; ?></h4>
                        </div>
                        <h3>Summary</h3>
                        <p><?php echo $row["summary"] ?></p>
                    </div>
            <?php
                    }
                } else {
                    echo "0 results";
                }
            ?>

        </section>

      




   </main>




<?php
include 'footer.php';
?>

