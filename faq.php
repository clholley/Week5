<!--CycleOut faq.php
    Date        Name            Description
    4/16/2018   Cindy Holley    original file
    9/04/2018   Cindy Holley    Add modification logs
    9/14/2018   Cindy Holley    Add admin page
    9/15/2018   Cindy Holley    Add view folder with head, header, nav, footer pages
-->

<!DOCTYPE html>

    <?php include 'view/head.php'; ?>
    <script src="js/accordion.js" type="text/javascript"></script>

<body>
    <div class="container">

        <!-- top section -->
        <div class="jumbotron">

            <!--header and navigation sections -->
            <?php include 'view/header.php'; ?>
            <div class="nav">
                <ul>
                    <li><a href="index.php"   class="btn btn-block"        role="button">Home</a></li>
                    <li><a href="events.php"  class="btn btn-block"        role="button">Events</a></li>
                    <li><a href="faq.php"     class="btn btn-block active" role="button">Cancer FAQs</a></li>
                    <li><a href="games.php"   class="btn btn-block"        role="button">Games</a></li>	
                    <li><a href="contact.php" class="btn btn-block"        role="button">Contact Us</a></li>
                </ul>
            </div>		
				
        </div> <!--end jumbotron-->	

        <!-- main section -->
        <div class="well">
            <div id="accordion">
                <h2>Frequently Asked Questions and Answers</h2>
                <div>	
                    <p class="boldtext">What is cancer?</p>
                    <p>Cancer is a common name for diseases characterized by the uncontrolled growth of abnormal cells.</p>
                    <p class="boldtext">How does cancer start?</p>
                    <p>The specific reasons cancer starts vary greatly from individual to individual as well as between the different types of cancers.  However, scientific studies have proven that several factors are known to trigger or accelerate cancer such as extensive use of tobacco or alcohol, inappropriate exposure to radiation or to toxic substances such as asbestos, and even certain viruses. </p>
                    <p class="boldtext">Is cancer a contagious disease?</p>
                    <p>Studies have not shown cancer to be contagious although certain cancers do seem to run in families such as breast cancer.</p>
                    <p class="boldtext">Is it possible to prevent cancer?</p>
                    <p>While there are no certain ways to prevent cancer, studies have proven that people with healthy diets and lifestyles are less likely to get cancer than those do not.</p>
                    <p class="boldtext">What are the early warning signs of cancer?</p>
                    <p>Cancer often masks itself with many different symptoms which are common of much lesser ailments. Unfortunately sometimes cancer shows no obvious symptoms at all.  These warning signs should be checked out by a doctor:</p>

                    <ul>
                        <li>a sore or ulcer that doesn't heal</li>
                        <li>unusual bleeding</li>
                        <li>an unusual thickening or lump</li>
                        <li>change in a wart or mole</li>
                        <li>any persistent pain, fever, or physical limitation</li>
                    </ul>
                </div> 

                <h2>Key Terminology</h2>
                <div>	
                    <dl>
                        <dt>benign</dt>
                            <dd>not cancerous</dd>
                        <dt>biopsy</dt>
                            <dd>a small sample of tissue</dd>
                        <dt>cancer</dt>
                            <dd>a disease where cells grow abnormally</dd>
                        <dt>carcinogenesis</dt>
                            <dd>the process of normal cells becoming malignant cells</dd>
                        <dt>cure</dt>
                            <dd>the disappearance of a disease</dd>
                        <dt>malignant</dt>
                            <dd>cancerous cells</dd>
                        <dt>metastasis</dt>
                            <dd>spread of cancer cells from primary area to a distant site</dd>
                        <dt>oncology</dt>
                            <dd>study of cancer</dd>
                    </dl>
                </div>

                <h2>Survivor Stories</h2>
                <div>
                    <div class="desktop">
                        <figure>
                        <img src="images/cyclesalute.jpg" alt="Cycle Riders" width="217" height="326"> 
                        <figcaption>Woman salutes Cycle riders.</figcaption>
                        </figure>
                    </div> 

                    <p>Seeing the parade of motorcycles from all over the United States was super exciting.</p>  
                    <p>They brought pins and patches from all over the United States and put them on a sash to decorate my wheelchair.</p>
                    <p>After so many days of pain and boredom, seeing the Cycle Out Cancer riders was a real thrill!  ~ Jennifer</p>

                    <p>I spent 10 days in the hospital just crying. The Cycle Out Cancer guys were so colorful and generous. They gave the hospital a very generous donation in my name and showed me
                    that even strangers care about me. ~ Kristen</p>

                    <p>I had the good fortune to meet several Cycle Out Cancer guys. Everyone has been touched 
                    by cancer.  They are out there doing something about it. ~ Fritz</p>

                    <p>As soon as my treatments are over, I'm getting a Spyder motorcycle to ride with Cycle Out Cancer.
                    Can't wait! ~ Scott</p>
                </div>

                <h2>7 Steps Every Cancer Patient Should Take</h2>
                <div>
                    <ol>
                        <li>Lean on friends that can see this through.</li>
                        <li>Seek as much knowledge as possible.</li>
                        <li>Treat your doctor and care givers as your best allies. </li>
                        <li>If the situation is grave, get a second and third opinion.</li>
                        <li>Embrace your treatment plan. This is how you will get well.</li>
                        <li>Be prepared to change.</li>
                        <li>Fill your body with good food and your mind with positive thoughts.</li>
                    </ol><br>
                </div>
            </div> <!-- id="accordion" -->
        </div> <!-- end well -->

        <!-- footer section -->
        <?php include 'view/footer.php'; ?>

    </div> <!-- end container --> 
</body>
</html>
