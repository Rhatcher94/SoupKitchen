<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
<<<<<<<< HEAD:Views/inventory.php
        <link rel="stylesheet" href="../views/css/style.css">
========
        <link rel="stylesheet" href="/SoupKitchen/css/style.css">
>>>>>>>> upstream/sijoonlee:Views/inventory.html
=======
        <link rel="stylesheet" href="/Views/css/style.css">
>>>>>>> upstream/sijoonlee
        <title>Inventory</title>
    </head>
    <body>
        <div class="flex-wrapper col flex-start full-height full-width">
            <div class="flex-wrapper row space-between secondary-center" id="nav">
                <div class="flex-wrapper row flex-start">
                    <a class="nav-link" href="/inventory.html/">Inventory</a>
                    <a class="nav-link" href="/history.html">History</a>
                </div>
                <div class="flex-wrapper row flex-start">
                    <h1>Inventory Management</h1>
                </div>
                <div class="flex-wrapper row flex-start">
                    <a class="nav-link" href="/logout.html">Log Out</a>
                </div>
            </div>
            <div class="flex-wrapper col flex-start" id="view">
                <div class="flex-wrapper row center" id="search">
                    <label for = "searchBar">Search</label>
                    <input type = "text" id = "searchBar"/>
                </div>
<<<<<<< HEAD
              
=======
>>>>>>> upstream/sijoonlee
                <div class="flex-wrapper row center" id="list">
                    <div class="grid-wrapper col-num-5 col-gap-p5 row-gap-p5">
                        <div class="grid-heading">Id</div>
                        <div class="grid-heading">Type</div>
                        <div class="grid-heading">Name</div>
                        <div class="grid-heading">Qty</div>
                        <div class="grid-heading create-button-inside">
                            <button id = "create-new-record">+</button>
                        </div>
<<<<<<< HEAD

                          <?php    
                    
                    $dataArray = json_decode($dataArray);
                    foreach ($dataArray as $data )
                    {echo<<<HTML
                        <div class="grid-cell">$data->id</div>
                        <div class="grid-cell">$data->type</div>
                        <div class="grid-cell">$data->name</div>
                        <div class="grid-cell">
                            <button class = "add-qty">+</button>
                            <label>$data->qty</label>
                            <button class = "subtract-qty">-</button>
                        </div>
<<<<<<<< HEAD:Views/inventory.php
                        <div class="grid-cell">Btn</div>
HTML;
                    } 
                ?>


                        
========
                        <div class="grid-cell delete-button-inside" >
                            <button id="delete-record">&times;</button>
                        </div>
>>>>>>>> upstream/sijoonlee:Views/inventory.html
=======
                        <div class="grid-cell">VP001</div>
                        <div class="grid-cell">vegitable</div>
                        <div class="grid-cell">potato</div>
                        <div class="grid-cell">
                            <button class = "add-qty">+</button>
                            <label>10</label>
                            <button class = "subtract-qty">-</button>
                        </div>
                        <div class="grid-cell delete-button-inside" >
                            <button id="delete-record">&times;</button>
                        </div>
>>>>>>> upstream/sijoonlee
                    </div>
                </div>
            </div>
            <div class="modal" id="modal-create-new-record">
                <div class="modal-header">
                    <div class="flex-wrapper row secondary-center space-between full-height full-width">
                        <div>Modal Window</div>
                        <div class="modal-btn-close" id="close-modal-create-new-record">&times;</div>
                    </div>
                </div>
                <div class="modal-content">
                    <div class="flex-wrapper full-height full-width">
                        <div class="record-entry-wrapper">
                            <div class="record picture">
                                <div class="entry pic"></div>
                            </div>
                            <div class="record btn-upload">
                                <div class="flex-wrapper row center secondary-center full-width full-height">
                                    <button>Upload</button>
                                </div>
                            </div>
                            <div class="record id">
                                <div class="flex-wrapper row flex-start secondary-center full-width full-height">
                                    <div class="label id">Id</div>
                                    <input class="entry id" id="entry-id"/>
                                </div>
                            </div>
                            <div class="record type">
                                <div class="flex-wrapper row flex-start secondary-center full-width full-height">
                                    <div class="label type">Type</div>
                                    <input class="entry type" id="entry-type"/>
                                </div>
                            </div>
                            <div class="record name">
                                <div class="flex-wrapper row flex-start secondary-center full-width full-height">
                                    <div class="label name">Name</div>
                                    <input class="entry name" id="entry-name"/>
                                </div>
                            </div>
                            <div class="record qty">
                                <div class="flex-wrapper row flex-start secondary-center full-width full-height">
                                    <div class="label qty">Qty</div>
                                    <input class="entry qty" id="entry-qty"/>
                                </div>
                            </div>
                            <div class="record btns">
                                <div class="flex-wrapper row center secondary-center full-width full-height">
                                    <button class="btn save" id="btn-save-new-record">Save</button>
                                    <button class="btn close" id="btn-close-new-record">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
    
            </div>
        </div>

    </body>
<<<<<<< HEAD
    <script src="/SoupKitchen/js/script.js"></script>
=======
    <script src="/Views/js/script.js"></script>
>>>>>>> upstream/sijoonlee
</html>
