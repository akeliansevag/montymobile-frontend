<div class="search-popup">
    <div class="close-container">
        <div class="leftright"></div>
        <div class="rightleft"></div>
        <label class="close">close</label>
    </div>
    <div class="container">
        <div class="search-container">
            <div class="search-wrapper">

                <form method="GET" action="<?= home_url() . "/search" ?>" class="d-flex justify-content-center">

                    <div class="input-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30.495" height="30.742" viewBox="0 0 30.495 30.742">
                            <defs>
                                <style>
                                    .a {
                                        fill: #fff;
                                        stroke: #fff;
                                    }
                                </style>
                            </defs>
                            <path class="a" d="M1633.838,73.707l-6.07-6.07a13.067,13.067,0,1,0-1.837,1.767l6.1,6.105a1.274,1.274,0,0,0,1.8-1.8Zm-15.978-4.04a10.49,10.49,0,1,1,10.489-10.49A10.5,10.5,0,0,1,1617.86,69.667Z" transform="translate(-1604.322 -45.64)" />
                        </svg>
                        <input name="q" type="text" class="search-input" placeholder="Search" />
                        <input type="submit" value="GO" class="search-submit">
                    </div>

                </form>


            </div>
        </div>

    </div>


</div><!--search-popup-->