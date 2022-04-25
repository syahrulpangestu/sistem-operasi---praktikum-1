<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="table.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="actionBar">
        <button class="modal-toggle">Add</button>        
        <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
            <svg style="width:28px;height:28px;" viewBox="0 0 34 34"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" /></svg>
        </button>
    </div>
    <table class="tablesorter">
        <thead>
            <tr>
                <th scope="col" class="header title">Movie Title</th>
                <th scope="col" class="header rating">Movie Rating</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="table">
        </tbody>
    </table>
    <div class="modal">
        <div class="modal-overlay modal-toggle"></div>
            <div class="modal-wrapper modal-transition">
                <div class="modal-header">
                    <button class="modal-close modal-toggle">x</button>
                    <h2 class="modal-heading">Add Data</h2>
                </div>
            
                <div class="modal-body">
                    <div class="modal-content">
                        <!-- <form> -->
                            <label for="fname">Movie Title</label>
                            <input type="text" id="inputTitle" name="inputTitle" placeholder="Movie Title">

                            <label for="lname">Rating</label>
                            <input type="number" id="inputRating" name="inputRating" placeholder="Movie Rating">

                            <button class="button" type="submit">                            
                            <!-- <button style="background-color: red;width:100%" class="modal-toggle">CLose</button> -->
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.modal-toggle').on('click', function(e) {
        e.preventDefault();
        $('.modal').toggleClass('is-visible');
    });
</script>
</html>